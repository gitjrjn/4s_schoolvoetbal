<nav class="navbar navbar-expand-lg navbar-light bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link @if(request()->is('/')) active @endif" aria-current="page" href="#">Home</a>
				<a class="nav-link @if(request()->is('/wedstrijden')) active @endif" href="#">Wedstrijden</a>
				<a class="nav-link @if(request()->is('/teams')) active @endif" href="#">Teams</a>
			</div>
		</div>
	</div>
</nav>