<script src="http://beta.mapquestapi.com/sdk/leaflet/v0.1/mq-map.js?key=Fmjtd%7Cluubn90t21%2Cax%3Do5-90a2du "></script>
<script type="text/javascript">
    window.onload = function() {
        L.map('map', {
            layers: MQ.mapLayer(),
            center: [ 7.078486, 125.603085 ],
            zoom: 13
        });
    };
    
</script>
 
<div id="map" style="height: 450px;"></div>
    <script>
        var mapLayer = MQ.mapLayer(),
            map;
 
        map = L.map('map', {
            layers: mapLayer,
            center: [ 7.078486, 125.603085 ],
                    zoom: 13
        });
         
        L.control.layers({
            'Map': mapLayer,
            'Satellite': MQ.satelliteLayer(),
            'Hybrid': MQ.hybridLayer()
        }).addTo(map);
        /*// create a map in the "map" div, set the view to a given place and zoom
        var map = L.map('map').setView([7.078486, 125.603085], 13);
        
        // add an OpenStreetMap tile layer
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        */
        // add a marker in the given location, attach some popup content to it and open the popup
        L.marker([7.078486, 125.603085]).addTo(map)
            .bindPopup('<h1>Welcome to<br>Davao City!</h1>')
            .openPopup();
        
        

    </script>

