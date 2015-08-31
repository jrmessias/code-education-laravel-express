@extends('tplblog')

@section('navbar')
    @include('blog.navbar')

@section('header')
    @include('blog.header')

@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @foreach($posts as $post)
            <div class="post-preview">
                <a href="/post">
                    <h2 class="post-title">
                        {{ $post['title'] }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post['subtitle'] }}
                    </h3>
                </a>
            </div>
            <hr>
        @endforeach
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="#">Mais posts <i class="fa fa-chevron-right"></i> </a>
            </li>
        </ul>
    </div>
@stop
