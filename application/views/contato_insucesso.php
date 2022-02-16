<nav class="navbar navbar-mobile wow fadeInDown">
    <div class="caeli-navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Caeli</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav menu">
                <li class="active"><a href="#home" class="item1">Home</a></li>
                <li><a href="#sobrenos" class="item2">Sobre nós</a></li>
                <li><a href="#cases" class="item3">Cases</a></li>
                <li><a href="#fale-conosco" class="item4">Fale Conosco</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="home" class="container-fluid padding-off home-div">
    <img src="<?= base_url(); ?>assets/images/img-header.jpg" class="img-responsive hidden-xs">
    <img src="<?= base_url(); ?>assets/images/img-header-mobile.jpg" class="img-responsive visible-xs">
    <img src="<?= base_url(); ?>assets/images/tablet.png" alt="Tablet" class="img-responsive tablet-img wow fadeInDownBig">
</div>

<div id="sobrenos" class="container-fluid padding-off sobre-nos">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt-sobre-nos wow fadeInLeft">
        <h1>Sobre nós</h1>
        <p>Somos uma agência que une criação e estratégia para otimização de resultados.</p>
        <p>Somos o parceiro ideal que trabalha todos os dias no progresso e
            crescimento do seu negócio. Sempre nos atualizando com as constantes
            mudanças do mercado e nas frequentes conversas com seus
            diferentes públicos no lugar ou dispositivos que estão.</p>
        <p>Trabalhamos por resultados no presente, pois no futuro isso fará toda a diferença.</p>
        <div class="boxes">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 branding">
                <h3>Branding</h3>
                <p>Construímos marcas fortes para o
                    mercado, com estratégias de
                    comunicação que criam uma
                    identificação positiva no público.
                    Acreditamos na imagem da marca
                    como primordial para o sucesso
                    comercial de produtos, serviços e
                    empresas.</p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 digital">
                <h3>Digital</h3>
                <p>Geração de leads. In bound marketing.
                    Gestão de funil de vendas. Inteligência
                    de mercado pelos meios digitais.
                    Gestão de presença online.
                    Ferramentas que trazem resultados.
                    Resultado efetivo e diferenciado
                    também para o mercado imobiliário.</p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 estrategias">
                <h3>Estratégias Promocionais</h3>
                <p>Estímulo a compra, ao uso e à
                    fidelização do público por meio de
                    ações específicas nos pontos de
                    contato. Estreitamos laços com a
                    melhor relação custo-benefício,
                    fazendo uso da criatividade e da
                    inteligência para encontrar alternativas.</p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 infos">
                <p>Mídia Estratégica;</p>
                <p>Planejamento;</p>
                <p>Conceituação de Produto;</p>
                <p>Marketing de Varejo;</p>
                <p>Design;</p>
                <p>Campanhas on e off;</p>
                <p>Endomarketing;</p>
                <p>Trade / PDV;</p>
                <p>Merchandising;</p>
                <p>...</p>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img-sobre-nos wow fadeInRight">
        <img src="assets/images/img-sobre-nos.png" class="img-responsive">
    </div>
</div>

<div id="cases" class="container-fluid cases wow fadeInUp">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <h1 class="visible-xs">Cases</h1>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="assets/images/cases.png" class="img-responsive center-block hidden-xs">
        <img src="assets/images/cases-mobile.png" class="img-responsive center-block visible-xs">
    </div>
</div>

<div class="container-fluid contato">
    <div class="col-xs-8 col-sm-6 col-sm-push-6 col-md-6 col-md-push-6 col-lg-6 col-lg-push-6 wow fadeInRight caeli-form">
        <h1>Fale Conosco</h1>
        <div class="form-div">
            <form method="post" role="form" action="<?php echo base_url("contato") ?>">

                <div class="input-box">
                    <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="Nome*" />
                </div>

                <div class="input-box">
                    <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="E-mail*" />
                </div>

                <div class="input-box">
                    <div class="custom_select">
                        <select id="assunto1" class="assunto form-control" name="assunto1">
                            <option value="" disabled selected>ASSUNTO</option>
                            <option value="Dúvidas ou Sugestões">Dúvidas ou Sugestões</option>
                            <option value="Outros assuntos">Outros assuntos</option>
                        </select>
                    </div>
                </div>

                <div class="input-box">
                    <textarea id="form-mensagem" class="msg form-control" name="mss" required="required" placeholder="Mensagem"></textarea>
                </div>

                <div class="input-box btn-enviar">
                    <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                </div>

                <div class="input-box obrigatorio">
                    <small>* Os campos marcados com asterisco são de preenchimento obrigatório.</small>
                </div>

            </form>
        </div>




        <div class="col-sm-10 col-md-9 col-lg-9 rodape">
            <p>Belo Horizonte: R. Alagoas, 772 <br class="visible-xs">- <br class="visible-sm">5° Andar - Savassi<br>
                Belo Horizonte - MG, 30130-160</p>
            <p>Operação São Paulo: Av. do Café, 238 - <br class="visible-sm">Vila Guarani<br>
                São Paulo - SP, 04310-040</p>
            <p>Telefone 11 985440130</p>
            <p class="copyright">Copyright © 2010-2022 CAELIS PROPAGANDAL. <br class="visible-sm visible-xs">All rights reserved.</p>
        </div>

    </div>

    <div class="col-xs-4 col-sm-6 col-sm-pull-6 col-md-6 col-md-pull-6 col-lg-6 col-lg-pull-6 wow fadeInLeft celular">
        <img src="<?= base_url(); ?>assets/images/celular.png" class="img-responsive">
    </div>
</div>

<div id="aviso" class="aviso text-center">
    <div>
        <button type="button" class="close" id="close"><span aria-hidden="true">&times;</span></button>
        <p>O e-mail não pode ser enviado!<br />
            <strong>Tente novamente!</strong><br />
            Se o problema persistir, entre em contato<br />
            pelo e-mail <strong>contato@caelicomunicacao.com.br</strong>
        </p>
    </div>
</div>