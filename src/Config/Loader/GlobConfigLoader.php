<?php
/**
 * This file is part of the PHP Application Skeleton package.
 *
 * Copyright (c) Nikola Posa
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

declare(strict_types=1);

namespace Phoundation\Config\Loader;

use Phoundation\Config\Config;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
final class GlobConfigLoader extends AbstractLoader
{
    public function __invoke(array $paths) : Config
    {
        $config = [];

        foreach ($paths as $path) {
            foreach (glob($path, GLOB_BRACE) as $file) {
                $config = self::arrayMerge($config, include $file);
            }
        }

        return Config::fromArray($config);
    }
}
