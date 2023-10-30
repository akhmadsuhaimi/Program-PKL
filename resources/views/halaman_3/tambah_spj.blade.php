
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
      .content-wrapper {
          margin-left: 230px; /* Adjust the value as needed to create space for the sidebar */
      }
  
      .box {
          margin-bottom: 20px; /* Adjust the value as needed to create space between the boxes */
      }
  
      .box-body {
          padding: 15px; /* Adjust the padding value as needed to create space inside the boxes */
      }
  </style>



  </head>
  <body class="hold-transition skin-blue sidebar-mini">

    @include('tools.navbar')
    <!-- Left side column. contains the logo and sidebar -->
     @include('tools.sidebar')

    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah SPJK</h3>
              </div>
              <!-- ... (Formulir SPJ) ... -->
              <form action="{{ url('Simpan_SPJ') }}" method="post">
                {{ csrf_field() }}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(Session::has('success'))
                <div class="alert alert-success">
                 {{ Session::get('success') }}
                 </div>
                 @endif
                <!-- Form field untuk data SPJ -->
                <div class="box-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Kode Program</label>
                      <input type="text" class="form-control" name="kode_program" placeholder="Enter Kode Program">
                    </div>
    
                    <div class="form-group">
                      <label>Program</label>
                      <input type="text" class="form-control" name="program" placeholder="Enter Program">
                    </div>
    
                    <div class="form-group">
                        <label>TANGGAL</label>
                        <input type="date" name="tgl" class="form-control" placeholder="Tanggal">
                    </div>
    
                    <div class="form-group">
                        <label>PPTK</label>
                        <input type="text" class="form-control" name="pptk" placeholder="Enter PPTK">
                      </div>
    
                      <div class="form-group">
                        <label>Bagian</label>
                        <select type="text" name="bagian_id" class="form-control">
                          <option value="" disabled selected>Pilih Bagian</option>
                          <@foreach($ssp as $item)
                          <option value= "{{$item->id }}">{{ $item->nama_bagian }} </option>    
                          @endforeach
                        </select>
                      </div>
    
                      <div class="form-group">
                        <label>Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" placeholder="Enter Kegiatan">
                      </div>
    
                      <div class="form-group">
                        <label>Sub Kegiatan</label>
                        <input type="text" class="form-control" name="sub_kegiatan" placeholder="Enter Sub Kegiatan">
                      </div>
    
    
                      <div class="form-group">
                        <label>Belanja</label>
                        <select type="text" name="belanja_id" class="form-control">
                          <option value="" disabled selected>Pilih Belanja</option>
                          @foreach($sp as $item)
                          <option value= "{{$item->id }}">{{ $item->nama_belanja }} </option>    
                          @endforeach
                        </select>
                      </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="box-footer">
                 
                </div>
                <div class="box-footer">
                 
                </div>
                <div class="box-footer">
                 
                </div>
                <div class="box-footer">
                 
                </div>
                <div class="box-footer">
                 
                </div>
                <div class="box-footer">
                 
                </div>
            
                
                <div class="box-footer">
                  
                </div>
              </form>
            </div>
          </div>
        </div>
    
          
      </section>
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