@extends('Template.index')

@section('main_container')

    <!--==========================
      Quem Somos
      ============================-->
      <header id="header">
        <div class="container-fluid-docs">
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
            <a href="{{url('/')}}"><img src="{{url('assets/site/img/logo.png')}}" alt="Setta" title="Setta" /></a>
          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">

              <li><a href="{{url('/')}}">A Setta</a></li>
              <li><a href="{{url('/')}}">Nossos Produtos</a></li>
              <li><a href="{{url('/documentos')}}">Documentos</a></li>
              <li><a href="{{url('/')}}">Nossos Trabalhos</a></li> 
              <li><a href="{{url('/')}}">Contato</a></li>
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
          </ul>
        </nav>
      </div>
    </header>

    <section id="about">
      <div class="container">

        <header class="section-docs">
          <h3>Documentos Setta Proteção Veicular</h3>

          <p>
            REGULAMENTOS, TERMOS, COMUNICADOS. TUDO EM UM SÓ LUGAR PARA MANTERMOS A 
            TRANSPARÊNCIA EM TODOS OS NOSSOS PROCESSOS.
          </p>
          <p>
            Veja abaixo alguns arquivos e documentos de grande importância para o Associado Setta, incluindo nosso Regulamento Interno do Plano de Proteção Veicular Setta.<br>
            Seja para alguma eventualidade, você pode fazer downloads de todos os documentos aqui sempre que precisar.<br>

            <b>Atenção! O Regulamento Interno do Plano de Proteção Mútua Veicular é de grande importância que você baixe e leia com ateção.</b>
          </p>
        </header>

        <div class="row about-cols-docs">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col-docs">

              <h2 class="title"><i class="fa fa-file-text about-icones" aria-hidden="true"></i></br>
                <a href="{{url('http://www.settaprotecao.com.br/documentos/regulamento_geral.pdf')}}" target="_blank">Regulamento Interno -Versão 2020</a></h2>

              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="about-col-docs">

                <h2 class="title"><i class="fa fa-car about-icones" aria-hidden="true"></i></br><a href="{{url('http://www.settaprotecao.com.br/documentos/Comunicado_de_evento_associado.pdf')}}" target="_blank">Comunicado de Evento - Associado</a></h2>

              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col-docs">

                <h2 class="title"><i class="fa fa-car about-icones" aria-hidden="true"></i></br><a href="{{url('http://www.settaprotecao.com.br/documentos/Comunicado_de_evento_terceiros.pdf')}}" target="_blank">Comunicado de Evento - Terceiro</a></h2>

              </div>
            </div>

          </div>

          <div class="row about-cols-docs">

            <div class="col-md-4 wow fadeInUp">
              <div class="about-col-docs">

                <h2 class="title"><i class="fa fa-car about-icones" aria-hidden="true"></i></br>
                  <a href="{{url('http://www.settaprotecao.com.br/documentos/solicitacao_carro_reserva.pdf')}}" target="_blank">Solicitação de Carro Reserva</a></h2>

                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="about-col-docs">

                  <h2 class="title"><i class="fa fa-file-text about-icones" aria-hidden="true"></i></br><a href="{{url('http://www.settaprotecao.com.br/documentos/solicitacao_cancelamento_de_protecao.pdf')}}" target="_blank">Termo de Solicitação de Cancelamento</a></h2>

                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-col-docs">

                  <h2 class="title"><i class="fa fa-window-maximize about-icones" aria-hidden="true"></i></br><a href="{{url('http://www.settaprotecao.com.br/documentos/solicitacao_troca_de_vidro.pdf')}}" target="_blank">Solicitação de Troca de Vidros</a></h2>

                </div>
              </div>

            </div>

            <div class="row about-cols-docs">

              <div class="col-md-4 wow fadeInUp">
                <div class="about-col-docs">

                  <h2 class="title"><i class="fa fa-wifi about-icones" aria-hidden="true"></i>
                  </br>
                  <a href="#">Regulamento - Rastreamento Veicular</a></h2>

                </div>
              </div>

              <div class="col-md-4 wow fadeInUp">
                <div class="about-col-docs">

                  <h2 class="title"><i class="fa fa-file-text about-icones" aria-hidden="true"></i>
                  </br>
                  <a href="{{url('http://www.settaprotecao.com.br/documentos/manual_associado_setta.pdf')}}" target="_blank">Manual do Associado Setta</a></h2>

                </div>
              </div>
            </div>
          </section>





          @endsection
