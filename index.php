<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reliz-able</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" href="asset/img/favicon.ico">

    <!-- import CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="index.php">
                <img src="asset/img/logo.png" class="img-fluid" alt="Logo" width="65px">
            </a>
            <a class="navbar-brand ms-4" href="index.php">
                <img src="asset/img/logonya.png" class="img-fluid ms-3" alt="Logo" width="65px">
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto"></ul>
                <ul class="navbar-nav me-3">
                    <li class="nav-item d-flex">
                        <a class="nav-link light me-4"  aria-current="page" href="#">INFORMATION</a>
                        <a class="nav-link light me-4"  aria-current="page" href="#">KONTAK</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" id="tambahData" href="tambahData/data.php">Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar END -->

    <!-- Heroes -->
    <div class="header dark-blue col-sm-5 center white-text padding-top-max padding-bottom-med">
        <h1 class="big-text">reliz- <br> able</h1>
        <h6>Linimasa PKL Izdihar & Verrel</h6>
    </div>
    <img class="img-head" src="asset/img/desain.png" alt="header">
    <img class="main-img" src="asset/img/800 X 750.png" alt="main">
    <!-- Heroes END -->


    <!-- Content -->
    <div class="container">
        <div class="card my-5" style="max-width: 100%; border-radius: 40px 0;">
            <!-- Tanggal & Minggu -->
            <div class="row mt-5 mb-3">
                <div class="col-2 offset-1">
                    <div class="text-center">
                        <h6 id="minggu">Minggu - 1</h6>
                        <hr id="batas">
                        <h6 id="tanggal">2.1.23 - 8.1.23</h6>
                    </div>
                </div>
            </div>
            <!-- Tanggal & Minggu END -->

            <!-- Hightlight -->
            <div class="row mt-3 mb-3">
                <div class="col-10 offset-1">
                    <h3 class="text-center">Hightlight</h3>
                </div>
                <div class="col-10 offset-1 text-center">
                    <img src="asset/img/logo.png" class="img-fluid" alt="">
                </div>
            </div>
            <!-- Hightlight END -->

            <!-- Intro -->
            <div class="row mt-3 mb-3">
                <div class="col-10 offset-1">
                    <h3 class="">Intro</h3>
                </div>
                <div class="col-10 offset-1">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.</p>
                </div>
            </div>
            <!-- Intro END -->

            <!-- Kegiatan -->
            <div class="row mt-3 mb-3">
                <div class="col-10 offset-1">
                    <hr>
                    <h3 class="text-center">Kegiatan (Project)</h3>
                </div>
                <div class="col-5 offset-1">
                    <img src="asset/img/logo.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-5 d-flex align-items-center">
                    <div class="card-body">
                        <h5 class="card-title ">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted text-bottom">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-10 offset-1">
                    <hr>
                </div>
            </div>
            <!-- Kegiatan END -->

            <!-- Kesan -->
            <div class="row mt-3 mb-5">
                <div class="col-10 offset-1">
                    <h3 class="">Kesan</h3>
                </div>
                <div class="col-10 offset-1 ">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            <!-- Kesan END -->
        </div>
        <!-- Content END -->
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row d-flex my-5">
                <div class="col-6">
                    <h5>We are reliz-able</h5>

                    <!-- Verrel -->
                    <div class="col-12">
                        Ramael Verrel Laksono | Rel <br>
                        Indramayu , 8 November 2006 <br>
                        Jakarta , Jl pengasing 1 RT 2 RW 4 No.5 <br>
                        08811361377<br>
                        <figure>
                            <blockquote class="blockquote">
                                <p>???Live like river flow , just follow it???</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                <cite title="Source Title">rel</cite>
                            </figcaption>
                        </figure>
                        <a class="link-footer" data-toggle="tooltip" data-placement="top" title="Tooltip Atas pada Link" href="https://www.instagram.com/verrellaksono/?next=%2Fverrellaksono%2F" target="_blank"><i class="fa-brands fa-instagram" style="font-size:20px;"></i></a>@verrellaksono
                        <br>
                        <a class="link-footer" data-toggle="tooltip" data-placement="top" title="Tooltip Atas pada Link"><i class="fa fa-envelope" style="font-size:20px;" onclick="copyContentrel()"></i></a> <span id="rel">Verrellaksono8@gmail.com</span>
                        <hr class="col-8">
                    </div>
                    <!-- Verrel END -->

                    <!-- Dihar -->
                    <div class="col-12">
                        Izdihar Izzan Wibowo | Iz<br>
                        Jakarta , 21 April 2006 <br>
                        Jakarta , Jl.Gempol 1 <br>
                        085774690939 <br>
                        <figure>
                            <blockquote class="blockquote">
                                <p>???I will achive something???</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                <cite title="Source Title">iz</cite>
                            </figcaption>
                        </figure>
                        <a class="link-footer" data-toggle="tooltip" data-placement="top" title="Tooltip Atas pada Link" href="https://www.instagram.com/Izdihar.izzan/?next=%2Fizdihar.izzan%2F" target="_blank"><i class="fa-brands fa-instagram" style="font-size:20px;"></i></a>@Izdihar.izzan
                        <br>
                        <a class="link-footer" data-toggle="tooltip" data-placement="top" title="Tooltip Atas pada Link" href="https://www.youtube.com/@dihar5966/featured" target="_blank"><i class="fa-brands fa-youtube" style="font-size:20px;"></i></a>Dihar
                        <br>
                        <a class="link-footer" data-toggle="tooltip" data-placement="top" title="Tooltip Atas pada Link"><i class="fa fa-envelope" style="font-size:20px;"
                                onclick="copyContentiz()"></i></a><span id="iz">izzan4izdihar@gmail.com</span>
                        </p>
                    </div>
                    <!-- Dihar END -->
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <h5>Tetamba Studio Kreasi</h5>
                        <p>Jl. Nuri 3 No.95, Depok Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16432</p>
                    </div>
                    <div class="col-10">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d416.7710312378032!2d106.80672192046197!3d-6.3918585626565125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1673255934955!5m2!1sid!2sid"
                            width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer END -->

    <div class="row">
        <div class="col-12 text-center text-light">
            <p>reliz-able | 2023</p>
        </div>
    </div>

    <!-- import JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="asset/js/script.js"></script>
    <script src="asset/js/footer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>