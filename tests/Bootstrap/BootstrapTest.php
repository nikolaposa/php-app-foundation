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

namespace Phoundation\Bootstrap\Tests;

use PHPUnit\Framework\TestCase;
use Phoundation\Bootstrap\Bootstrap;
use Zend\ServiceManager\ServiceManager;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class BootstrapTest extends TestCase
{
    /**
     * @test
     */
    public function it_provides_di_container()
    {
        $diContainer = Bootstrap::init([
            'config_loader' => 'glob',
            'di_container_factory' => 'zend-service-manager',
        ])->run([
            '/TestAsset/Config/Glob/{{,*.}global,{,*.}local}.php',
        ]);

        $this->assertInstanceOf(ServiceManager::class, $diContainer);
    }
}
