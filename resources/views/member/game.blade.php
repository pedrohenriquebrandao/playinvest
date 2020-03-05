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

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tesouro Direto</h5>
                        <p class="card-text">Porta de entrada do mundo dos investimentos.
                            Possui modalidades prefixadas e pós-fixadas. Ideal para quem quer começar.
                            <br><br>
                            - Investimento mais seguro do mercado <br>
                            - Rende mais do que a poupança

                            <br><br><br><br>
                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>


                        </p>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LCI e LCA</h5>
                        <p class="card-text">
                            Investimento em Renda Fixa de médio e longo prazo onde você aplica em uma empresa sem ser
                            sócio dela.

                            <br><br>

                            - Bom para quem está se planejando para o futuro <br>
                            - São isentos de Imposto de Renda <br><br><br><br>

                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CDB e LC</h5>
                        <p class="card-text">
                            CDB e LC são investimentos em Renda Fixa com boas rentabilidades e muitas opções
                            de prazo de resgate para sua estratégia de investimento.

                            <br><br>

                            - Investimento versátil para cada perfil <br>
                            - São cobertos pelo Fundo Garantidor de Créditos - FGC <br><br>

                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>

                        </p>

                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Debêntures</h5>
                        <p class="card-text">
                            Investimento em Renda Fixa de médio e longo prazo onde você aplica em uma empresa sem ser sócio
                            dela.
    
                            <br><br>
    
                            - Melhores rentabilidades em Renda Fixa <br>
                            - Têm alta liquidez <br><br><br><br><br>
    
                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Letra Financeira</h5>
                        <p class="card-text">
                            Letra financeira é um investimento em Renda Fixa com boas taxas para quem quer diversificar sua estratégia no longo prazo.

                            <br><br>

                            - Uma das melhores taxas de Renda Fixa <br>
                            - Um bom jeito de diversificar a carteira <br><br><br><br>

                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">COE</h5>
                        <p class="card-text">
                            COE é um investimento que junta a Renda Fixa com a Renda Variável onde seu capital fica protegido.

                            <br><br>

                            - Muito popular nos Estados Unidos e Europa <br>
                            - Seguro e com boas possibilidade de ganhos <br><br><br><br><br>

                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>

                        </p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fundos de Investimento</h5>
                        <p class="card-text">
                            Fundos de investimento são uma família muito extensa que abrange desde os investimentos em Renda Fixa até os de Renda Variável.
    
                            <br><br>
    
                            - É a maneira mais fácil de diversificar seus investimentos <br>
                            - Tipos diferentes de fundo se adequam à várias estratégias de investimento <br><br><br><br><br>
    
                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ações</h5>
                        <p class="card-text">
                            Ações são os investimentos mais famosos do mercado financeiro. São mais simples de operar do que parecem.
                            <br><br>

                            - Invista em ações diretamente pela Internet <br>
                            - Maiores chances de rentabilidade do mercado <br><br><br><br><br><br>  

                            <a class="btn btn-primary btn-block" href="{{url("/acoes")}}">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fundos de índice</h5>
                        <p class="card-text">
                            Fundos de Índice são investimentos que seguem um índice composto de vários ativos, como o Ibovespa.

                            <br><br>

                            - Diversifique sua cesta de ações mais facilmente <br>
                            - Boa rentabilidade para quem aceita os riscos <br><br><br><br><br><br><br>

                            <a class="btn btn-primary btn-block" href="#">
                                <i class="fas fa-search-dollar"></i>
                                Consultar
                            </a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
@endsection
