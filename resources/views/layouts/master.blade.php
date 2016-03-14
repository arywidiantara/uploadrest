<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BELAJAR CRUD</title>
	<link rel="stylesheet" href="{{ URL('css/blitzer/jquery-ui-1.10.3.custom.css') }}" type="text/css" media="" />
	<link href="{{ URL('css/bootstrap.min.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ URL('js/jquery.min.js') }}"></script>
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css" media="screen" id="test">
		body {
			  min-height: 2000px;
			  padding-top: 70px;
		}
		#footer {
		  position: fixed;
		  bottom: 0;
		  width: 100%;
		  /* Set the fixed height of the footer here */
		  height: 60px;
		  background-color: #f5f5f5;
		}

	</style>
  </head>
  <body>
				@include('include.header')
				@yield('content')
				@include('include.footer')
			<!-- /.row -->
	</body>
</html>
