<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>^_^</title>
	
	<!-- <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet"> -->
	<link href="https://cdn.jsdelivr.net/npm/vuetify@1.x/dist/vuetify.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset ('css/app.css')}}">

	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

<style type="text/css">
	a {
    	text-decoration: none !important;
	}
</style>

</head>
<body>

	<div id="app">		
		<app-home></app-home>
	</div>


<script src="{{asset ('js/app.js')}}"></script>
</body>
</html>