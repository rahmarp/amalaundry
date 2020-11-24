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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  
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
            <div class="col-md-12">
              <form action="{{ route('paket.store') }}" method="POST">
                @csrf
              <div class="row">
                {{-- <div class="col-md-7">
                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="v-pills-kiloan-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-kiloan" aria-selected="true">Semua</a>
                              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-kiloan" role="tab" aria-controls="v-pills-profile" aria-selected="false">Kiloan</a>
                              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-bedcover" role="tab" aria-controls="v-pills-profile" aria-selected="false">Bed Cover</a>
                              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-selimut" role="tab" aria-controls="v-pills-messages" aria-selected="false">Selimut</a>
                              <a class="nav-link" id="v-pills-karpet-tab" data-toggle="pill" href="#v-pills-karpet" role="tab" aria-controls="v-pills-karpet" aria-selected="false">Karpet</a>
                              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-dll" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dll</a>
                            </div>
                          </div>
                          <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-kiloan-tab">
                                <div class="row">
                                  <div class="col-md-12 overflow-auto">
                                    <div class="row col-container">
                                      @foreach ($paket as $p)
                                      <div class="col-lg-3 col-6 col">                                          
                                            <a href="{{ route('cart.store',['id' => $p->id]) }}" class="btn btn-paket btn-block btn-outline-primary">{{ $p->nama_paket }}  
                                              <br><span class="harga">
                                                {{ $p->harga }}</span></a>                        
                                      </div> 
                                      @endforeach                                  
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-kiloan" role="tabpanel" aria-labelledby="v-pills-kiloan-tab">
                                <div class="row">
                                  <div class="col-md-12 overflow-auto">
                                    <div class="row col-container">
                                      @foreach ($paket as $p)
                                      @if (($p->jenis) == "Kiloan")
                                      <div class="col-lg-3 col-6 col">                                          
                                            <button type="submit" class="btn btn-paket btn-block btn-outline-primary">{{ $p->nama_paket }}  
                                              <br><span class="harga">
                                                {{ $p->harga }}</span></button>                        
                                      </div> 
                                      @endif                                 
                                      @endforeach                                  
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-bedcover" role="tabpanel" aria-labelledby="v-pills-profile-tab"><div class="row">
                                <div class="col-md-12 overflow-auto">
                                  <div class="row col-container">
                                    @foreach ($paket as $p)
                                      @if (($p->jenis) == "Bed Cover")
                                      <div class="col-md-3 col-6 col">
                                        <button class="btn btn-paket btn-block btn-outline-primary">{{ $p->nama_paket }} <br><span class="harga">
                                        {{ $p->harga }}</span></button>
                                      </div>
                                      @endif                                  
                                      @endforeach  
                                  </div>
                                </div>
                              </div></div>
                              <div class="tab-pane fade" id="v-pills-selimut" role="tabpanel" aria-labelledby="v-pills-messages-tab"><div class="row">
                                <div class="col-md-12 overflow-auto">
                                  <div class="row col-container">
                                    @foreach ($paket as $p)
                                      @if (($p->jenis) == "Selimut")
                                      <div class="col-md-3 col-6 col">
                                        <button class="btn btn-block btn-outline-primary">{{ $p->nama_paket }} <br><span class="harga">
                                        {{ $p->harga }}</span></button>
                                      </div>
                                      @endif                                  
                                      @endforeach  
                                  </div>
                                </div>
                              </div></div>
                              <div class="tab-pane fade" id="v-pills-karpet" role="tabpanel" aria-labelledby="v-pills-settings-tab"><div class="row">
                                <div class="col-md-12 overflow-auto">
                                  <div class="row col-container">
                                    @foreach ($paket as $p)
                                      @if (($p->jenis) == "Karpet")
                                      <div class="col-md-3 col-6 col">
                                        <button class="btn btn-block btn-outline-primary">{{ $p->nama_paket }} <br><span class="harga">
                                        {{ $p->harga }}</span></button>
                                      </div>
                                      @endif                                  
                                      @endforeach  
                                  </div>
                                </div>
                              </div></div>
                              <div class="tab-pane fade" id="v-pills-dll" role="tabpanel" aria-labelledby="v-pills-settings-tab"><div class="row">
                                <div class="col-md-12 overflow-auto">
                                  <div class="row col-container">
                                    @foreach ($paket as $p)
                                      @if (($p->jenis) == "dll")
                                      <div class="col-md-3 col-6 col">
                                        <button class="btn btn-block btn-outline-primary">{{ $p->nama_paket }} <br><span class="harga">
                                        {{ $p->harga }}</span></button>
                                      </div>
                                      @endif                                  
                                      @endforeach  
                                  </div>
                                </div>
                              </div></div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
    
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="nama" class="col-form-label col-sm-3">Pesan</label>
                              <div class="col-sm-9">
                              <input type="date" class="form-control" id="tgl" name="tgl" 
                                      value={{ $date }}required>                                                  
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="nama" class="col-form-label col-sm-3">Ambil</label>
                              <div class="col-sm-9">
                              <input type="date" class="form-control" id="tgl_ambil" name="tgl_ambil" 
                                      value={{ $afterdate }}required>                                                  
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div> --}}
    
                <div class="col-md-5">
                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                    <div class="card-body">                  
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label for="nama" class="col-form-label col-sm-3">Member</label>
                              <div class="col-sm-9">
                                <select class="cari form-control" name="cari"></select>                                                  
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
                            <?php $subtotal = 0 ?>
                            @if ($products !== null)
                            <tbody>
                              
                              @foreach ($products as $id => $details)
                              <?php
                                $harga = \App\Paket::where(['id' => $details['id_paket']])->pluck('harga')->first();
                                $total = $harga * $details['quantity'];
                                $subtotal += $total;
                              ?>
                              <tr>
                                <td>{{ \App\Paket::where(['id' => $details['id_paket']])->pluck('nama_paket')->first() }}</td>
                                <td>{{ $details['quantity'] }}</td>
                                <td>Rp.{{$harga}}</td>
                                <td>Rp.{{ $total }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                            @endif
                          </table>
                          <hr>
                          <table class="table table-borderless table-sm" width="100%" cellspacing="0">
                            <tbody>
                              <tr>
                                <th><div class="text-left">Total</div></th>
                                <td><div class="col-md-11 text-right">
                                  <input type="hidden" value="{{ $subtotal }}" name="total">
                                   Rp.{{ $subtotal }}</div></td>
                              </tr>
                              <tr>
                                <th><div class="text-left">Diskon</div></th>
                                <td><div class="col-md-11 text-right">
                                  <input type="hidden" value="{{ $subtotal * 0.15 }}" name="diskon">
                                  Rp.{{ $subtotal * 0.15 }}</div></td>
                              </tr>
                              <tr>
                                <th><div class="text-left">Pajak</div></th>
                                <td><div class="col-md-11 text-right">
                                  <input type="hidden" value="{{ $subtotal * 0.2 }}" name="diskon">
                                  Rp.{{ $subtotal * 0.2 }}</div></td>
                              </tr>
                            </tbody>
                          </table> 
                          <div class="row">
                            <div class="col-md-6 btn-primary btn text-left" style="border-radius: 0">Grand Total</div>
                            <div class="col-md-5 btn-primary btn text-right" style="border-radius: 0">
                              <input type="hidden" value="{{ ($subtotal) - ($subtotal * 0.15) + ($subtotal * 0.2) }}" name="diskon">
                              Rp. {{ ($subtotal) - ($subtotal * 0.15) + ($subtotal * 0.2) }}</div>
                            <div class="col-md-1 btn-primary btn" style="border-radius: 0"></div></div>
                          </div>
                        </div>
                      
                      
                        <div class="modal-footer">
                        <a href="{{ route('outlet.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-danger">Bayar</button>
                        </div>
                      
                    </div>
                  </div>
    
                
                </div>
              </div>
              </form>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   <script type="text/javascript">
     $('.cari').select2({
       placeholder: 'Cari...',
       ajax: {
         url: '/cari',
         dataType: 'json',
         delay: 250,
         processResults: function (data) {
           return {
             results:  $.map(data, function (item) {
               return {
                 text: item.nama_member,
                 id: item.id
               }
             })
           };
         },
         cache: true
       }
     });
   
   </script>   

</body>

</html>
