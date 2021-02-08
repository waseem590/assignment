<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
    @if(session()->has('message'))
             <p class="alert {{ session()->get('alert-class', 'alert-info') }}">{{ session()->get('message') }}</p>
    @endif
    @if(session()->has('delete'))
             <p class="alert {{ session()->get('alert-class', 'alert-info') }}">{{ session()->get('message') }}</p>
    @endif   
   
    <h1 class="media-heading" style="padding-top:20px;">{{auth()->user()->username}} Post</h1>
  @foreach($data as $post)  
  <div class="well"> 
      <div class="media">
  		<div class="media-body">
        <h4 class="media-heading">{{$post->title}}</h4>
          <p>{{$post->description}}</p>
       </div>
    </div>
    <a href="/updatepost/{{$post->id}}"><button class="btn btn-success">Edit</button></a>
    <a href="/deletepost/{{$post->id}}"><button class="btn btn-danger">Delte</button></a>
 
  </div>
@endforeach
    </div>
  </div>
</div>