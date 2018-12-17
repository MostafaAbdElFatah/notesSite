@extends('masterPage')

@section('content')

<span><b><a href="/{{$note->page_id}}">Back to Pages List ></a></b></span>

<div class="row list-group-item-info page-title">
    <div class="col-xs-12">
    Edit Note ...
    </div>
</div>

<div class="row list-group-item">
    <div class="col-xs-8">
     {{ $note->note }}
    </div>
    <div class="col-xs-4">
        <a href="delete"  type="button" class="btn btn-danger pull-right">Delete</a> 
    </div>
</div>

<div class="row list-group-item">
    <form method="POST" action="update">
      {{csrf_field()}}
        <div class="input-group">
          <input type="text" name="note" value="{{$note->note}}" class="form-control">
          <span class="input-group-btn">
            <button class="btn btn-default"  type="submit">update</button>
          </span>
        </div>
    </form>
</div>

@stop