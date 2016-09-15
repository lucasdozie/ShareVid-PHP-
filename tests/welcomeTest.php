<?php

use Goutte\Client;

class welcomeTest extends TestCase{
    public function testUserClicksContactLinkAndIsTakenToContactPage(){
        /*$crawler = $client -> request ('GET', 'http://localhost:8000/');
        $link = $crawler -> selectLink('Contact Us')-> link(); 
        $this -> assertEquals ('http://localhost:8000/about/contact',$link->getUri());
        $crawler = $client -> click($link);
        $this -> assertCount (1,15 $crawler -> filter('h1:contains("Contact Us")'));
        */
        $this -> visit('/')
                ->click('Contact Us')
                ->seePageIs ('/about/contact')
                ->see('<h1>Create a Task</h1>');
    }
}