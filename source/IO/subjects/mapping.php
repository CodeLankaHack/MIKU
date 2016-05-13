 <!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="calender2.css">
		<title>See Location</title>

		<script
		src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.min.js"></script>
	<script
		src="http://maps.googleapis.com/maps/api/js?sensor=false&language=en"></script>
	  <script type="text/javascript" src="geoLoc1.js"></script>

	<script type="text/javascript" src="geoLoc.js"></script>

</head>

<body style="background-color:#FFCC66;"  ng-app="app" ng-controller="appCtrl">
<?php
   include '../navbar1.php';
   
   ?>

 <div class="row artical1">
         <div class="container">
		 
            <div class="col-md-12">
               <h3><font color="#000000">Map</font></h3>
               <hr noshade>


<h3>Google Maps</h3>

    <!-- search/go to current location -->
    <div class="text-right">
        <div class="input-append text-right">
            <input type="text" ng-model="search"/>
            <button class="btn" type="button" ng-click="geoCode()" ng-disabled="search.length == 0" title="search" >
              &nbsp;<i class="icon-search"></i>See Location
            </button>
            <!--button class="btn" type="button" ng-click="gotoCurrentLocation()" title="current location">
              &nbsp;<i class="icon-home"></i>Where am I now?
            </button-->
        </div>
    </div>

    <!-- map -->
    <app-map style="height:400px;margin:12px;box-shadow:0 3px 25px black;"
        center="loc"
        markers="cities"
    > 
    </app-map >

    <!-- current location -->
    <div class="text-info text-right">
        {{loc.lat | lat:0}}, {{loc.lon | lon:0}}
    </div>

    <!-- list of airports -->
    <div class="container-fluid">
        <div class="span3 btn" 
            ng-repeat="a in cities"
            ng-click="gotoLocation(a.lat, a.lon)">
            <b>{{a.place}}</b>: {{a.desc}}
        </div>
    </div>
</div>
</div>
</div>
</body>


</html> 