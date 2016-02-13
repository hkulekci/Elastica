<?php
namespace Elastica\Mapping\DataType\GeoShape;

/**
 * Elastica Mapping DataType GeoShape Geometry Collection Object.
 *
 * @author Haydar KULEKCI <haydarkulekci@gmail.com>
 *
 * Example Data:
 *
 *  {
 *      "location" : {
 *          "type": "geometrycollection",
 *          "geometries": [
 *              {
 *                  "type": "point",
 *                  "coordinates": [100.0, 0.0]
 *              },
 *              {
 *                  "type": "linestring",
 *                  "coordinates": [ [101.0, 0.0], [102.0, 1.0] ]
 *              }
 *          ]
 *      }
 *  }
 *
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/geo-shape.html#_ulink_url_http_geojson_org_geojson_spec_html_geometrycollection_geometry_collection_ulink
 */
class GeometryCollection extends AbstractGeoShape
{
    protected $geometries = [];

    public function __construct()
    {
        $this->setType('geometrycollection');
    }

    public function addGeometry(GeoShapeInterface $geometry)
    {
        $this->geometries[] = $geometry;

        return $this;
    }

    public function getGeometries()
    {
        return $this->geometries;
    }

    public function toArray()
    {
        $result = [
            'type'        => $this->getType(),
            'geometries'  => [],
        ];

        foreach ($this->geometries as $geometry) {
            $result['geometries'][] = $geometry->toArray();
        }

        return $result;
    }
}
