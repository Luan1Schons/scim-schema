<?php

/*
 * This file is part of the LuanSchons/scim-schema package.
 *
 * (c) Luan Schons Griebler <luanschons2000@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LuanSchons\ScimSchema\Model;

abstract class SchemaBase
{
    /**
     * @return string[]
     */
    public function getSchemas()
    {
        return [$this->getSchemaId()];
    }

    /**
     * @return string
     */
    abstract public function getSchemaId();
}
