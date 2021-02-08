@extends('layout')
<link href="{{asset('css/login.css')}}" rel="stylesheet">
<body>
@if(session()->has('message'))
<p class="alert {{ session()->get('alert-class', 'alert-info') }}">{{ session()->get('message') }}</p>
@endif
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Sign In</h4>
                
			</div>
			<div class="modal-body">
				<form action="{{route('login')}}" method="post">
                @csrf    
                <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
					</div>
					<p class="hint-text"><a href="#">Forgot Password?</a></p>
				</form>
			</div>
			<div class="modal-footer">Don't have an account? <a href="/signup">Create one</a></div>
		</div>
	</div>    
</body>
