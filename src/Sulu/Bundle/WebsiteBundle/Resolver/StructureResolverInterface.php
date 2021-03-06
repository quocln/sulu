<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\WebsiteBundle\Resolver;

use Sulu\Component\Content\Compat\StructureInterface;

/**
 * Resolves the structure to an array.
 */
interface StructureResolverInterface
{
    /**
     * This method receives a structure, and should return an array for the template.
     *
     * @param StructureInterface $structure The structure to resolve
     * @param bool $loadExcerpt Resolves also the extension data of the structure
     *
     * @return array
     */
    public function resolve(StructureInterface $structure, bool $loadExcerpt = true);
}
