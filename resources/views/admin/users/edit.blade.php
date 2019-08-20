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
                <div class="card-header">Editar permissões de {{$user->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{route('admin.users.update', ['user' => $user->id])}}" method="POST">
                        @csrf
                        {{ method_field('PUT')}}

                        @foreach ($roles as $role)
                        <div class="form-check">
                        <input type="checkbox"  name="roles[]"
                            value="{{$role->id}}" {{$user->hasAnyRole(['admin', 'user'])?'checked':''}}> 
                        <span class="badge badge-success">{{$role->name}}</span>
                        </div>
                        @endforeach
                        <br><br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
