@extends('layout')
@include('layout')
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="#" class="navbar-brand">Assi<b>gnment</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		
		<div class="navbar-nav ml-auto action-buttons">
        <div class="text-center">
	        <!-- Button HTML (to Trigger Modal) -->
	        <a href="/login" class="trigger-btn">Login</a>
        </div>
			<div class="nav-item dropdown">
				<a href="/signup" class="btn btn-primary sign-up-btn">Sign up</a>    
			</div>
        </div>
    </div>
    
</nav>
<div class="homecustome">
        <a href="/"><h1>Welcome to Home Page</h1></a>
</div>

</body>
