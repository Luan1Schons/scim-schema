<?php

/*
 * This file is part of the LuanSchons/scim-schema package.
 *
 * (c) Luan Schons Griebler <luanschons2000@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LuanSchons\ScimSchema\Builder;

use LuanSchons\ScimSchema\Model\Schema;

abstract class SchemaBuilder
{
    protected static $schemas = [];

    /** @var string */
    private $schemasEndpointUrl;

    /**
     * @param string $schemasEndpointUrl
     */
    public function __construct($schemasEndpointUrl)
    {
        $this->setSchemasEndpointUrl($schemasEndpointUrl);
    }

    /**
     * @param string $schemasEndpointUrl
     */
    public function setSchemasEndpointUrl($schemasEndpointUrl)
    {
        $this->schemasEndpointUrl = rtrim($schemasEndpointUrl, '/').'/';
    }

    /**
     * @param string $schemaId
     *
     * @return \LuanSchons\ScimSchema\Model\v1\Schema|\LuanSchons\ScimSchema\Model\v2\Schema|Schema
     */
    public function get($schemaId)
    {
        $class = $this->getSchemaClass();
        $data = static::$schemas[$schemaId];
        /** @var Schema $schema */
        $schema = call_user_func([$class, 'deserializeObject'], $data);
        $schema->getMeta()->setLocation($this->schemasEndpointUrl.$schemaId);

        return $schema;
    }

    /**
     * @return string
     */
    abstract protected function getSchemaClass();
}
