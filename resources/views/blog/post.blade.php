@extends('tplblog')

@section('navbar')
    @include('blog.navbar')

@section('header')
    @include('blog.header-post', $post)

@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <p>Uma greve geral de quatro dias do funcionalismo público estadual do Rio Grande do Sul será deflagrada nesta
            segunda-feira (31), dia em que o governador José Ivo Sartori deve anunciar o parcelamento dos salários do
            funcionalismo. Enquanto professores prometem paralisação total, entidades ligadas à Saúde e à Segurança
            devem limitar os serviços. Confira abaixo como deverão ser afetados os principais serviços..</p>
    </div>
@stop
