<?php

declare(strict_types = 1);

namespace Tests\Unit;

use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
