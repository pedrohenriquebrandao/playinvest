@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-dark" href="{{ url('/home') }}">
                <i class="fas fa-chart-pie"></i>
                Resumo
            </a>

            @if(Auth::user()->hasAnyRole('admin'))
            <a class="btn btn-primary" href="/ranking">
                <i class="fas fa-chart-line"></i>
                Ranking
            </a>
            <a class="btn btn-success" href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"></i>
                Usuários
            </a>
            @else
            <a class="btn btn-primary" href="/ranking">
                <i class="fas fa-chart-line"></i>
                Ranking
            </a>
            <i class="btn btn-lg btn-success" style="float: right;">
                <i class="fas fa-coins"></i>
                {{ number_format(Auth::user()->balance, 2) }}
            </i>

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
                    
                    Gráfico

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
