<?php

namespace OC\CoreBundle\Controller;

use OC\CoreBundle\Entity\User;
use OC\CoreBundle\Form\Type\UserType;
use OC\CoreBundle\Form\Type\UserEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class UserController extends Controller
{
    public function loginAction(){
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('OCCoreBundle:User:login.html.twig', array(
//        return $this->render('@Front/User/login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }





    public function viewAction(User $user, $id){

        return $this->render('OCCoreBundle:User:profil.html.twig', array(
            'user'=>$user
        ));
    }





    public function deleteImgAction(Request $request, User $user, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($user->getImage());
        $user->setImage(null);
        $em->flush();
        return $this->redirectToRoute('core_user_edit', array('id'=>$user->getId()));
    }





    public function editAction(Request $request, User $user, $id)
    {
        $arrayRoleUser = $this->getParameter('roleUser');
        $validRoles = array();
        foreach ($arrayRoleUser as $_role)
        {
            $validRoles[] = $_role['val'];
        }

        $form = $this->createForm(UserEditType::class, $user);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            if(!empty($request->get('role')) && in_array($request->get('role'), $validRoles)) {
                $user->setRoles(array($request->get('role')));
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute('core_user_profil', array('id' => $user->getId()));
            }
            else
            {
                return $this->render('OCCoreBundle:User:edit.html.twig', array(
                    'form'=>$form->createView(),
                    'user'=>$user,
                    'roles'=>$arrayRoleUser,
                    'message'=>'Rôle invalide.'
                ));
            }
        }
        return $this->render('OCCoreBundle:User:edit.html.twig', array(
            'form'=>$form->createView(),
            'user'=>$user,
            'roles'=>$arrayRoleUser
        ));
    }





    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        $arrayRoleUser = $this->getParameter('roleUser');
        $validRoles = array();
        foreach ($arrayRoleUser as $_role)
        {
            $validRoles[] = $_role['val'];
        }

        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $listErrors = $this->get('validator')->validate($user->setPassword($request->get('_password')));
            if(count($listErrors) > 0) {
                return $this->render('OCCoreBundle:User:register.html.twig', array(
                    'form'=>$form->createView(),
                    'roles'=>$arrayRoleUser,
                    'errors' => $listErrors,
                ));
            }

            $userToCompare = $em->getRepository('OCCoreBundle:User')->findOneBy(array(
                'email'=>$user->getEmail()
            ));

            if($userToCompare === null)
            {
                $userToCompare = null;
                $userToCompare = $em->getRepository('OCCoreBundle:User')->findOneBy(array(
                    'username'=>$user->getUsername()
                ));

                if($userToCompare === null)
                {
                    if(!empty($request->get('role')) && in_array($request->get('role'), $validRoles))
                    {
                        $dateInSevenDays = new \DateTime();
                        $dateInSevenDays->add(new \DateInterval('P'.$this->getParameter('tokenExpiration').'D'));
                        $encoder = $this->get('security.password_encoder');
                        $encodedPassword = $encoder->encodePassword($user,$user->getPassword());
                        $user->setPassword($encodedPassword);
                        $user->setToken(hash('sha256', $user->getEmail()));
                        $user->setTokenExpiredAt($dateInSevenDays);
                        $user->setActive(FALSE);
                        $user->setRoles(array($request->get('role')));
                        $em->persist($user);
                        $em->flush();
                        $message = \Swift_Message::newInstance()
                            ->setSubject('Activation de votre compte')
                            ->setFrom([$this->getParameter('mailer_user') => $this->getParameter('siteName')])
                            ->setTo($user->getEmail())
                            ->setBody($this->renderView(
                                'Emails/activation.html.twig',
                                array(
                                    'token' => $this->generateUrl('core_user_activate', array(
                                        'token' => $user->getToken()
                                    ), UrlGeneratorInterface::ABSOLUTE_URL),
                                    'date' => $dateInSevenDays,
                                    'name' => $user->getFullName(),
                                    'path_oc_core_homepage' => $this->generateUrl('oc_core_homepage', array(), UrlGeneratorInterface::ABSOLUTE_URL),
                                    'path_assets_logo' => $this->getParameter('siteUrl').$this->getParameter('siteUri').'assets/Logo.png'
                                )
                            ),
                                'text/html'
                            );
                        $this->get('mailer')->send($message);
                        return $this->redirectToRoute('oc_core_homepage');
                    } else {
                        return $this->render('OCCoreBundle:User:register.html.twig', array(
                            'message'=> 'Rôle invalide',
                            'form'=>$form->createView(),
                            'roles'=>$arrayRoleUser
                        ));
                    }
                } else {
                    return $this->render('OCCoreBundle:User:register.html.twig', array(
//                return $this->render('@Front/User/register.html.twig', array(
                        'message'=> 'Pseudo déjà existant',
                        'form'=>$form->createView(),
                        'roles'=>$arrayRoleUser
                    ));
                }
            } else {
                return $this->render('OCCoreBundle:User:register.html.twig', array(
//                return $this->render('@Front/User/register.html.twig', array(
                    'message'=> 'Email déjà existant',
                    'form'=>$form->createView(),
                    'roles'=>$arrayRoleUser
                ));
            }
        }
        return $this->render('OCCoreBundle:User:register.html.twig', array(
//        return $this->render('@Front/User/register.html.twig',array(
            'form'=>$form->createView(),
            'roles'=>$arrayRoleUser
        ));
    }





    public function activateAction(Request $request, $token){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('OCCoreBundle:User')->findOneBy(array(
            'token'=>$token
        ));
        if ($user === null){
            return $this->render('OCCoreBundle:User:info.html.twig', array('message'=>'Compte inexistant ou déjà activé.'));
        }

        if ($user->isEnabled() === false && $user->isAccountNonExpired() === true){
            $user->setTokenExpiredAt(null);
            $user->setToken(null);
            $user->setActive(true);
            $em->flush();
            return $this->render('OCCoreBundle:User:info.html.twig', array('message'=>'Votre compte a été activé avec succès. <a href="'.$this->generateUrl('core_user_login').'">Connexion</a>'));


        } elseif ($user->isEnabled() === false && $user->isAccountNonExpired() === false){
            return $this->render('OCCoreBundle:User:info.html.twig', array('message'=>'Votre compte est bloqué et désactivé suite à une trop grande inactivité, contactez-nous pour plus d\'informations.'));


        } elseif ($user->isEnabled() && $user->isAccountNonExpired() === false){
            return $this->render('OCCoreBundle:User:info.html.twig', array('message'=>'Votre compte est activé mais bloqué suite à une trop grande inactivité, contactez-nous pour plus d\'informations.'));


        } else {
            return $this->render('OCCoreBundle:User:info.html.twig', array('message'=>'Erreur inconnue.'));
        }
    }





    public function forgetAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')){
            $user = $em->getRepository('OCCoreBundle:User')->findOneBy(array('email'=>$request->get('_email')));

            if ($user === null || $user->isEnabled() === false || $user->isAccountNonExpired() === false){
                return $this->render('OCCoreBundle:User:forget.html.twig', array(
                    'error'=>($user === null)?'Compte utilisateur inexistant':(($user->isEnabled() === false)?'Compte existant mais désactivé':'Compte existant mais expiré')
                ));
            }

            $dateInSevenDays = new \DateTime();
            $dateInSevenDays->add(new \DateInterval('P'.$this->getParameter('tokenExpiration').'D'));
            $user->setToken(hash('sha256', $user->getEmail()));
            $user->setTokenExpiredAt($dateInSevenDays);
            $em->flush();

            $this->get('mailer')->send(
                \Swift_Message::newInstance()
                    ->setSubject('Réinitialisation de votre mot de passe')
                    ->setFrom([$this->getParameter('mailer_user') => $this->getParameter('siteName')])
                    ->setTo($user->getEmail())
                    ->setBody($this->renderView(
                        'Emails/forget_pass.html.twig',
                        array(
                            'token'=>$this->generateUrl('core_user_reset', array(
                                'token'=>$user->getToken()
                            ), UrlGeneratorInterface::ABSOLUTE_URL),
                            'path_oc_core_homepage' => $this->generateUrl('oc_core_homepage', array(), UrlGeneratorInterface::ABSOLUTE_URL),
                            'path_assets_logo' => $this->getParameter('siteUrl').$this->getParameter('siteUri').'assets/Logo.png'
                        )
                    ),
                        'text/html'
                    )
            );

            return $this->render('OCCoreBundle:User:forget.html.twig', array(
                'error'=>'Un email vient d\'être envoyé sur : '.$user->getEmail()
            ));
        }
        return $this->render('OCCoreBundle:User:forget.html.twig');
    }





    public function resetAction(Request $request, $token){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('OCCoreBundle:User')->findOneBy(array(
            'token'=>$token
        ));

        if ($request->isMethod('POST')) {
            if ($request->get('_password') == $request->get('_repeated_password')){
                $listErrors = $this->get('validator')->validate($user->setPassword($request->get('_password')));
                if(count($listErrors) > 0) {
                    return $this->render('OCCoreBundle:User:reset.html.twig', array(
                        'errors' => $listErrors
                    ));
                }

                $password = $this->get('security.password_encoder')->encodePassword($user, $request->get('_password'));
                $user->setPassword($password);
                $user->setToken(null);
                $em->persist($user);
                $em->flush();
                return $this->render('OCCoreBundle:User:info.html.twig', array(
                    'message'=>'Mot de passe réinitialisé.  <a href="\'.$this->generateUrl(\'core_user_login\').\'">Connexion</a>'
                ));
            } else {
                return $this->render('OCCoreBundle:User:reset.html.twig', array(
                    'token'=>$token,
                    'error'=>'Les champs ne sont pas identiques'
                ));
            }

        }

        if ($user === null || $user->isEnabled() === FALSE){
            return $this->redirectToRoute('core_user_login', array(
                'message'=>'Utilisateur introuvable ou désactivé'
            ));
        }
        if ($user->getToken() === null){
            $this->redirectToRoute('core_user_login', array(
                'message'=>'Token introuvable'
            ));
        }

        return $this->render('OCCoreBundle:User:reset.html.twig', array(
            'token'=>$token
        ));
    }





    public function changePasswordAction(Request $request, User $user, $id){

        if ($request->isMethod('POST')) {

            if ($request->get('_password') == $request->get('_repeated_password')){
                if ($this->get('security.password_encoder')->isPasswordValid($user, $request->get('_oldpassword'))) {
                    $listErrors = $this->get('validator')->validate($user->setPassword($request->get('_password')));
                    if(count($listErrors) > 0) {
                        return $this->render('OCCoreBundle:User:editPassword.html.twig', array(
                            'errors' => $listErrors
                        ));
                    }

                    $password = $this->get('security.password_encoder')->encodePassword($user, $request->get('_password'));
                    $user->setPassword($password);
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    return $this->redirect($this->generateUrl('core_user_profil', array('id' => $user->getId())));
                } else {
                    return $this->render('OCCoreBundle:User:editPassword.html.twig', array());
                }
            } else {
                return $this->render('OCCoreBundle:User:editPassword.html.twig', array(
                    'error'=>'Les champs ne sont pas identiques'
                ));
            }

        }
        return $this->render('OCCoreBundle:User:editPassword.html.twig');
    }
}
