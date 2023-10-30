<main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>SPJK</span>
          <h2>Surat Pertanggung Jawaban Kegiatan</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          
          <div class="col-lg-12 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xs-12">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode Program</th>
                        <th>Program</th>
                        <th>PPTK</th>
                        <th>Bagian</th>
                        <th>Belanja</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    @foreach($s as $item)
                    <tbody>
                      <tr>
                        <td>{{ $item ->kode_program }}</td>
                        <td width="200">{{ $item ->program }}</td>
                        <td width="200">{{ $item ->pptk }}</td>
                        <td>{{ $item->bagian->nama_bagian }}</td>
                        <td width="200">{{ $item->belanja->nama_belanja }}</td>
                        <td>{{ $item ->tgl }}</td>
                        <td>T{{ $item ->status }}</td>
                        <td>
                            <a href="{{ url ('#') }}" class="btn btn-warning btn-user btn-md">
                                <i class="fa fa-edit"></i></a>
                            <a href="{{ url ('#') }}" class="btn btn-danger btn-user btn-md">
                                  <i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
               
              </div>
           <!-- End .content-->

           
          </div>
        </div>

      </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Resume Section ======= -->
    <!-- End My Resume Section -->

    <!-- ======= My Services Section ======= -->
   <!-- End My Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= My Portfolio Section ======= -->
    <!-- End My Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Contact Me Section ======= -->
    <!-- End Contact Me Section -->

  </main>