<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=11da77f4-85aa-4063-8c21-b6beea3dbdf9&lang=ru_RU" type="text/javascript">
    </script>
    <style>
        .hide{
            visibility: hidden;
            display: none;
        }
    </style>
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

        myPlacemark = new ymaps.Placemark([55.76, 37.64], {
            // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
            balloonContentHeader: "Балун метки",
            balloonContentBody: "Содержимое <em>балуна</em> метки",
            balloonContentFooter: "Подвал",
            hintContent: "Хинт метки"
        });

        myMap.geoObjects.add(myPlacemark);


        // Открываем балун на карте (без привязки к геообъекту).
        myMap.balloon.open([51.85, 38.37], "Содержимое балуна", {
            // Опция: не показываем кнопку закрытия.
            closeButton: true
        });
    }
</script>
