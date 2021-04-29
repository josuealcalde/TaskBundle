<?php

/*
 * This file is part of php-task library.
 *
 * (c) php-task
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Task\TaskBundle\Tests\Functional;

use Task\Handler\TaskHandlerInterface;

/**
 * This handler is used for testing purpose and it fails with a simple Exception.
 */
class FailTestHandler implements TaskHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle($workload, $execution = null)
    {
        throw new \Exception();
    }
}
