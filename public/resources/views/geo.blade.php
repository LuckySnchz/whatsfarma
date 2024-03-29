<?php

session_start();




 ?>
<!DOCTYPE html>
<html>
 
  <head>
  <script src="js/jquery-1.4.2.min.js"></script>
  <script src="js/yqlgeo.js"></script>
  <script>
    jQuery(window).ready(function(){
        jQuery("#btnInit").click(initiate_geolocation);
    })
 
    function initiate_geolocation() {
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(handle_geolocation_query, handle_errors);
        }
        else
        {
            yqlgeo.get('visitor', normalize_yql_response);
        }
    }
 
    function handle_errors(error)
    {
        switch(error.code)
        {
            case error.PERMISSION_DENIED: alert("user did not share geolocation data");
            break;
 
            case error.POSITION_UNAVAILABLE: alert("could not detect current position");
            break;
 
            case error.TIMEOUT: alert("retrieving position timedout");
            break;
 
            default: alert("unknown error");
            break;
        }
    }
 
    function normalize_yql_response(response)
    {
        if (response.error)
        {
            var error = { code : 0 };
            handle_error(error);
            return;
        }
 
        var position = {
            coords :
            {
                latitude: response.place.centroid.latitude,
                longitude: response.place.centroid.longitude
            },
            address :
            {
                city: response.place.locality2.content,
                region: response.place.admin1.content,
                country: response.place.country.content
            }
        };
 
        handle_geolocation_query(position);
    }
 
    function handle_geolocation_query(position){
        alert('Lat: ' + position.coords.latitude + ' ' +
              'Lon: ' + position.coords.longitude);
        }
    </script>
 
  </head>
  <body>
    <div>
      <button id="btnInit" >Find my location</button>
    </div>
 
  </body>
</html>