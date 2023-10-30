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
        <section class="content">
          <div class="row">
              <div class="col-md-12">
                  <!-- Konten Anda ditempatkan di sini -->
                  <h2>Selamat datang di Dasboard</h2>
              </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner" style="font-size: 24px;">
                  <h3>{{ $spjmsk }}</h3>
                  <p>Jumlah Surat Pertanggung Jawaban</p>
                </div>
                <div class="icon">
                  <i class="ion ion-document-text" style="font-size: 60px;"></i>
                </div>
                <a href="{{ url('Spj') }}" class="small-box-footer" style="font-size: 18px;">SPJK</a>
              </div>
            </div>
          
            <div class="col-lg-6 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner" style="font-size: 24px;">
                  <h3>{{ $dokmsk }}</h3>
                  <p>Jumlah Dokumen</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-folder" style="font-size: 60px;"></i>
                </div>
                <a href="{{ url('Lihat-Dok') }}" class="small-box-footer" style="font-size: 18px;">Dokumen</a>
              </div>
            </div>
          </div>
          

      </section>



        <!-- Main content -->
        
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