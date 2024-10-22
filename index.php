<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store Control - Point Of Sales</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
  <style>
    div#main-menu{
      height: 100vh;
      width: 4.5em;
      position: fixed;
      top:0;
      left:0;
    }

    div#categoriesContent > div.tab-pane {
      height:94vh;
      overflow-x:hidden!important;
    }

    div > div.product-card:hover {
      box-shadow: inset #0d6efd 0 0 5px 1px!important;
      background-color: rgba(13,110,253,0.25)
    }

    div.cart img{
      max-width: 100%;
      max-height: 165px;
    }

    div.monitor{
      background: linear-gradient(to top, #000000, #000000, #333333, #333333);
      background-size: cover;
      background-size: 100% 1px;
      height: 100%;

      color: #00ff00;
    }

    @media screen{
      .monitor{
        animation: scanlines infinite 55s linear;
      }
    }
    @keyframes scanlines {
      from {
        background-position: 0 0;
      }
      to {
        background-position: 0 -10px;
      }
    }

    @media (orientation: landscape){
      .offcanvas-bottom{
        height:35vh;
      }
    }

    @media (orientation: portrait){
      .offcanvas-bottom{
        height:30vh;
      }
    }

    @media (max-width: 760px) {
      .offcanvas-bottom{
        height:65vh;
      }
    }

    @media (max-width: 680px),(max-height: 428px) {
      .offcanvas-bottom{
        height:100vh;
      }
    }

    @media (max-width: 834px) and (orientation: portrait) {
      .offcanvas-bottom{
        height:40vh;
      }
    }
  </style>
</head>
<body>
  <!-- Main Menu -->
  <div id="main-menu" class="d-flex flex-column flex-shrink-0 text-white bg-dark float-left">
    <a href="" class="d-block link-light text-white text-decoration-none text-center" href="./" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only"><i class="bi bi-braces-asterisk"></i></a>
    <hr>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li class="nav-item">
        <a href="#" class="nav-link text-white active py-3" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
            <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377z"/>
            <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3z"/>
          </svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white py-3" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
          </svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white py-3" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z"/>
          </svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white py-3" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
          </svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white py-3" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
        </a>
      </li>
    </ul>
    <div class="dropdown border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 text-white link-light text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="24" height="24">
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3" style="">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>

  <div class="container-fluid d-flex" style="width:calc( 100% - 4.5em );margin-left:4.5em;">
    
    <div class="row">
      <!-- Parte Esquerda: Categorias e Produtos -->
      <div class="col-sm-12 col-md-8 col-lg-9">
        <!-- Tabs ou Pills para Categorias -->
        <ul class="nav nav-pills mb-3" id="categoriesTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="cat1-tab" data-toggle="pill" href="#cat1" role="tab">Categoria 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="cat2-tab" data-toggle="pill" href="#cat2" role="tab">Categoria 2</a>
          </li>
          <!-- Adicionar mais categorias aqui -->
        </ul>

        <!-- Produtos da Categoria Selecionada -->
        <div class="tab-content" id="categoriesContent">
          <div class="tab-pane fade show active overflow-auto" id="cat1" role="tabpanel" style="">
            <div class="row">
              <?php for($i=0; $i<20; $i++){ ?>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="card product-card shadow">
                  <img src="assets/products/3058.400x400.png" alt="Produto 1" class="img-fluid">
                  <div class="card-body">
                    <p class="mb-0">Hamburguer De Carne</p>
                    <p class="mb-0"><small>Santo Amaro</small></p>
                    <p class="mb-0"><small>720g</small></p>
                    <p><h5 class="text-end mb-0">&yen;1,000</h5></p>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- Adicionar mais produtos aqui -->
            </div>
          </div>
          <div class="tab-pane fade" id="cat2" role="tabpanel">
            <!-- Produtos da Categoria 2 -->
          </div>
        </div>
      </div>

      <!-- Parte Direita: Cabeçalho, Carrinho e Pagamento -->
      <div class="shadow col-sm-12 col-md-4 col-lg-3">
        <nav class="navbar navbar-dark bg-dark d-flex flex-row p-1 justify-content-around align-items-center">
          <span id="currentTime" class="badge bg-light text-dark"><?=date('H:i:s');?></span>
          <span id="currentDate" class="badge bg-light text-dark"><?=date('Y-m-d');?></span>
          <div class="d-flex flex-row-reverse align-items-center clearfix">
            <a href="#" class="nav-link link-light float-end p-0 ms-1" onclick="trocarUsuario()">
              <i class="bi bi-person-circle"></i>
            </a>
            <span id="loggedUser" class="badge bg-light text-dark float-end">Caixa 1</span>
          </div>
        </nav>
        <!-- Cabeçalho -->
        <div class="header p-1">
          <form action="">
            <div class="row mb-1">
              <div class="col-2">
                <label for="table">Table</label>
              </div>
              <div class="col">
                <select class="form-select form-select-lg" aria-label="table select">
                  <option selected>Open this select menu</option>
                  <?php for($i=1; $i<=20; $i++){
                    echo "<option value='{$i}'>{$i}</option>";
                  }?>
                </select>
              </div>
            </div>
          </form>
        </div>

        <!-- Lista de Produtos Comprados -->
        <div class="card mb-3" style="background-color:#333;">
          <div class="card-body">
            <div class="cart overflow-auto" style="height:75vh; scroll-snap-type: y mandatory;">
              <?php for($i=0; $i<20;$i++){?>
              <div class="card shadow-sm mb-3" style="scroll-snap-align:start;">
                <div class="row g-0">
                  <div class="col-4">
                    <img src="assets/products/3058.400x400.png" alt="img-fluid rounded-start" alt="assets/3058.400x400.png">
                  </div>
                  <div class="col-8">
                      <div class="card-body">
                        <h5 class="card-title text-truncate clearfix">Hamburguer de Carne<button class="btn btn-danger ms-1 float-end"><i class="bi bi-trash3-fill"></i></button></h5>
                        <form id="item01" action="#" class="form">
                          <div class="row">
                            <div class="col">
                              <div class="input-group">
                                <button type="button" class="btn btn-outline-success btn-add"><i class="bi bi-plus"></i></button>
                                <input id="" class="itemQtde form-control text-center" type="text" value="1">
                                <button type="button" class="btn btn-outline-danger btn-add"><i class="bi bi-dash"></i></button>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">Unitário</div>
                            <div class="col text-center">
                              <p class="card-text"><small class="text-muted itemPrice">&yen;1,000</small></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">Total</div>
                            <div class="col text-center itemTotal">&yen;1,000</div>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- Outros produtos comprados -->
            </div>
          </div>
          <!-- Total, Pagamento e Teclado Numérico -->
          <div class="payment-section mt-1">
            <div class="m-2 p-2" style="background-color:#ccc;">
              <div class="row">
                <div class="col">Total da Compra</div>
                <div class="col">&yen;<h4 id="totalAmount" class="float-end m-0">1,000</h4></div>
              </div>
            </div>
          </div>
         </div>

        <!-- Offcanvas Menu Toggle -->
        <button class="btn btn-lg btn-primary mt-3 float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="bi bi-list"></i></button>
      </div>
    </div>

    <!-- Off-Canvas -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas Bottom Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body small">
        <div class="row">
          <!-- Botões de Forma de Pagamento -->
          <div class="col-md-2 d-grip gap-2">
            <div class="payment-methods">
              <button class="btn btn-primary mb-1 me-1">Dinheiro</button>
              <button class="btn btn-primary mb-1 me-1">Cartão</button>
              <button class="btn btn-primary mb-1 me-1">QR Code</button>
              <button class="btn btn-primary mb-1 me-1">Dinheiro Digital</button>
            </div>
          </div>

          <!-- Teclas de Funções -->
          <div class="col-md-3">
            <div class="function-keys d-grip gap-2">
              <button type="button" class="btn btn-lg btn-secondary mb-1"><small>8%<i class="bi bi-arrow-left-right"></i>10%</small></button>
              <button type="button" class="btn btn-lg btn-secondary mb-1">Função 2</button>
              <button type="button" class="btn btn-lg btn-secondary mb-1">Função 3</button>
              <button type="button" class="btn btn-lg btn-secondary mb-1">Função 4</button>
              <button type="button" class="btn btn-lg btn-secondary mb-1">Função 5</button>
              <button type="button" class="btn btn-lg btn-secondary mb-1">Função 6</button>
              <!-- Adicionar mais funções -->
            </div>
            <div class="action-keys d-grip gap-2">
              <button type="button" class="btn btn-lg btn-primary mb-1"><i class="bi bi-arrow-left-square"></i></button>
              <button type="button" class="btn btn-lg btn-primary mb-1"><i class="bi bi-eject"></i></button>
              <button type="button" class="btn btn-lg btn-danger mb-1">C/CE</button>
              <!-- Adicionar mais funções -->
            </div>
          </div>

          <!-- Teclado Numérico -->
          <div class="col-md-4">
            <div class="numeric-keypad">
              <div class="">
                <!-- Numérico -->
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">1</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">2</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">3</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">4</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">5</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">6</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">7</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">8</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">9</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:30%;">0</button>
                <button class="btn btn-lg btn-dark mb-1 me-1" style="width:61%;">ENTER</button>
                <!-- Repete para todos os números -->
              </div>
            </div>
          </div>

          <!-- Teclas de Ação -->
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="monitor p-3">
                  <table>
                    <tbody>
                      <tr>
                        <td>TOTAL DA COMPRA</td>
                        <th class="text-end" style="font-size: 2em;">1,000</th>
                      </tr>
                      <tr>
                        <td>TOTAL PAGO</td>
                        <th class="text-end"><input type="text" class="form-control input-lg text-end" name="totalPago" id="totalPago" value="10,000"></th>
                      </tr>
                      <tr>
                        <td>TROCO</td>
                        <th class="text-end" style="font-size: 2em;">9,000</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <!-- Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>