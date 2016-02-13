<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape LineString Object.
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * Elasticsearch supports an envelope type, which consists of coordinates for
 * upper left and lower right points of the shape to represent a bounding
 * rectangle:
 *
 *  {
 *      "location" : {
 *          "type" : "envelope",
 *          "coordinates" : [ [-45.0, 45.0], [45.0, -45.0] ]
 *      }
 *  }
 *
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html#_ulink_url_http_geojson_org_geojson_spec_html_id3_linestring_ulink
 */
class Envelope extends AbstractGeoShape implements GeoShapeInterface
{
    protected $coordinates = [];

    public function __construct(array $coordinates)
    {
        $this->setType('envelope');
        $this->coordinates = $coordinates;
    }

    public function addCoordinate($lon, $lat)
    {
        $this->coordinates[] = [$lon, $lat];

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
