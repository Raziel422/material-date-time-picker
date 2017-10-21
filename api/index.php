<!--
### Copyright 2017 Snyder Group Inc.
### MIT License
### Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions: 
### The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
### THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" initial-scale=1 content="width=device-width"/>
<title>Google Calendar Test</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="fdgs.js?v=1"></script>



  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

  <link rel="stylesheet" href="dist/material-datetime-picker.css">

<style>
body {
      font-family: 'Roboto', sans-serif;
      -webkit-font-smoothing: antialiased;
    }

    .c-btn {
      font-size: 14px;
      text-transform: capitalize;
      font-weight: 600;
      display: inline-block;
      line-height: 36px;
      cursor: pointer;
      text-align: center;
      text-transform: uppercase;
      min-width: 88px;
      height: 36px;
      margin: 10px 8px;
      padding: 0 8px;
      text-align: center;
      letter-spacing: .5px;
      border-radius: 2px;
      background: #F1F1F1;
      color: #393939;
      transition: background 200ms ease-in-out;
      box-shadow: 0 3.08696px 5.82609px 0 rgba(0, 0, 0, 0.16174), 0 3.65217px 12.91304px 0 rgba(0, 0, 0, 0.12435);
    }

    .c-btn--flat {
      background: transparent;
      margin: 10px 8px;
      min-width: 52px;
    }

    .c-btn:hover {
      background: rgba(153, 153, 153, 0.2);
      color: #393939;
    }

    .c-btn:active {
      box-shadow: 0 9.6087px 10.78261px 0 rgba(0, 0, 0, 0.17217), 0 13.56522px 30.3913px 0 rgba(0, 0, 0, 0.15043);
    }

    .c-btn--flat, .c-btn--flat:hover, .c-btn--flat:active {
      box-shadow: none;
    }







#map {
    height: 100%;
}
/* Optional: Makes the sample page fill the window. */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}
#description {
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
}

#infowindow-content .title {
    font-weight: bold;
}

#infowindow-content {
    display: none;
}

#map #infowindow-content {
    display: inline;
}

.pac-card {
    margin: 10px 10px 0 0;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    background-color: #fff;
    font-family: Roboto;
}

#pac-container {
    padding-bottom: 12px;
    margin-right: 12px;
}

.pac-controls {
    display: inline-block;
    padding: 5px 11px;
}

.pac-controls label {
    font-family: Roboto;
    font-size: 13px;
    font-weight: 300;
}

#pac-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 400px;
}

#pac-input:focus {
    border-color: #4d90fe;
}

#title {
    color: #fff;
    background-color: #4d90fe;
    font-size: 25px;
    font-weight: 500;
    padding: 6px 12px;
}
#target {
    width: 345px;
}

@media all and (max-width: 800px) {

.c-datepicker {
    transform: translateX(-130px) translateY(-320px) scale(2.4);
}




    h3.aviaccordion-title {

        -webkit-transform-style: preserve-3d;
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

        -webkit-transform: translateY(90deg);
        -webkit-transform: rotate(90deg);
        -webkit-transform-origin:left bottom;


        -moz-transform: translateY(90deg);
        -moz-transform-origin: left bottom;

        -ms-transform: translateY(90deg);
        -ms-transform-origin:left bottom;

        -o-transform: translateY(90deg);

        transform: translateY(90deg);
        transform: rotate(90deg);


        transform-origin: left bottom;

        padding:0 !important;
        margin:0 !Important;
        white-space: nowrap !Important;
        display: block;


    }

}
</style>

</head>
<body>

<!-- Header -->
<div class="header_container">
<div class="header">
<img src="https://dotcodes.net/wp-content/uploads/2016/12/logo-dotcodes-2.png" class="header_logo"/>
</div>
</div>
<!-- Header -->

<!-- Content -->
<div class="content_container">
<div class="content">
<div class="content_full content_twelve">
<div class="container_text">
<h1>Google Sheets API</h1>
<h3>Add HTML Form Data to Sheet via Javascript</h3>
</div>
<!-- Form -->
<div class="form_container">
<form id="sheets" name="sheets" class="form_body">

<label>Name</label><input id="name" name="name" class="form_field" value="" placeholder="Name"/>
<label>Description</label><input id="desc" name="desc" class="form_field" value="" placeholder="Description Event"/>
<label>Start</label><input id="start" name="start" class="form_field" value="" placeholder="Start"/>

<label>Stop</label><input id="stop" name="stop" class="form_field" value="" placeholder="End"/>
<label>Place</label><input id="place" name="Place" class="form_field" value="" placeholder="Place"/>
<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<input id="marker" name="marker" class="form_field" value="0" placeholder="" style="display: none;"/>
<input id="submit" name="submit" type="button" class="form_button" value="Submit" onClick="submit_form()">
</form>

    <a class="c-btn c-datepicker-btn">
        <input id="output" class="material-icon">Open date picker</input>
    </a>
<div class="form_message" id="message"></div>
</div>

<!-- Form -->
</div>
</div>
</div>
<!-- Content -->

<!-- Footer -->
<div class="footer_container">
<div class="footer">

</div>
</div>
<!-- Footer -->


<h3 class="aviaccordion-title">Safari TEST</h3>
<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div id="map"></div>



<!-- MAP CODE -->
<script>
    // This example adds a search box to a map, using the Google Place Autocomplete
    // feature. People can enter geographical searches. The search box will return a
    // pick list containing a mix of places and predicted search terms.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
			// 44.429487, 26.101827
            center: {lat: 44.429487, lng: 26.101827},
            zoom: 13,
            mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(22, 22),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
    }


    var mapSearchInput = document.querySelector("#pac-input");
    var placeInput = document.querySelector("#place");

        mapSearchInput.addEventListener("change", function () {
         var mapSValue = mapSearchInput.value;
            placeInput.value = mapSValue;

         console.log(mapSValue);
      });

</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDad48Spu62C60loKjGjO0Sx4KBVSxBugw&libraries=places&callback=initAutocomplete"
        async defer></script>




  <script src="https://unpkg.com/babel-polyfill@6.2.0/dist/polyfill.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.standalone.js"></script>
  <script src="dist/material-datetime-picker.js" charset="utf-8"></script>
  
  <!-- DATE PICKER CODE -->
  <script>


      var start = document.querySelector("#start");
      var stop = document.querySelector("#stop");
      var dateValue = "";


    var picker = new MaterialDatetimePicker({})
      .on('submit', function(d) {
        output.innerText = d;
		output.value = d;
		
	var outputString = document.getElementById("output").value;
	var arrOutSplitted = outputString.split(" ");
	
	var luna = arrOutSplitted[1];
	var zi = arrOutSplitted[2];
	var an = arrOutSplitted[3];
	var oraFull = arrOutSplitted[4];
	
	var oraFullSplit = oraFull.split(":");
	
	var ora = oraFullSplit[0];
	var min = oraFullSplit[1];
	var sec = oraFullSplit[2];
	
	var lunaFull = "";
	
	switch(luna) {
		case("Oct") : lunaFull = "October"
		break;
		case("Nov") : lunaFull = "November"
		break;
	}
	
	console.log("Luna full:" + lunaFull);
	
	var dateString = ""+lunaFull+" "+zi+", "+an+" "+oraFull+"";
	
	console.log("Data full:" + dateString);

	
	console.log(arrOutSplitted[1]+"   "+arrOutSplitted[2]+"   "+arrOutSplitted[3]+"   "+oraFullSplit[0]+"   "+oraFullSplit[1]+"   "+oraFullSplit[2]);	

console.log(outputString);	

var start = document.querySelector("#start");
var stop = document.querySelector("#stop");

start.value = dateString;
stop.value = dateString;

          dateValue = dateString;

        return dateValue;
		
      });


      // END PICKER


      start.addEventListener("click",function(){
          var a = picker.open("param");
          //start.value = a;
          //console.log("DV"+dateValue);
      });

      stop.addEventListener("click",function(){
          //picker.open();
         // stop.value = dateValue;
          //console.log(dateValue);
      });


    var el = document.querySelector('.c-datepicker-btn');
    el.addEventListener('click', function() {
      picker.open();
    }, false);
	


</script>





</body>
</html>