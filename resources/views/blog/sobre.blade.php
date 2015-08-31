@extends('tplblog')

@section('navbar')
    @include('blog.navbar')

@section('header')
    @include('blog.header-sobre')

@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <p>Um texto falando sobre mim e sobre o que faço.</p>
    </div>
@stop
