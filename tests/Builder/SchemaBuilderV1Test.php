<?php

namespace Tests\LuanSchons\ScimSchema\Builder;

use Tests\LuanSchons\ScimSchema\TestHelper;
use LuanSchons\ScimSchema\Builder\SchemaBuilderV1;

class SchemaBuilderV1Test extends \PHPUnit_Framework_TestCase
{
    public function test_group()
    {
        $builder = new SchemaBuilderV1();
        $schema = $builder->getGroup()->serializeObject();

        TestHelper::compare(TestHelper::getExpected('v1.schema.group.json'), $schema, $this);
    }
}
