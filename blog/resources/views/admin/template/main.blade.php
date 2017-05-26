<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Panel de administración</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" href="{{asset('css/css.css')}}">
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		@include('admin.template.partials.nav')
		<section>
			<div class="row">
			  <div class="col-sm-6 col-md-12">
			  	<div class="thumbnail">
			  		@include('flash::message')
			    	@yield('content')
			    </div>
			  </div>
			</div>
		</section>
		<section>
			<div class="panel panel-default">
				<div class="panel-footer"><p class="text-right">JoralmoPro</p></div>
			</div>
		</section>
	</div>
	<div class="col-md-2"></div>
	<script src="{{asset('plugins/jquery/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>