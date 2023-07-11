<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>giacomocuratella - Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body>
    <main>
        <!-- HEADER -->
        <header class="container-fluid p-0 fixed-top">
            <nav class="navbar navbar-expand-lg bg-success border-bottom-dark" data-bs-theme="dark">
                <div class="container">
                  <a class="navbar-brand" href="/">Giacomocuratella.it</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/products">Prodotti</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About US</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>

        <!-- SPINNER -->
        <div class="d-flex justify-content-center mt-5 py-5" id="spinner">
          <div class="spinner-border" role="status" style="height: 6rem; width: 6rem;">
          </div>
        </div>

        <!-- ARTICLES -->
        <section class="container py-5 mt-5 d-none" id="containerProdotti">
          <div class="row" id="rigaProdotti">

          </div>
        </section>


        <!-- FOOTER -->
        <footer class="container-fluid py-2 bg-success mt-5">
            <div class="row justify-content-center">
                <div class="col-12 d-flex justify-content-center">
                    <small class="text-center text-white">All Rights Reserved 2023 GC</small>
                </div>
            </div>
        </footer>
    </main>
    <script src="/js/product.js"></script>
    <script src="https://kit.fontawesome.com/018c0fd7b3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>