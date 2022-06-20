<?php

namespace Tests\LuanSchons\ScimSchema\Builder;

use Tests\LuanSchons\ScimSchema\TestHelper;
use LuanSchons\ScimSchema\Builder\ServiceProviderConfigBuilderV1;

class ServiceProviderConfigBuilderV1Test extends \PHPUnit_Framework_TestCase
{
    public function test_builds_default_service_provider_config()
    {
        $builder = new ServiceProviderConfigBuilderV1();
        $spc = $builder->buildServiceProviderConfig();
        $arr = $spc->serializeObject();

        $this->assertEquals(TestHelper::getExpected('v1.service_provider_config.default.json'), $arr);
    }
}
