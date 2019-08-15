@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-dark" href="{{ url('/home') }}">
                <i class="fas fa-chart-line"></i>
                Resumo
            </a>

            @if(Auth::user()->hasAnyRole('admin'))
            <a class="btn btn-primary" href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"></i>
                Membros
            </a>
            @else
            <a class="btn btn-primary" href="/members">
                <i class="fas fa-users"></i>
                Membros
            </a>
            @endif

            <a class="btn btn-success" href="#">
                <i class="fas fa-dog"></i>
                Animais
            </a>

            <br><br>
            <div class="card">

                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h3>Seja bem vindx,</h3>
                    <h5>{{ Auth::user()->name }}</h5>
                    <hr>
                    <div class="card-deck">
                        <div class="card border-primary mb-3" style="max-width: 27rem;">
                            <div class="card-header text-center">TOTAL DE MEMBROS</div>
                            <div class="card-body text-dark">
                                <h1 class="text-center">45</h1>
                            </div>
                        </div>
                        <div class="card border-success mb-3" style="max-width: 27rem;">
                            <div class="card-header text-center">TOTAL DE ANIMAIS</div>
                            <div class="card-body text-dark">
                                <h1 class="text-center">45</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
