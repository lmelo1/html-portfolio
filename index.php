<?php include "head.php" ?>



<body>

    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>

    <script>

        (function() {

            window.onload = function() {

                new BlipChat()

                    .withAppKey('cm91dGRhbGlsYTpjNDdlNDM4MC0xOTViLTRmZjQtOTRiOC0yYjUzYjE1ZGQzNzc=')

                    .withButton({

                        "color": "#c622ef",

                        "icon": "https://blipmediastore.blob.core.windows.net/public-medias/Media_a4283af5-3fd9-4dd0-b6a4-213869bbb821"

                    })

                    .withCustomCommonUrl('https://luiz-antonio-melo-p2td4.chat.blip.ai/')

                    .withoutHistory()

                    .build();

            }

        })();

    </script>

    <div class="body-content">



        <div class="message-bubble">

            <p>Como posso te ajudar?</p>

            <p>Clique aqui para conversarmos!</p>

            <span class="close-button" id="bubble-msg" onclick="this.parentElement.style.display='none'"></span>

        </div>



        <!--Foto do início-->

        <div class="row imginicio">

            <div class="col">

                <div class="w3-display-container">

                    <!-- <a href="#"> <img src="imagens/pos1.png" alt="Lights" style="width:100%"></a> -->



                    <button class="btn-menu" onclick="mostraEsconde('Posgraduacao')">

                        <img src="imagens/pos1.png" style="width:100%">

                    </button>

                    <div class="container" id="Posgraduacao">

                        <div class="row justify-content-center">

                            <div class="col-12 col-sm-5 card border-0">

                                <img src="imagens/bannerPos.jpeg" style="width:100%">

                            </div>

                            <div class="col-12 col-sm-7">

                                <br>

                                <p clas="p_apres">

                                    Com a missão de preparar profissionais veterinários altamente capacitados através de um ensino de excelência e qualidade, o <span style="font-weight: bold">IEP Ranvier</span> abre matrículas para seu mais novo curso de <span style="font-weight: bold">Pós-Graduação em Oncologia Veterinária!</span>

                                </p>

                                <p clas="p_apres">

                                    Sob a coordenação da <span style="font-weight: bold">Profa. Dra. Samanta Melo</span>, referência nacional na área, e um corpo docente de grandes nomes da Oncologia Veterinária Brasileira, o curso traz uma metodologia de ensino e aprendizagem diferenciada, oferecerendo o melhor e mais atual conteúdo teórico-prático, com aulas presenciais e EAD, discussões de casos clínicos e de publicações científicas.

                                </p>

                                <p clas="p_apres">

                                    Com <span style="font-weight: bold">18 meses de duração</span> e <span style="font-weight: bold">carga horária de 500 horas</span>, o curso reconhecido pelo MEC @mineducacao, tem como objetivo capacitar o aluno no atendimento clínico e cirúrgico de cães e gatos com doenças oncológicas, na interpretação de exames complementares e laboratoriais, bem como na administração e manejo de drogas quimioterápicas.

                                </p>

                                <p>

                                    <span style="font-weight: bold">Início:</span> 27 e 28 de Julho de 2024, com encontros mensais, aos sábados e domingos, das 9h00 às 18h00, no <span style="font-weight: bold">Instituto Ranvier</span>, em São Paulo.

                                </p>

                                <p>

                                    Mais informações e matrículas no nosso site: <a href="https://www.iepranvier.com.br"><span style="font-weight: bold">www.iepranvier.com.br</span></a>

                                </p>

                                <br>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--Fim da div Foto do início-->



        <br>

        <div class="w3-container w3-center faixa apres">

            <button type="button" class="btn-menu" onclick="mostraEsconde('mnuapresentacao')">Apresentação</button>

        </div>

        <div class="container" id="mnuapresentacao">

            <div class="row justify-content-center">

                <div class="col-12 col-sm-7">

                    <br>

                    <p clas="p_apres">

                        <span style="font-weight: bold">Samanta Rios Melo </span>é Médica Veterinária, graduada em 2008 na 70ª Turma da <span style="font-weight: bold">Faculdade de Medicina Veterinária e Zootecnia da USP</span>. Fez Residência de Clínica Cirúrgica, pelo Hospital Veterinário da FMVZ-USP, em 2011. Concluiu Mestrado (2013) e Doutorado (2017) também na FMVZ-USP, na área de Cirurgia Oncológica de Pequenos Animais.

                    </p>

                    <p clas="p_apres">

                        É <span style="font-weight: bold">Professora da Faculdade de Medicina Veterinária e Zootecnia da USP</span>, ministrando aulas teóricas e práticas nas disciplinas de Técnicas Cirúrgicas e Clínica Cirúrgica de Pequenos Animais.

                    </p>

                    <p clas="p_apres">

                        Ela e sua equipe acreditam que o tratamento oncológico pode ser algo leve, pensado de forma a proporcionar a melhor qualidade de vida, e ser um tempo de muito amor.

                    </p>

                    <br>

                    <br>

                    <p clas="p_apres">

                        <span style="font-weight: bold">Esperança, carinho e respeito... temos de sobra por aqui! Venha nos consultar.</span>

                    </p>

                </div>

                <div class="col-12 col-sm-5 card border-0" style="width: 14rem;">

                    <img class="card-img-center" src="imagens/FotoSam.png" alt="Dra.Samanta">

                </div>

            </div>

        </div>



        <br>



        <div class="w3-container w3-center faixa">

            <button type="button" class="btn-menu" onclick="mostraEsconde('mnuatendimento')">Atendimento</button>

        </div>

        <br>



        <div class="pagAtend container" id="mnuatendimento">
            <section class="principal">
            <div class="conteudo">

                <h1 class=h1-whats> Marque sua consulta aqui: <h1>
                         
                <a type="button" class=botao href="https://wa.me/5511944472927?text=Gostaria%20de%20marcar%20uma%20consulta%20com%20a%20Dra.%20Samanta"
                    target="_blank">
                <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
                </a>
                            
            </div>
                      
            <h2 class="title-princ">Principais Centros de Atendimento</h2> 

            <section class="principal atflex">



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Vila São Francisco

                    </div>



                    <div class="icon">

                        <img src="imagens/logos/amopatas.png" alt="Amo Patas" class="card__image">

                    </div>

                    <h2 class="card__title">Clínica Amo Patas</h2>

                    <i class='fa fa-map-marker w3-large dados'> &nbsp;Rua Cândido Mota Filho, 146</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp;3768-6245</i>

                    <i class='fa fa-external-link w3-large dados'> &nbsp;www.clinicaamopatas.com.br</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.55695' data-lng='-46.75114' data-whatever="Clínica Amo Patas" data-endereco="Rua Cândido Mota Filho, 146">Ver Mapa</a>

                </div>



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Jardim Paulista

                    </div>



                    <div class="icon">

                        <img src="imagens/logo_Veros.png" alt="Veros" class="card__image">

                    </div>

                    <h2 class="card__title">Veros Hospital Veterinário</h2>

                    <i class='fa fa-map-marker w3-large dados'> &nbsp;Av Big. Luis Antonio, 4643</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp;(11) 3900-8352)</i>

                    <i class='fa fa-external-link w3-large dados'> &nbsp;https://veros.vet/</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5819729' data-lng='-46.6661154' data-whatever="Veros Hospital Veterinário" data-endereco="Av. Brig. Luis Antonio, 4643">Ver Mapa</a>

                </div>





                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Moema

                    </div>

                    <div class="icon">

                        <img src="imagens/logos/andrea-logo.png" alt="Dra Andréa" class="card__image">

                    </div>

                    <h2 class="card__title">Clínica Dra Andréa Rossi</h2>

                    <i class='fa fa-map-marker w3-large dados'>&nbsp;Rua Gaivota, 448</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 94814 4916</i>

                    <i class='fa fa-external-link w3-large dados'>&nbsp;&nbsp;Em construção</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.6010185' data-lng='-46.6652495' data-whatever="Clinica Dra Andréa Rossi" data-endereco="Rua Gaivota,448">Ver Mapa</a>

                </div>



            </section>



            <br>

            <h2 class="title-princ">Outros Locais de Atendimento</h2>



            <section class="outros atflex">

                <!-- Golden Vet desativada em Junho 2022 

                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Granja Viana

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/logogolden.png" alt="Golden Vets" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Golden Vets (24h)</h2>

                    <i class='fa fa-map-marker font-ou dados'> Rua José Félix de Oliveira, 820</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 4702-6017</i>

                    <i class='fa fa-external-link font-ou dados'> www.goldenvets.com.br</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5871892' data-lng='-46.8392346' data-whatever="Golden Vets" data-endereco="Rua José Félix de Oliveira, 820">Ver Mapa</a>

                </div>



                    Butantan Vet desativada em Abril 2024 

                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Butantã

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/logo_ButantanVet.png" alt="Butantan" class="card__image-ou">

                    </div>

                    <h2 class="card__title">Hospital Veterinário Butantan Vet)</h2>

                    <i class='fa fa-map-marker w3-large dados'>&nbsp;Rua Alvarenga, 1592</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp;(11) 3914-7500 93417-5811</i>

                    <i class='fa fa-external-link w3-large dados'> https://butantan.vet/</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5676509' data-lng='-46.7115156' data-whatever="Butantan Vet" data-endereco="Rua Alvarenga, 1592">Ver Mapa</a>

                </div>

                 -->



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Butantã

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/cvb-logo.png" alt="Butantã" class="card__image-ou">

                    </div>

                    <h2 class="card__title">Hospital Veterinário Butantã)</h2>

                    <i class='fa fa-map-marker w3-large dados'>&nbsp;Rua Dom Henrique Mourão, 261</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp;(11) 97292-9989</i>

                    <i class='fa fa-external-link w3-large dados'> Em construção</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5876637' data-lng='-46.7355486' data-whatever="Centro Veterinário Butantã" data-endereco="Rua Dom Henrique Mourão, 261">Ver Mapa</a>

                </div>



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Perdizes

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/logos/VittaVet.png" alt="Vitta Vet" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Vitta Vet Clinica Vet.</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp; R. Iperoig, 511 </i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 3582-7804</i>

                    <i class='fa fa-external-link font-ou dados'>em construção</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5372772' data-lng='-46.6773204' data-whatever="Vitta Vet Clinica Veteterinária" data-endereco=" R. Iperoig, 511">Ver Mapa</a>

                </div>



                <!-- Flor de Lótus desativada em Fevereiro 2024 

                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Jardim Bonfiglioli

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/FlorLotus-logo.PNG" alt="Flor de Lótus" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Flor de Lótus Acunpultura</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp; Rua Ramiro de Sta Cruz Abreu, 33</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 3864-6260</i>

                    <i class='fa fa-external-link font-ou dados'> www.flordelotusacupuntura.com.br</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5777138' data-lng='-46.7402673' data-whatever="Flor de Lótus Acunpultura" data-endereco=" Rua Ramiro de Santa Cruz Abreu, 33">Ver Mapa</a>

                </div>

                 -->



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Jardim Bonfiglioli

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/clinvet.png" alt="ClinVet" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Clinvet</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp; Rua Ramiro de Sta Cruz Abreu, 33</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 3582-7804</i>

                    <i class='fa fa-external-link font-ou dados'> em construção</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5777138' data-lng='-46.7402673' data-whatever="Clinvet" data-endereco=" Rua Ramiro de Santa Cruz Abreu, 33">Ver Mapa</a>

                </div>



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Morumbi

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/Logo Metazooa.png" alt="Metazooa" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Metazooa Clínica Veterinária</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp; Rua Braço do Sul, 107</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp;3727 2674 - 3721 1415</i>

                    <i class='fa fa-external-link font-ou dados'>www.metazooa.com.br</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5910358' data-lng='-46.7194385' data-whatever="Metazooa Clínica Veterinária" data-endereco=" Rua Braço do Sul, 107">Ver Mapa</a>

                </div>



                <!-- Hospital Taboão desativado em Junho de 2024 

                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded font-weight-bold">

                        Taboão da Serrra

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/logoHospTab.PNG" alt="Vet Taboão" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Hosp. Vet. Taboão da Serra</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp; Av. Dr. José Maciel, 598 </i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 4701-6077</i>

                    <i class='fa fa-external-link font-ou dados'>www.hospitalvettaboao.com.br</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.6126129' data-lng='-46.7627356' data-whatever="Hosp. Vet. Taboão da Serra" data-endereco=" Av. Dr. José Maciel, 598 ">Ver Mapa</a>

                </div>

                -->



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Jardim Peri Peri

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/logoMedCenter.png" alt="MedCenterPet" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">MedCenterPet</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp;Av. Min. Laudo F. Camargo, 179</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 2306-4664</i>

                    <i class='fa fa-external-link font-ou dados'>em construção</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5881585' data-lng='-46.7364822' data-whatever="MedCenterPet" data-endereco="Av. Min. Laudo F. Camargo, 179">Ver Mapa</a>

                </div>



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Angelica

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/logoAngelica.png" alt="Pet Angelica" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Petshop Angélica</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp;Av. Angélica, 1383</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 3822-3299 - 95606-1012</i>

                    <i class='fa fa-external-link font-ou dados'>www.petshopangelica.com.br</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.5447210' data-lng='-46.6572480' data-whatever="Petshop Angélica" data-endereco="Av. Angélica, 1383">Ver Mapa</a>

                </div>



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Jardim Monte Kemel

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/logos/MorumbiVet.png" alt="Morumbi Veth" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Morumbi Veth</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp;R. David Ben Gurion, 181</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 2337-0734</i>

                    <i class='fa fa-external-link font-ou dados'>www.morumbivhet.com.br/</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.603134' data-lng='-46.738717' data-whatever="Morumbi Veth" data-endereco="Rua David Ben Gurion, 181">Ver Mapa</a>

                </div>



                <div id="cartao" class="card atcard">

                    <div class="card-header  atcard-reader rounded  font-weight-bold">

                        Real Parque

                    </div>

                    <div class="icon-ou">

                        <img src="imagens/logo-Morumbichos.PNG" alt="Morumbichos" style="width:100%" class="card__image-ou">

                    </div>

                    <h2 class="card__title-ou">Morumbichos</h2>

                    <i class='fa fa-map-marker font-ou dados'>&nbsp;&nbsp;Dr. Alberto de Oliveira Lima, 254</i>

                    <i class='fa fa-phone w3-large dados'>&nbsp;&nbsp; 3758-3762</i>

                    <i class='fa fa-external-link font-ou dados'>www.morumbichos.com.br</i>

                    <a href="#localiza" class="card-link" data-toggle="modal" data-target="#myModal" data-lat='-23.616453' data-lng='-46.704801' data-whatever="Morumbichos" data-endereco="Rua Dr. Alberto de Oliveira Lima, 254">Ver Mapa</a>

                </div>



            </section>





        </div>





        <div class="w3-container w3-center faixa">

            <button type="button" class="btn-menu" onclick="mostraEsconde('mnuartigos')">Artigos publicados</button>

        </div>

        <br>



        <!-- Início página de artigos -->

        <section id="mnuartigos" class="container pagArtigos artigos">

            <div class="row">



                <div class="card artcard">

                    <div class="card-header artheader">

                        International Journal of Advanced Research

                    </div>

                    <!-- logo retirado em 28/03/2022 <img class="card-img-top" src="imagens\ijarlogo.png" alt="Card image cap"> -->

                    <div class="card-body">

                        <h5 class="arttitulo">Thermographic Assessment of Canine Mast Cell Tumours</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo1">Resumo</button>

                        <a href="https://www.worldwidejournals.com/indian-journal-of-applied-research-(IJAR)/fileview/March_2015_1492423393__157.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        International Journal of Advanced Research

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Evaluation of Collection and Distribution of Samples for Histological, Stereological Analysis and Cell Culture of Canine Mast Cell Tumors</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo2">Resumo</button>

                        <a href="https://www.scirp.org/pdf/OJVM20120400009_21933603.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        Elsevier

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Immunohistochemical Expression of Vascular Endothelial Growth Factor as a Prognostic Marker for Canine Mast Cell Tumors</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo3">Resumo</button>



                        <a href="https://www.sciencedirect.com/science/article/abs/pii/S1938973620301045" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        BVS - Biblioteca Virtual em Saúde

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Colheita e envio de material na oncologia veterinária: sua importância no tratamento e prognóstico do paciente oncológico</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo4">Resumo</button>



                        <a href="https://publicacoes.apamvet.com.br/PDFs/Artigos/90.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        The Anatomical Record

                    </div>

                    <div class="card-body">

                        <h6 class="arttitulo">The developing left superior cervical ganglion of Pacas (Agouti paca).</h6>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo5">Resumo</button>

                        <a href="https://anatomypubs.onlinelibrary.wiley.com/doi/10.1002/ar.20918" class="btn btn-primary  btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">



                    <div class="card-header artheader">

                        Archives of Veterinary Science

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Estudo Retrospectivo do Mastocitoma Canino No Serviço de Cirurgia de Pequenos Animais</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo6">Resumo</button>



                        <a href="https://revistas.ufpr.br/veterinary/article/view/11667/9797" class="btn btn-primary  btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">



                    <div class="card-header artheader">

                        Anatomia Histologia Embryologia - Wiley

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Sex-related macrostructural organization of the deer's brachial plexus.</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo7">Resumo</button>



                        <a href="https://onlinelibrary.wiley.com/doi/epdf/10.1111/j.1439-0264.2007.00765.x#accessDenialLayout" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        Editora Roca

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Tratado de medicina interna de cães e gatos (livro) - Capitulo Complicações da OSH</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo8">Resumo</button>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        Boletim ApamVet

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Termografia em Medicina Veterinária: uma técnica de infinitas possibilidades</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo9">Resumo</button>

                        <a href="https://samantamelo.vet.br/artigos/artigo-009pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        Archives of Veterinary Science

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Estudo retrospectivo do mastocitoma canino no serviço de cirurgia de pequenos animais</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo10">Resumo</button>

                        <a href="https://samantamelo.vet.br/artigos/artigo010.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        Boletim ApamVet

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">O uso de drogas citotóxicas na oncologia veterinária – importância da comunicação e cuidados aos tutores</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo11">Resumo</button>

                        <a href="https://samantamelo.vet.br/artigos/artigo011.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        Semina: Ciências Agrárias, Londrina

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Effects of combined midazolam and propofol in anesthesia induction and recovery of cats undergoing ovariohisterectomy</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo12">Resumo</button>

                        <a href="https://samantamelo.vet.br/artigos/artigo012.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>

            </div>



            <div class="row">



                <div class="card artcard">

                    <div class="card-header artheader">

                        Universidade de São Paulo

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Dissertação de Mestrado</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo15">Resumo</button>

                        <a href="https://samantamelo.vet.br/artigos/artigo015.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        Frontiers in Veterinary Science

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Diagnostic Value and Application of Infrared Thermography in the Analysis of Circumanal Gland Tumors</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo13">Resumo</button>

                        <a href="https://samantamelo.vet.br/artigos/artigo013.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



                <div class="card artcard">

                    <div class="card-header artheader">

                        Cells Journal

                    </div>

                    <div class="card-body">

                        <h5 class="arttitulo">Imatinib mesylate for the treatment of canine mast cell tumors: Assessment of the response and adverse events in comparison with the conventional therapy with vinblastine and prednisone</h5>

                    </div>

                    <div class="card-footer">

                        <button type="button" class="btn btn-primary btn-artigo" data-toggle="modal" data-target="#artigo14">Resumo</button>

                        <a href="https://samantamelo.vet.br/artigos/artigo014.pdf" class="btn btn-primary btn-artigo" target="_blank">Download</a>

                    </div>

                </div>



            </div>

        </section>



        <!-- Fim página de artigos -->



        <div class="w3-container w3-center faixa conta">

            <button type="button" class="btn-menu" onclick="mostraEsconde('mnucontato')">Contato</button>

        </div>

        <br>



        <div class="bodyContato" id="mnucontato">

            <!-- Inicio container -->

            <div class="container">

                <!-- Inicio d-flex -->

                <div class="d-flex justify-content-center mt-5">

                    <!-- Inicio card form -->

                    <div class="card form-login" style="width: 30rem;">

                        <!-- Inicio card body -->

                        <div class="card-body">

                            <div class="d-flex justify-content-center">

                                <img src="imagens/LogoTransp.png" height="75" width="180" />

                            </div>



                            <div class="row">

                                <div class="col">

                                    <h2 style="text-align: center">Contato</h2>

                                </div>

                            </div>

                            <!-- Inicio card row -->

                            <div class="row">

                                <!-- Inicio card col -->

                                <div class="col">

                                    <!-- Inicio do form -->

                                    <form action="envcontato.php" method="post">



                                        <div class="form-group">

                                            <input type="text" name='nome' class="form-control input-class" placeholder="Seu nome">

                                        </div>



                                        <div class="form-group">

                                            <input type="email" name='email' class="form-control input-class" required="required" placeholder="E-mail válido *">

                                        </div>



                                        <div class="form-group">

                                            <input type="text" name='assunto' class="form-control input-class" placeholder="Assunto">

                                        </div>



                                        <div class="form-group">

                                            <textarea class="form-control input-class" name="mensagem" rows="4" placeholder="Deixe sua mensagem aqui *" required="required"></textarea>

                                        </div>



                                        <button type="submit" class="btn btn-primary btn-block">Enviar mensagem</button>



                                        <div class="mt-4 mb-4">

                                            <small class="form-text">

                                                Os campos marcados com '*' são obrigatórios

                                            </small>

                                        </div>



                                    </form> <!-- Fim form -->

                                </div> <!-- Fim card col -->

                            </div> <!-- Fim card row -->

                        </div> <!-- Fim card body -->

                    </div> <!-- fim card form-->

                </div> <!-- Fim d-flex -->

            </div> <!-- Fim container -->

        </div>



        <div class="w3-container w3-center faixa cadas">

            <button type="button" class="btn-menu" onclick="mostraEsconde('mnucadastro')">Cadastro</button>

        </div>

        <br>



        <div class="bodyContato " id="mnucadastro">

            <div class="container">

                <div class="d-flex justify-content-center mt-5">

                    <div class="card form-login" style="width: 30rem;">

                        <div class="card-body">



                            <div class="d-flex justify-content-center">

                                <img src="imagens/LogoTransp.png" height="75" width="180" />

                            </div>



                            <div class="row">

                                <div class="col">

                                    <h2 style="text-align: center">Cadastre-se</h2>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col">



                                    <form action="envregistro.php" method="post">

                                        <div class="form-group">

                                            <input type="text" name='nome' class="form-control input-class" required="required" placeholder="Nome (min. 4 carac)">

                                        </div>

                                        <div class="form-group">

                                            <input type="text" name='sobrenome' class="form-control input-class" required="required" placeholder="Sobrenome (min. 4 carac)">

                                        </div>



                                        <div class="form-group">

                                            <input type="email" name='email' class="form-control input-class" required="required" placeholder="E-mail válido">

                                        </div>



                                        <div class="form-group">

                                            <input type="password" name='senha' class="form-control input-class" required="required" placeholder="Senha (min. 6 carac)">

                                        </div>



                                        <p>Por favor, indique seu perfil de usuário:</p>

                                        <div class="tip_Usu">

                                            <input type="radio" name="tipoUsuario" id="tipoUsu_T" onclick="mostrar_T()" value="T"><label for="tipoUsu_T">Tutor</label>



                                            <input type="radio" name="tipoUsuario" id="tipoUsu_A" onclick="mostrar_A()" value="A"><label for="tipoUsu_A">Aluno</label>



                                            <input type="radio" name="tipoUsuario" id="tipoUsu_V" onclick="mostrar_V()" value="V"><label for="tipoUsu_V">Veterinário</label>



                                            <input type="radio" name="tipoUsuario" id="tipoUsu_O" onclick="mostrar_O()" value="O"><label for="tipoUsu_O">Outro</label>



                                            <div class="form-group">

                                                <input type="text" name='complemento' id='tipoUsu' class="form-control input-class" placeholder="">

                                            </div>

                                        </div>

                                        <div class="mt-4 mb-4">

                                            <small class="form-text">

                                                Ao inscrever-se, você concorda com os Termos de Serviço e com as Políticas de Privacidade, incluindo o Uso de Cookies.

                                            </small>

                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">Inscrever-se</button>



                                        <?php if ($erroCadastro) { ?>



                                            <small class="form-text text-danger">*Erro ao tentar realizar o cadastro, verifique se os campos foram preenchidos corretamente.</small>



                                        <?php } ?>

                                    </form>



                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        

        <div class="w3-container w3-center faixa cadas">

            <button type="button" class="btn-menu" onclick="mostraEsconde('mnupodcasts')">PodCasts</button>

        </div>

        <!-- Início página de podcasts -->

        <div class="container" id="mnupodcasts" >

            <div class="row">   

                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/4dfMOUFJtcSTvuCJk2Wgr4?utm_source=generator" 

                    width="100%" height="352" frameBorder="0" allowfullscreen="" 

                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 

                    loading="lazy">

                </iframe>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1xRMiWpC95vUmJslCPPnsf/video?utm_source=generator" 

                    width="642" height="351" frameBorder="0" allowfullscreen="" 
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                    loading="lazy"></iframe>

            </div>

        </div>

        <!-- Fim página de podcasts -->

        

        <br>



        <div class="w3-container w3-center faixa cadas">

            <button type="button" class="btn-menu" onclick="mostraEsconde('mnureportagens')">Reportagens</button>

        </div>

        <!-- Início página de reportagens -->

        <div class="container" id="mnureportagens">

            <div class="row">   

                <iframe width="560" height="315" 

                    marginwidth="20" src="https://www.youtube.com/embed/x2KKv9O7PR0?si=RwKmcigIQ4AtkyuS" 

                    title="YouTube video player" frameborder="1" 

                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 

                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                </iframe>

                <iframe width="560" height="315" 

                    marginwidth="20" src="https://www.youtube.com/embed/pBO2a53qkIQ?si=g6LCZwjbfa5Kppdn" 

                    title="YouTube video player" frameborder="1" 

                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 

                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                </iframe>

            </div>

        </div>

        <!-- Fim página de reportagens -->



        <br>



        <!-- LightWidget WIDGET -->

        <div class="container">



            <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>

            <iframe src="https://cdn.lightwidget.com/widgets/5bdcafe42b22507da45d4d84108bb113.html" scrolling="no" 

                allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;">

            </iframe>        

        </div>



        <!-- Início do rodapé-->

        <footer class="fixar-rodape">

            <p style="padding-top: 10px; margin-right:20px;">&copy; Samanta Rios Melo</p>

        </footer>

        <!-- Fim do rodapé-->





        <div class="w3-col s5" style="padding: 20px 5px 0px 5px;">

            <!-- Google Map -->

            <div id="googleMap" style="width:50%; height:300px;">

            </div>

            <br>

        </div>



        <!-- Início do Modal dos locais de atendimento-->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel">Nome cliente...</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12 modal_body_content">

                                <p class="enderecoModal">endereço...</p>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12 modal_body_map">

                                <div class="location-map" id="location-map">

                                    <div style="width: 600px; height: 400px;" id="map_canvas"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Fim do Modal dos locais de atendimento-->



        <!-- Início dos Modais dos resumos dos artigos -->

        <div class="modal fade" id="artigo1" tabindex="-1" role="dialog" aria-labelledby="modalArt1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt1">Resumo / Abstract</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">Increasing attention is being directed towards thermographic imaging and is expected to promote technological refinement and broader application of this diagnostic modality. Increased tumouralblood supply, angiogenesis and metabolic rates support the application of thermographic assessment in oncology. Canine mast cell tumours (MCTs) are highly reactive neoplasms with variable behaviour and prognosis. Thermographic assessment of canine MCTs has not been reported to date.</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                    </div>

                </div>

            </div>

        </div>

        <div class="modal fade" id="artigo2" tabindex="-1" role="dialog" aria-labelledby="modalArt2" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt2">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado"> <strong>Objective:</strong> To collect high quality, representative tissue material from tumors and manage its distribution to different laboratories.</p>

                        <p class="justificado"> <strong>Design:</strong> Prospective controlled study. </p>

                        <p class="justificado"><strong>Animals:</strong> Thirty-six dogs with mast cell tumors. Procedures: The samples were submitted for the following analyses: stereology; histopathology; cell culture; breakdown for cytogenetic analysis of chromosomes (based on the Boxer breed published genome); Cell lysis for Real Time PCR and quantification of gene expression of CX 43, 32 and E-cadherin in canine mast cells.</p>

                        <p class="justificado"><strong>Results:</strong> Cytogenetic chromosome analysis, 90.9% of the samples were considered to be of good quality. For gene expression quantification of CX 43, 32 and E-cadherin in canine mast cell tumors (MCT), 95.5% of samples were considered to be of good quality.</p>

                        <p class="justificado"><strong>Conclusions and Clinical Relevance:</strong> We seek to assess the importance of surgical collection and post-surgical tissue preparation on laboratory testing by collecting surgical material appropriately to allow accurate diagnosis and reliable clinical prognosis and minimize errors caused by inadequate preparation of samples.

                        </p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo3" tabindex="-1" role="dialog" aria-labelledby="modalArt3" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt3">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">Strong to moderate vascular endothelial growth factor (VEGF) expression may be a negative prognostic factor in canine mast cell tumors (MCTs). This study set out to determine the prognostic value of combined analysis of VEGF-A immunoreactivity, clinical presentation, patient staging, and tumor histologic grade in canine MCTs. In this study, intense VEGF staining was significantly associated with decreased survival (P = .025). Immunohistochemical expression of VEGF is not routinely employed as a prognostic factor in canine MCT workup. However, results of this study support the inclusion of this marker in the MCT prognostic panel. Investigation of VEGF expression may assist in the development of anti-VEGF drugs.</p>

                        </p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo4" tabindex="-1" role="dialog" aria-labelledby="modalArt4" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt4">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">Definir o diagnóstico e realizar a escolha de tratamento apropriado para pacientes oncológicos é sempre algo desafiador. Um entendimento da heterogeneidade deste processo, dos tipos celulares associados e o conhecimento de indicadores prognósticos podem ser úteis e levar a decisões vitais de acordo com o paciente. Em uma abordagem multidisciplinar várias técnicas de diagnóstico citológico, histológico, imuno- -histoquímico e histoquímico, são muitas vezes necessárias e devem ser incluídas para a melhor assistência a alguns pacientes. Assim, dentro da oncologia, as análises das formações tumorais são essenciais, e a parceria com o veterinário patologista é de grande valia. Exames como citologia e histopatológico, se bem feitos, são extremamente úteis porque direcionam o tratamento cirúrgico, clínico e nos dão valor prognóstico.</p>

                        <p class="justificado">Entretanto, por melhor que seja o patologista, quando há uma série de falhas no encaminhamento do material para análise não há muito a ser feito, e isso pode (...)</p>



                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo5" tabindex="-1" role="dialog" aria-labelledby="modalArt5" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt5">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">In this study the main question investigated was the number and size of both binucleate and mononucleate superior cervical ganglion (SCG) neurons and, whether post-natal development would affect these parameters. Twenty left SCGs from 20 male pacas were used. Four different ages were investigated, that is newborn (4 days), young (45 days), adult (2 years), and aged animals (7 years). By using design-based stereological methods, that is the Cavalieri principle and a physical disector combined with serial sectioning, the total volume of ganglion and total number of mononucleate and binucleate neurons were estimated. Furthermore, the mean perikaryal (somal) volume of mononucleate and binucleate neurons was estimated using the vertical nucleator. The main findings of this study were a 154% increase in the SCG volume, a 95% increase in the total number of mononucleate SCG neurons and a 50% increase in the total volume of SCG neurons. In conclusion, apart from neuron number, different adaptive mechanisms may coexist in the autonomic nervous system to guarantee a functional homeostasis during ageing, which is not always associated with neuron losses. Anat Rec, 2009. © 2009 Wiley-Liss, Inc.</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo6" tabindex="-1" role="dialog" aria-labelledby="modalArt6" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt6">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">O mastocitoma é uma das neoplasias cutâneas mais freqüentes em cães, possuindo comportamento biológico variado. Poucos estudos avaliam a epidemiologia desta neoplasia no Brasil. Este estudo avaliou 260 casos de mastocitoma em cães atendidos no Serviço de Cirurgia de Pequenos Animais do Hospital Veterinário da Faculdade de Medicina Veterinária e Zootecnia da Universidade de São Paulo, no período de 2000 a 2007. Destes, 139 animais do gênero masculino e 121 do feminino, cuja média de idade foi de 8,5 anos. Os animais sem raça definida representaram 26,15% (n=68) e 73,85% eram cães com raça definida. Destes 101 (52,6%) eram da raça Boxer e os outros 91 cães eram de diferentes raças, sendo Labrador, Pinscher, Dachshund, Fox paulistinha, as com maior ocorrência. Não foi verificada predisposição sexual relacionada à ocorrência do mastocitoma em cães. Observou-se uma ampla faixa etária acometida, porém com uma maior incidência em animais idosos. A maioria dos animais (48%) foi classificada como mastocitoma grau II, sendo a taxa de recidiva também maior entre os tumores de grau intermediário. A maioria dos animais apresentou uma sobrevida total maior de um ano, após os tratamentos diversos, como cirurgia, quimioterapia ou as duas terapias combinadas, porém 54% dos animais já evoluíram para o óbito neste período de 7 anos, sendo que a maioria dos óbitos ocorreu dentro de um período de um ano após o início do tratamento, demonstrando a alta malignidade desta neoplasia. </p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo7" tabindex="-1" role="dialog" aria-labelledby="modalArt7" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt7">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">We describe the morphological organization of the deer brachial plexus in order to supply data to veterinary neuroclinics and anaesthesiology. The deer (Mazama gouazoubira) brachial plexus is composed of four roots: three cervical (C6, C7 and C8) and one thoracic (T1). Within each sex group, no variations are observed between the left and the right brachial plexus, though sex-related differences are seen especially in its origin. The origin of axillary and radial nerves was: C6, C7, C8 and T1 in males and C8–T1 (radial nerve) and C7, C8 and T1 (axillary nerve) in females; musculocutaneous nerve was: C6–C7 (males) and C8–T1 (females); median and ulnar nerves was: C8–T1 (males) and T1 (females); long thoracic nerve was: C7 (males) and T1 (females); lateral thoracic nerve was: C6, C7, C8 and T1 (males) and T1 (females); thoracodorsal nerve was: C6, C7, C8 and T1 (males) and C8–T1 (females); suprascapular nerve was: C6–C7 (males) and C6 (females) and subscapular nerve was: C6–C7 (males) and C7 (females). This study suggests that in male deer the origin of the brachial plexus is more cranial than in females and the origin of the brachial plexus is slightly more complex in males, i.e. there is an additional number of roots (from one to three). This sexual dimorphism may be related to specific biomechanical functions of the thoracic limb and electrophysiological studies may be needed to shed light on this morphological feature.</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo8" tabindex="-1" role="dialog" aria-labelledby="modalArt8" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt8">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">Introdução - O problema da superpopulação de cães e gatos errantes é mundial. Envolve questões de saúde pública e de bem-estar animal. Por volta do início da década de 1970, o dramático aumento da população de cães e gatos nas ruas provocou a necessidade de implantação de medidas que visassem ao controle populacional desses animais, como alternativa à captura e ao extermínio. Por volta dessa época, criou-se o anticoncepcional para cães e gatos. 1 Alguns anos mais tarde, os efeitos do uso do anticoncepcional em animais ficaram mais evidentes, e muitos veterinários passaram a contraindicar o seu uso. A partir de então, a esterilização cirúrgica passou a ser o principal meio de controle da população animal.</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo9" tabindex="-1" role="dialog" aria-labelledby="modalArt9" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt9">Tópicos</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado"> <strong>Tópicos</strong></p>

                        <p class="justificado">A História da Termografia Médica </p>

                        <p class="justificado">Termografia médica atual</p>

                        <p class="justificado">Aplicação da Termografia Veterinária </p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo10" tabindex="-1" role="dialog" aria-labelledby="modalArt10" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt10">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">O mastocitoma é uma das neoplasias cutâneas mais freqüentes em cães, possuindo comportamento biológico variado. Poucos estudos avaliam a epidemiologia desta neoplasia no Brasil. Este estudo avaliou 260 casos de mastocitoma em cães atendidos no Serviço de Cirurgia de Pequenos Animais do Hospital Veterinário da Faculdade de Medicina Veterinária e Zootecnia da Universidade de São Paulo, no período de 2000 a 2007. Destes, (...)</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo11" tabindex="-1" role="dialog" aria-labelledby="modalArt11" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt11">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">A batalha contra o câncer ganhou grandes proporções nas últimas décadas, e os animais de companhia, cada vez mais parte da família, também recebem cada vez mais acesso ao diagnóstico e tratamentos oncológicos. A cada dia, centenas de animais são diagnosticados com câncer. Somente na cidade de São Paulo(...)</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo12" tabindex="-1" role="dialog" aria-labelledby="modalArt12" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt12">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">O objetivo deste estudo foi determinar os efeitos de propofol e midazolam na indução da anestesia em gatas submetidas a ovariossalpingohisterectomia quanto a qualidade da intubação orotraqueal e da indução da anestesia, efeitos cardiorrespiratórios e períodos de recuperação. Foram utilizadas 27 gatas adultas e hígidas que foram pré-tratadas com acepromazina e morfina. Decorridos(...)</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo13" tabindex="-1" role="dialog" aria-labelledby="modalArt13" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt13">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">In dogs, circumanal tumors are the third most common skin neoplasm. Circumanal gland adenomas (CAGAs) have a good prognosis. Contrastingly, circumanal gland adenocarcinomas (CAGAC) have high relapse rates and may be metastatic. This study(...)</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo14" tabindex="-1" role="dialog" aria-labelledby="modalArt14" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt14">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">Mast cell tumors (MCTs) are common neoplasms in dogs, and treatments for these diseases include surgery, polychemotherapy and targeted therapy with tyrosine kinase inhibitors. This study aimed to evaluate the response and the adverse events of treatment with imatinib mesylate (IM) compared to conventional therapy using vinblastine and prednisolone (VP) in canine cutaneous (...)</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <div class="modal fade" id="artigo15" tabindex="-1" role="dialog" aria-labelledby="modalArt15" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalArt15">Resumo / Abstract</h5>

                    </div>

                    <div class="modal-body">

                        <p class="justificado">Dissertação apresentada ao Programa de Pós-Graduação em Clínica Cirúrgica Veterinária da Faculdade de Medicina Veterin´ria e Zootecnia da Universidade de São Paulo para obtenção do título de Mestre em Ciências</p>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <!-- Fim dos Modais dos resumos dos artigos -->



        <!-- Início dos Modais do contato -->



        <div class="modal fade modalcontato" id="Acerto" tabindex="-1" role="dialog" aria-labelledby="acerto1" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content" style="background: rgb(255,255,255)">

                    <div class="modal-header">

                        <h5 class="modal-title" id="acerto1">Envio do Contato</h5>

                    </div>

                </div>

                <div class="modal-body modalcontato">

                    <p>Mensagem enviada com sucesso!</p>

                    <p>Aguarde que entraremos em contato.</p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                </div>

            </div>

        </div>





        <div class="modal fade modalcontato" id="Erro" tabindex="-1" role="dialog" aria-labelledby="erro1" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="erro1">Envio do Contato</h5>

                    </div>

                </div>

                <div class="modal-body">

                    <p>Sua mensagem não foi enviada...!</p>

                    <p>Verifique seus dados de entrada e tente de novo.</p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                </div>

            </div>

        </div>



        <!-- Fim dos Modais do contato -->





        <!-- JavaScript (Opcional) -->

        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyC5U0li9AuNxBqIJS5WW-6EZETTJoFMHew&callback=myMap"></script>

        <script src="js/script.js"></script>

        <script src="js/basesamy.js"></script>
 
        <script src="https://cdn.jsdelivr.net/gh/reymon359/web-experiments/Social%20Signature/socialsignature.min.js" crossorigin="anonymous"></script>   

    </div> <!-- Fim da div body-content-->

   
</body>



</html>