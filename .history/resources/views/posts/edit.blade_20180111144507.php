@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
     <form method="post" action="/posts/{{$post->id}}/">
            {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT" >

        <input type="text" name="title" value="{{$post->title}}">
        <input type="text" name="content" value="{{$post->content}}">

        <input type="submit" name="submit"value="UPDATE">
     </form>
     <form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="DELETE">
     </form> 

     <div class="form-group">
        {!! Form::model(['method'=>'PATCH', 'action'=>'Postscontroller@update', $post->id]) !!}

            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null,['class'=>'form-control', ]) !!}

            {!! Form::label('content', 'content:') !!}
            {!! Form::text('content', null,['class'=>'form-control']) !!} 

        
            {!! Form::close() !!}
    </div>
    <form method="post" action="/posts/{{$post->id}}">
        {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}
    </div>
@endsection
@section('footer')

<h2>footer</h2>
@endsection