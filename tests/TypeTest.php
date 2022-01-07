<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2022, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\Datatype\Tests;

use PH7\Datatype\Type;
use PHPUnit\Framework\TestCase;

final class TypeTest extends TestCase
{
    public function testStringType(): void
    {
        $this->assertSame('string', Type::STRING);
    }

    public function testBooleanType(): void
    {
        $this->assertSame('bool', Type::BOOL);
        $this->assertSame('boolean', Type::BOOLEAN);
    }

    public function testIntegerType(): void
    {
        $this->assertSame('int', Type::INT);
        $this->assertSame('integer', Type::INTEGER);
    }

    public function testDoubleType(): void
    {
        $this->assertSame('float', Type::FLOAT);
        $this->assertSame('double', Type::DOUBLE);
    }

    public function testArrayType(): void
    {
        $this->assertSame('array', Type::ARRAY);
    }

    public function testObjectType(): void
    {
        $this->assertSame('object', Type::OBJECT);
    }

    public function testNullType(): void
    {
        $this->assertSame('null', Type::NULL);
    }
}
