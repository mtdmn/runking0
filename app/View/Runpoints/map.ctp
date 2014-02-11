<!-- File: /app/View/Runpoints/map.ctp -->
<script type="text/javascript">
	var box_extents = [
	<?php
		foreach ($runpoints as $rp) {
			echo '[['.
				($rp['X'] - 0.0005).
				','.
				($rp['Y'] - 0.0005).
				','.
				($rp['X'] + 0.0005).
				','.
				($rp['Y'] + 0.0005).
				'],'.$rp['user'].
				'],';
		}
	?>
	];
	var map;

	function init(){
		colors = new Array("red", "yellow", "blue", "green", "purple", "orange", "black");
		map = new OpenLayers.Map('map');
		var boxes  = new OpenLayers.Layer.Vector( "Boxes" );
		var mapnik = new OpenLayers.Layer.OSM();
		mapnik.opacity = 0.3;
		map.addLayer(mapnik);
		var lonLat = new OpenLayers.LonLat(139.5455, 35.6895).transform(
			new OpenLayers.Projection("EPSG:4326"), 
			new OpenLayers.Projection("EPSG:900913")
		);
		map.setCenter(lonLat, 14);
		for (var i = 0; i < box_extents.length; i++) {
			ext = box_extents[i][0];
			bounds = OpenLayers.Bounds.fromArray(ext).transform(
				new OpenLayers.Projection("EPSG:4326"), 
				new OpenLayers.Projection("EPSG:900913")
			);
			box = new OpenLayers.Feature.Vector(bounds.toGeometry(), {}, { strokeWidth: 0, fillColor: colors[box_extents[i][1]%7], fillOpacity:0.6});
			boxes.addFeatures(box);
		}
		map.addLayer(boxes);
		map.addControl(new OpenLayers.Control.LayerSwitcher());
		var sf = new OpenLayers.Control.SelectFeature(boxes);
		map.addControl(sf);
		sf.activate();

		if (!map.getCenter()) {
			map.setCenter(new OpenLayers.LonLat(139.546, 35.689), 12);
		}

	}
	document.body.onload=init; 
</script>

<?php echo $this->Html->image('runking_banner.png',array('alt' =>'runking banner')); ?>
<div id="tags">
		box, vector, annotation, light
</div>

<p id="shortdesc">
	Demonstrate marker and box type annotations on a map.
</p>
		
<div id="map" style="width:70%; height:70%"></div>

<div id="docs"></div>


