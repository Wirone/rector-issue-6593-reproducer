<?php

declare(strict_types=1);

namespace Rector\Issue6593Reproducer;

class Foo implements \Countable
{
    public function count(): int
    {
        return 0;
    }
}

