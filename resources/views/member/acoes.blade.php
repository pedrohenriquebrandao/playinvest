@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Auth::user()->hasAnyRole('admin'))
            <a class="btn btn-success" href="/ranking">
                <i class="fas fa-chart-line"></i>
                Ranking
            </a>
            <a class="btn btn-warning" href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"></i>
                Usuários
            </a>
            @else
            <a class="btn btn-warning" href="/home">
                <i class="fas fa-tachometer-alt"></i>
                Início
            </a>
            <a class="btn btn-success" href="/ranking">
                <i class="fas fa-chart-line"></i>
                Ranking
            </a>
            <a class="btn btn-dark" style="float: right;">
                <i class="fas fa-coins text-warning"></i>
                <span class="text-white">{{ number_format(Auth::user()->balance, 2) }}<span>
            </a>
            </h5>
            </a>

            @endif

            <br><br>

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <h1>Quais as vantagens de investir em ações?</h1>

            <h5 class="text-justify">Investir em ações é uma opção rentável muito boa para se construir seu patrimônio no longo prazo, já que as empresas, 
                no longo prazo, tendem a crescer, seguindo o crescimento do país e da economia global. 
                O mercado ações no Brasil possui uma alta liquidez, ou seja, o investidor tem boa flexibilidade para 
                tomadas de decisões de entrada e saída do mercado. Investir em ações também pode ser uma ótima opção
                 para quem deseja viver de renda passiva. Os dividendos, partes do lucro de uma empresa que são 
                 distribuídos entre os acionistas, são isentos de imposto de renda e também tendem a crescer no longo 
                 prazo.</h5> <br>
            
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Apple</h5>
                        <p class="card-text">
                           <img src="images/applelogo.png" alt="Apple" width="100%">
                            <br><br><br>
                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-chart-line"></i>
                                Investir
                            </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Burguer King</h5>
                        <p class="card-text">
                            <br><br>
                            <img src="images/burguerkinglogo.png" alt="Burguer King" width="101%">

                           <br><br><br>

                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-chart-line"></i>
                                Investir
                            </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Itaú</h5>
                        <p class="card-text">
                            <br><br>
                            <img src="images/itaulogo.png" alt="Burguer King" width="100%">

                            <br><br><br>

                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-chart-line"></i>
                                Investir
                            </a>

                        </p>
                    </div>
                </div>
        </div>
    </div>
</div>
<br><br><br>
@endsection
