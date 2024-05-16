<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    body {
        background: #eee;
    }

    .card {
        border: none;

        position: relative;
        overflow: hidden;
        border-radius: 8px;
        cursor: pointer;
    }

    .card:before {

        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background-color: #E1BEE7;
        transform: scaleY(1);
        transition: all 0.5s;
        transform-origin: bottom
    }

    .card:after {

        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background-color: #8E24AA;
        transform: scaleY(0);
        transition: all 0.5s;
        transform-origin: bottom
    }

    .card:hover::after {
        transform: scaleY(1);
    }


    .fonts {
        font-size: 11px;
    }

    .social-list {
        display: flex;
        list-style: none;
        justify-content: center;
        padding: 0;
    }

    .social-list li {
        padding: 10px;
        color: #8E24AA;
        font-size: 19px;
    }


    .buttons a:nth-child(1) {
        border: 1px solid #8E24AA !important;
        color: #8E24AA;
        height: 40px;
    }

    .buttons a:nth-child(1):hover {
        border: 1px solid #8E24AA !important;
        color: #fff;
        height: 40px;
        background-color: #8E24AA;
    }

    .buttons a:nth-child(2) {
        border: 1px solid #8E24AA !important;
        background-color: #8E24AA;
        color: #fff;
        height: 40px;
    }
</style>

<body class="bg-dark">
    <div class="container mt-5">

        <div class="row d-flex justify-content-center">

            <div class="col-md-7">

                <div class="card shadow-lg mt-5 p-3 py-4">

                    {{-- <div class="text-center">
                        <img src="img/logome.png" width="40%" class="rounded-3 shadow">
                    </div> --}}

                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">9/11</span>
                        <h5 class="mt-2 mb-0">Fauzan Imam</h5>
                        <span>Freelancer</span>

                        <div class="px-4 my-3">
                            <p class="fonts">
                                Kami adalah Jasa Pembuatan Website Terpercaya yang menghadirkan solusi handal,
                                profesional, dan inovatif. Kami siap untuk mewujudkan situs web yang sesuai dengan
                                kebutuhan Anda. Tingkatkan bisnismu melalui situs webmu sendiri.
                            </p>

                        </div>


                        <div class="buttons">
                            <a href="https://wa.me/085156575581" class="btn btn-outline-primary px-4">Contact Me</a>
                        </div>


                    </div>




                </div>

            </div>

        </div>

    </div>
</body>

</html>
