@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(!Auth::user()->hasAnyRole('admin'))
            <a class="btn btn-success" href="/ranking">
                <i class="fas fa-chart-line"></i>
                Ranking
            </a>
            <a class="btn btn-info" href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"></i>
                Usuários
            </a>
            @else
            <a class="btn btn-success" href="/ranking">
                <i class="fas fa-chart-line"></i>
                Ranking
            </a>
            <a class="btn btn-info" href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"></i>
                Usuários
            </a>
            </h5>
            </a>

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
                                <th class="w-25">Nome</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                       
                        @foreach($users as $user)
                        <tbody>
                            @if(!$user->hasAnyRole('admin'))
                            <tr>
                                <th scope="row">{{ $user->id-1 }}</th>
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
