<?php include('server.php');
if($_SESSION['logged_in']){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>STB</title>
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Load JQuery UI -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- Add references to the Azure Maps Map control JavaScript and CSS files. -->
        <link rel="stylesheet" href="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.css" type="text/css" />
        <script src="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.js"></script>
    </head>
    <body>
    <?php
    if($_SESSION['logged_in']){
        ?>
        <script src = "JS/menuAfterLogin.js"></script>
    <?php } else { ?>
        <script src = "JS/menu.js"></script>
    <?php } ?>
    <script>
       var map;
       //Note that the typeahead parameter is set to true.
       var geocodeServiceUrlTemplate = 'https://atlas.microsoft.com/search/{searchType}/json?typeahead=true&subscription-key={subscription-key}&api-version=1&query={query}&language={language}&lon={lon}&lat={lat}&countrySet={countrySet}';

       function GetMap() {
           //Initialize a map instance.
           map = new atlas.Map('myMap', {
               //Add your Azure Maps subscription key to the map SDK. Get an Azure Maps key at https://azure.com/maps
               authOptions: {
                   authType: 'subscriptionKey',
                   subscriptionKey: 'H1uJOfLYlTiyE-IBNC6_j0u8Jjrwf7iuImZrYapcm88'
               }
           });

           //Wait until the map resources are ready.
           map.events.add('ready', function () {
               //Create a data source to store the data in.
               datasource = new atlas.source.DataSource();
               map.sources.add(datasource);

               //Add a layer for rendering point data.
               map.layers.add(new atlas.layer.SymbolLayer(datasource));

               //Create a jQuery autocomplete UI widget.
               $("#queryTbx").autocomplete({
                   minLength: 3,   //Don't ask for suggestions until atleast 3 characters have been typed.
                   source: function (request, response) {
                       var center = map.getCamera().center;



                       //Create a URL to the Azure Maps search service to perform the search.
                       var requestUrl = geocodeServiceUrlTemplate.replace('{query}', encodeURIComponent(request.term))
                           .replace('{searchType}', 'fuzzy')/*document.querySelector('input[name="searchTypeGroup"]:checked').value)*/
                           .replace('{subscription-key}', atlas.getSubscriptionKey())
                           .replace('{language}', 'en-US')
                           .replace('{lon}', center[0])    //Use a lat and lon value of the center the map to bais the results to the current map view.
                           .replace('{lat}', center[1])
                           .replace('{countrySet}', 'RO'); //A comma seperated string of country codes to limit the suggestions to.

                       $.ajax({
                           url: requestUrl,
                           success: function (data) {
                               response(data.results);
                           }
                       });
                   },
                   select: function (event, ui) {
                       //Remove any previous added data from the map.
                       datasource.clear();

                       //Create a point feature to mark the selected location.
                       console.log(ui.item.position.lon);
                       console.log(ui.item.position.lat);
                       datasource.add(new atlas.data.Feature(new atlas.data.Point([ui.item.position.lon, ui.item.position.lat]), ui.item));

                       //Zoom the map into the selected location.
                       map.setCamera({
                           bounds: [
                               ui.item.viewport.topLeftPoint.lon, ui.item.viewport.btmRightPoint.lat,
                               ui.item.viewport.btmRightPoint.lon, ui.item.viewport.topLeftPoint.lat
                           ],
                           padding: 30
                       });
                   }
               }).autocomplete("instance")._renderItem = function (ul, item) {
                   //Format the displayed suggestion to show the formatted suggestion string.
                   var suggestionLabel = item.address.freeformAddress;

                   if (item.poi && item.poi.name) {
                       suggestionLabel = item.poi.name + ' (' + suggestionLabel + ')';
                   }

                   return $("<li>")
                       .append("<a>" + suggestionLabel + "</a>")
                       .appendTo(ul);
               };
           });
       }
    </script>
    <div class="container bg-light" style="height:100%">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab  item" style="left:5%;top:50px;height:500px">
                <form method="chooseLine" action="linesSTB.php">
                    <div class="form-group">
                        <label for="linie">Linie: </label>
                         <select  class="custom-select d-block w-400" id="linie" name="lineNumber">
                            <option value="27" >Linia 27: Complex comercial Titan-Policlinica Vitan </option>
                            <option value="66">Linia 66: Doamna Ghica- Facultatea de Drept</option>
                            <option value="105">Linia 105: Valea Oltului- Bd. Iuliu Maniu </option>
                            <option value="335">Linia 335: Aeroport Baneasa- Stadion Dinamo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <center><input type="submit" name="choose_linie" value="Cautare linie" class="btn btn-primary"></center>
                    </div>
                </form>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab item" style="left:27%">
                <div id="myMap" style="position:relative;width:100%;min-width:290px;height:500px;"> </div>
            </div>
        </div>
    </div>
    <?php
    if($_SESSION['logged_in']){
        ?>
        <script src = "JS/footer.js"></script>
    <?php } else { ?>
        <script src = "JS/footerBeforeLogin.js"></script>
    <?php } ?>
    </body>
    </html>
<?php } else {
    header('location:login.php');
} ?>