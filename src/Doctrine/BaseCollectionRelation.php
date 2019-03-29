<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AntCTO\Bundle\MakerBundle\Doctrine;

use AntCTO\Bundle\MakerBundle\Str;

/**
 * @internal
 */
abstract class BaseCollectionRelation extends BaseRelation
{
    abstract public function getOrphanRemoval(): bool;

    abstract public function getTargetSetterMethodName(): string;

    public function getAdderMethodName(): string
    {
        return 'add'.Str::asCamelCase(Str::pluralCamelCaseToSingular($this->getPropertyName()));
    }

    public function getRemoverMethodName(): string
    {
        return 'remove'.Str::asCamelCase(Str::pluralCamelCaseToSingular($this->getPropertyName()));
    }
}
