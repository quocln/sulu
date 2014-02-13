<?php
/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Component\Content;

use PHPCR\NodeInterface;

/**
 * Content type definition
 */
interface ContentTypeInterface
{
    const PRE_SAVE = 1;
    const POST_SAVE = 2;

    /**
     * returns type of ContentType
     * PRE_SAVE or POST_SAVE
     * @return int
     */
    public function getType();

    /**
     * reads the value for given property from the node + sets the value of the property
     * @param NodeInterface $node
     * @param PropertyInterface $property
     * @param string $webspaceKey
     * @return mixed
     */
    public function read(NodeInterface $node, PropertyInterface $property, $webspaceKey);

    /**
     * sets the value of the property with the data given
     * @param mixed $data
     * @param PropertyInterface $property
     * @param $webspaceKey
     * @return mixed
     */
    public function readForPreview($data, PropertyInterface $property, $webspaceKey);

    /**
     * save the value from given property
     * @param NodeInterface $node
     * @param PropertyInterface $property
     * @param int $userId
     * @param string $webspaceKey
     * @return mixed
     */
    public function write(NodeInterface $node, PropertyInterface $property, $userId, $webspaceKey);

    /**
     * remove property from given node
     * @param NodeInterface $node
     * @param PropertyInterface $property
     */
    public function remove(NodeInterface $node, PropertyInterface $property);

    /**
     * returns a template to render a form
     * @return string
     */
    public function getTemplate();
}
