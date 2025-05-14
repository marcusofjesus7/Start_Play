<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Start Play</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body id="index">
    <header>
        <img src="img/logo-pp2.png" alt="Logo">
        <h1>Start Play</h1>
        <a href="#"></a>
        <nav>
          <a href="index.php">Home</a>
          <a href="card.php">Games</a>
          <a href="videogame.php">Consoles</a>
        </nav>
        <form class="search-bar">
          <input type="text" placeholder="Pesquisar..." />
          <button type="submit" aria-label="Pesquisar"></button>
      </form>
      <div class="auth-buttons">
        <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#loginModal">Entrar</button>
        <button onclick="location.href='cadastro.php'">Cadastro</button>
    </div>
    </header>

    <main>
      <!-- SESSÃO 1 CARROSEL -->
      <section id="carousel">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img-principal 1.png" class="d-block w-100" alt="Imagem de um jogo">
                <div class="carousel-caption custom-caption">
                  <h5>O MAIS ESPERADO <br>DE TODOS</h5>
                  <strong>O jogo que todo mundo está <br>esperando!</strong>
                  <p>Venha ver o detalhe do novo jogo de<br>ficção científica com um final que vai</br>explodir a sua cabeça!</p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                    <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1z"/>
                    <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729q.211.136.373.297c.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466s.34 1.78.364 2.606c.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527s-2.496.723-3.224 1.527c-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.3 2.3 0 0 1 .433-.335l-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a14 14 0 0 0-.748 2.295 12.4 12.4 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.4 12.4 0 0 0-.339-2.406 14 14 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27s-2.063.091-2.913.27"/>
                  </svg>
                  <a class="especificacoes" href="#" data-bs-toggle="collapse" data-bs-target="#especificacoesCollapse" aria-expanded="false" aria-controls="especificacoesCollapse">
                    Especificações
                  </a>
                  <div class="collapse" id="especificacoesCollapse">
                    <div class="card card-body" id="especificacoesCard">
                      <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Fechar" data-bs-toggle="collapse" data-bs-target="#especificacoesCollapse"></button>
                      <div class="d-flex align-items-center">
                        <img src="img/chave-inglesa-pp.png" alt="chave-inglesa" class="img-especificacoes">
                        <h5>Especificações:</h5>
                      </div>
                      <hr>
                        <p><strong>Sistema Operacional:</strong> Windows 10 ou 11 (64-bit).</p>
                        <p>
                          <strong>Processador:</strong> Intel Core i7 (8ª geração ou superior) ou AMD Ryzen 7 (2ª geração ou superior).
                        </p>
                        <p>
                          <strong>Memória:</strong> 16GB RAM.
                        </p>
                        <p><strong>Placa de Vídeo:</strong>  NVIDIA GeForce RTX 2070 Super (8GB VRAM) ou AMD Radeon RX 5700 XT ou superior.</p>
                        <p>
                          <strong>DirectX:</strong> Versão 12.
                        </p>
                        <p>
                          <strong>Armazenamento:</strong> 22 GB de espaço livre.
                        </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img-principal 2.png" class="d-block w-100" alt="imagem de um jogo">
                <div class="carousel-caption custom-caption">
                  <h5>DESCONHECIDO E <br>GENIAL</h5>
                  <strong>A inovação indie que você não <br>conhece!</strong>
                  <p>Prepare-se para descobrir o jogo indie que <br>vai surpreender você com ideias frescas  e <br>uma experiência inesquecível!</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                      <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1z"/>
                      <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729q.211.136.373.297c.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466s.34 1.78.364 2.606c.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527s-2.496.723-3.224 1.527c-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.3 2.3 0 0 1 .433-.335l-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a14 14 0 0 0-.748 2.295 12.4 12.4 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.4 12.4 0 0 0-.339-2.406 14 14 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27s-2.063.091-2.913.27"/>
                    </svg>
                    <a class="especificacoes" href="#" data-bs-toggle="collapse" data-bs-target="#especificacoesCollapse" aria-expanded="false" aria-controls="especificacoesCollapse">
                      Especificações
                    </a>
                    <div class="collapse" id="especificacoesCollapse">
                      <div class="card card-body" id="especificacoesCard">
                        <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Fechar" data-bs-toggle="collapse" data-bs-target="#especificacoesCollapse"></button>
                        <div class="d-flex align-items-center">
                          <img src="img/chave-inglesa-pp.png" alt="chave-inglesa" class="img-especificacoes">
                          <h5>Especificações:</h5>
                        </div>
                        <hr>
                          <p><strong>Sistema Operacional:</strong> Windows 10 ou superior (64-bit) .</p>
                          <p>
                            <strong>Processador:</strong> Intel Core i3 ou AMD equivalente.
                          </p>
                          <p>
                            <strong>Memória:</strong> 4GB RAM.
                          </p>
                          <p><strong>Placa de Vídeo:</strong> NVIDIA GeForce GTX 560 ou AMD Radeon HD 6870 (com 1GB VRAM).</p>
                          <p>
                            <strong>DirectX:</strong> Versão 11.
                          </p>
                          <p>
                            <strong>Armazenamento:</strong> 8 GB de espaço livre.
                          </p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img-principal 3.png" class="d-block w-100" alt="imagem de um jogo">
                <div class="carousel-caption custom-caption">
                  <h5>O MAIS VENDIDO <br>DE TODOS</h5>
                  <strong>O jogo mais vendido de todos <br>os tempos!</strong>
                  <p>O fenômeno global que redefiniu os jogos de <br> mundo aberto! Com incríveis +500 MILHÕES <br> de cópias vendidas!</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                      <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1z"/>
                      <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729q.211.136.373.297c.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466s.34 1.78.364 2.606c.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527s-2.496.723-3.224 1.527c-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.3 2.3 0 0 1 .433-.335l-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a14 14 0 0 0-.748 2.295 12.4 12.4 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.4 12.4 0 0 0-.339-2.406 14 14 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27s-2.063.091-2.913.27"/>
                    </svg>
                    <a class="especificacoes" href="#" data-bs-toggle="collapse" data-bs-target="#especificacoesCollapse" aria-expanded="false" aria-controls="especificacoesCollapse">
                      Especificações
                    </a>
                    <div class="collapse" id="especificacoesCollapse">
                      <div class="card card-body" id="especificacoesCard">
                        <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Fechar" data-bs-toggle="collapse" data-bs-target="#especificacoesCollapse"></button>
                        <div class="d-flex align-items-center">
                          <img src="img/chave-inglesa-pp.png" alt="chave-inglesa" class="img-especificacoes">
                          <h5>Especificações:</h5>
                        </div>
                        <hr>
                          <p><strong>Sistema Operacional:</strong> Windows 10 (64-bit).</p>
                          <p>
                            <strong>Processador:</strong> Intel Core i3 ou AMD equivalente .
                          </p>
                          <p>
                            <strong>Memória:</strong> 2GB RAM.
                          </p>
                          <p><strong>Placa de Vídeo:</strong> Intel HD Graphics integrada ou AMD Radeon R2 Graphics integrada.</p>
                          <p>
                            <strong>DirectX:</strong> Versão 12.
                          </p>
                          <p>
                            <strong>Armazenamento:</strong> 2 GB de espaço livre.
                          </p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </section>

      <!-- SESSÃO 2 -->
      <section class="container mt-1">
        <div class="row d-flex justify-content-center text-center g-0">
            <!-- Card 1 -->
            <article class="col-lg-3 col-md-6 mb-0 mx-auto">
                <div class="card h-100 text-dark bg-white custom-card">
                    <div class="card-body card-images d-flex justify-content-center">
                        <img src="img/img-card-pp.png" alt="Imagem do jogo Cesties of Reventure" class="img-fluid me-4" style="max-width: 45%;">
                        <img src="img/img-card1-pp.png" alt="Imagem do jogo Buralist Bkysatine" class="img-fluid" style="max-width: 45%;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Jogos Indies:</h5>
                        <p class="card-text">Originalidade e <br>inovação.</p>
                        <button class="btn btn-secondary btn-sm rounded-pill" onclick="location.href='card.php#card-indie'">QUERO CONHECER</button>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="col-lg-3 col-md-6 mb-0 mx-auto">
                <div class="card h-100 text-dark bg-white custom-card">
                    <div class="card-body card-images d-flex justify-content-center">
                        <img src="img/img-card2-pp.png" alt="Imagem do jogo Alek-S-T-H-O-R" class="img-fluid me-4" style="max-width: 45%;">
                        <img src="img/img-card3-pp.png" alt="Imagem do jogos Knight Souls" class="img-fluid" style="max-width: 45%;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Jogos AAA:</h5>
                        <p class="card-text">O ápice da produção, o sucesso em escala global.</p>
                        <button class="btn btn-secondary btn-sm rounded-pill" onclick="location.href='card.php#card-aaa'">QUERO CONHECER</button>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="col-lg-3 col-md-6 mb-0 mx-auto">
                <div class="card h-100 text-dark bg-white custom-card">
                    <div class="card-body card-images d-flex justify-content-center">
                        <img src="img/img-card4-pp.png" alt="Imagem do jogo Survivalcraft" class="img-fluid me-4" style="max-width: 45%;">
                        <img src="img/img-card5-pp.png" alt="Imagem do jogo BlockZ" class="img-fluid" style="max-width: 45%;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Recordes e Legado:</h5>
                        <p class="card-text">A história dos jogos mais vendidos.</p>
                        <button class="btn btn-secondary btn-sm rounded-pill" onclick="location.href='card.php#card-vendidos'">QUERO CONHECER</button>
                    </div>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="col-lg-3 col-md-6 mb-0 mx-auto">
                <div class="card h-100 text-dark bg-white custom-card">
                    <div class="card-body card-images d-flex justify-content-center">
                        <img src="img/img-card6-pp.png" alt="Imagem" class="img-fluid me-4" style="max-width: 45%;">
                        <img src="img/img-card7-pp.png" alt="Imagem" class="img-fluid" style="max-width: 45%;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">História dos jogos:</h5>
                        <p class="card-text">A paixão que moldou a indústria.</p>
                        <button class="btn btn-secondary btn-sm rounded-pill" onclick="location.href='videogame.php'">QUERO CONHECER</button>
                    </div>
                </div>
            </article>
        </div>
      </section>

       <footer class="footer-index">
          <div class="footer-content">
              <!-- Primeira Coluna -->
              <div class="footer-column">
                  <p><strong>Starplay</strong> é sua fonte completa de conhecimento sobre games. Nosso objetivo é direto: oferecer informações precisas e guias práticos para todos os jogadores. Encontre tudo o que você precisa para dominar seus jogos favoritos em um só lugar.</p>
                  <p><strong>Starplay: Game On, Knowledge Up!</strong></p>
              </div>
              <!-- Segunda Coluna -->
              <div class="footer-column">
                  <h5>Contatos:</h5>
                  <p><strong>Email:</strong> emailficticostarplay@gmail.com</p>
                  <p><strong>Número:</strong> (99) 99999-9999</p>
              </div>
          </div>
          <!-- Parte de Baixo -->
          <div class="footer-bottom">
              <p>&copy; 2025 StarPlay. Todos os direitos reservados.</p>
              <p>Desenvolvido por <strong>Equipe Starplay.</strong></p>
          </div>
        </footer>
    </main>

    <!-- Modal 1: Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-4 py-1">
              <!-- Botão de Fechar no canto superior direito -->
              <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Fechar"></button>
              <!-- Imagem e texto no topo do modal -->
              <div class="d-flex align-items-center justify-content-center mt-3 mb-3">
                  <img src="img/logo-pp2.png" alt="Logo Startplay" style="max-width: 40px; margin-right: 10px;">
                  <h1 class="fs-5 mb-0">StartPlay</h1>
              </div>
              <!-- Título do modal -->
              <h2 class="modal-title fs-2 text-center mt-3" id="loginModalLabel">Login</h2>
              <p class="text-center fs-6">Complete com os seus dados para efetuar o login.</p>
              <div class="modal-body">
                  <!-- Formulário de Login -->
                  <?php 
                    $erro = [];
                    $dados = [];

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                      $dados = [
                        "email" => $_POST["email"],
                        "password" => $_POST["password"],
                        "confirm_password" => $_POST["confirm_password"]
                      ];
                      function email($email) {
                        if ($email != "emailficticostarplay@gmail.com") {
                          return "Esse e-mail não está cadastrado";
                        }
                        return null; 
                      }
                      function senha($password) {
                        if ($password != "abcdefgh") {
                            return "Senha incorreta";
                        }
                        return null;
                      }
                    
                      function confirmarSenha($password, $confirm_password) {
                          if ($confirm_password != $password) {
                              return "As senhas não são iguais";
                          }
                          return null;
                      }

                      $erro["email"] = email($dados["email"]);
                      $erro["password"] = senha($dados["password"]);
                      $erro["confirm_password"] = confirmarSenha($dados["password"], $dados["confirm_password"]);


                      if (!empty(array_filter($erro))) {
                        // Reabre o modal se houver erros
                        echo "
                        <script>
                          document.addEventListener('DOMContentLoaded', function () {
                            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                            loginModal.show();
                          });
                        </script>";
                      }
                      else {
                        // Exibe o modal de sucesso
                        echo "
                        <script>
                          document.addEventListener('DOMContentLoaded', function () {
                            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                            successModal.show();
                    
                            // Redireciona após 3 segundos
                            setTimeout(function () {
                              window.location.href = 'index.php';
                            }, 3000);
                          });
                        </script>";
                      }
                    }
                   ?>
                  <form action="" method="POST" id="login-form">
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($dados["email"] ?? '')?>" placeholder="Digite seu e-mail" required>
                        <p style="color: red;"><?php echo $erro["email"] ?? ""; ?></p>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" id="password" name="password" class="form-control" value="<?php echo htmlspecialchars($dados["password"] ?? '') ?>" placeholder="Digite sua senha" required>
                        <p style="color: red;"><?php echo $erro["password"] ?? ""; ?></p>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirmar Senha:</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" value="<?php echo htmlspecialchars($dados['confirm_password'] ?? '') ?>" placeholder="Confirme sua senha" required>
                        <p style="color: red;"><?php echo $erro["confirm_password"] ?? ""; ?></p>
                    </div>
                    <div class="form-actions mt-4 d-flex justify-content-between">
                        <button type="reset" class="btn btn-outline-secondary w-50"style="margin-right: 20px;">Limpar</button>
                        <button type="submit" class="btn btn-outline-primary w-50" id="login-submit">
                          Entrar
                        </button>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                  <p class="mb-1 fs-6">Não tem uma conta? <a href="cadastro.php" class="text-primary">Cadastre-se aqui.</a></p>
                  <p class="mb-1 fs-6">Esqueceu a Senha? <a href="#" class="text-primary">Mudar aqui.</a></p>
              </div>
          </div>
      </div>
    </div>

    <!--
    <div class="modal fade" id="secondFactorModal" tabindex="-1" aria-labelledby="secondFactorModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4 py-1">
          
          <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Fechar"></button>
          
          <div class="d-flex align-items-center justify-content-center mt-3 mb-3">
            <img src="img/logo-pp2.png" alt="Logo Startplay" style="max-width: 40px; margin-right: 10px;">
            <h1 class="fs-5 mb-0">StartPlay</h1>
          </div>
          
          <h2 class="modal-title fs-3 text-center mt-3" id="secondFactorModalLabel">Segundo Fator de <br> Autenticação</h2>
          <p class="text-center fs-6 mb-3">Responda à pergunta de segurança para continuar.</p>
          <div class="modal-body">
            
            <form action="processar_2fa.php" method="POST" id="second-factor-form">
              <div class="mb-3">
                <label for="security-answer" class="form-label">Qual o nome da sua mãe?</label>
                <input type="text" id="security-answer" name="security-answer" class="form-control" placeholder="Digite a resposta" required>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-primary w-75 mt-3">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Modal de Login Efetuado -->
      <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-4 py-1">
            <!-- Botão de Fechar no canto superior direito -->
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Fechar"></button>
            <!-- Conteúdo do Modal -->
            <div class="modal-body text-center">
              <img src="img/favicon.ico" alt="Ícone de Sucesso" style="max-width: 40px; margin-bottom: 20px;">
              <h2 class="modal-title fs-3 text-success" id="successModalLabel">Login efetuado com sucesso!</h2>
              <p class="fs-6 mt-3">Bem-vindo(a) de volta! Você será redirecionado em breve.</p>
              <div class="d-flex justify-content-center mt-4">
                <button type="button" class="btn btn-outline-success w-50" data-bs-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const loginForm = document.getElementById("login-form");
        const secondFactorModal = new bootstrap.Modal(document.getElementById("secondFactorModal"));

        // Intercepta o envio do formulário de login
        loginForm.addEventListener("submit", function (event) {
          event.preventDefault(); // Impede o envio padrão do formulário

          // Coleta os dados do formulário
          const email = document.getElementById("email").value;
          const password = document.getElementById("password").value;
          const confirmPassword = document.getElementById("confirm_password").value;

          // Simula a validação do formulário
          if (email === "emailficticostarplay@gmail.com" && password === "abcdfghi" && password === confirmPassword) {
            console.log("Validação bem-sucedida!");

            // Abre o modal de segundo fator de autenticação
            secondFactorModal.show();
          } else {
            console.log("Erro na validação. Verifique os dados.");
            alert("Erro na validação. Verifique os dados.");
          }
        });
      });
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const loginForm = document.getElementById("login-form");
        const limparBtn = document.querySelector('button[type="reset"]'); // Seleciona o botão de reset

        // Adiciona funcionalidade ao botão de limpar
        limparBtn.addEventListener("click", function (event) {
          event.preventDefault(); // Impede o comportamento padrão do botão

          // Redefine os campos do formulário
          loginForm.reset();

          // Remove as mensagens de erro, se existirem
          const errorMessages = document.querySelectorAll("p[style='color: red;']");
          errorMessages.forEach((message) => {
            message.textContent = ""; // Limpa o texto das mensagens de erro
          });

          // Opcional: Remove os valores dos campos preenchidos dinamicamente pelo PHP
          const inputs = loginForm.querySelectorAll("input");
          inputs.forEach((input) => {
            input.value = ""; // Limpa os valores dos campos
        });
      });
    });
    </script>
</body>
</html>