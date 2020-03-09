<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
<script src="<?=base_url('resources/assets/mapa/')?>js/jquery.mapael.js" charset="utf-8"></script>
<script src="<?=base_url('resources/assets/mapa/')?>js/maps/france_departments.js" charset="utf-8"></script>
<script src="<?=base_url('resources/assets/mapa/')?>js/maps/world_countries.js" charset="utf-8"></script>
<script src="<?=base_url('resources/assets/mapa/')?>js/maps/usa_states.js" charset="utf-8"></script>
<script src="<?=base_url('resources/assets/mapa/')?>js/maps/mexico.js" charset="utf-8"></script>

<script type="text/javascript">
    $(function () {
        $(".containerMap").mapael({
            map: {
                // Set the name of the map to display
                name: "world_countries"
                , zoom: {
                    enabled: true,
                    maxLevel: 20,
                },
                defaultArea: {
                    attrs: {
                        fill: "#f4f4e8"
                        , stroke: "#ced8d0"
                    }
                    , attrsHover: {
                        fill: "#42BCF5"
                    }
                    , text: {
                        attrs: {
                            fill: "#505444"
                        }
                        , attrsHover: {
                            fill: "#000"
                        }
                    }
                },
            },
            areas:{
                "MX": {
                    tooltip: {content : "M&eacute;xico"},
                    attrs : {
                        fill : "#F54242"
                    }
                    , attrsHover: {
                        fill: "#FE901A"
                    }
                },
            },
            plots : {
                'queretaro' : {
                    type: "circule",
                    size: 5,
                    attrs: {
                        opacity: 1
                    },
                    attrsHover: {
                        transform: "s1.5"
                    },
                    latitude : 20.5931, 
                    longitude: -100.392, 
                    tooltip: {content : "Queretaro"},

                }
            }
        });
    });
</script>