<?php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testProductController()
    {
        $client = static::createClient();
        $client->request('GET', '/product/1');
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorTextContains('div', 'Товар: Product_1');
    }
}