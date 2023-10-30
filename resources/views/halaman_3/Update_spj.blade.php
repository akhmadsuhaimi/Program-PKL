
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DKP3 | Dashboard</title>
    <link href="{{ asset('template/dist/img/pemko.png') }}" rel="icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
   @include('tools.script')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

       @include('tools.navbar')
      <!-- Left side column. contains the logo and sidebar -->
       @include('tools.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Pertanggung Jawaban
            <small>DKP3</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="center">
            <!-- left column -->
            <div class="card shadow mb-4">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Update Status SPJK</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{ url('Simpan_perSPJ/'.$s15->id) }}" method="post">
                  {{ csrf_field() }} 
                  <div class="box-body">
                    {{-- <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" name="status" placeholder="Enter Jenis" value="{{$s15->status}}">
                      </div> --}}

                      {{-- <div class="form-group">
                        <label>Status</label>
                        <select type="text" name="status" class="form-control">
                          <option value="">{{$s15->status}}</option>
                          <option>Pemeriksaan Kelengkapan</option> 
                          <option>Lengkap</option>    
                          <option>Tidak Lengkap (Dikembalikan)</option>  
                        </select>
                      </div> --}}

                    {{-- <div class="form-group">
                      <label>Kode Program</label>
                      <input type="text" class="form-control" name="kode_program" placeholder="Enter Kode Program" value="{{$s15->kode_program}}">
                    </div> --}}

                    <div class="form-group">
                      <label>Program</label>
                      <input type="text" class="form-control" name="program" placeholder="Enter Program" value="{{$s15->program}}">
                    </div>

                    <div class="form-group">
                        <label>TANGGAL</label>
                        <input type="date" name="tgl" class="form-control" placeholder="Tanggal" value="{{$s15->tgl}}">
                    </div>

                    <div class="form-group">
                        <label>PPTK</label>
                        <input type="text" class="form-control" name="pptk" placeholder="Enter PPTK" value="{{$s15->pptk}}">
                      </div>

                      

                      <div class="form-group">
                        <label>Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" placeholder="Enter Kegiatan" value="{{$s15->kegiatan}}">
                      </div>

                      <div class="form-group">
                        <label>Sub Kegiatan</label>
                        <input type="text" class="form-control" name="sub_kegiatan" placeholder="Enter Sub Kegiatan" value="{{$s15->sub_kegiatan}}">
                      </div>
                      
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
        @include('tools.footer')

      <!-- Control Sidebar -->
      @include('tools.kontrolsidebar')
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    @include('tools.script1')
  </body>
</html>