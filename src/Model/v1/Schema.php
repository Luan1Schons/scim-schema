<?php

/*
 * This file is part of the LuanSchons/scim-schema package.
 *
 * (c) Luan Schons Griebler <luanschons2000@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LuanSchons\ScimSchema\Model\v1;

use LuanSchons\ScimSchema\ScimConstantsV1;

class Schema extends \LuanSchons\ScimSchema\Model\Schema
{
    public function getSchemaId()
    {
        return ScimConstantsV1::SCHEMA_SCHEMA;
    }

    public function serializeObject()
    {
        $parentValue = parent::serializeObject();

        $result = [
            'id' => $parentValue['id'],
            'schema' => ScimConstantsV1::CORE,
        ];

        unset($parentValue['id']);
        unset($parentValue['schemas']);

        foreach ($parentValue as $k => $v) {
            $result[$k] = $v;
        }

        return $result;
    }
}
