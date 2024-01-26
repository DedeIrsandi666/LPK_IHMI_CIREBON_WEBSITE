<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('assets3/img/lpk_ihmi1.png')}}" type="image/x-icon')}}"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="{{asset('assets3/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: [{{asset('assets3/css/fonts.css')}}]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<link rel="stylesheet" href="{{asset('assets3/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets3/css/azzara.min.css')}}">
	<link href="{{asset('assets3/styles.css')}}" rel="stylesheet" />
	<link href="{{asset('assets3/prism.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="purple">
			<div class="logo-header">
				<a href="https://linktr.ee/LPKIHMI" target="_blank" class="logo">
					<img src="{{asset('assets3/img/lpkihmicirebon1.png')}}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('informasi.create') }}">Menambahkan Informasi</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('peserta.create') }}">Menambahkan Peserta</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.create') }}">Menambahkan Admin</a>
                          </li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav">
						<li class="nav-section">
							<span class="hide-menu">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a href="{{ url('welcome') }}">
								<span class="letter-icon">1</span>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('informasi.index') }}">
								<span class="letter-icon">2</span>
								<p>Halaman Informasi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('peserta.index') }}">
								<span class="letter-icon">3</span>
								<p>Daftar Profil Peserta</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="user-show">
								<span class="letter-icon">4</span>
								<p>Daftar Profil Admin</p>
							</a>
						</li>
						<li class="text-center p-20 upgrade-btn">
                            <a href="{{url('logout')}}"
                                class="btn btn-danger text-white mt-4" >Keluar</a>
                        </li>
                        <li>
    
                        </li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content content-documentation">
				<div class="container-fluid">
					<div class="card card-documentation">
						<div class="card-header bg-secondary text-white">
							<h4>LPK IHMI CIREBON</h4>
							<p class="mb-0">Alamat : Jl. Gerilyawan No.1, Simaja, Kec. Kesambi, Kabupaten Cirebon, Jawa Barat</p>
						</div>
						<div class="card-body">
							<div class="table-content">
	
                                @yield('content')

							</div>
                        </div>
                        </body>
                        
                        
<script src="{{asset('assets3/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('assets3/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets3/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('assets3/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets3/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets3/js/plugin/chart.js/chart.min.js')}}"></script>
<script src="{{asset('assets3/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets3/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets3/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets3/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}" charset="utf-8"></script>
<script src="{{asset('assets3/js/plugin/chart-circle/circles.min.js')}}"></script>
<script src="{{asset('assets3/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets3/js/ready.js')}}"></script>
<script src="{{asset('assets3/prism.js')}}"></script>
<script src="{{asset('assets3/prism-normalize-whitespace.min.js')}}"></script>
<script type="text/javascript">
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});
	
	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>

</html>