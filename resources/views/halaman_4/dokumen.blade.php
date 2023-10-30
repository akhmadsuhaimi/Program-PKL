
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
                <div class="box-header with-border" style="text-align: left; padding: 20px; border-bottom: 1px solid #eaebec;">
                  <h3 style="margin: 0; font-size: 24px;">{{ $spj->program }}</h3>
                  <p style="margin: 0; font-size: 18px;">PPTK: {{ $spj->pptk }}</p>
                 </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{ url('Simpan_Doc') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  @if(Session::has('success'))
                 <div class="alert alert-success">
                  {{ Session::get('success') }}
                  </div>
                  @endif
                  <div class="box-body">
                    
                    {{-- <div class="form-group">
                      <label>Program</label>
                      <input type="text" class="form-control" name="program" placeholder="Enter Kode Program">
                    </div> --}}

                    {{-- <div class="form-group">
                      <label>program</label>
                      <input type="text" name="program" value="{{ $spj->program }}">
                    </div> --}}

                    <div class="form-group">
                      <input type="hidden" class="form-control" name="spj_id" value="{{ $spj->id }}">
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="program" value="{{ $spj->program }}">
                    </div>

                    <div class="form-group">
                        <label>NPD</label>
                        <input type="file" id="npd" name="npd">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

                      <div class="form-group">
                      
                        <label for="exampleInputFile">Pernyataan PPTK</label>
                        <input type="file" id="pernyataan" name="pernyataan">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

                      <div class="form-group">
                  
                        <label for="exampleInputFile">Surat Tanggung jawab Belanja</label>
                        <input type="file" id="stj_belanja" name="stj_belanja">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputFile">BKU</label>
                        <input type="file" id="bku" name="bku">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

                      <div class="form-group">
                      
                        <label for="exampleInputFile">Nota pembelian</label>
                        <input type="file" id="kwitansi" name="kwitansi">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputFile">Gambar</label>
                        <input type="file" id="gambar" name="gambar">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>


                      <div class="form-group">
                       
                        <label for="exampleInputFile">Daftar hadir</label>
                        <input type="file" id="dftr_hdr" name="dftr_hdr">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

                      <div class="form-group">
                       
                        <label for="exampleInputFile">Belanja Administrasi</label>
                        <input type="file" id="belanja_adm" name="belanja_adm">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

                      <div class="form-group">
                       
                        <label for="exampleInputFile">SSP Pajak</label>
                        <input type="file" id="ssp" name="ssp">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

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
