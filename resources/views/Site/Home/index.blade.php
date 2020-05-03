@extends('Template.index')

@section('main_container')

  <!--==========================
    Carrosel Topo
    ============================-->

    <header id="header">
      <div class="container-fluid">
        <div class="topo">
          <div class="row">
            <div class="topo-one col-md-4">
              <p class="text-one">SOCORRO 24H | 0800 042 0226</p>
            </div>
            <div class="topo-two col-md-4">
              <div class="text-two">
                <a href="{{url('/documentos')}}" target="_blank"><p>BATEU O CARRO? CLICK AQUI!</p></a>
              </div>                   
            </div>
            <div class="topo-boleto col-md-4">
              <div class="text-boleto">
                <a href="{{url('/associados')}}" target="_blank"><p>2ª VIA DE BOLETO</p></a>
              </div>                   
            </div>                
          </div>
        </div>

        <div id="logo" class="pull-left">
          <a href="{{url('/documentos')}}"><img src="{{url('assets/site/img/logo.png')}}" alt="Setta" title="Setta" /></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">

            <li><a href="#about">A Setta</a></li>
            <li><a href="#services">Nossos Produtos</a></li>
            <li><a href="{{url('/documentos')}}" target="_blank">Documentos</a></li>
            <li><a href="#portfolio">Nossos Trabalhos</a></li> 
            <li><a href="#contact">Contato</a></li>
            <li>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ÁREA                    
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button"><a href="{{url('/associados')}}" target="_blank"><p class="item-menu">Área do Associado</p></a></button>
                  <button class="dropdown-item" type="button"><a href="{{url('/painel')}}" target="_blank"><p class="item-menu">Acesso Restrito</p></a></button>                  
                </div> 
              </div>                
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="intro">
      <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

          <ol class="carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
              <div class="carousel-background"><img src="{{url('assets/site/img/intro-carousel/1.jpg')}}" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h4><span style="color: #a8a4a4;">EVITE MAIORES ESTRESSES, A SETTA CUIDA DE SEU VEÍCULO</span></h4>
                  <p>Com os mais modernos sistemas de monitoramento Via Satélite, a Setta pode localizar com precisão onde se encontra seu veículo furtado ou roubado.</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Saiba Mais</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-background"><img src="{{url('assets/site/img/intro-carousel/2.jpg')}}" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h4><span style="color: #a8a4a4;">SUA FROTA PROTEGIDA</span></h4>
                  <p>A Setta oferece os melhores planos de rastreamento e proteção para suas cargas cheguem tranquilamente nos destinos.</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Saiba Mais</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-background"><img src="{{url('assets/site/img/intro-carousel/3.jpg')}}" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h4><span style="color: #a8a4a4;">SUA MOTO PROTEGIDA</span></h4>
                  <p>Os melhores beneficios para quem vive o dia pilotando nas ruas à trabalho ou passeio</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Saiba Mais</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-background"><img src="{{url('assets/site/img/intro-carousel/4.jpg')}}" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h4><span style="color: #a8a4a4;">ASSISTÊNCIA VEÍCULAR QUANDO VOCÊ PRECISAR</span></h4>
                  <p>A assistência veicular da Setta está 24 horas de domingo a domingo, atenta para resolver qualquer imprevisto que apareça para nossos clientes. Com um excelente atendimento com o telefone sempre disponível.</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Saiba Mais</a>
                </div>
              </div>
            </div>

          </div>

          <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
    </section><!-- #Carrosel Topo -->

    <main id="main">

    <!--==========================
      Quem Somos
      ============================-->
      <section id="about">
        <div class="container">

          <header class="section-header">
            <h3>Quem Somos</h3>
            <p>Somos uma associação de socorro mutuo veicular que busca ser referência na região, trazendo facilidade e praticidade para nossos associados através do nosso modelo exclusivo, localizada na cidade de Itaquitinga - PE, nossa sede conta com uma grande estrutura de atendimento para melhor servir nossos associados nas mais adversas situações. A SETTA surgiu de uma necessidade do mercado local e regional da mata norte do estado de Pernambuco.</p>
          </header>

          <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="{{url('assets/site/img/about-mission.jpg')}}" alt="" class="img-fluid">
                  <div class="icon"><i class="ion-arrow-up-a"></i></div>
                </div>
                <h2 class="title"><a href="#">Nossa Missão</a></h2>
                <p>Oferecer a nossos associados a melhor relação custo/benefício paralelamente também nos esforçamos para garantir constante atualização tecnológica em nossos benefício. </p>
              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="about-col">
                <div class="img">
                  <img src="{{url('assets/site/img/about-plan.jpg')}}" alt="" class="img-fluid">
                  <div class="icon"><i class="ion-ios-list-outline"></i></div>
                </div>
                <h2 class="title"><a href="#">Nossos Objetivos</a></h2>
                <p>A SETTA é uma associação de socorro mutuo veicular   que nasceu no nordeste oferecendo benefício de qualidade aonde almeja ganhar o Brasil com o seu comprometimento e seriedade. </p>
              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col">
                <div class="img">
                  <img src="{{url('assets/site/img/about-vision.jpg')}}" alt="" class="img-fluid">
                  <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                </div>
                <h2 class="title"><a href="#">Nossa Visão</a></h2>
                <p> Baseados na constante qualificação profissional e buscando sempre estar em sintonia com os mais recentes avanços tecnológicos de rastreamento do mercado, temos a certeza de que poderemos estar sempre ajudando nossos associados a estarem mais protegidos das adversidades do trânsito. Buscamos, com isso, ser a referência na região.</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- #Quem Somos -->

    <!--==========================
      benefício
      ============================-->
      <section id="services">
        <div class="container">

          <header class="section-header wow fadeInUp">
            <h3>Benefício</h3>
            <p>A SETTA conta com uma vasta gama de benefício com exelência na qualidade voltada para a proteção do seu veículo.</p>
          </header>

          <div class="row">

            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-android-locate"></i></div>
              <h4 class="title"><a href="">Rastreamento e Monitoramento</a></h4>
              <p class="description">Sinta-se protegido com o nosso sistema que lhe da a segurança de saber aonde o seu veiculo está, em que velocidade, históricos de rotas e muito mais</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-android-time"></i></div>
              <h4 class="title"><a href="">Assistência 24 horas</a></h4>
              <p class="description">Contamos com reboque, chaveiro, táxi, troca de pneu, falta de combustível, socorro elétrico e mecânico. Tudo isso para não deixar você na mão</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-android-sad"></i></div>
              <h4 class="title"><a href="">Proteção Veicular</a></h4>
              <p class="description">Se o seu veículo sofrer colisão, for incêndiado, roubado ou furtado a equipe da SETTA entra em ação para cumprir com o seu papel</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-model-s"></i></div>
              <h4 class="title"><a href="">Carro Reserva</a></h4>
              <p class="description">Ficar sem carro não dá, né? Pensando nisso a SETTA garante um carro reserva enquanto o seu veículo estiver no conserto</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-people-outline"></i></div>
              <h4 class="title"><a href="">Fundo para Terceiros</a></h4>
              <p class="description">Esse é um serviço opcional aonde cobre os danos materiais causados a terceiros, como por exemplo despesas de funilaria e pintura causadas por colisão</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-checkmark"></i></div>
              <h4 class="title"><a href="">Proteção de Vidros</a></h4>
              <p class="description">Se lanternas, retrovisores e faróis do seu veículo estiverem quebrados, nós consertamos para você pegar a estrada sem se preocupar</p>
            </div>

          </div>

        </div>
      </section><!-- #Serviços -->

    <!--==========================
      Cotação
      ============================-->
      <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
          <h3>Faça uma Cotação</h3>
          <p>Entre em contato e nós te damos a resposta em minutos!</p>
          <a class="cta-btn" id="b1e2e1orse3Bbzvau1je0ddba-8c">FAZER COTAÇÃO</a>
        </div>
      </section><!-- #Cotação -->
      <!--Egoi-->
      <script type="text/javascript" id="script_1e2e1orse3Bbzvau1je0ddba-8c">
        var _egoiLoaderMulti = _egoiLoaderMulti || [];
        var _egoiLoaderValues = [];
        _egoiLoaderValues.push(["_setForm", "1e2e1orse3Bbzvau1je0ddba-8c"]);
        _egoiLoaderValues.push(["_setList", "1"]);
        _egoiLoaderValues.push(["_setResource", "f6ac93d6e9bc780faf2abe53a4efa181"]);
        _egoiLoaderValues.push(["_setUrl", "http://www.23.mkitd7.com/"]);
        _egoiLoaderValues.push(["_setType", "button"]);
        _egoiLoaderValues.push(["_setFontColor", "#ffffff"]);
        _egoiLoaderValues.push(["_setText", "Fazer Cotação"]);
        _egoiLoaderValues.push(["_setWidth", "354"]);
        _egoiLoaderValues.push(["_setHeight", "425"]);
        _egoiLoaderValues.push(["_setSubscriberCount", "false"]);
        _egoiLoaderValues.push(["_setSubscriberLabel", "contatos"]);
        _egoiLoaderMulti.push(_egoiLoaderValues);
        (function() {
          var egoi = document.createElement("script"); egoi.type = "text/javascript"; egoi.async = true;
          egoi.src = "http://www.23.mkitd7.com/include/javascript/egoi.js";
          var e = document.getElementById("script_1e2e1orse3Bbzvau1je0ddba-8c"); e.parentNode.insertBefore(egoi, e);
        })();
      </script>
      <div id="a1e2e1orse3Bbzvau1je0ddba-8c"></div>


    <!--==========================
      Trabalhos
      ============================-->
      <section id="portfolio"  class="section-bg" >
        <div class="container">

          <header class="section-header">
            <h3 class="section-title">Nossos Trabalhos</h3>
          </header>

          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Recuperado</li>
                <li data-filter=".filter-app">Restaurado</li>
                <li data-filter=".filter-card">Reparado</li>
                <li data-filter=".filter-web">Ressarcido</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-active wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="{{url('assets/site/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
                  <a href="{{url('assets/site/img/portfolio/app1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Ver Foto"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Recuperado</a></h4>
                  <p>Veículo recuperado pela SETTA</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="{{url('assets/site/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
                  <a href="{{url('assets/site/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Ver Foto"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Restaurado</a></h4>
                  <p>Veículo restaurado pela SETTA</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="{{url('assets/site/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
                  <a href="{{url('assets/site/img/portfolio/app2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Ver Foto"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Ressarcida</a></h4>
                  <p>Associada Ressarcida pela SETTA</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="{{url('assets/site/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                  <a href="{{url('assets/site/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Ver Foto"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Ressarcido</a></h4>
                  <p>Associado Ressarcida pela SETTA</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="{{url('assets/site/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                  <a href="{{url('assets/site/img/portfolio/web2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Ver Foto"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Restaurado</a></h4>
                  <p>Veículo restaurado pela SETTA</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="{{url('assets/site/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                  <a href="{{url('assets/site/img/portfolio/app3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Ver Foto"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Restaurado</a></h4>
                  <p>Veículo restaurado pela SETTA</p>
                </div>
              </div>
            </div>


          </div>

        </div>
      </section><!-- #Trabalhos -->

    <!--==========================
      Clientes
    
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Clientes Empresariais</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clientes -->

    <!--==========================
      Depoimentos
      ============================-->
      <section id="testimonials" class="section-bg wow fadeInUp">
        <div class="container">

          <header class="section-header">
            <h3>Depoimentos</h3>
          </header>

          <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <img src="{{url('assets/site/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Raul Silva</h3>
              <h4>Funcionário &amp; Associado</h4>
              <p>
                <img src="{{url('assets/site/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                Alem de fazer parte dessa família pra mim é uma honra ser associado dela e contar com uma empresa séria e comprometida.
                <img src="{{url('assets/site/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
              </p>
            </div>

            <div class="testimonial-item">
              <img src="{{url('assets/site/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Ana Coutinho</h3>
              <h4>Associada</h4>
              <p>
                <img src="{{url('assets/site/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                Meu marido é associado a muito tempo, e a alguns meses ele indicou o seguro da SETTA para minha moto e eu amei os benefícios.
                <img src="{{url('assets/site/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
              </p>
            </div>

            <div class="testimonial-item">
              <img src="{{url('assets/site/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
              <h3>Joyce Alves</h3>
              <h4>Associada</h4>
              <p>
                <img src="{{url('assets/site/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                A alguns meses minha moto foi roubada e a SETTA como sempre cumpriu seu papel e me ressarciu.
                <img src="{{url('assets/site/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
              </p>
            </div>

            <div class="testimonial-item">
              <img src="{{url('assets/site/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Matheus Augusto</h3>
              <h4>Associado</h4>
              <p>
                <img src="{{url('assets/site/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                Ano passado não era associado e perdi meu carro com perda total por que quis contar com a sorte, mas depois disso resolvi contar com a SETTA.
                <img src="{{url('assets/site/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
              </p>
            </div>

            <div class="testimonial-item">
              <img src="{{url('assets/site/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
              <h3>André Aquino</h3>
              <h4>Associado</h4>
              <p>
                <img src="{{url('assets/site/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                Sou associado SETTA a um bom tempo mas no ultimo natal tive meu carro roubado, a SETTA em 4 horas recuperou meu veículo e minha alegria e satisfação foi imensa.
                <img src="{{url('assets/site/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
              </p>
            </div>

          </div>

        </div>
      </section><!-- #Depoimentos -->

    <!--==========================
      Contato
      ============================-->
      <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

          <div class="section-header">
            <h3>Nossos Contatos</h3>
            <p>Nossa equipe de suporte sempre está a disposição</p>
          </div>

          <div class="row contact-info">

            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Endereço</h3>
                <address>Vila Matary, Centro, Itaquitinga-PE</address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Telefone</h3>
                <p><a href="tel:+5536431769">(81) 3643-1769</a></p>
                <p><a href="tel:+5508000420226">08000420226</a></p>
                <p><a href="tel:+558140421632">8140421632</a></p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">contato@settaprotecao.com.br</a></p>
              </div>
            </div>

          </div>

          <!--Egoi-->
          <script type="text/javascript" id="script_1e2e1orsemC9s16bDe7-f0-b57">
            var _egoiLoaderMulti = _egoiLoaderMulti || [];
            var _egoiLoaderValues = [];
            _egoiLoaderValues.push(["_setForm", "1e2e1orsemC9s16bDe7-f0-b57"]);
            _egoiLoaderValues.push(["_setList", "1"]);
            _egoiLoaderValues.push(["_setResource", "f6ac93d6e9bc780faf2abe53a4efa181"]);
            _egoiLoaderValues.push(["_setUrl", "http://www.23.mkitd7.com/"]);
            _egoiLoaderValues.push(["_setType", "button"]);
            _egoiLoaderValues.push(["_setFontColor", "#ffffff"]);
            _egoiLoaderValues.push(["_setText", "Fazer Cotação"]);
            _egoiLoaderValues.push(["_setWidth", "354"]);
            _egoiLoaderValues.push(["_setHeight", "425"]);
            _egoiLoaderValues.push(["_setSubscriberCount", "false"]);
            _egoiLoaderValues.push(["_setSubscriberLabel", "contatos"]);
            _egoiLoaderMulti.push(_egoiLoaderValues);
            (function() {
              var egoi = document.createElement("script"); egoi.type = "text/javascript"; egoi.async = true;
              egoi.src = "http://www.23.mkitd7.com/include/javascript/egoi.js";
              var e = document.getElementById("script_1e2e1orsemC9s16bDe7-f0-b57"); e.parentNode.insertBefore(egoi, e);
            })();
          </script>
          <div id="a1e2e1orsemC9s16bDe7-f0-b57"></div>

          <div class="form">
           <div class="text-center"><button type="submit" id="b1e2e1orsemC9s16bDe7-f0-b57" ></button></div>

         </form>
       </div>

     </div>
   </section><!-- #contato -->

 </main>



 @endsection
