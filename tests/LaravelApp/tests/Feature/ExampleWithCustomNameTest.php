<?php

declare(strict_types=1);

namespace Tests\Feature;

use NunoMaduro\Collision\Contracts\Adapters\Phpunit\HasPrintableTestCaseName;
use Tests\TestCase;

class ExampleWithCustomNameTest extends TestCase implements HasPrintableTestCaseName
{
    public static function getPrintableTestCaseName(): string
    {
        return 'my-custom-test-case-name';
    }

    public static function getPrintableTestCaseMethodName(): string
    {
        return 'my-custom-test-case-method-name';
    }

    /**
     * @group custom-name
     */
    public function testPassExample()
    {
        $this->assertTrue(true);
    }
}
