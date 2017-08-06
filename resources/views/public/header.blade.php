<div class="row" id="Home">
	<div class="col-sm-12">
		<div class="page-header header" id="header">
			<div class="logo">
				<img src="{{ asset('/img/logo.svg') }}" alt="logo">
			</div>
			<div class="slogan">
		  		<h1>Разом на вершині</h1>
			</div>
			<div class="hamburger" id="hamburger">
				<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
			</div>
		  	<nav class="navbar navbar-default nav-custom">
			  <div class="container-fluid">
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			      	@if(isset($pages))
				      	@foreach($pages as $page)
				      	<li><a href="#{{ $page->alias }}" title="">{{ $page->name }}</a></li>
				      	@endforeach
			      	@endif
			      	@if(isset($menu))
			      		@foreach($menu as $key => $item)
				        <li><a href="#{{ $key }}">{{ $item }}</a></li>
			      		@endforeach
			        @endif
			      </ul>
			      <form class="navbar-form navbar-right">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Пошук</button>
			      </form>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
</div>