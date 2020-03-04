@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-warning" href="{{ url('/home') }}">
                <i class="fas fa-chart-pie"></i>
                Resumo
            </a>

            @if(Auth::user()->hasAnyRole('admin'))
            <a class="btn btn-success" href="/ranking">
                <i class="fas fa-chart-line"></i>
                Ranking
            </a>
            <a class="btn btn-success" href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"></i>
                Usuários
            </a>
            @else
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

            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h5>Hello, {{ Auth::user()->name }}</h5>
                    <div class="container">
                        <a class="btn btn-info btn-block" href="#">Criar partida</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
