@extends('layouts.app')
@section('title','post')
@section('content')
<div>
    @include('components.links')
</div><br>
<div>
    {{ $title }}
</div>
    
@endsection
