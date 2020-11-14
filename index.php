<?php include('conn.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc_header.php'); ?>
</head>

<body>
    <?php include('inc_nav.php'); ?>
    <section id="slide">
        <div class="row">
            <div class="col-ml-12 col-xl-12">
                <div class="overflow-hidden">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/tenet.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/spiderman.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/batman.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <div class="row">
        <div class="col-xl-2 col-sm-2"></div>
        <div class="col-sm-8 col-xl-8">
            <div class="text-center">
                <h3><u>Movies</u></h3>
            </div>
            <br>
            <div class="row">
                <div class="card-deck">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <img class="card-img-top" src="img/tenet.jpg" alt="Card image cap" style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-right">
                                    <a href="movie_detail.php" class="btn btn-primary">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <img class="card-img-top" src="img/spiderman.jpg" alt="Card image cap"
                                style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-right">
                                    <a href="movie_detail.php" class="btn btn-primary">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <img class="card-img-top" src="img/batman.jpg" alt="Card image cap" style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-right">
                                    <a href="movie_detail.php" class="btn btn-primary">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <img class="card-img-top" src="img/yourname.jpg" alt="Card image cap" style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-right">
                                    <a href="movie_detail.php" class="btn btn-primary">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-2 col-sm-2"></div>
    </div>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
</body>

</html>