<ul class="nav navbar-nav pull-right"> 
	@if(Auth::guest())
		<li>
			<a href="({route{'register'}})">Register
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</a>
		</li>
		
		
		<li>
			<a href="({route{'login'}})">Login
				<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
			</a>
		</li>
		
		<li>
			<a href="({route{'logout'}})">Logout
				<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 
			</a>
		</li>>
	@endif

</ul>