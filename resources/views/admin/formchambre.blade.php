<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>publiecation des Chambres</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('../nav')
  @include('../sider')


                <section class="vh-100 gradient-custom">
                    <div class="container py-5 h-100">
                      <div class="row justify-content-center align-items-center h-100">
                        <div class="col-12 col-lg-9 col-xl-7 w-100">
                          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                              {{-- <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">Ajouter une chambre</h4> --}}
                              <form class="form-group" action="/chambre/traitement" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="numbre" class="form-control input-default" name="User" value="{{ Auth::user()->id }}" style="display: none" required>
                                <div class="row">
        
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                      <label for="">Categorie</label>
                                        <select name="nom" id="" class="select form-control-lg">
                                            <option value="">Nom de la Categorie</option>
                                            @foreach ($categories as $categorie )
                                                <option value="{{ $categorie->nom }}">{{ $categorie->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>          
                                  </div>
                                  <div class="col-md-6 mb-4" >
                                    <label for="">Nombre de lit</label>
                                    <div class="form-check form-check-inline">
                                      
                                        <select name="lit" id="" class="select form-control-lg">
                                            <option value="1">Nombre de lit</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <label for="">Numéro de chambre</label>
                                    <div class="form-outline">
                                        <select name="num_chambre" id="" class="select form-control-lg">
                                            <option value="1">Numéro de la
                                                chambre</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                  </div>
                                  </div>
                                  <div class="col-md-6 mb-4" >
                                    <label for="">Numéro de l'étage</label>
                                    <div class="form-check form-check-inline">
                                        <select name="num_etage" id="" class="select form-control-lg">
                                            <option value="1">Numéro de
                                                l’étage</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                </div>


                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                    <label for="exampleInputPassword1" class="form-label">prix
                                        ($)</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Prix" name="prix" required>
                                  </div>
                                  </div>

                                  <div class="col-md-6 mb-4">
                                    <label for="Nombre de baignoires">Nombre de baignoires</label>
                                    <div class="form-outline">
                                        <select name="baignoire" id="" class="select form-control-lg">
                                            <option value="">Nombre de baignoires</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                  </div>
                                </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                         <label for="exampleInputPassword1" class="form-label">photo 1</label>
                                        <input type="file" class="form-control form-control-lg" name="photo1" required>
                                  </div>
                                  </div>
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                         <label for="exampleInputPassword1" class="form-label">photo 2</label>
                                        <input type="file" class="form-control form-control-lg" name="photo2" required>
                                  </div>
                                  </div>
                                </div>


                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                         <label for="exampleInputPassword1" class="form-label">photo 3</label>
                                        <input type="file" class="form-control form-control-lg" name="photo3" required>
                                  </div>
                                  </div>
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                         <label for="exampleInputPassword1" class="form-label">photo 4</label>
                                        <input type="file" class="form-control form-control-lg" name="photo4" required>
                                  </div>
                                  </div>
                                </div>

                                


                                
                                <div class="row">
                                  <div class="col-12">
                                    <label for="exampleInputPassword1" class="form-label">Libelle</label>
                                    <input type="text" class="form-control form-control-lg" name="libelle" placeholder="description de la chambre" required>
                                  </div>
                                </div><br>


                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                         <label for="exampleInputPassword1" class="form-label">Occuper</label>
                                         <input type="radio" name="statut" value="Occuper" required>   
                                  </div>
                                  </div>
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                         <label for="exampleInputPassword1" class="form-label">Libre</label>
                                         <input type="radio" name="statut" value="Libre" required>
                                         
                                  </div>
                                  </div>
                                </div><br>

                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                      <a class="btn btn-danger btn-lg w-100 " href="/chambre" value="Submit">Retour</a>  
                                  </div>
                                  </div>
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                      <input class="btn btn-primary btn-lg w-100 " type="submit" value="Submit" />
                                         
                                  </div>
                                  </div>
                                </div>

                               
{{-- 
                                  <div class="mt-4 pt-2">
                                    <a class="btn btn-danger btn-lg w-35 " href="/chambre" value="Submit">Retour</a>
                                    <input class="btn btn-primary btn-lg w-50 " type="submit" value="Submit" />
                                  </div> --}}

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>





    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</section>
</div>
<!-- ./wrapper -->



<!-- Button trigger modal -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.j') }}s"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
</body>
</html>
