<!doctype html>
<html lang="en" data-ng-app="bazar">
<head>
	<meta charset="UTF-8">
	<title>Bazar</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/loading-bar.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/app.css">
	<link href="/assets/css/foundation-icons.css" rel="stylesheet">
	<script src="/assets/js/modernizr.js"></script>
</head>
<body>
	@include('shorts.navigation')

	<div class="container">

    <!-- THIS IS WHERE WE WILL INJECT OUR CONTENT ============================== -->
    <div ui-view></div>

	</div>
	<script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/foundation.min.js"></script>
    <script src="/assets/js/angular.min.js"></script>
    <script type="text/javascript" src="/assets/js/components/angular-ui-router.min.js"></script>
    <script type="text/javascript" src="/assets/js/components/angular-animate.min.js"></script>
    <script type="text/javascript" src="/assets/js/components/loading-bar.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>
</html>
