<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape Polygon Object.
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * Example Data:
 *
 *  {
 *      "location" : {
 *          "type" : "polygon",
 *          "coordinates" : [
 *              [ [100.0, 0.0], [101.0, 0.0], [101.0, 1.0], [100.0, 1.0], [100.0, 0.0] ]
 *          ]
 *      }
 *  }
 *
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html#_ulink_url_http_www_geojson_org_geojson_spec_html_id4_polygon_ulink
 */
class Polygon extends AbstractGeoShape implements GeoShapeInterface
{
    protected $coordinates = [];

    public function __construct(array $coordinates)
    {
        $this->setType('polygon');
        $this->coordinates = $coordinates;
    }

    public function addCoordinates(array $coordinates)
    {
        $this->coordinates[] = $coordinates;

        return $this;
    }

    public function setCoordinates(array $coordinates)
    {
        $this->coordinates = $coordinates;

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
