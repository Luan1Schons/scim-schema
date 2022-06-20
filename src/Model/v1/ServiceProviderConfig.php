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

class ServiceProviderConfig extends \LuanSchons\ScimSchema\Model\ServiceProviderConfig
{
    public function getSchemaId()
    {
        return ScimConstantsV1::CORE;
    }
}
