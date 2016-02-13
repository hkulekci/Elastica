<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape Object Interface
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html
 */
interface GeoShapeInterface
{
    /**
     * Get GeoShape type
     *
     * @return string
     */
    public function getType();

    /**
     * Set GeoShape type
     *
     * @param  string  $type
     * @return self
     */
    public function setType($type);

    public function getCoordinates();

    public function toArray();
}
