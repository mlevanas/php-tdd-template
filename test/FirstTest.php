<?php

namespace App\Test;

use PHPUnit\Framework\Assert;

class FirstTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testAutoloaderShouldWork()
    {
        $app = new \App\Template();
        Assert::assertNotNull($app);
    }
}