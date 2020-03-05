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
