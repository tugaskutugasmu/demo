<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Demo FlexCode SDK</title>

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/ajaxmask.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="asset/js/html5shiv.min.js"></script>
        <script src="asset/js/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.timer.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/ajaxmask.js') }}"></script>

        <script src="{{asset('js/custom.js')}}"></script>

        <!-- <link type="image/gif" href="asset/image/favicon.gif" rel="icon"> -->
    </head>
    <body>
        <div class="container">
            <main class="py-4">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">FlexCode SDK</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="{{route ('device.ui')}}" onclick="load('<?php echo $base_path ?? ''?>device.php?action=index')">Device</a></li>
						<li><a href="{{route('user.ui')}}" onclick="load('<?php echo $base_path ?? ''?>user.php?action=index')">User</a></li>
						<li><a href="#" onclick="load('<?php echo $base_path ?? ''?>login.php?action=index')">Login</a></li>
						<li><a href="#" onclick="load('<?php echo $base_path ?? ''?>log.php?action=index')">Log</a></li>
					</ul>
				</div>
				<!-- /.nav-collapse -->
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="content">

					</div>
				</div>
			</div>
		</div>

	<script>
		jQuery(document).ready(function() {

			console.log('ready to use...');

			load('<?php echo $base_path ?? ''?>device.php?action=index');

		});
	</script>
            @yield('content')
        </main>
        </div>
    </body>