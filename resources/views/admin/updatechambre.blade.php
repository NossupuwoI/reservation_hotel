<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Liste des Chambres</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('../nav')
  @include('../sider')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <ul>
          @foreach ($errors->all() as $error)
          <li class="alert alert-danger">{{ $error }}</li>
          @endforeach
        </ul>

        <div class="container py-5 h-100">
                      <div class="row justify-content-center align-items-center h-100">
                        <div class="col-12 col-lg-9 col-xl-7">
                          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                              <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">Ajouter une chambre</h4>
                              <form class="form-group" action="/updatechambre/traitement" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" value="{{ $chambres->id }}" name="id" style="display: none">
                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                      <input type="numbre" class="form-control input-default"
                                        name="User"
                                        value="{{ Auth::user()->id }}" style="display: none" required>
                                        {{-- <select name="User" id="" class="select form-control-lg">
                                            <option value="">Nom de L employer</option>
                                            @foreach ($users as $user )
                                                <option value="{{ $user->id }}">{{ $user->id }}</option>
                                            @endforeach
                                        </select> --}}
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <select name="nom" id="" class="select form-control-lg">
                                            <option value="">Nom de la Categorie</option>
                                            @foreach ($categories as $categorie )
                                                <option value="{{ $categorie->nom }}">{{ $categorie->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                  </div>
                                </div>


                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                       <select name="libelle" id="" class="select form-control-lg">
                                            <option value="">Libelle</option>
                                            @foreach ($categories as $categorie )
                                                <option value="{{ $categorie->libelle }}">{{ $categorie->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>
                                  </div>

                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <select name="baignoire" id="" class="select form-control-lg">
                                            <option value="1">Nombre de baignoires</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                  </div>
                                  </div>
                                  <div class="col-md-6 mb-4" >
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
                                    <label for="exampleInputPassword1" class="form-label">prix
                                        ($)</label>
                                    <input type="number" class="form-control form-control-lg" value="{{ $chambres->prix }}" name="prix" required>
                                  </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <label for="exampleInputPassword1"
                                        class="form-label">statut</label><br>
                                    <input type="radio" name="statut" value="Libre" required>
                                    Libre
                                    <input type="radio" name="statut" value="Occuper" required>
                                    Occuper

                                    </div>
                                  </div>


                                <div class="mt-4 pt-2">
                                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('../footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- Button trigger modal -->

<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
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
