import 'ol/ol.css';
import {Map, View} from 'ol';
import TileWMS from 'ol/source/TileWMS.js';
import {defaults as defaultControls, ScaleLine} from 'ol/control.js';

import Overlay from 'ol/Overlay.js';

import {toStringHDMS} from 'ol/coordinate.js';
import {toLonLat} from 'ol/proj.js';


import Feature from 'ol/Feature.js';
import Point from 'ol/geom/Point.js';
import {Tile as TileLayer, Vector as VectorLayer} from 'ol/layer.js';
import VectorSource from 'ol/source/Vector.js';
import {Circle as CircleStyle, Fill, Icon, Stroke, Style} from 'ol/style.js';

import OSM from 'ol/source/OSM';

var styles = {
    'geoMarker': new Style({
        image: new CircleStyle({
            radius: 7,
            fill: new Fill({color: 'green'}),
            stroke: new Stroke({
                color: 'white', width: 2
            })
        })
    })
};

var HauptbahnhofMarker = new Feature({
    type: 'geoMarker',
    geometry: new Point([8.664774,50.107454])
});

var StammhausMarker = new Feature({
    type: 'geoMarker',
    geometry: new Point([8.687359,50.113744])
});

var vectorLayer = new VectorLayer({
    source: new VectorSource({
        features: [HauptbahnhofMarker, StammhausMarker]
    }),
    style: function(feature) {
        return styles[feature.get('type')];
    }
});



/**
 * Elements that make up the popup.
 */
var container = document.getElementById('popup');
var content = document.getElementById('popup-content');
var closer = document.getElementById('popup-closer');

/**
 * Create an overlay to anchor the popup to the map.
 */
var overlay = new Overlay({
    element: container,
    autoPan: true,
    autoPanAnimation: {
        duration: 250
    }
});


const map = new Map({
    target: 'map',
    controls: defaultControls().extend([
        new ScaleLine({
            units: 'degrees'
        })
    ]),
    layers: [
        new TileLayer({source: new OSM()}),
        vectorLayer
    ],
    overlays: [overlay],
    view: new View({
        projection: 'EPSG:4326',
        center: [8.68,50.11],
        zoom: 14
    })
});

/**
 * Add a click handler to hide the popup.
 * @return {boolean} Don't follow the href.
 */
closer.onclick = function() {
    overlay.setPosition(undefined);
    closer.blur();
    return false;
};

/**
 * Add a click handler to the map to render the popup.
 */
map.on('singleclick', function(evt) {
    var coordinate = evt.coordinate;
    var hdms = toStringHDMS(toLonLat(coordinate));

    content.innerHTML = '<p>You clicked here:</p><code>' + hdms +
        '</code>';
    overlay.setPosition(coordinate);
});
