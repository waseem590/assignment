<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{asset('css/comment.css')}}" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
    <div class="row">
        <div class="col-md-8"  >
    
    <div class="well" id="data">
    @foreach($commentdata as $comment)
      <div class="media">
      
  		<div class="media-body">
          <h1>Comments</h1>
          <h2>{{auth()->user()->username}}</h2>
              <h4>{{$comment->comment_description}}<br></h4>
        </div>
        

@endforeach
      </div>
      
  </div>
        </div>
    </div>
    
</div>

