<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape MultiPoint Object.
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * Example Data:
 *
 *  {
 *      "location" : {
 *          "type" : "multipoint",
 *          "coordinates" : [[102.0, 2.0], [103.0, 2.0]]
 *      }
 *  }
 *
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html#_ulink_url_http_www_geojson_org_geojson_spec_html_id5_multipoint_ulink
 */
class MultiPoint extends AbstractGeoShape implements GeoShapeInterface
{
    protected $coordinates = [];

    public function __construct()
    {
        $this->setType('multipoint');
    }

    public function addPoint(Point $point)
    {
        $this->coordinates[] = $point->getCoordinates();

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
