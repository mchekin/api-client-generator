<?php

namespace Test\Request;

use DoclerLabs\ApiClientBase\Request\RequestInterface;
use JsonSerializable;
class GetResourcesRequest implements RequestInterface
{
    /** @var int|null */
    private $filterById;
    /** @var string|null */
    private $filterByName;
    /** @var int[]|null */
    private $filterByIds;
    /**
     * @param int $filterById
     * @return self
    */
    public function setFilterById(int $filterById) : self
    {
        $this->filterById = $filterById;
        return $this;
    }
    /**
     * @param string $filterByName
     * @return self
    */
    public function setFilterByName(string $filterByName) : self
    {
        $this->filterByName = $filterByName;
        return $this;
    }
    /**
     * @param int[] $filterByIds
     * @return self
    */
    public function setFilterByIds(array $filterByIds) : self
    {
        $this->filterByIds = $filterByIds;
        return $this;
    }
    /**
     * @return string
    */
    public function getMethod() : string
    {
        return 'GET';
    }
    /**
     * @return string
    */
    public function getRoute() : string
    {
        return 'v1/resources';
    }
    /**
     * @return array
    */
    public function getQueryParameters() : array
    {
        return array_map(static function ($value) {
            return $value instanceof JsonSerializable ? json_decode(json_encode($value), false) : $value;
        }, array_filter(array('filterById' => $this->filterById, 'filterByName' => $this->filterByName, 'filterByIds' => $this->filterByIds), static function ($value) {
            return null !== $value;
        }));
    }
    /**
     * @return array
    */
    public function getCookies() : array
    {
        return array();
    }
    /**
     * @return array
    */
    public function getHeaders() : array
    {
        return array();
    }
    public function getBody()
    {
        return null;
    }
}