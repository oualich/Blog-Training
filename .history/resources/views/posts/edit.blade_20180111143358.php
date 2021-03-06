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
        {{--  <form method="post" action="/posts">  --}}
        {!! Form::open(['method'=>'POST', 'action'=>'Postscontroller@store']) !!}
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null,['class'=>'form-control', 'value'=>'{{$post->title}}']) !!}
        {!! Form::label('content', 'content:') !!}
        {!! Form::text('content', null,['class'=>'form-control','value'=>'{{$post->content}}']) !!}
            {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="title" value="">
            <input type="text" name="content" value="">
            <input type="submit" name="submit" >  --}}
        
            
        {!! Form::close() !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>
@endsection
@section('footer')

<h2>footer</h2>
@endsection