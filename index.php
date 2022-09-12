<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Mono">
    <script src="https://kit.fontawesome.com/62947d1c73.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" class="img-fluid" alt="...">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorías</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Sala</a></li>
                            <li><a class="dropdown-item" href="#">Habitación</a></li>
                            <li><a class="dropdown-item" href="#">Niños</a></li>
                            <li><a class="dropdown-item" href="#">Baños</a></li>
                            <li><a class="dropdown-item" href="#">Cocina</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Texto buscado" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>


    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-sm">
        <div class="row">
            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3">
                    <div class="card-body text-primary">
                        <img src="assets/top.png" class="img-fluid d-block mx-auto" alt="..." style="width: 150px;">
                        <h3 class=" card-title text-center text-dark mt-2">Nosotros</h3>
                        <p class="card-text text-dark">Some quick example text to build on the card title and make up
                            the bulk of
                            the card's content.</p>
                        <button class="btn btn-success d-block mx-auto">
                            <i class="fa-regular fa-eye"></i>
                            Ver detalle
                        </button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3">
                    <div class="card-body text-primary">
                        <img src="assets/top.png" class="img-fluid d-block mx-auto" alt="..." style="width: 150px;">
                        <h3 class=" card-title text-center text-dark mt-2">Nuestra Misión</h3>
                        <p class="card-text text-dark">Some quick example text to build on the card title and make up
                            the bulk of
                            the card's content.</p>
                        <button class="btn btn-success d-block mx-auto">
                            <i class="fa-regular fa-eye"></i> Ver
                            detalle</button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3">
                    <div class="card-body text-primary">
                        <img src="assets/top.png" class="img-fluid d-block mx-auto" alt="..." style="width: 150px;">
                        <h3 class=" card-title text-center text-dark mt-2">Nuestra Visión</h3>
                        <p class="card-text text-dark">Some quick example text to build on the card title and make up
                            the bulk of
                            the card's content.</p>
                        <button class="btn btn-success d-block mx-auto"> <i class="fa-regular fa-eye"></i> Ver
                            detalle</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <h1 class="text-center mt-5 mb-4">Catalogo</h1>


    <div class="container-sm">
        <div class="row d-flex justify-content-between flex-wrap">
            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p style="font-family: 'Roboto Mono'">$10.50</p>
                        <hr>
                        <button class="btn btn-dark w-100 d-flex justify-content-between">
                            <span><i class="fa-regular fa-eye"></i> Ver</span>
                            <span><i class="fa-solid fa-cart-plus"></i> Comprar</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p style="font-family: 'Roboto Mono'">$10.50</p>
                        <hr>
                        <button class="btn btn-dark w-100 d-flex justify-content-between">
                            <span><i class="fa-regular fa-eye"></i> Ver</span>
                            <span><i class="fa-solid fa-cart-plus"></i> Comprar</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p style="font-family: 'Roboto Mono'">$10.50</p>
                        <hr>
                        <button class="btn btn-dark w-100 d-flex justify-content-between">
                            <span><i class="fa-regular fa-eye"></i> Ver</span>
                            <span><i class="fa-solid fa-cart-plus"></i> Comprar</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p style="font-family: 'Roboto Mono'">$10.50</p>
                        <hr>
                        <button class="btn btn-dark w-100 d-flex justify-content-between">
                            <span><i class="fa-regular fa-eye"></i> Ver</span>
                            <span><i class="fa-solid fa-cart-plus"></i> Comprar</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p style="font-family: 'Roboto Mono'">$10.50</p>
                        <hr>
                        <button class="btn btn-dark w-100 d-flex justify-content-between">
                            <span><i class="fa-regular fa-eye"></i> Ver</span>
                            <span><i class="fa-solid fa-cart-plus"></i> Comprar</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p style="font-family: 'Roboto Mono'">$10.50</p>
                        <hr>
                        <button class="btn btn-dark w-100 d-flex justify-content-between">
                            <span><i class="fa-regular fa-eye"></i> Ver</span>
                            <span><i class="fa-solid fa-cart-plus"></i> Comprar</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p style="font-family: 'Roboto Mono'">$10.50</p>
                        <hr>
                        <button class="btn btn-dark w-100 d-flex justify-content-between">
                            <span><i class="fa-regular fa-eye"></i> Ver</span>
                            <span><i class="fa-solid fa-cart-plus"></i> Comprar</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p style="font-family: 'Roboto Mono'">$10.50</p>
                        <hr>
                        <button class="btn btn-dark w-100 d-flex justify-content-between">
                            <span><i class="fa-regular fa-eye"></i> Ver</span>
                            <span><i class="fa-solid fa-cart-plus"></i> Comprar</span>
                        </button>
                    </div>
                </div>
            </div>


        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Todos los derechos reservados -
                            2022</a>
                        <a class="nav-link" href="#">Contáctanos</a>
                        <a class="nav-link" href="#">Síguenos en las redes sociales</a>
                        <a class="nav-link disabled">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</body>

</html>