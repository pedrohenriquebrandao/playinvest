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
                    Usuários
                </a>
                @else
                <a class="btn btn-primary" href="/ranking">
                    <i class="fas fa-chart-line"></i>
                    Ranking
                </a>
                @endif
    
                <a class="btn btn-success" href="#">
                    <i class="fas fa-dog"></i>
                    Animais
                </a>

                <br><br>

            <div class="card">
                <div class="card-header">Ranking</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Patrimônio</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                            @if((!$user->hasAnyRole('admin')))
                                <th scope="row">
                                    {{ $user->id }}
                                </th>
                                <td>{{ $user->name }}</td>
                                <td>$ {{ number_format($user->balance, 2) }} </td>
                            </tr>
                            @endif
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

