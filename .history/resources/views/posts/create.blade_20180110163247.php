@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">
        <input type="text" name="title" placeholder="titre" value="{{ csrf_token() }}">

        <input type="submit" name="submit">
    </form>    
@endsection