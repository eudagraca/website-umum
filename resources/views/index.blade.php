@extends('layouts.app')
@section('title')
 UMUM
@endsection

@section('body')

     
    <div class="uk-card uk-card-small uk-card-body" style="z-index: 980;" uk-sticky="bottom: #offset">
        <nav style="background: white" class="uk-navbar-container uk-background-cover " uk-navbar>

            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#"><img src="images/Logo_of_igreja_small.png"></ img>
                        </a>
                    </li>
                    <li>
                        <a href="#">Universidade Metodista Unida de Moćambique</a>

                    </li>

                </ul>

            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Home</a></li>
                    <li>
                        <a href="#" uk-icon="icon:chevron-down">Curso</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Sobr nos</a></li>
                    <li><a href="#"> Contactos</a> </li>
                    <li>
                        <a href="#"> <button style="border: 2px solid red" class="uk-button uk-button-default uk-background-cover "> Login</button> </a>
                    </li>
                </ul>

            </div>

        </nav>
    </div>


    <div style="color: back;background: aquamarine;" class="uk-cover-container uk-height-medium">
        <img src="images/rose.jpeg" alt="" uk-cover>
        <div class="uk-overlay uk-overlay-default uk-position-bottom">
            <p class="uk-text-center"> Por uma universidade enraizada na pesquisa científica rumo ao desenvolvimento</p>
        </div>
    </div>






    <!-- <div class="uk-container"> -->
    <div style="align-self: center" class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-margin-auto-top">
                <h3 class="uk-card-title">Missão</h3>
                <p class="uk-text-justify">A UMUM tem por missão, formar o Homem moçambicano, dotando-o de conhecimentos, valores ético-morais e de cidadania que o habilite a participar de forma activa e criadora nos desafios da transformação social, cultural e económica do país.
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body" uk-scrollspy-class="uk-animation-slide-top">
                <h3 class="uk-card-title">Visão</h3>
                <p class="uk-text-justify">1) Oferecer oportunidades de educação e formação aos cidadãos nacionais, como complemento às existentes no ensino público e privado; 2) Lutar pela excelência, através de um sistema de controle de qualidade; 3) Capitalizar as valências
                    da Igreja Metodista em Moçambique; 4) Contribuir para o combate à pobreza promovendo uma política de equidade social no acesso ao ensino e formação.</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Valores</h3>
                <p class="uk-text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
    <!-- </div> -->



        <!-- informacao dos curso -->
    <h1 class="uk-heading-small uk-heading-line uk-text-center"> <span class="uk-label uk-label-danger">Nossos Cursos</span></h1>

    <div class="uk-flex uk-flex-center">
        <p uk-margin>
            <button class="uk-button uk-button-default">Default</button>
            <button class="uk-button uk-button-default">Default</button>
            <button class="uk-button uk-button-default">Default</button>
        </p>
    </div>

    <div uk-slider="center: true">

        <div class="uk-position-relative uk-visible-toggle uk-light  uk-margin-small-top  uk-padding" tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-4@s uk-grid  uk-margin-small-top  uk-padding">
                <li>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="images/rose.jpeg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Headline</h3>
                            <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <a style="color: rgb(235, 88, 88)" href="#" class="uk-button-text uk-flex-around">Read more</a>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="https://getuikit.com/docs/images/light.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Headline</h3>
                            <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <a style="color: rgb(235, 88, 88)" href="#" class="uk-button-text uk-flex-around">Read more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="https://getuikit.com/docs/images/light.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Headline</h3>
                            <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <a style="color: rgb(235, 88, 88)" href="#" class="uk-button-text uk-flex-around">Read more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="https://getuikit.com/docs/images/light.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Headline</h3>
                            <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <a style="color: rgb(235, 88, 88)" href="#" class="uk-button-text uk-flex-around">Read more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="https://getuikit.com/docs/images/light.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Headline</h3>
                            <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <a style="color: rgb(235, 88, 88)" href="#" class="uk-button-text uk-flex-around">Read more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="https://getuikit.com/docs/images/light.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Headline</h3>
                            <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <a style="color: rgb(235, 88, 88)" href="#" class="uk-button-text uk-flex-around">Read more</a>
                        </div>
                    </div>
                </li>
            </ul>

            <a style="color: black; background: white;" class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a style="color: black; background: white" class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
    </div>

    <h1 class="uk-heading-small uk-heading-line uk-text-center"> <span class="uk-label uk-label-danger">Mais Infromacao</span></h1>



    <!-- noticias e eventos -->

    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div style="border: 1px solid red" class="uk-container">
                <span class="uk-label uk-align-left@m uk-margin ">Noticias</span>

                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match uk-margin uk-padding" uk-grid>

                    <div>

                        <div class="uk-card uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Hover</h3>
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Hover</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div style="border: 1px solid red" class="uk-container">
                <span class="uk-label uk-align-left@m uk-margin ">Eventos</span>

                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match uk-margin uk-padding" uk-grid>

                    <div>

                        <div class="uk-card uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Hover</h3>
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Hover</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- mapa do site -->
    <div class="uk-section uk-section-default uk-overlay-primary uk-section-xsmall">
        <div class="uk-container uk-container-small uk-text-small uk-padding">


            <h2 class="uk-heading-divider">Menu</h2>

            <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                <div>
                    <ul class="uk-list uk-link-toggle ">
                        <li> fa</li>
                        <li>List item 2</li>
                        <li>List item 3</li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-list uk-link-toggle ">
                        <li class="uk-parent">
                            <a href="#">Curso</a>
                        </li>
                        <li>List item 2</li>
                        <li>List item 3</li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-list">
                        <li>List item 1</li>
                        <li>List item 2</li>
                        <li>List item 3</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>





@endsection