<?php

/*
 * This file is part of the LuanSchons/scim-schema package.
 *
 * (c) Luan Schons Griebler <luanschons2000@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LuanSchons\ScimSchema\Model\v2;

use LuanSchons\ScimSchema\ScimConstantsV2;

class Schema extends \LuanSchons\ScimSchema\Model\Schema
{
    public function getSchemaId()
    {
        return ScimConstantsV2::SCHEMA_SCHEMA;
    }
}
