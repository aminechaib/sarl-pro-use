<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVG Map</title>
    <link rel="stylesheet" href="{{ asset('svgMap/dist/svgMap.min.css') }}">
    <style>
        #svgMap {
            background-color: red;
        }
        .svgMap-zoom-controls {
            display: none; /* Remove zoom controls */
        }
        .svgMap-flag {
            display: none; /* Hide default flags */
        }
        .svgMap-custom-icon {
            width: 20px;
            height: 20px;
            background-image: url('{{ asset('images/amine.png') }}');
            background-size: contain;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div id="svgMap"></div>
    <script src="{{ asset('svgMap/dist/svgMap.min.js') }}"></script>
    <script>
        // Custom function to replace flags with custom icons
        function replaceFlagsWithCustomIcons() {
            document.querySelectorAll('.svgMap-flag').forEach(function(flag) {
                const customIcon = document.createElement('span');
                customIcon.classList.add('svgMap-custom-icon');
                flag.parentNode.replaceChild(customIcon, flag);
            });
        }

        new svgMap({
            targetElementID: 'svgMap',
            data: {
                data: {
                    gdp: {
                        name: 'GDP per capita',
                        format: '{0} USD',
                        thousandSeparator: ',',
                        thresholdMax: 50000,
                        thresholdMin: 1000
                    },
                    change: {
                        name: 'Change to year before',
                        format: '{0} %'
                    }
                },
                applyData: 'gdp',
                values: {
                    US: { gdp: 50200, change: 0.97 },
                    CA: { gdp: 42000, change: 0.94 },
                    FR: { gdp: 39800, change: 0.95 },
                    DE: { gdp: 48000, change: 0.91 },
                    RU: { gdp: 13300, change: 0.8 },
                    CN: { gdp: 8900, change: 0.95 },
                    IN: { gdp: 2100, change: 0.99 }
                }
            },
            onLoad: function() {
                replaceFlagsWithCustomIcons(); // Replace flags with custom icons on load
            }
        });
    </script>
</body>
</html>
