<!-- mapa do site -->

<div class="uk-overlay-default uk-section  uk-section-xsmall nav-footer" id="contactos"style="border-top: 1px solid #f2f2f2;">
    <div class="uk-container uk-container-small uk-text-small uk-padding">


        <h2 class="uk-heading-divider uk-text-bold uk-light uk-text-left">Menu</h2>

        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-3@m" uk-grid="">
            <div class="">
                <ul class="uk-nav uk-nav-default uk-dark" uk-nav="">
                    <li class=""><a href="/">Início</a></li>

                    <li class="uk-parent">
                        <a href="#">A UMUM <i uk-icon="chevron-down" class="uk-icon"></i></a>
                        <ul class="uk-nav-sub uk-text-left uk-background-default uk-border-rounded " aria-hidden="true"
                            hidden="">
                            <li class=""><a href="/investigacao"><span uk-icon="arrow-right" class="uk-icon"></span> Investigação</a>
                            </li>

                            <li class=""><a href="#"><span uk-icon="arrow-right" class="uk-icon"></span> Recursos</a>
                            </li>

                            <li class=""><a href="/cooperacao"><span uk-icon="arrow-right" class="uk-icon"></span> Cooperação</a>
                            </li>
                            <li class=""><a href=""><span uk-icon="arrow-right" class="uk-icon"></span> Órgãos
                                    Superiores</a></li>

                            <li class=""><a href="/visao"><span uk-icon="arrow-right" class="uk-icon"></span>Vião e missão</a></li>
                            <li class=""><a href=""><span uk-icon="arrow-right" class="uk-icon"></span> Docentes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="#">Direcção <i uk-icon="chevron-down" class="uk-icon"></i></a>
                        <ul class="uk-nav-sub uk-text-left uk-background-default uk-border-rounded " aria-hidden="true"
                            hidden="">
                            <li class=""><a href=""><span uk-icon="arrow-right" class="uk-icon"></span> O Reitor</a>
                            </li>

                            <li class=""><a href=""><span uk-icon="arrow-right" class="uk-icon"></span> O Director</a>
                            </li>


                        </ul>
                    </li>

                    <li class="uk-parent">
                        <a href="#">Formação <i uk-icon="chevron-down" class="uk-icon"></i></a>
                        <ul class="uk-nav-sub uk-text-left uk-background-default uk-border-rounded " aria-hidden="true"
                            hidden="">
                            <li class=""><a href="{{ route('documentos.index') }}"><span uk-icon="arrow-right" class="uk-icon"></span> Documentos</a>
                            </li>

                            <li class=""><a href="/fundamentos"><span uk-icon="arrow-right" class="uk-icon"></span> Fundamentos do
                                    Ensino Superior</a></li>

                            <li class=""><a href="/qualidade"><span uk-icon="arrow-right" class="uk-icon"></span> Qualidade</a>
                            </li>
                            <li class=""><a href="/licenciatura"><span uk-icon="arrow-right" class="uk-icon"></span> Licenciatura</a></li>
                            <li class=""><a href=""><span uk-icon="arrow-right" class="uk-icon"></span> Mestrado</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="">
                <ul class="uk-nav uk-nav-default uk-dark" uk-nav="">
                    <li class=""><a href="#"><br></a></li>

                    <li class="uk-parent">
                        <a href="#"> Departamento<i uk-icon="chevron-down" class="uk-icon"></i></a>
                        <ul class="uk-nav-sub uk-text-left uk-background-default uk-border-rounded " aria-hidden="true" hidden="">
                            <li class=""><a href="#"><span uk-icon="arrow-right" class="uk-icon"></span>
                                    Administração</a>
                            </li>

                            <li class=""><a href="#"><span uk-icon="arrow-right" class="uk-icon"></span> Informática</a>
                            </li>

                            <li class=""><a href="#"><span uk-icon="arrow-right" class="uk-icon"></span> Educação</a>
                            </li>
                            <li class=""><a href="#"><span uk-icon="arrow-right" class="uk-icon"></span> Qualidade</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="#">Serviços<i uk-icon="chevron-down" class="uk-icon"></i></a>
                        <ul class="uk-nav-sub uk-text-left uk-background-default uk-border-rounded " aria-hidden="true" hidden="">
                            <li class=""><a href="http://moodle.umum.education"><span uk-icon="link" class="uk-icon"></span> EaD</a>
                            </li>

                            <li class=""><a href="mailto:{{ $contactos['email'] }}"><span uk-icon="link" class="uk-icon"></span> WebMail</a>
                            </li>


                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="#contactos">

            <h2 class="uk-heading-divider uk-text-bold uk-light uk-text-right">CONTACTOS</h2>

            <div class="uk-grid uk-child-width-1-1 uk-text-right uk-light uk-grid-stack" uk-grid="">
                <div class="uk-text-right uk-first-column">
                    <div class="uk-margin-small">

                        <a class="uk-button-text uk-button" style="text-transform: none;" href="https://wa.me/{{ $contactos['whatsapp'] }}"><span></span> {{ $contactos['whatsapp'] }}</a><span> | </span>
                        <a class="uk-button-text uk-button" style="text-transform: none;" href="tel:{{ $contactos['celular'] }}"> {{ $contactos['celular'] }}</a>
                    </div>
                    <div class="uk-margin-small">
                        <img src="/images/icons/map.svg" uk-svg="" width="20" height="20" class=" uk-svg">

                        <a class="uk-button-text uk-button" style="text-transform: none;" target="_blank"
                            href="https://www.google.com/maps/place/UMUM+-+Universidade+Metodista+Unida+de+Moçambique/@-23.616322,35.2450173,15z/data=!4m19!1m13!4m12!1m3!2m2!1d35.2466899!2d-23.6168754!1m6!1m2!1s0x0:0xea9a5bec6076f326!2sUMUM+-+Universidade+Metodista+Unida+de+Moçambique!2m2!1d35.246737!2d-23.6185803!3e2!3m4!1s0x0:0xea9a5bec6076f326!8m2!3d-23.6185802!4d35.246737"> {{ $contactos['localizacao'] }}</a>
                    </div>
                    <div class="uk-margin-small">
                        <img src="/images/icons/email.svg" uk-svg="" width="20" height="20" alt="" hidden="true">

                        <a class="uk-button-text uk-button" style="text-transform: none;" target="_blank"
                            href="mailto:{{ $contactos['email'] }}"> {{ $contactos['email'] }}</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="uk-section uk-section-xsmall uk-section-default" style="border-top: 1px solid #f2f2f2">
    <div class="uk-container uk-container-small uk-text-small">
        <div class="uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-expand uk-first-column">
                <span style="font-size: 12px" class="uk-link-reset">
                    <strong>Copyright (c) <script>
                            document.write(new Date().getFullYear())
                        </script></strong>
                    <span class="uk-visible@m"> – <a href="/" class="uk-link-reset uk-text-light">Universidade Metodista Unida de Moçambique (UMUM)</a></span>
                    <!--  -->
                    <span class="uk-hidden@m">
                        <br>
                        Universidade Metodista Unida de Moçambique (UMUM)
                    </span>
                </span>
                <br>
                <small style="color: rgb(167, 167, 167)">
                    <span class="uk-link-reset uk-text-light"> Desenvolvido pelo <a href="dep/depinformatica">Departamento de Informática</a></span>
                </small>
            </div>
        </div>
    </div>
</div>

