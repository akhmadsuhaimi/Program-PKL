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
<style>
  .pagination-container {
    display: flex;
    justify-content: flex-end;
}
</style>

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
            Data Surat Pertanggung Jawaban
            <small>DKP3</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Surat Pertanggung Jawaban</h3>
                  <div class="box-tools pull-right">
                    <a href="{{ url ('Tambah_Spj') }}" class="btn btn-primary btn-user btn-block"> Tambah </a>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Program</th>
                        <th>PPTK</th>
                        <th>Bagian</th>
                        <th>Belanja</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    @php 
                    $no = ($s->currentPage() - 1) * $s->perPage() + 1;
                    @endphp
                    @foreach($s as $item)
                    <tbody>
                      <tr>
                        <td  width="30">{{ $no++ }}</td>
                        <td>{{ $item ->kode_program }}</td>
                        <td width="200">{{ $item ->program }}</td>
                        <td width="150">{{ $item ->pptk }}</td>
                        <td>{{ $item->bagian->nama_bagian }}</td>
                        <td width="200">{{ $item->belanja->nama_belanja }}</td>
                        <td width="100">{{ $item ->tgl }}</td>
                        <td width="100">{{ $item ->status }}</td>
                        <td width="100">
                            <a href="{{ url ('Update_Spj/' .$item->id) }}" class="btn btn-warning btn-user btn-md">
                                <i class="fa fa-edit"></i></a>
                            <a href="{{ url ('Hapus_Spj/' .$item->id) }}" class="btn btn-danger btn-user btn-md">
                                  <i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <div class="pagination-container">
                    {{ $s->links('pagination::bootstrap-4') }}
                </div>
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