
 <?php

  include('header.php');
  // include('sidebar.php');
?>
  <div ng-app="WebinarPage" ng-controller="ViewCtrl">
  <iframe src="{{currenturl}}" width="100%" height="500px"  allow="geolocation; microphone; camera"></iframe>
  </div>
<?php
  include('footer.php');
?>
