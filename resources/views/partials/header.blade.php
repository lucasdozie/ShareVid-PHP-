<header>
	<section class="wrapper">
		<section class="masthead">
			<a href="/">{{ Html::image('image/logo.png', 'ShareMovie', array( 'width' => 120, 'height' => 120 )) }} Sharevid</a>
		</section>
		<nav>
			<ul classs="header main-links">
				<li><a href="/lists">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="{{route('users.index')}}">My Account</a></li>
				<li><a href="{{route('movies.index')}}">Movies</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Sponsors</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</nav>
		<section class="copyright">
			<p>© Copyright 2016
			ShareVid Design by lucasatwon</p>
		</section>
	</section>
</header>