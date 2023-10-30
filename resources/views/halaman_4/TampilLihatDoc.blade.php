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
          @if(Session::has('success'))
                <div class="alert alert-success">
                 {{ Session::get('success') }}
                 </div>
          @endif
          <h1>
            Dokumen
            <small>Surat Pertanggung Jawaban</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <div class="row">
              <div class="col-md-6">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Dokumen Lengkap</h3>
                  </div>
                  <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Program</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              @php $no = 1; @endphp
              @foreach($dok as $item)
              <tbody>
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$item->spj->program}}</td>
                  <td>
                      <a href="{{ url ('docdetail/'.$item->id) }}" class="btn btn-info btn-user btn-md">
                          <i class="fa fa-eye"></i></a>     
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="box box-primary">
                      <div class="box-header with-border">
                          <h3 class="box-title">Dokumen Tidak Lengkap</h3>
                      </div>
                      <div class="box-body">
                          <table id="example2" class="table table-bordered table-hover">
                              <!-- ... (Table content) ... -->
                              <thead>
                  <tr>
                    <th>No</th>
                    <th>Program</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach($spjData as $item)
                  @php
                  // Mengganti fungsi untuk memeriksa apakah program memiliki dokumen
                  $hasDocument = $item->dokumen->isNotEmpty(); 
                @endphp
                @if(!$hasDocument)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->program}}</td>
                    <td> 
                      <a href="{{ url ('Single-TambahDokumen/'.$item->id) }}" class="btn btn-info btn-user btn-md">Tambah Dokumen</a>  
                    </td>
                  </tr>
                @endif
              @endforeach
                </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </section>
<!-- /.content -->
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