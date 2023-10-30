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

   <style>
    .custom-align {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

    .custom-align p {
    margin-bottom: 10px; /* Sesuaikan dengan kebutuhan Anda */
}
   </style>

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
            Dokumen SURAT PERTANGGUNG JAWABAN
            <small>DKP3</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header" style="text-align: left; padding: 20px;">
                  <h3 style="margin: 0; font-size: 24px;">{{ $doc->program }}</h3>
                  <h2 style="margin: 0; font-size: 20px;">PPTK: {{ $doc->spj->pptk }}</h2>
              </div>
              <!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                  <p><strong>NPD</strong> : <a href="{{ asset('lampiran/'.$doc ->npd) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                  <p><strong>PERNYATAAN PPTK</strong> : <a href="{{ asset('lampiran/'.$doc ->pernyataan) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                  <p><strong>SURAT TANGGUNG JAWAB BELANJA</strong> : <a href="{{ asset('lampiran/'.$doc ->stj_belanja) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                  <p><strong>GAMBAR </strong> : <a href="{{ asset('lampiran/'.$doc ->gambar) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                  <p><strong>BKU </strong> : <a href="{{ asset('lampiran/'.$doc ->bku) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                  <p><strong>BELANJA ADMINISTRASI </strong> : <a href="{{ asset('lampiran/'.$doc ->belanja_adm) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                  <p><strong>KWITANSI </strong> : <a href="{{ asset('lampiran/'.$doc ->kwitansi) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                  <p><strong>DAFTAR HADIR </strong> : <a href="{{ asset('lampiran/'.$doc ->dftr_hdr) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                  <p><strong>SSP PAJAK </strong> : <a href="{{ asset('lampiran/'.$doc ->ssp) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
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