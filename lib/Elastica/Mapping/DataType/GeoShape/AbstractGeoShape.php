<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape Object.
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html
 */
class AbstractGeoShape
{
    /**
     * @var string
     */
    protected $type;

    /**
     * Get GeoShape type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set GeoShape type
     *
     * @param  string  $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
