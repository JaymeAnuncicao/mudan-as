<?php require '../php/PHP/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mecanauto Martinelli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require '../php/arquivosRequire/header.php';?>
    
</head>
<body class="home">
    <?php require '../php/arquivosRequire/navbar.php';?>
    <header class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/php/Img/img-home.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/php/Img/img-home.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/php/Img/img-home.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- <div class="container row">
            <div class="container row">
                <h1 class="ml-3 ml-lg-0 text-white">Mecanauto Martinelli</h1>
            </div>
                <h4 class="ml-3 ml-lg-0 text-white">Conserte o seu veículo com um engenheiro certificado. <br> Confiança e garantia de qualidade.</h4>
           <button class="d-flex m-auto rounded btn btn-white">Saiba Mais</button>
        </div> -->
    </header>
    <section class="servicos container-fluid">
        <h1 class="text-center dis">Nossos Serviços</h1>
        <div class="row tan">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-center">Motor</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-center">Motor</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-center">Motor</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-center">Motor</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dist tan">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-center">Motor</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-center">Motor</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-center">Motor</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="text-center">Motor</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="produtos">
            <h1 class="text-center dis">Nossos Produtos</h1>
            <div class="container-fluid justify-content-center row">
                <div class="z-depth-2 ml-4 mt-md-0 card" style="width: 18rem;">
                    <div class="view overlay">
                        <div class="view overlay zoom">
                            <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                            <div class="mask flex-center">
                            </div>
                            <div class="mask flex-center rgba-black-strong">
                                <h3 class="white-text ">Motores</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blue darken-4 card-body">
                        <p class="card-text text-center font-weight-bold text-white">Motores</p>
                    </div>
                </div>
                <div class="z-depth-2 ml-4 mt-4 mt-md-0 card" style="width: 18rem;">
                    <div class="view overlay">
                        <div class="view overlay zoom">
                            <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                            <div class="mask flex-center">
                            </div>
                            <div class="mask flex-center rgba-black-strong">
                                <h3 class="white-text ">Motores</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blue darken-4 card-body">
                        <p class="card-text text-center font-weight-bold text-white">Motores</p>
                    </div>
                </div>
                <div class="z-depth-2 ml-4 mt-4 mt-md-0 card" style="width: 18rem;">
                    <div class="view overlay">
                        <div class="view overlay zoom">
                            <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                            <div class="mask flex-center">
                            </div>
                            <div class="mask flex-center rgba-black-strong">
                                <h3 class="white-text ">Motores</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blue darken-4 card-body">
                        <p class="card-text text-center font-weight-bold text-white">Motores</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid justify-content-center row mt-4">
                <div class="z-depth-2 ml-4 mt-4 mt-md-0 card" style="width: 18rem;">
                    <div class="view overlay">
                        <div class="view overlay zoom">
                            <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                            <div class="mask flex-center">
                            </div>
                            <div class="mask flex-center rgba-black-strong">
                                <h3 class="white-text ">Motores</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blue darken-4 card-body">
                        <p class="card-text text-center font-weight-bold text-white">Motores</p>
                    </div>
                </div>
                <div class="z-depth-2 ml-4 mt-4 mt-md-0 card" style="width: 18rem;">
                    <div class="view overlay">
                        <div class="view overlay zoom">
                            <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                            <div class="mask flex-center">
                            </div>
                            <div class="mask flex-center rgba-black-strong">
                                <h3 class="white-text ">Motores</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blue darken-4 card-body">
                        <p class="card-text text-center font-weight-bold text-white">Motores</p>
                    </div>
                </div>
                <div class="z-depth-2 ml-4 mt-4 mt-md-0 card" style="width: 18rem;">
                    <div class="view overlay">
                        <div class="view overlay zoom">
                            <img class="card-img-top" src="/php/Img/motor.jpg" alt="Card image cap">
                            <div class="mask flex-center">
                            </div>
                            <div class="mask flex-center rgba-black-strong">
                                <h3 class="white-text ">Motores</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blue darken-4 card-body">
                        <p class="card-text text-center font-weight-bold text-white">Motores</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="parceiros">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="/php/Img/motor.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/php/Img/motor.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/php/Img/motor.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>