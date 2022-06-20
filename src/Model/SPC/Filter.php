<?php

/*
 * This file is part of the LuanSchons/scim-schema package.
 *
 * (c) Luan Schons Griebler <luanschons2000@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LuanSchons\ScimSchema\Model\SPC;

class Filter extends AbstractSPCItem
{
    /** @var int */
    protected $maxResults;

    /**
     * @param bool $supported
     * @param int  $maxResults
     */
    public function __construct($supported, $maxResults)
    {
        parent::__construct($supported);

        $this->maxResults = $maxResults;
    }

    /**
     * @return int
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    public function serializeObject()
    {
        $result = parent::serializeObject();

        if ($this->isSupported()) {
            $result['maxResults'] = $this->maxResults;
        }

        return $result;
    }

    /**
     * @param array $arr
     *
     * @return Filter
     */
    public static function deserializeObject(array $arr)
    {
        /** @var Filter $result */
        $result = parent::deserializeObject($arr);
        $result->maxResults = $arr['maxResults'];

        return $result;
    }
}
