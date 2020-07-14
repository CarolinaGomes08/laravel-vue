@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    Teste de conteúdo do painel!

                    <div class="row">
                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Artigos" url="#" icone="ion ion-ios-paper" cor="orange"></caixa>                 
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="107" titulo="Shopping" url="#" icone="fa fa-shopping-cart" cor="blue"></caixa>                 
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="150" titulo="Leitores" url="#" icone="ion ion-person-add" cor="red"></caixa>                 
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
