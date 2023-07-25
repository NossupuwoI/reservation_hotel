<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Room</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

     


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6> -->
                    <h1 class="mb-5"> <span class="text-primary text-uppercase">{{ $chambres->nom }}</span></h1>
                </div>
               
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ $chambres->photo1 }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{ $chambres->photo2 }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{ $chambres->photo3 }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{ $chambres->photo4 }}">
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6" class="card-body">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <ul>
                      <table class="table card-body">
                        <thead>
                            <th>Categorie</th>
                            <td>{{ $chambres->nom }}</td>
                        </thead>
                        <thead>
                            <th>Numéro de l'étage</th>
                            <td>{{ $chambres->num_etage }}</td>
                            
                        </thead>
                        <thead>
                            <th>Numéro de la chambre</th>
                            <td>{{ $chambres->num_chambre }}</td>
                        </thead>
                        <thead>
                            <th>Nombre de lit</th>
                            <td>{{ $chambres->lit }}</td>
                        </thead>
                        <thead>
                            <th>Numéro de baignoire</th>
                            <td>{{ $chambres->baignoire }}</td>
                        </thead>
                        <thead>
                             <th>Prix</th>
                            <td>{{ $chambres->prix }}$</td>
                        </thead>
                      </table>
                      <a class="btn btn-sm btn-primary rounded py-2 px-4" href="/reservation/{{ $chambres->id }}">Reserver maintenant</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        </div>
        <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js"></script>
</body>

</html>
