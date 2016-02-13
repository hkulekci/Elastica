<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape LineString Object.
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * Example Data:
 *
 *  {
 *      "location" : {
 *          "type" : "linestring",
 *          "coordinates" : [[-77.03653, 38.897676], [-77.009051, 38.889939]]
 *      }
 *  }
 *
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html#_ulink_url_http_geojson_org_geojson_spec_html_id3_linestring_ulink
 */
class LineString extends AbstractGeoShape implements GeoShapeInterface
{
    protected $coordinates = [];

    public function __construct(array $coordinates)
    {
        $this->setType('linestring');
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
