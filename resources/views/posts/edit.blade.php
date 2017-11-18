<article>
     <h3>|hh|</h3>
     @foreach($posts as $post)
     <ul style="list-style-type:none">
     <li>{{!! $post->artist_name !!}}</li>
     <li>{{!! $post->record_label!!}}</li>
     
     </ul>
@endforeach

<h2>Edit post</h2>

{!!Form::model($post,['method'=>'PATCH','action'=>['PostsController@update',$post->id]])!!}
{{csrf_field()}} 
{!!Form::text('artist_name',null,['class'=>'form-control'])!!}
{{csrf_field()}} 
{!!Form::text('record_label',null,['class'=>'form-control'])!!}

                 {{csrf_field()}} 
                 {!!Form::submit('Update post',['class'=>'btn btn-info'])!!}
                 {!!Form::close()!!}

                 <h2>Delete post</h2>
{!!Form::model($post,['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]])!!}
{{csrf_field()}} 
{!!Form::text('artist_name','record_label',null,['class'=>'form-control'])!!}
                    {{csrf_field()}} 

                    {!!Form::submit('Delete post',['class'=>'btn btn-danger'])!!}
                    {!!Form::close()!!}

                    