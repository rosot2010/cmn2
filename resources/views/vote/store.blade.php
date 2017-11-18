{!!Form::open(['method'=>'store','action'=>'PostsController@store','files'=>true])!!}
<div class="form-group">
{!!Form::label('artist_name','Artist name')!!}
{!!Form::text('artist_name',null,['class'=>'form-control'])!!}<br />