<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href={{asset('css/style.css')}}>
    @stack('css')
	<title>Techonology Insight @yield('title') </title>
</head>
<body>
	<div class="header">
		<h1>Techonology Insight.</h1>
	</div>
	<div class="topnav">
		<div class="theme-switch-wrapper">
			<label class="theme-switch" for="checkbox">
				<input type="checkbox" id="checkbox" />
				<div class="slider round"></div>
		  </label>
		</div>
		<a href="/todo">Todo-List</a>
		<a href="/profil ">Profil</a>
		<a href="/">Home</a>
	</div>

	<div class="row">
		<div class="leftcolumn">
			<div class="card">
				<h3>Categories :</h3>
				<ul>
					<li>Networking</li>
					<li>Cybersecurity</li>
					<li>Programming</li>
					<li>Database</li>
					<li>Android</li>
					<li>Arduino</li>
					<li>Laravel</li>
					<li>Flutter</li>
					<li>Sysadmin</li>
					<li>Blockchain</li>
					<li>Data Science</li>
					<li>Machine Learning</li>
					<li>Tensorflow</li>
					<li>Unity</li>
				</ul>
			</div>
		</div>
		<div class="centercolumn">
			@yield('content')
		</div> 
		<div class="rightcolumn">
			<div class="card">
				<form class="search" action="/">
					<input type="text" placeholder="Search.." name="search">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
				<div class="trending">
					<h3>Trending</h3>
				</div>
				<h4>Laravel 8.34. update</h4>
				<img src="https://cdn.tutsplus.com/net/uploads/legacy/2064_laravel/images/main_image.png" alt="laravel" width="200" height="200">
				<p>Description
					<a href="">Read more...</a>
				</p>
				<h4>Flutter + Firebase intergration</h4>
				<img src="https://pbs.twimg.com/media/EJRKCK0XsAIBK9J.jpg" alt="flutter" width="200" height="200">
				<p>Description
					<a href="">Read more...</a>
				</p>
				<h4>The power and potential of Blockchain</h4>
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxORlcZuhJBoPV0ciNlH1j09rajYdZUyHecg&usqp=CAU" alt="blockchain" width="200" height="200">
				<p>Description
					<a href="">Read more...</a>
				</p>
			</div>
		</div>
	</div>
	<div class="footer">
		<h3>Made with html + css &#x26A1</h3>
	</div>
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
	<script type="text/javascript" src={{asset('js/main.js')}}></script>
    @stack('script')
</body>
</html>