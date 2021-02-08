<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{asset('css/comment.css')}}" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
    @if(session()->has('message'))
             <p class="alert {{ session()->get('alert-class', 'alert-info') }}">{{ session()->get('message') }}</p>
    @endif
    <div style="padding-top:30px; padding-bottom:30px">
    <a href="{{route('createpost')}}"><button class="btn btn-primary btn-lg" style="text-align:center;padding-left:250px;padding-right:250px ">Create Post</button></a><a href="{{route('mypost')}}"><button class="btn btn-success btn-lg" style="margin-left:20px; text-align:center;padding-left:80;padding-right:80px ">My Post</button></a>
    </div>
      
  @foreach($data as $post)  
  <div class="well">
      <div class="media">
  		<div class="media-body">
    		<h4 class="media-heading">{{$post->title}}</h4>
          <p>{{$post->description}}</p>
          <a href="/comment/{{$post->id}}"><button class="btn btn-success btn-lg" style="text-align:center;padding-left:40;padding-right:40;">Comment</button></a>           
       </div>
    </div>
  </div>
@endforeach
    </div>
  </div>
</div>