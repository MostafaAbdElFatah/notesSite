@extends('masterPage')

@section('content')

<span><b><a href="../">Back to Pages List ></a></b></span>

<div class="row list-group-item-info page-title">
    <div class="col-xs-12">
    {{ $page->title }}
    </div>
</div>

@foreach($page->notes as $note)
<div class="row list-group-item">
    <div class="col-xs-8">
     {{$note->note}}
    </div>
    <div class="col-xs-4">
        <a href="note/{{$note->id}}/delete" type="button"  class="btn btn-danger pull-right">Delete</a> 
        <a href="note/{{$note->id}}/edit" type="button" class="btn btn-default pull-right">Edit</a> 
    </div>
</div>
@endforeach

<div class="row list-group-item">
    <form method="POST" action="{{$page->id}}/note/insert">
      {{csrf_field()}}
        <div class="input-group">
          <input type="text" name="note" class="form-control" placeholder="Add Note . . .">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Add</button>
          </span>
        </div>
    </form>
</div>

@stop