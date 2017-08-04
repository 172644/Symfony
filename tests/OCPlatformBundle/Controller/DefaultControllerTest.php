<?php

namespace OCUserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultControllerTest extends WebTestCase
{
    private $max = 65;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('html', $client->getResponse()->getContent());
    }

    public function testCrudAdvert()
    {
        //http://symfony.com/doc/current/testing.html#functional-tests
        $client = static::createClient();

        ////////////////////////////////////////////////////////////////////////////////////////
        $email = '172644@supinfo.com';
        $advertId = 4;
        $categoryId = 6;
        $applicationId = 5;
        ////////////////////////////////////////////////////////////////////////////////////////
        $platformRoutes = ['/old/', '/', '/purge/30', '/advert/'.$advertId,
                            '/tag/'.$categoryId, '/add', '/edit/'.$advertId, '/delete/'.$advertId, '/deleteApplication/'.$applicationId,

                            '/hello', '/mail/'.$email, '/hello/Test', '/json', '/session', '/session/'.$advertId, '/'];
        ////////////////////////////////////////////////////////////////////////////////////////
        // Test if no public access and redirect to /login
        $endSeparator = $this->separatorTitle('TEST /PLATFORM/* WITH ANON USER (REDIRECT TO /LOGIN : 302)');
        foreach($platformRoutes as $_route){
            echo 'TRYING : /platform'.$_route;
            $crawler = $client->request('GET', '/platform'.$_route);
            $this->assertEquals(302, $client->getResponse()->getStatusCode());
            $this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));
            $this->assertTrue($client->getResponse()->isRedirect());

            echo " -> REDIRECTED TO /login\n";
        }
        echo $endSeparator."\n\n";
        $crawler = $client->followRedirect();

        ////////////////////////////////////////////////////////////////////////////////////////

        $endSeparator = $this->separatorTitle('REGISTER NEW AUTHOR USER');
        echo "Click for register form ";
        $link = $crawler->filter('#menu a:contains("Inscription")')->eq(0)->link();
        $crawler = $client->click($link);
        $this->assertContains('form', $client->getResponse()->getContent());
        $this->assertContains('Inscription -', $client->getResponse()->getContent());
        echo " -> OK\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        $_char = 'abcdefghijklmnopqrstuvwxyz';
        $charUp = strtoupper($_char);
        $char = $charUp.$_char."0123456789";
        $mdp = str_shuffle($char);
        $str = substr($mdp, 0, 10);
        $user['author']['pass'] = $str;

        $mdp = str_shuffle($_char);
        $str = substr($mdp, 0, 10);
        $user['author']['name'] = $str;
        $user['author']['mail'] = $str.'@supinfo.com';

        echo "\nDEBUG : ".$user['author']['mail'];
        echo "\nDEBUG : ".$user['author']['name'];
        echo "\nDEBUG : ".$user['author']['pass']." \n\n";

        echo "\n/!\ /!\ THIS NEXT TEST CAN FAIL DUE EMAIL GENERATOR /!\ /!\ \n\n";
        echo "Send registerUser form  ";
        $form = $crawler->selectButton('S\'inscrire')->form();

        $form['role'] = 'ROLE_AUTEUR';
        $form['corebundle_user[username]'] = $user['author']['name'];
        $form['corebundle_user[password][first]'] = $user['author']['pass'];
        $form['corebundle_user[password][second]'] = $user['author']['pass'];
        $form['corebundle_user[lastname]'] = $user['author']['name'];
        $form['corebundle_user[firstname]'] = $user['author']['name'];
        $form['corebundle_user[email]'] = $user['author']['mail'];

        $crawler = $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();
        $this->assertContains('form', $client->getResponse()->getContent());
        $this->assertContains('Connexion -', $client->getResponse()->getContent());
        echo " -> OK\n";

        echo "Activate account ".$str." ";
        $token = $crawler->filter('form .token')->extract(array('_text', 'href'));
        $crawler = $client->request('GET', '/activate/'.$token[0][0]);
        $this->assertContains('Votre compte a été activé avec succès', $client->getResponse()->getContent());
        echo " -> OK\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        $endSeparator = $this->separatorTitle('LOGIN AUTHOR');
        $crawler = $client->request('GET', '/platform/');
        $crawler = $client->followRedirect();
        echo  'Send login form with : '.$user['author']['mail'].' - '.$user['author']['pass'];
        $this->assertContains('form', $client->getResponse()->getContent());
        $form = $crawler->selectButton('Connexion')->form();

        $form['_username'] = $user['author']['mail'];
        $form['_password'] = $user['author']['pass'];

        $crawler = $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/platform/'));
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();
        echo "-> OK\n";
        echo 'Follow redirect ...';

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect('/platform'));
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();

        echo " -> OK\n";
        echo $endSeparator."\n\n";
        ////////////////////////////////////////////////////////////////////////////////////////
        // Nombre d'advert présentente
        $endSeparator = $this->separatorTitle('ADVERT');
        echo "Count Adverts ";
        //$this->assertGreaterThan(0, $crawler->filter('content collection-item')->count());
        echo " -> OK\n";
        echo "Click for add advert ";
        $link = $crawler->filter('a:contains("Créer une annonce")')->eq(0)->link();
        $crawler = $client->click($link);
        $this->assertContains('form', $client->getResponse()->getContent());
        echo " -> OK\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        $char = 'abcdefghijklmnopqrstuvwxyz';
        $charUp = strtoupper($char);
        $char = $charUp.$char."0123456789";
        $mdp = str_shuffle($char);
        $title = substr($mdp, 0, 10);

//        $file = array('filename'=>"file.jpg", 'Content-Type'=>'image/jpeg');
        $file = "file.jpg";
        $file = new UploadedFile(dirname(__FILE__).'./file.jpg', 'file.jpg', 'image/jpeg', 5365);

        echo "Send addAdvert form  ";
        $form = $crawler->selectButton('Sauvegarder')->form();

        $form['oc_platformbundle_advert[title]'] = $title;
        $form['oc_platformbundle_advert[content]'] = $title;
        $form['oc_platformbundle_advert[categories]'] = $categoryId;
        $form['oc_platformbundle_advert[image][imageFile][file]']->upload($file);

        $crawler = $client->submit($form);
        echo " -> OK\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        echo "Checking redirect after created  ";
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();
        $this->assertContains($title, $client->getResponse()->getContent());
        echo " -> OK\n";

        echo "Click for edit advert ".$title." ";
        $link = $crawler->filter('#content a:contains("edit")')->eq(0)->link();
        $crawler = $client->click($link);
        $this->assertContains('Modifier "'.$title.'"', $client->getResponse()->getContent());
        echo " -> OK\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        $char = 'abcdefghijklmnopqrstuvwxyz';
        $charUp = strtoupper($char);
        $char = $charUp.$char."0123456789";
        $mdp = str_shuffle($char);
        $title_ = substr($mdp, 0, 10);

        echo "Send editAdvert form  ";
        $form = $crawler->selectButton('Sauvegarder')->form();

        $form['advert_edit[title]'] = $title_;
        $form['advert_edit[categories]'] = $categoryId+1;

        $crawler = $client->submit($form);
        echo " -> OK\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        echo "Checking redirect after modified  ";
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();
        $this->assertContains($title_, $client->getResponse()->getContent());
        $this->assertContains($title, $client->getResponse()->getContent());
        echo " -> OK\n";

        echo "Click for delete advert ".$title_." ";
        $link = $crawler->filter('#content a:contains("delete")')->eq(0)->link();
        $crawler = $client->click($link);
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect('/platform'));
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();
        $this->assertContains('Liste des annonces', $client->getResponse()->getContent());
        echo "-> OK\n";

        echo "Check if advert ".$title_." is deleted ";
        $crawler = $client->request('GET', '/platform/tag/');
        $this->assertNotContains($title_, $client->getResponse()->getContent());
        $this->assertNotContains($title, $client->getResponse()->getContent());
        echo "-> OK\n";

        echo $endSeparator."\n\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        $endSeparator = $this->separatorTitle('REGISTER NEW SEARCH USER');

        echo "Click for disconnect ";
        $link = $crawler->filter('#menu a:contains("Déconnexion")')->eq(0)->link();
        $crawler = $client->click($link);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();

        $this->assertContains('form', $client->getResponse()->getContent());
        $this->assertContains('Connexion -', $client->getResponse()->getContent());
        echo " -> OK\n";//*/

        echo "Click for register form ";
        $link = $crawler->filter('#menu a:contains("Inscription")')->eq(0)->link();
        $crawler = $client->click($link);
        $this->assertContains('form', $client->getResponse()->getContent());
        $this->assertContains('Inscription -', $client->getResponse()->getContent());
        echo " -> OK\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        $_char = 'abcdefghijklmnopqrstuvwxyz';
        $charUp = strtoupper($_char);
        $char = $charUp.$_char."0123456789";
        $mdp = str_shuffle($char);
        $str = substr($mdp, 0, 10);
        $user['search']['pass'] = $str;

        $mdp = str_shuffle($_char);
        $str = substr($mdp, 0, 10);
        $user['search']['name'] = $str;
        $user['search']['mail'] = $str.'@supinfo.com';

        echo "\nDEBUG : ".$user['search']['mail'];
        echo "\nDEBUG : ".$user['search']['name'];
        echo "\nDEBUG : ".$user['search']['pass']." \n\n";

        echo "\n/!\ /!\ THIS NEXT TEST CAN FAIL DUE EMAIL GENERATOR /!\ /!\ \n\n";
        echo "Send registerUser form  ";
        $form = $crawler->selectButton('S\'inscrire')->form();

        $form['role'] = 'ROLE_AUTEUR';
        $form['corebundle_user[username]'] = $user['search']['name'];
        $form['corebundle_user[password][first]'] = $user['search']['pass'];
        $form['corebundle_user[password][second]'] = $user['search']['pass'];
        $form['corebundle_user[lastname]'] = $user['search']['name'];
        $form['corebundle_user[firstname]'] = $user['search']['name'];
        $form['corebundle_user[email]'] = $user['search']['mail'];

        $crawler = $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();
        $this->assertContains('form', $client->getResponse()->getContent());
        $this->assertContains('Connexion -', $client->getResponse()->getContent());
        echo " -> OK\n";

        echo "Activate account ".$str." ";
        $token = $crawler->filter('form .token')->extract(array('_text', 'href'));
        $crawler = $client->request('GET', '/activate/'.$token[0][0]);
        $this->assertContains('Votre compte a été activé avec succès', $client->getResponse()->getContent());
        echo " -> OK\n";

        ////////////////////////////////////////////////////////////////////////////////////////
//        $user_tmp = $this->em->getRepository('OCCoreBundle:User')->findOneBy(array('email'=>$searchUserMail));
//        if ($client->getContainer()->get('security.password_encoder')->isPasswordValid($user_tmp, $searchPass)) {
//            echo "\nplop\n";
//        }
        echo  'Send login form with : '.$user['search']['mail'].' - '.$user['search']['pass'];
        $crawler = $client->request('GET', '/login');
        $this->assertContains('form', $client->getResponse()->getContent());
        $form = $crawler->selectButton('Connexion')->form();

        $form['_username'] = $user['search']['mail'];
        $form['_password'] = $user['search']['pass'];

        $crawler = $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        //$this->assertTrue($client->getResponse()->isRedirect('http://localhost/platform/'));
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();
        $this->assertNotContains('Identifiants invalides.', $client->getResponse()->getContent());
        echo " -> OK\n";
        echo $endSeparator."\n\n";

        ////////////////////////////////////////////////////////////////////////////////////////

        // add & delete application

        //$this->assertContains('fo0d7f6g4sd52gsdf80rmdfgs9df1gsd', $client->getResponse()->getContent());
        //assertContains('fo0d7f6g4sd52gsdf80rmdfgs9df1gsd', $client->getResponse()->getContent());
    }

    public function testRoleAction(){
        // application visibility
        // button edit / delete in advert
        // create advert button
    }

    private function separatorTitle($title)
    {
        $this->max = 60;
        if(strlen($title) > $this->max)
            $this->max = strlen($title)+8;

        $titleLineNbr = ($this->max - strlen($title) - 2)/2;


        $str = '';
        $strBorder = '';
        for($i = 0; $i < $this->max; $i++)
        {
            $str .= '#';
        }
        for($i = 0; $i < $titleLineNbr; $i++)
        {
            $strBorder .= '*';
        }
        echo "\n\n".$str."\n";
        //echo $this->endline.$this->endline; var_dump('');
        echo $strBorder.' '.$title.' '.$strBorder."\n";

        return $str;
    }
}

