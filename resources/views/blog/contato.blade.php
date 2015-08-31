@extends('tplblog')

@section('navbar')
    @include('blog.navbar')

@section('header')
    @include('blog.header-contato')

@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <p>Quer trocar uma ideia? Entre em contato, possivelmente temos muito o que conversar...</p>
        <form name="sentMessage" id="contactForm" novalidate>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Por favor, digite seu nome.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>E-mail</label>
                    <input type="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Por favor, digite seu e-mail.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Telefone</label>
                    <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Por favor, digite seu telefone de contato.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Mensagem</label>
                    <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Por favor, digite sua mensagem."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
        </form>
    </div>
@stop
