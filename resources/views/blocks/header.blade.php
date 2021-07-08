<head>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=11da77f4-85aa-4063-8c21-b6beea3dbdf9&lang=ru_RU" type="text/javascript">
    </script>
</head>
<script type="text/javascript">
    // The ymaps.ready() function will be called when
    // all the API components are loaded and the DOM tree is generated.
    ymaps.ready(init);
    function init(){
        // Creating the map.
        var myMap = new ymaps.Map("map", {
            // The map center coordinates.
            // Default order: “latitude, longitude”.
            // To not manually determine the map center coordinates,
            // use the Coordinate detection tool.
            center: [55.76, 37.64],
            // Zoom level. Acceptable values:
            // from 0 (the entire world) to 19.
            zoom: 7
        });
    }
</script>
