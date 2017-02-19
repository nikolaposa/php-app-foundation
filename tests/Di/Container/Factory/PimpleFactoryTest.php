<?php
/**
 * This file is part of the Phoundation package.
 *
 * Copyright (c) Nikola Posa
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

declare(strict_types=1);

namespace Phoundation\Tests\Di\Container\Factory;

use Phoundation\Di\Container\Factory\PimpleFactory;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class PimpleFactoryTest extends ContainerFactoryTest
{
    protected function createFactory()
    {
        return new PimpleFactory();
    }
}
