@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
            <div class="site-wrap" id="home-section">

                <div class="site-mobile-menu site-navbar-target">
                    <div class="site-mobile-menu-header">
                        <div class="site-mobile-menu-close mt-3">
                            <span class="icon-close2 js-menu-toggle"></span>
                        </div>
                    </div>
                    <div class="site-mobile-menu-body"></div>
                </div>


                <div class="site-blocks-cover" style="overflow: hidden;">
                    <div class="container">
                        <br><br><br>
                        <div class="container align-items-center justify-content-center">

                            <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">

                                <img src="images/animation.png" alt="Image" class="img-fluid img-absolute">

                                <div class="row mb-3" data-aos="fade-up" data-aos-delay="200">
                                    <div class="col-lg-6 mr-auto">
                                        <h1>Aprenda a investir se divertindo</h1>
                                        <p class="mb-5">
                                            Crie partidas e simule aplicações financeiras no mercado de ações
                                            desafiando seus amigos a gerar mais rendimentos
                                        </p>
                                        <div>
                                            <a href="#features-section" class="btn btn-warning mr-2 mb-2">Saiba mais</a>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="site-section" id="features-section">
                    <div class="container">
                        <div class="row align-items-stretch">
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

                                <div class="unit-4 d-block">
                                    <div class="unit-4-icon mb-3">
                                        <span class="icon-wrap"><span class="text-primary icon-autorenew"></span></span>
                                    </div>
                                    <div>
                                        <h3>Educação para investimentos</h3>
                                        <p>
                                            Aprenda quais são os tipos de investimentos
                                            mais comuns no mercado de investimentos e saiba 
                                            como fazer aplicações financeiras
                                        </p> 
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">

                                <div class="unit-4 d-block">
                                    <div class="unit-4-icon mb-3">
                                        <span class="icon-wrap"><span
                                                class="text-primary icon-store_mall_directory"></span></span>
                                    </div>
                                    <div>
                                        <h3>Aumente o seu patrimônio</h3>
                                        <p>Comece com $500 e suba no ranking tomando as melhores 
                                            decisões e investindo no lugar certo no momento certo     
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="unit-4 d-block">
                                    <div class="unit-4-icon mb-3">
                                        <span class="icon-wrap"><span
                                                class="text-primary icon-shopping_basket"></span></span>
                                    </div>
                                    <div>
                                        <h3>Aplique no mundo real</h3>
                                        <p>
                                            Você terá construído conhecimento suficiente para investir em aplicações financeiras
                                            reais com seu próprio dinheiro 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved. Playinvest 2019 | This template is made with <i class="icon-heart text-danger"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>


    <script src="js/main.js"></script>
</div>
</div>
</div>

@endsection
