@extends('layout')
@section('content')


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Childcoinz</title>
</head>

<body class="bg">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>



    <style>
    .bg {
        background-color: #ffffff;

    }


    .carousel-item {
        height: 32rem;
        background: #777;
        color: white;
        position: relative;
        background-position: center;
        background-size: cover;


    }

    .container {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding-bottom: 150px;

    }

    .gallery-head {
        text-align: center;
    }

    footer {
        position: relative;
        width: 100%;
        background: #3586ff;
        min-height: 100px;
        padding: 20px 50px;
        display: flex;
        justify-content: center;
        flex-direction: column;

    }

    footer .footer_h {
        text-align: center;
    }

    footer .social_icon,
    footer .menu {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px 0;
        flex-wrap: wrap;
    }

    footer .social_icon li,
    footer .menu li {
        list-style: none;
    }

    footer .social_icon li a {
        font-size: 2em;
        color: white;
        margin: 0 10px;
        display: inline-block;
        transition: 0.5s;
    }

    footer .social_icon li a:hover {
        transform: translateY(-10px)
    }

    footer .menu li a {
        font-size: 1.2em;
        color: white;
        margin: 0 10px;
        display: inline-block;
        transition: 0.5s;
        text-decoration: none;
        opacity: 0.75;

    }

    footer .menu li a:hover {
        opacity: 1;
    }

    footer p {
        color: white;
    }

    footer .waves {
        position: absolute;
        top: -50px;
        left: 0;
        width: 100%;
        height: 100px;
        background: url('/images/wave.png');
        background-size: 1000px 100px;
    }

    footer .waves#wave1 {
        z-index: 1000;
        opacity: 1;
        bottom: 0;
        animation: animatewave 4s linear infinite;

    }

    footer .waves#wave2 {
        z-index: 999;
        opacity: 0.5;
        bottom: 10px;
        animation: animatewave_02 4s linear infinite;

    }

    footer .waves#wave3 {
        z-index: 1000;
        opacity: 0.2;
        bottom: 15px;
        animation: animatewave 3s linear infinite;

    }

    footer .waves#wave4 {
        z-index: 999;
        opacity: 0.7;
        bottom: 20px;
        animation: animatewave_02 3s linear infinite;

    }

    @keyframes animatewave {
        0% {
            background-position-x: 1000px;
        }

        100% {
            background-position-x: 0px;
        }
    }

    @keyframes animatewave_02 {
        0% {
            background-position-x: 0px;
        }

        100% {
            background-position-x: 1000px;
        }
    }

    .card-img-top2,
    .card-img-top3,
    .card-img-top1 {

        height: 267px;
    }

    .f_head {
        text-align: center;
    }
    </style>

    <div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
        </ol>


        <div class="carousel-inner">
            <div class="carousel-item active"
                style="background-image: url('/images/Screenshot 2019-01-18 at 15.23.28 (1).png')">
                <div class="overlay-image"></div>
                <div class="container">
                    <h1>Let's be Kind for<br>
                        Children
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s,<br>t is a long established fact that a reader will be
                        distracted by the readable </p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Donate Now
                    </a>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('/images/photo-1488521787991-ed7bbaae773c.jpg')">
                <div class="container">
                    <h1>Example Headline</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s,<br>t is a long established fact that a reader will be
                        distracted by the readable </p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Donate Now
                    </a>
                </div>

            </div>
        </div>
    </div>
    <br>
    <!-- Example Code -->

    <section id="about" class="about-section-padding  mt-5">
        <div class="cont">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img ">

                        <img src="/images/ddf.png"
                            alt="" class="img-fluid border-dark rounded-right">
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-1" style="background-color: #97ccfd">
                    <div class="about-text">
                        <h2>Why Donate ?</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been <br>the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type <br>and scrambled it to make a type specimen book. It has survived not
                            only five centuries,<br> but also the leap into electronic typesetting, remaining
                            essentially unchang</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>

    </div>
    </div>
    </div>
    <br>
    <!--Gallery section-->
    <br>
    <br>
    <h1 class="gallery-head">Our Gallery</h1>

    <div class="container1">
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="/images/images.jpg" class="card-img-top1" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Image 01</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum
                            odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor
                            sit amet.</p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="/images/sWsJy3LZ.jpeg" class="card-img-top2" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Image 02</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum
                            odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor
                            sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="/images/image2.jpg" class="card-img-top3" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Image 03</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum
                            odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor
                            sit amet.</p>

                    </div>
                </div>
                <a href="#" class="btn btn-primary my-2">View more</a>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>





    <footer>

        <div class="waves">
            <div class="waves" id="wave1"></div>
            <div class="waves" id="wave2"></div>
            <div class="waves" id="wave3"></div>
            <div class="waves" id="wave4"></div>
        </div>


        <ul class="ul social_icon">

            <li><a href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-youtube"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                    </ion-icon>
                </a></li>

        </ul>

        <ul class="menu">
            <li><a href="#"> Home</a></li>
            <li><a href="#"> About Us</a></li>
            <li><a href="#"> Contact Us</a></li>
        </ul>
        <h1 class="f_head">ChildCoinz</h1>
        <P> 2023 online childcoinz|All Rights Reserve</p>

    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
@endsection