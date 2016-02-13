<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape Point Object.
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * Example Data:
 *
 *  {
 *      "location" : {
 *          "type" : "point",
 *          "coordinates" : [-77.03653, 38.897676]
 *      }
 *  }
 *
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html#point
 */
class Point extends AbstractGeoShape implements GeoShapeInterface
{
    protected $coordinates = [];

    public function __construct($lon, $lat)
    {
        $this->setType('point');
        $this->coordinates = [$lon, $lat];
    }

    public function setCoordinates($lon, $lat)
    {
        $this->coordinates = [$lon, $lat];

        return $this;
    }

    public function getCoordinates()
    {
        return $this->coordinates;
    }

    public function toArray()
    {
        return [
            'type'        => $this->getType(),
            'coordinates' => $this->getCoordinates(),
        ];
    }
}
