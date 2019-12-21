<?php

    require __DIR__ . "/classRating.php";

        $rating = new Rating();
        $cont = $rating->ratingAverage();
        $count = $rating->ratingCount();
        if ($count != 0) {

            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <link rel="stylesheet" href="css/bootstrap.css">
                <link rel="stylesheet" href="css/style.css">
                <script src="https://kit.fontawesome.com/096d1fd918.js" crossorigin="anonymous"></script>
                <link rel="stylesheet"
                      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Exemplo de Crud</title>
            </head>
            <body>
            <div class="header">
                <a href="#default" class="logo"><img src="img/PHP-logo.svg.png" class="logo-image" alt=""></a>
                <div class="header-right">
                    <a href="index.php">Home</a>
                    <a class="active" href="rating.php">Rating</a>
                    <a href="#about">About</a>
                </div>
            </div>
            <div class="size">
                <span class="heading">User Rating</span>
                <span class="fa fa-star checked"></span>
                <?php if (number_format($cont, 0) < 2) { ?>
                    <span class="fa fa-star"></span>
                <?php } else { ?>
                    <span class="fa fa-star checked"></span>
                <?php } ?>
                <?php if (number_format($cont, 0) < 3) { ?>
                    <span class="fa fa-star"></span>
                <?php } else { ?>
                    <span class="fa fa-star checked"></span>
                <?php } ?>
                <?php if (number_format($cont, 0) < 4) { ?>
                    <span class="fa fa-star"></span>
                <?php } else { ?>
                    <span class="fa fa-star checked"></span>
                <?php } ?>
                <?php if (number_format($cont, 0) < 5) { ?>
                    <span class="fa fa-star"></span>
                <?php } else { ?>
                    <span class="fa fa-star checked"></span>
                <?php } ?>

                <p><?= number_format($cont, 2) ?> average based on <?= $count ?> reviews.</p>
                <hr style="border:3px solid #f1f1f1">
                <?php
                $five = $rating->select(5);
                $four = $rating->select(4);
                $three = $rating->select(3);
                $two = $rating->select(2);
                $one = $rating->select(1);
                $percentageOne = $rating->ratingPercentage(1);
                $percentageTwo = $rating->ratingPercentage(2);
                $percentageThree = $rating->ratingPercentage(3);
                $percentageFour = $rating->ratingPercentage(4);
                $percentageFive = $rating->ratingPercentage(5);
                ?>
                <div class="row">
                    <div class="side">
                        <div>5 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-5"
                                 style="width: <?= $percentageFive ?>%; height: 18px; background-color: #4CAF50;"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div><?= $five ?></div>
                    </div>
                    <div class="side">
                        <div>4 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-4"
                                 style="width: <?= $percentageFour ?>%; height: 18px; background-color: #2196F3;"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div><?= $four ?></div>
                    </div>
                    <div class="side">
                        <div>3 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-3"
                                 style="width: <?= $percentageThree ?>%; height: 18px; background-color: #00bcd4;"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div><?= $three ?></div>
                    </div>
                    <div class="side">
                        <div>2 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-2"
                                 style="width: <?= $percentageTwo ?>%; height: 18px; background-color: #ff9800;"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div><?= $two ?></div>
                    </div>
                    <div class="side">
                        <div>1 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-1"
                                 style="width: <?= $percentageOne ?>%; height: 18px; background-color: #f44336;"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div><?= $one ?></div>
                    </div>
                </div>
            </div>
            <a href="rating-generate.php">adicionar rating</a>
            </body>
            </html>
            <?php
            } else{?>
            <h1>Por favor gerar Ratings</h1>
            <a href="rating-generate.php">Clique aqui</a>
        <?php
        }
        ?>
