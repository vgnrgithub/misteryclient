<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SurveyControllerTest extends WebTestCase
{
    public function testSubmit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/survey/submit');
    }

}
