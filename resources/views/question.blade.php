


@extends('layouts.app')

@section('content')
<div class="container">
    		<div class="d-flex justify-content-between mb-3 flex-column flex-md-row">
      			<h3 class="font-weight-light mb-0">Questions
      			</h3>
     		 	<div class="d-flex flex-column flex-md-row">
        			<form class="form-inline my-2 my-lg-0 mr-md-3">
          				<div class="input-group">
            				<input class="form-control" type="search" placeholder="Search question" aria-label="Search">
            					<div class="input-group-append">
              						<button class="btn btn-info my-0" type="submit">
                						<i class="fa fa-search"></i>
              						</button>
            					</div>
          				</div>
        			</form>
        			<button class="btn btn-outline-primary">Ask question
        			</button>
      			</div>

    		</div></div>
                  <br>
				@foreach($allquestions as $ques)
    				<div class="container">
				<div class="card">
			  				<div class="card-body">
			    				<h5 class="card-title">
			    				  	{{$ques->title}}
			    					


			    				</h5>
			    
			    					<p class="card-text">
			    						
			    					{{$ques->body}}</p>
			    				<br>
@php $Array=explode(",",$ques->tags);@endphp
									@foreach ($Array as $badge)
			    					<a href="#" class="badge badge-primary">{{ $badge }}</a>
			    					@endforeach
			    					<br>
			    					<a href="#" class="card-link">Vikas Rinvi
			    					</a>  asked on Sep 26,2018<br>
			    					<i class="fa fa-thumbs-up" aria-hidden="true"></i>20
			    					<i class="fa fa-thumbs-down" aria-hidden="true"></i>5
			    					<a href="#" class="card-link"><i class="fa fa-comments" aria-hidden="true"></i> 6 answers
			    					</a>
			  				</div>
						</div>
</div><br>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endforeach 
@endsection