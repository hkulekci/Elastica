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
 *          "type" : "multilinestring",
 *          "coordinates" : [
 *              [ [102.0, 2.0], [103.0, 2.0], [103.0, 3.0], [102.0, 3.0] ],
 *              [ [100.0, 0.0], [101.0, 0.0], [101.0, 1.0], [100.0, 1.0] ],
 *              [ [100.2, 0.2], [100.8, 0.2], [100.8, 0.8], [100.2, 0.8] ]
 *          ]
 *      }
 *  }
 *
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html#_ulink_url_http_www_geojson_org_geojson_spec_html_id6_multilinestring_ulink
 */
class MultiLineString extends AbstractGeoShape implements GeoShapeInterface
{
    protected $coordinates = [];

    public function __construct()
    {
        $this->setType('multilinestring');
    }

    public function addPoint(LineString $lineString)
    {
        $this->coordinates[] = $lineString->getCoordinates();

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
