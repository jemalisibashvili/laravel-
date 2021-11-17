@extends('layouts.app')
@section('title','blog')
@section('content')
    
<div>
    <a href="{{ route('viewPosts',['slug' => 'cat-vs-dog']) }}">Cat vs dog</a>
    <a href="{{ route('viewPosts','good-food') }}">good-food</a>
    <a href="{{ route('viewPosts','my-movies') }}">my movies</a>
</div>


@endsection
