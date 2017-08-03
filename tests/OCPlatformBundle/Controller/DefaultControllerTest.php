<?php

namespace OCUserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
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

        // Test if no public access and redirect to /login
        $crawler = $client->request('GET', '/platform/');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();

        $this->assertContains('form', $client->getResponse()->getContent());
        $form = $crawler->selectButton('Connexion')->form();

        $form['_username'] = '172644@supinfo.com';
        $form['_password'] = '19941994aA';

        $crawler = $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/platform/'));
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->isRedirect('/platform'));
        $this->assertTrue($client->getResponse()->isRedirect());
        $crawler = $client->followRedirect();

        $this->assertGreaterThan(0, $crawler->filter('content collection-item')->count());



        $this->assertContains('formdfgsdfgsd', $client->getResponse()->getContent());
    }
}
