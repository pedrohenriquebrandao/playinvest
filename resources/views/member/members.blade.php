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
            <div class="card">
                <div class="card-header">Dashboard</div>

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
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ date('d-m-Y', strtotime($user->birth)) }}</td>
                                <td>{{ $user->email }}</td>
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

