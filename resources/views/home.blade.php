@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Seja bem vindx,</h3> <h5>{{ Auth::user()->name }}</h5>
                    <hr>
                   @if(Auth::user()->hasAnyRole('admin'))
                    <a class="btn btn-primary btn-block" href="{{ route('admin.users.index') }}"> 
                        <i class="fas fa-users"></i>
                        Membros
                    </a>
                    @else
                    <a class="btn btn-primary btn-block" href="/members"> 
                            <i class="fas fa-users"></i>
                            Membros
                     </a>
                    @endif

                    <a class="btn btn-success btn-block" href="#"> 
                        <i class="fas fa-dog"></i>
                        Animais
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
