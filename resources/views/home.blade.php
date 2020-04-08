<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="{{asset ('css/app.css')}}">
	<title>Co lam thi moi co an</title>
	<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">

</head>
<body>

	<div id="app">		
		<app-home></app-home>
	</div>


<script src="{{asset ('js/app.js')}}"></script>
</body>
</html>