<nav class="navbar-default navbar-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="main-menu">
			<li>
				<a href="#">
					<i class="fa fa-sitemap "></i>
					Master 
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level {{ Request::segment(1) == 'master' ? 'collapse in' : '' }}">
					<li>
						<a class="{{ Request::segment(1) == 'master' ? 'active-menu' : '' }}" href="{{ url('master') }}">
							<i class="fa fa-bicycle "></i>
							Master
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-sitemap "></i>
					Parameter 
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level {{ Request::segment(1) == 'parameter' ? 'collapse in' : '' }}">
					<li>
						<a class="{{ Request::segment(1) == 'parameter' ? 'active-menu' : '' }}" href="{{ url('parameter') }}">
							<i class="fa fa-bicycle "></i>
							Parameter
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-sitemap "></i>
					Transaction 
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level {{ Request::segment(1) == 'transaction' ? 'collapse in' : '' }}">
					<li>
						<a class="{{ Request::segment(1) == 'transaction' ? 'active-menu' : '' }}" href="{{ url('transaction') }}">
							<i class="fa fa-bicycle "></i>
							Transaction
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-sitemap "></i>
					Report 
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level {{ Request::segment(1) == 'report' ? 'collapse in' : '' }}">
					<li>
						<a class="{{ Request::segment(1) == 'report' ? 'active-menu' : '' }}" href="{{ url('report') }}">
							<i class="fa fa-bicycle "></i>
							Report
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>