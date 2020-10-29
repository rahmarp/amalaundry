<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('app-assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" >
  <link href="{{ asset('app-assets/css/sb-admin-2.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          <a href="#">tesst</a>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> 
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-md-7">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-body">
            
                  <form action="{{ route('outlet.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="row">
                      
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active" id="v-pills-kiloan-tab" data-toggle="pill" href="#v-pills-kiloan" role="tab" aria-controls="v-pills-kiloan" aria-selected="true">Kiloan</a>
                          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Bed Cover</a>
                          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Selimut</a>
                          <a class="nav-link" id="v-pills-karpet-tab" data-toggle="pill" href="#v-pills-karpet" role="tab" aria-controls="v-pills-karpet" aria-selected="false">Karpet</a>
                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dll</a>
                        </div>
                      </div>
                      <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-kiloan" role="tabpanel" aria-labelledby="v-pills-kiloan-tab">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-3">
                                    <button class="btn btn-outline-primary">Kiloan</button>
                                  </div>
                                  <div class="col-md-3">
                                    <button class="btn btn-outline-primary">Selimut</button>
                                  </div>
                                  <div class="col-md-3">
                                    <button class="btn btn-outline-primary">Karpet </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-3 pb-3">
                                  <button class="btn btn-outline-primary">Bed Cover Besar</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Kiloan 1</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Selimut</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Gorden</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Karpet Masjid</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Kiloan 1</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Selimut</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Gorden</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Karpet Masjid</button>
                                </div>
                              </div>
                            </div>
                          </div></div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-3 pb-3">
                                  <button class="btn btn-outline-primary">Bed Cover Besar</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Kiloan 1</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Selimut</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Gorden</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Karpet Masjid</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Kiloan 1</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Selimut</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Gorden</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Karpet Masjid</button>
                                </div>
                              </div>
                            </div>
                          </div></div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-3 pb-3">
                                  <button class="btn btn-outline-primary">Bed Cover Besar</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Kiloan 1</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Selimut</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Gorden</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Karpet Masjid</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Kiloan 1</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Selimut</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Gorden</button>
                                </div>
                                <div class="col-md-3 pb-3">
                                  <button class="btn p-3 btn-outline-primary">Karpet Masjid</button>
                                </div>
                              </div>
                            </div>
                          </div></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-body">
            
                  <form action="{{ route('outlet.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label for="nama" class="col-form-label col-sm-3">Member</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="nama" name="nama_outlet" 
                                  value="{{ old('nama_outlet', $post->nama_outlet ?? null) }}" required>                                                  
                          </div>
                        </div>
                        <hr>
                        <table class="table table-borderless table-sm" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Paket</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Bed Cover Besar</td>
                            <td>1</td>
                            <td>20000</td>
                            <td>20000</td>
                          </tr>
                          <tr>
                            <td>Karpet</td>
                            <td>2</td>
                            <td>15000</td>
                            <td>30000</td>
                          </tr>
                          <tr>
                            <td>Kiloan</td>
                            <td>1</td>
                            <td>7000</td>
                            <td>7000</td>
                          </tr>
                        </tbody>
                      </table>
                      <hr>
                      <table class="table table-borderless table-sm" width="100%" cellspacing="0">
                        <tbody>
                          <tr>
                            <th>Total</th>
                            <td>57000</td>
                          </tr>
                          <tr>
                            <th>Diskon</th>
                            <td>5000</td>
                          </tr>
                          <tr>
                            <th>Pajak</th>
                            <td>5700</td>
                          </tr>
                        </tbody>
                      </table> 
                      <div class="row">
                        <div class="col-md-6 btn-primary">Grand Total</div>
                        <div class="col-md-6 btn-primary">64000</div></div>
                      </div>
                    </div>
                  
                  
                    <div class="modal-footer">
                    <a href="{{ route('outlet.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="submit" class="btn btn-danger">Bayar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Custom scripts for all pages-->
   <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

   <!-- Custom scripts for all pages-->
   <script src="{{ asset('app-assets/js/sb-admin-2.min.js') }}"></script>

   <!-- Page level plugins -->
   <script src="{{ asset('app-assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
 
   <!-- Page level custom scripts -->
   <script src="{{ asset('app-assets/js/demo/datatables-demo.js') }}"></script>

</body>

</html>
