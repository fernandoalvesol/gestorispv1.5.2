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
                  <a href="{{url('/documentos')}}" target="_blank"><p>2ª VIA DE BOLETO</p></a>
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
            </li>          
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

          <div class="row">
            <div class="container card">
              <div class="card-body">
                <form action="{{ url('https://eris.hinova.com.br/sga/area/4.1/login.action.php') }}" method="post">
                  @include('Site.Documentos._Partials.form')
                </form>
              </div>           

              <a href="{{ url('https://eris.hinova.com.br/sga/area/4.1/lembrarSenha.php?chave=e87ee83c9ff68ef88b44e53153f56dcfd0a6ee3316c86000a26566a6affaee26ffc1328c9c48a3cb9d1891ffbe7fe3abad9bed93b2fcb1770b70d54927192a2d')}}" target="_blank"><p class="lembrar">Lembrar Senha</p></a>
              
            </div>            
          </div>
        </section>

        @endsection
