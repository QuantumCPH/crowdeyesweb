<?php
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));

echo "<table border='1' width='50%' align='center'><tr><td>COUNTRY:</td><td>";
echo $url->countryName;
echo "</td></tr><tr><td>CITY:</td><td>";
echo $url->cityName;
echo "</td></tr><tr><td>STATE OR REGION:</td><td>";
echo $url->regionName;
echo "</td></tr><tr><td>IP ADDRESS:</td><td>";
echo $url->ipAddress;
echo "</td></tr><tr><td>COUNTRY CODE:</td><td>";
echo $url->countryCode;
echo "</td></tr><tr><td>LATITUTE:</td><td>";
echo $url->latitude;
echo "</td></tr><tr><td>LONGITUDE:</td><td>";
echo $url->longitude;
echo "</td></tr><tr><td>TIMEZONE:</td><td>";
echo $url->timeZone;
echo "</td></tr><tr></table>";
?>


<?php
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=4412550d3b0efa3aa92c6560acd857b6dbd45d82456feee448559e743094cadd&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));


echo $lat1 = $url->latitude;
echo $lon1 = $url->longitude;

echo $country = $url->countryName;
?>

<script>

    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function($scope, $http) {

        getcatdata1();
        function getcatdata1() {
            var userData1 = $http({
                method: "post",
                url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",

                data: {
                    Count: "1",
                    ProfileID: "771",
                    CategoryID:"11",
                    SubCategories:"true",
                    Location_GPS:"<?php echo $lat1; ?>, <?php echo $lon1; ?>",
                    MaxDistanceKM:"500",
                    SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"
                },

                headers: {'Content-Type': 'application/json'}
            });
            userData1.success(function (userdataobject) {
                $scope.catadata1 = userdataobject;
            });
        }
        setInterval(getcatdata1, 30000);

        getcatdata2();
        function getcatdata2() {
            var userData2 = $http({
                method: "post",
                url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",
                data: {
                    Count: "1",
                    ProfileID: "771",
                    CategoryID:"2",
                    SubCategories:"true",
                    Location_GPS:"[<?php echo $lat1; ?>, <?php echo $lon1; ?>]",
                    MaxDistanceKM:"500",
                    SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"
                },

                headers: {'Content-Type': 'application/json'}
            });
            userData2.success(function (userdataobject) {
                $scope.catadata2 = userdataobject;
            });
        }
        setInterval(getcatdata2, 30000);

        getcatdata3();
        function getcatdata3() {
            var userData3 = $http({
                method: "post",
                url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",
                data: {
                    Count: "1",
                    ProfileID: "771",
                    CategoryID:"12",
                    SubCategories:"true",
                    Location_GPS:"[<?php echo $lat1; ?>, <?php echo $lon1; ?>]",
                    MaxDistanceKM:"500",
                    SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"
                },

                headers: {'Content-Type': 'application/json'}
            });
            userData3.success(function (userdataobject) {
                $scope.catadata3 = userdataobject;
            });
        }
        setInterval(getcatdata3, 30000);

        getcatdata4();
        function getcatdata4() {
            var userData4 = $http({
                method: "post",
                url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",
                data: {
                    Count: "1",
                    ProfileID: "771",
                    CategoryID:"13",
                    SubCategories:"true",
                    Location_GPS:"[<?php echo $lat1; ?>, <?php echo $lon1; ?>]",
                    MaxDistanceKM:"500",
                    SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"
                },
                headers: {'Content-Type': 'application/json'}
            });
            userData4.success(function (userdataobject) {
                $scope.catadata4 = userdataobject;
            });
        }
        setInterval(getcatdata4, 30000);

    });
    /*Count = 50;
     ProfileID = 771;
     SecurityToken = 7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN;*/
</script>



<style>
    .imgFirst{ height:30px; width:30px;}
    .lostImg2{ height:95px; width:95px; border-radius: 5px; border: solid 0px #fff;}
</style>

<div id="searchCategory" class="row text-center searchCategory" ng-app="myApp" ng-controller="customersCtrl">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-object.png" /> <span>Object</span> </div>

        <div class="greenBox" ng-repeat="cat1 in catadata1">
            <div class="greenBoxB1">

                <div class="greenInner2">

		  <span>
		      <img ng-if="cat1.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/lost.png" />
			  <img ng-if="cat1.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/find.png" />

            <img class="lostImg2" ng-show="cat1.PictureURIs[0].URI" alt="{{cat1.PictureURIs[0].URI}}" src="{{cat1.PictureURIs[0].URI}}" />
            <img class="lostImg2" ng-hide="cat1.PictureURIs[0].URI"  alt="{{cat1.PictureURIs[0].URI}}"  src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-44.png">

		  </span>
                    <div class="rightGreen">
                        <h4>{{cat1.Title | limitTo: 18}}</h4>
                        <p>
                            {{cat1.Desciption | limitTo: 45}}...
                        </p>
                    </div>
                </div>
                <div class="greenInner3">
                    <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/loc-1.png" />
                    <span>{{cat1.Location | limitTo: 35}}</span>
                </div>
                <div class="greenInner1">
                    <img class="imgFirst" ng-show="cat1.CreatedBy_Profile.Picture.URI" src="{{cat1.CreatedBy_Profile.Picture.URI}}" />
                    <img class="imgFirst" ng-hide="cat1.CreatedBy_Profile.Picture.URI" src="<?php echo get_template_directory_uri(); ?>/assets/img/user.png" />

                <span>
			{{cat1.CreatedBy_Profile.Name | limitTo: 14}}

		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat1.When | date:'d-M-y HH:mm'}}</font>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pet.png" /> <span>Pet</span> </div>

        <div class="greenBox boxColor4" ng-repeat="cat2 in catadata2">
            <div class="greenBoxB2">

                <div class="greenInner2">
		  <span>
			  <img ng-if="cat2.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/lost.png" />
			  <img ng-if="cat2.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/find.png" />
			  <img class="lostImg2" ng-show="cat2.PictureURIs[0].URI" alt="{{cat2.PictureURIs[0].URI}}" src="{{cat2.PictureURIs[0].URI}}" />
            <img class="lostImg2" ng-hide="cat2.PictureURIs[0].URI"  alt="{{cat2.PictureURIs[0].URI}}"  src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-22.png">

		  </span>
                    <div class="rightGreen">
                        <h4>{{cat2.Title | limitTo: 18}}</h4>
                        <p>
                            {{cat2.Desciption | limitTo: 45}}...
                        </p>
                    </div>
                </div>
                <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/loc-2.png" /> <span>{{cat2.Location | limitTo: 35}}</span> </div>
                <div class="greenInner1">
                    <img class="imgFirst" ng-show="cat2.CreatedBy_Profile.Picture.URI" src="{{cat2.CreatedBy_Profile.Picture.URI}}" />
                    <img class="imgFirst" ng-hide="cat2.CreatedBy_Profile.Picture.URI" src="<?php echo get_template_directory_uri(); ?>/assets/img/user.png" />

              <span>
			{{cat2.CreatedBy_Profile.Name | limitTo: 14}}

		   </span><font>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat2.When | date:'d-M-y HH:mm'}}</font>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-people.png" /> <span>People</span> </div>

        <div class="greenBox boxColor2" ng-repeat="cat3 in catadata3">
            <div class="greenBoxB3">

                <div class="greenInner2">
		  <span>
		     <img ng-if="cat3.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/lost.png" />
			  <img ng-if="cat3.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/find.png" />
			  <img class="lostImg2" ng-show="cat3.PictureURIs[0].URI" alt="{{cat3.PictureURIs[0].URI}}" src="{{cat3.PictureURIs[0].URI}}" />
            <img class="lostImg2" ng-hide="cat3.PictureURIs[0].URI"  alt="{{cat3.PictureURIs[0].URI}}"  src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-22.png">

		  </span>
                    <div class="rightGreen">
                        <h4>{{cat3.Title | limitTo: 18}}</h4>
                        <p>
                            {{cat3.Desciption | limitTo: 45}}...
                        </p>
                    </div>
                </div>
                <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/loc-3.png" /> <span>{{cat3.Location | limitTo: 35}}</span> </div>
                <div class="greenInner1">
                    <img class="imgFirst" ng-show="cat3.CreatedBy_Profile.Picture.URI" src="{{cat3.CreatedBy_Profile.Picture.URI}}" />
                    <img class="imgFirst" ng-hide="cat3.CreatedBy_Profile.Picture.URI" src="<?php echo get_template_directory_uri(); ?>/assets/img/user.png" />
<span>
			{{cat3.CreatedBy_Profile.Name | limitTo: 14}}

		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat3.When | date:'d-M-y HH:mm'}}</font>
                </div>
            </div>
        </div>
    </div>
