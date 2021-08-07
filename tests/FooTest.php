<?php

declare(strict_types=1);

namespace Rector\Issue6593Reproducer\Test;

use Rector\Issue6593Reproducer\Foo;
use PHPUnit\Framework\MockObject\MockObject;

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * @var Foo
     */
    private $foo;
    /**
     * @var MockObject&BlaBla
     */
    private $mock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->foo = new Foo();
        $this->mock = $this->createMock(Foo::class);
    }
}

