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
        //              Initialisation des variables
                        $dateInSevenDays = new \DateTime();
                        $dateInSevenDays->add(new \DateInterval('P'.$this->getParameter('tokenExpiration').'D'));

                        $plainPassword = $user->getPassword();
                        if(strlen($plainPassword) < 6)
                        {
                            return $this->render('OCCoreBundle:User:register.html.twig', array(
                                'message'=> 'Le mot de passe doit être composé de 6 carractères',
                                'form'=>$form->createView(),
                                'roles'=>$arrayRoleUser
                            ));
                        }
                        else if(!preg_match('#[A-Z]#', $plainPassword))
                        {
                            return $this->render('OCCoreBundle:User:register.html.twig', array(
                                'message'=> 'Le mot de passe doit contenir au moins une lettre majuscule',
                                'form'=>$form->createView(),
                                'roles'=>$arrayRoleUser
                            ));
                        }
                        else if(!preg_match('#[a-z]#', $plainPassword))
                        {
                            return $this->render('OCCoreBundle:User:register.html.twig', array(
                                'message'=> 'Le mot de passe doit contenir au moins une lettre minuscule',
                                'form'=>$form->createView(),
                                'roles'=>$arrayRoleUser
                            ));
                        }
                        else if(!preg_match('#[0-9]#', $plainPassword))
                        {
                            return $this->render('OCCoreBundle:User:register.html.twig', array(
                                'message'=> 'Le mot de passe doit contenir au moins unchiffre',
                                'form'=>$form->createView(),
                                'roles'=>$arrayRoleUser
                            ));
                        }
        //                Encodage du MDP
                        $encoder = $this->get('security.password_encoder');
                        $encodedPassword = $encoder->encodePassword($user,$plainPassword);
                        $user->setPassword($encodedPassword);
        //                Définition du Token d'activation
                        $user->setToken(hash('sha256', $user->getEmail()));
                        $user->setTokenExpiredAt($dateInSevenDays);
        //                Désactivation du compte
                        $user->setActive(FALSE);
        //                Définition du role
                        $user->setRoles(array($request->get('role')));
        //                Persistance de l'entité
                        $em->persist($user);
                        $em->flush();
        //                Création d'une instance de message
                        $twig = clone $this->get('twig');
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

            $user = $em->getRepository('OCCoreBundle:User')->findOneBy(array(
                'email'=>$request->get('_email')
            ));

            if ($user === null){
                return $this->render('OCCoreBundle:User:forget.html.twig', array(
                    'error'=>'Compte utilisateur inexistant'
                ));
            } else if ($user->isEnabled() === false) {
                return $this->render('OCCoreBundle:User:forget.html.twig', array(
                    'error'=>'Compte existant mais désactivé'
                ));
            } else if ($user->isAccountNonExpired() === false) {
                return $this->render('OCCoreBundle:User:forget.html.twig', array(
                    'error'=>'Compte existant mais expiré'
                ));
            } else {
                $dateInSevenDays = new \DateTime();
                $dateInSevenDays->add(new \DateInterval('P'.$this->getParameter('tokenExpiration').'D'));
                $user->setToken(hash('sha256', $user->getEmail()));
                $user->setTokenExpiredAt($dateInSevenDays);
                $em->flush();

                // TODO: replace this service by core_service
                $message = \Swift_Message::newInstance()
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
                    );

                $this->get('mailer')->send($message);

                return $this->render('OCCoreBundle:User:forget.html.twig', array(
                    'error'=>'Un email vient d\'être envoyé sur : '.$user->getEmail()
                ));
            }
        }
        return $this->render('OCCoreBundle:User:forget.html.twig');
    }





    public function resetAction(Request $request, $token){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('OCCoreBundle:User')->findOneBy(array(
            'token'=>$token
        ));

        if ($request->isMethod('POST')) {
            $plainPassword = $request->get('_password');
            if(strlen($plainPassword) < 6)
            {
                return $this->render('OCCoreBundle:User:reset.html.twig', array(
                    'error'=> 'Le mot de passe doit être composé de 6 carractères',
                ));
            }
            else if(!preg_match('#[A-Z]#', $plainPassword))
            {
                return $this->render('OCCoreBundle:User:reset.html.twig', array(
                    'error'=> 'Le mot de passe doit contenir au moins une lettre majuscule',
                ));
            }
            else if(!preg_match('#[a-z]#', $plainPassword))
            {
                return $this->render('OCCoreBundle:User:reset.html.twig', array(
                    'error'=> 'Le mot de passe doit contenir au moins une lettre minuscule',
                ));
            }
            else if(!preg_match('#[0-9]#', $plainPassword))
            {
                return $this->render('OCCoreBundle:User:reset.html.twig', array(
                    'error'=> 'Le mot de passe doit contenir au moins unchiffre',
                ));
            }

            if ($request->get('_password') == $request->get('_repeated_password')){

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
            $plainPassword = $request->get('_password');
            if(strlen($plainPassword) < 6)
            {
                return $this->render('OCCoreBundle:User:editPassword.html.twig', array(
                    'error'=> 'Le mot de passe doit être composé de 6 carractères',
                ));
            }
            else if(!preg_match('#[A-Z]#', $plainPassword))
            {
                return $this->render('OCCoreBundle:User:editPassword.html.twig', array(
                    'error'=> 'Le mot de passe doit contenir au moins une lettre majuscule',
                ));
            }
            else if(!preg_match('#[a-z]#', $plainPassword))
            {
                return $this->render('OCCoreBundle:User:editPassword.html.twig', array(
                    'error'=> 'Le mot de passe doit contenir au moins une lettre minuscule',
                ));
            }
            else if(!preg_match('#[0-9]#', $plainPassword))
            {
                return $this->render('OCCoreBundle:User:editPassword.html.twig', array(
                    'error'=> 'Le mot de passe doit contenir au moins unchiffre',
                ));
            }

            if ($plainPassword == $request->get('_repeated_password')){
                if ($this->get('security.password_encoder')->isPasswordValid($user, $request->get('_oldpassword'))) {
                    $password = $this->get('security.password_encoder')->encodePassword($user, $request->get('_password'));
                    $user->setPassword($password);
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    return $this->redirect($this->generateUrl('core_user_profil', array('id' => $user->getId())));
                } else {
                    return $this->render('OCCoreBundle:User:editPassword.html.twig', array(
                        'error'=>'Le mot de passe est incorrect'
                    ));
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
