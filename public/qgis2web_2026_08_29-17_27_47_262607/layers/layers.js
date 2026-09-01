var wms_layers = [];


        var lyr_GoogleSatellite_0 = new ol.layer.Tile({
            'title': 'Google Satellite',
            'type':'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
            attributions: ' ',
                url: 'https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}'
            })
        });
var format_Longsor1kmz_1 = new ol.format.GeoJSON();
var features_Longsor1kmz_1 = format_Longsor1kmz_1.readFeatures(json_Longsor1kmz_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsor1kmz_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsor1kmz_1.addFeatures(features_Longsor1kmz_1);
var lyr_Longsor1kmz_1 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsor1kmz_1, 
                style: style_Longsor1kmz_1,
                popuplayertitle: 'Longsor1.kmz',
                interactive: true,
                title: 'Longsor1.kmz'
            });
var format_Longsor2kmz_2 = new ol.format.GeoJSON();
var features_Longsor2kmz_2 = format_Longsor2kmz_2.readFeatures(json_Longsor2kmz_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsor2kmz_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsor2kmz_2.addFeatures(features_Longsor2kmz_2);
var lyr_Longsor2kmz_2 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsor2kmz_2, 
                style: style_Longsor2kmz_2,
                popuplayertitle: 'Longsor2.kmz',
                interactive: true,
                title: 'Longsor2.kmz'
            });
var format_Longsor3kmz_3 = new ol.format.GeoJSON();
var features_Longsor3kmz_3 = format_Longsor3kmz_3.readFeatures(json_Longsor3kmz_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsor3kmz_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsor3kmz_3.addFeatures(features_Longsor3kmz_3);
var lyr_Longsor3kmz_3 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsor3kmz_3, 
                style: style_Longsor3kmz_3,
                popuplayertitle: 'Longsor3.kmz',
                interactive: true,
                title: 'Longsor3.kmz'
            });
var format_Longsor4kmz_4 = new ol.format.GeoJSON();
var features_Longsor4kmz_4 = format_Longsor4kmz_4.readFeatures(json_Longsor4kmz_4, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsor4kmz_4 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsor4kmz_4.addFeatures(features_Longsor4kmz_4);
var lyr_Longsor4kmz_4 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsor4kmz_4, 
                style: style_Longsor4kmz_4,
                popuplayertitle: 'Longsor4.kmz',
                interactive: true,
                title: 'Longsor4.kmz'
            });
var format_LOngsor5kmz_5 = new ol.format.GeoJSON();
var features_LOngsor5kmz_5 = format_LOngsor5kmz_5.readFeatures(json_LOngsor5kmz_5, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_LOngsor5kmz_5 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_LOngsor5kmz_5.addFeatures(features_LOngsor5kmz_5);
var lyr_LOngsor5kmz_5 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_LOngsor5kmz_5, 
                style: style_LOngsor5kmz_5,
                popuplayertitle: 'LOngsor5.kmz',
                interactive: true,
                title: 'LOngsor5.kmz'
            });
var format_Longsor6kmz_6 = new ol.format.GeoJSON();
var features_Longsor6kmz_6 = format_Longsor6kmz_6.readFeatures(json_Longsor6kmz_6, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsor6kmz_6 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsor6kmz_6.addFeatures(features_Longsor6kmz_6);
var lyr_Longsor6kmz_6 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsor6kmz_6, 
                style: style_Longsor6kmz_6,
                popuplayertitle: 'Longsor6.kmz',
                interactive: true,
                title: 'Longsor6.kmz'
            });
var format_Longsor7kmz_7 = new ol.format.GeoJSON();
var features_Longsor7kmz_7 = format_Longsor7kmz_7.readFeatures(json_Longsor7kmz_7, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsor7kmz_7 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsor7kmz_7.addFeatures(features_Longsor7kmz_7);
var lyr_Longsor7kmz_7 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsor7kmz_7, 
                style: style_Longsor7kmz_7,
                popuplayertitle: 'Longsor7.kmz',
                interactive: true,
                title: 'Longsor7.kmz'
            });
var format_Longsor8kmz_8 = new ol.format.GeoJSON();
var features_Longsor8kmz_8 = format_Longsor8kmz_8.readFeatures(json_Longsor8kmz_8, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsor8kmz_8 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsor8kmz_8.addFeatures(features_Longsor8kmz_8);
var lyr_Longsor8kmz_8 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsor8kmz_8, 
                style: style_Longsor8kmz_8,
                popuplayertitle: 'Longsor8.kmz',
                interactive: true,
                title: 'Longsor8.kmz'
            });
var format_Longsor9kmz_9 = new ol.format.GeoJSON();
var features_Longsor9kmz_9 = format_Longsor9kmz_9.readFeatures(json_Longsor9kmz_9, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsor9kmz_9 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsor9kmz_9.addFeatures(features_Longsor9kmz_9);
var lyr_Longsor9kmz_9 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsor9kmz_9, 
                style: style_Longsor9kmz_9,
                popuplayertitle: 'Longsor9.kmz',
                interactive: true,
                title: 'Longsor9.kmz'
            });
var format_Banjirkmz_10 = new ol.format.GeoJSON();
var features_Banjirkmz_10 = format_Banjirkmz_10.readFeatures(json_Banjirkmz_10, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Banjirkmz_10 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Banjirkmz_10.addFeatures(features_Banjirkmz_10);
var lyr_Banjirkmz_10 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Banjirkmz_10, 
                style: style_Banjirkmz_10,
                popuplayertitle: 'Banjir.kmz',
                interactive: true,
                title: 'Banjir.kmz'
            });
var format_Banjir2kmz_11 = new ol.format.GeoJSON();
var features_Banjir2kmz_11 = format_Banjir2kmz_11.readFeatures(json_Banjir2kmz_11, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Banjir2kmz_11 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Banjir2kmz_11.addFeatures(features_Banjir2kmz_11);
var lyr_Banjir2kmz_11 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Banjir2kmz_11, 
                style: style_Banjir2kmz_11,
                popuplayertitle: 'Banjir2.kmz',
                interactive: true,
                title: 'Banjir2.kmz'
            });
var format_Longsorkmz_12 = new ol.format.GeoJSON();
var features_Longsorkmz_12 = format_Longsorkmz_12.readFeatures(json_Longsorkmz_12, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Longsorkmz_12 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Longsorkmz_12.addFeatures(features_Longsorkmz_12);
var lyr_Longsorkmz_12 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Longsorkmz_12, 
                style: style_Longsorkmz_12,
                popuplayertitle: 'Longsor.kmz',
                interactive: true,
                title: 'Longsor.kmz'
            });
var format_InformasiRambuBencana_13 = new ol.format.GeoJSON();
var features_InformasiRambuBencana_13 = format_InformasiRambuBencana_13.readFeatures(json_InformasiRambuBencana_13, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_InformasiRambuBencana_13 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_InformasiRambuBencana_13.addFeatures(features_InformasiRambuBencana_13);
var lyr_InformasiRambuBencana_13 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_InformasiRambuBencana_13, 
                style: style_InformasiRambuBencana_13,
                popuplayertitle: 'Informasi Rambu Bencana',
                interactive: true,
    title: 'Informasi Rambu Bencana<br />\
    <img src="styles/legend/InformasiRambuBencana_13_0.png" /> Batas Maksimum Jembatan A<br />\
    <img src="styles/legend/InformasiRambuBencana_13_1.png" /> Batas Maksimum Jembatan B<br />\
    <img src="styles/legend/InformasiRambuBencana_13_2.png" /> Evakuasi 1<br />\
    <img src="styles/legend/InformasiRambuBencana_13_3.png" /> Evakuasi 2<br />\
    <img src="styles/legend/InformasiRambuBencana_13_4.png" /> Evakuasi 3<br />\
    <img src="styles/legend/InformasiRambuBencana_13_5.png" /> Evakuasi 4<br />\
    <img src="styles/legend/InformasiRambuBencana_13_6.png" /> Evakuasi 5<br />\
    <img src="styles/legend/InformasiRambuBencana_13_7.png" /> Hati-hati Banjir Bandang<br />\
    <img src="styles/legend/InformasiRambuBencana_13_8.png" /> Hati-hati Kebakaran Hutan<br />\
    <img src="styles/legend/InformasiRambuBencana_13_9.png" /> Hati-hati Longsoran Batu 1<br />\
    <img src="styles/legend/InformasiRambuBencana_13_10.png" /> Hati-hati Longsoran Batu 2<br />\
    <img src="styles/legend/InformasiRambuBencana_13_11.png" /> Hati-hati Longsoran Batu 3<br />\
    <img src="styles/legend/InformasiRambuBencana_13_12.png" /> Informasi Kawasan Rawan Banjir<br />\
    <img src="styles/legend/InformasiRambuBencana_13_13.png" /> Informasi Kawasan Rawan Longsor<br />\
    <img src="styles/legend/InformasiRambuBencana_13_14.png" /> Titik Evakuasi<br />\
    <img src="styles/legend/InformasiRambuBencana_13_15.png" /> Titik Pengungsian<br />' });
var format_Rawan_14 = new ol.format.GeoJSON();
var features_Rawan_14 = format_Rawan_14.readFeatures(json_Rawan_14, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Rawan_14 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Rawan_14.addFeatures(features_Rawan_14);
var lyr_Rawan_14 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Rawan_14, 
                style: style_Rawan_14,
                popuplayertitle: 'Rawan',
                interactive: true,
                title: '<img src="styles/legend/Rawan_14.png" /> Rawan'
            });

lyr_GoogleSatellite_0.setVisible(true);lyr_Longsor1kmz_1.setVisible(true);lyr_Longsor2kmz_2.setVisible(true);lyr_Longsor3kmz_3.setVisible(true);lyr_Longsor4kmz_4.setVisible(true);lyr_LOngsor5kmz_5.setVisible(true);lyr_Longsor6kmz_6.setVisible(true);lyr_Longsor7kmz_7.setVisible(true);lyr_Longsor8kmz_8.setVisible(true);lyr_Longsor9kmz_9.setVisible(true);lyr_Banjirkmz_10.setVisible(true);lyr_Banjir2kmz_11.setVisible(true);lyr_Longsorkmz_12.setVisible(true);lyr_InformasiRambuBencana_13.setVisible(true);lyr_Rawan_14.setVisible(true);
var layersList = [lyr_GoogleSatellite_0,lyr_Longsor1kmz_1,lyr_Longsor2kmz_2,lyr_Longsor3kmz_3,lyr_Longsor4kmz_4,lyr_LOngsor5kmz_5,lyr_Longsor6kmz_6,lyr_Longsor7kmz_7,lyr_Longsor8kmz_8,lyr_Longsor9kmz_9,lyr_Banjirkmz_10,lyr_Banjir2kmz_11,lyr_Longsorkmz_12,lyr_InformasiRambuBencana_13,lyr_Rawan_14];
lyr_Longsor1kmz_1.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Longsor2kmz_2.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Longsor3kmz_3.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Longsor4kmz_4.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_LOngsor5kmz_5.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Longsor6kmz_6.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Longsor7kmz_7.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Longsor8kmz_8.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Longsor9kmz_9.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Banjirkmz_10.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Banjir2kmz_11.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_Longsorkmz_12.set('fieldAliases', {'id': 'id', 'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', });
lyr_InformasiRambuBencana_13.set('fieldAliases', {'n': 'n', 'Nama rambu bencana': 'Nama rambu bencana', 'lat': 'lat', 'lng': 'lng', 'foto': 'foto', 'Link Gmap': 'Link Gmap', 'deskripsi': 'deskripsi', });
lyr_Rawan_14.set('fieldAliases', {'NAME': 'NAME', 'LAYER': 'LAYER', 'MAP_NAME': 'MAP_NAME', 'KML_STYLE': 'KML_STYLE', 'POINT_SYMB': 'POINT_SYMB', 'FONT_SIZE': 'FONT_SIZE', 'FONT_COLOR': 'FONT_COLOR', 'FONT_CHARS': 'FONT_CHARS', 'FONT_WEIGH': 'FONT_WEIGH', });
lyr_Longsor1kmz_1.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Longsor2kmz_2.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Longsor3kmz_3.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Longsor4kmz_4.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_LOngsor5kmz_5.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Longsor6kmz_6.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Longsor7kmz_7.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Longsor8kmz_8.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Longsor9kmz_9.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Banjirkmz_10.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Banjir2kmz_11.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_Longsorkmz_12.set('fieldImages', {'id': '', 'Name': '', 'description': '', 'timestamp': '', 'begin': '', 'end': '', 'altitudeMode': '', 'tessellate': '', 'extrude': '', 'visibility': '', 'drawOrder': '', 'icon': '', });
lyr_InformasiRambuBencana_13.set('fieldImages', {'n': 'Range', 'Nama rambu bencana': 'TextEdit', 'lat': 'TextEdit', 'lng': 'TextEdit', 'foto': 'TextEdit', 'Link Gmap': 'TextEdit', 'deskripsi': 'TextEdit', });
lyr_Rawan_14.set('fieldImages', {'NAME': '', 'LAYER': '', 'MAP_NAME': '', 'KML_STYLE': '', 'POINT_SYMB': '', 'FONT_SIZE': '', 'FONT_COLOR': '', 'FONT_CHARS': '', 'FONT_WEIGH': '', });
lyr_Longsor1kmz_1.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Longsor2kmz_2.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Longsor3kmz_3.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Longsor4kmz_4.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_LOngsor5kmz_5.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Longsor6kmz_6.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Longsor7kmz_7.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Longsor8kmz_8.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Longsor9kmz_9.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Banjirkmz_10.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Banjir2kmz_11.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_Longsorkmz_12.set('fieldLabels', {'id': 'no label', 'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', });
lyr_InformasiRambuBencana_13.set('fieldLabels', {'n': 'no label', 'Nama rambu bencana': 'no label', 'lat': 'no label', 'lng': 'no label', 'foto': 'no label', 'Link Gmap': 'no label', 'deskripsi': 'no label', });
lyr_Rawan_14.set('fieldLabels', {'NAME': 'no label', 'LAYER': 'header label - visible with data', 'MAP_NAME': 'no label', 'KML_STYLE': 'no label', 'POINT_SYMB': 'no label', 'FONT_SIZE': 'no label', 'FONT_COLOR': 'no label', 'FONT_CHARS': 'no label', 'FONT_WEIGH': 'no label', });
lyr_Rawan_14.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});