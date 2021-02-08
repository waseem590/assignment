<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{asset('css/login.css')}}" rel="stylesheet">


<div class="container">
	<div class="row">
    
	    <div class="col-md-8 col-md-offset-2">

    		<h1>Update post</h1>
    	@foreach($data as $post)	
    		<form action="/updatecomplete/{{$post->id}}" method="get">
    		    @csrf
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" value="{{$post->title}}" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="{{$post->description}}" />

    		    </div>
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
        @endforeach
		</div>
		
	</div>
</div>