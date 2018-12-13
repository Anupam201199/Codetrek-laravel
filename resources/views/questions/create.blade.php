@extends('layouts.app')

@section('content')
<div class="container">
    		<div class="d-flex justify-content-between mb-3 flex-column flex-md-row">
    			<h3 class="font-weight-light mb-0">Ask Question

    			</h3>
			</div>
      <form action="/questions/index" method="POST">
        {{csrf_field() }}
        <div class="card">
          <div class="card-body">
            Title<sup><i class="fa fa-asterisk text-danger" aria-hidden="true"></i></sup>
            <input class="form-control" type="text" name="title" placeholder="Enter a valid title for your question" id="Tit">
            <div class="form-group">
            <label for="exampleFormControlTextarea1" >Description<sup><i class="fa fa-asterisk text-danger" aria-hidden="true"></i></sup></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter a detailed description of the problem you are facing and steps to replicate" rows="5" name="description"></textarea>
            </div>
            Tags
            <input class="form-control" type="text" placeholder="Tag1,Tag2,Tag3" name="tags">
            <small id="emailHelp" class="form-text text-muted">Tags help others to find your question faster.Add comma separated tags.For example:<i>codetrek</i>,<i>frontend</i>,<i>bootstrap</i>
            </small><br>
             <button type="submit" class="btn btn-primary" onclick="button()">Post your Question</button>
        </div>
      </div>
      </form>
      
@endsection