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
                <div class="card-header">Gerenciamento de usuários</div>

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
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->birth }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info text-white float-left"
                                        href="{{route('admin.users.edit', $user->id)}}">
                                        Editar
                                    </a>
                                    <form action="{{route('admin.users.destroy', $user->id)}}" class="float-left" method="POST">
                                        @csrf
                                        {{ method_field('DELETE')}}
                                        &nbsp;
                                        <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
