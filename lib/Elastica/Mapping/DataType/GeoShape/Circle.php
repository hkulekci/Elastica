<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape LineString Object.
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * Elasticsearch supports a circle type, which consists of a center point
 * with a radius:
 *
 *  {
 *      "location" : {
 *          "type" : "circle",
 *          "coordinates" : [-45.0, 45.0],
 *          "radius" : "100m"
 *      }
 *  }
 *
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html#_ulink_url_http_geojson_org_geojson_spec_html_id3_linestring_ulink
 */
class Circle extends AbstractGeoShape implements GeoShapeInterface
{
    protected $coordinates = [];

    protected $radius;

    public function __construct(Point $point)
    {
        $this->setType('circle');
        $this->coordinates = $point->getCoordinates();
    }

    public function setCenter(Point $point)
    {
        $this->coordinates = $point->getCoordinates();

        return $this;
    }

    public function getCoordinates()
    {
        return $this->coordinates;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    public function getRadius()
    {
        return $this->getRadius();
    }

    public function toArray()
    {
        return [
            'type'        => $this->getType(),
            'radius'      => $this->getRadius(),
            'coordinates' => $this->getCoordinates(),
        ];
    }
}
