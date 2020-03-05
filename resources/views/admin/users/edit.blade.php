@extends('layouts.app')

@section('content')
<div class="container">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href= {{asset('css/aos.css')}}>

    <link rel="stylesheet" href="css/style.css">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Auth::user()->hasAnyRole('admin'))
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
            <a class="btn btn-dark" style="float: right;">
                <i class="fas fa-coins text-warning"></i>
                <span class="text-white">{{ number_format(Auth::user()->balance, 2) }}<span>
            </a>
            </h5>
            </a>

            @endif

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
