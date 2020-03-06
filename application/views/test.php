<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Minimal example</title>
    <style type="text/css">
        
        

        .containerMap {
            max-width: 800px;
            margin: auto;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
    <script src="<?=base_url('resources/assets/mapa/')?>js/jquery.mapael.js" charset="utf-8"></script>
    <script src="<?=base_url('resources/assets/mapa/')?>js/maps/france_departments.js" charset="utf-8"></script>
    <script src="<?=base_url('resources/assets/mapa/')?>js/maps/world_countries.js" charset="utf-8"></script>
    <script src="<?=base_url('resources/assets/mapa/')?>js/maps/usa_states.js" charset="utf-8"></script>

    <script type="text/javascript">
        $(function () {
            $(".containerMap").mapael({
                map: {
                    // Set the name of the map to display
                    name: "france_departments"
                }
            });
        });
    </script>

</head>

<body>
<div class="containerMap">

    <h1>Minimal example</h1>

    <div class="mapcontainer">
        <div class="map">
            <span>Alternative content for the map</span>
        </div>
    </div>

    <p><b>All example for jQuery Mapael are available <a href="https://www.vincentbroute.fr/mapael/">here</a>.</b></p>

</div>


</body>
</html>