<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>DKP3 Surat Petanggung Jawaban</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('template2/assets/img/pemko.png') }}" rel="icon">
  <link href="{{ asset('template2/assets/img/pemko.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template2/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template2/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>

.custom-modal-body {
  padding: 20px;
  background-color: #f8f9fa;
}

.custom-modal-body p {
  margin: 5px 0; /* Add space above and below each paragraph */
}

.custom-modal-body strong {
  width: 100px; /* Set a fixed width for the "strong" element (adjust as needed) */
  display: inline-block;
  margin-right: 10px; /* Add some space between the label and the value */
}

.services .icon-box1 {
  padding: 10px;
  position: relative;
  overflow: hidden;
  background: #fff;
  
  transition: all 0.3s ease-in-out;
  text-align: right;
  border: 1px solid #fff;
}

.pricing .left {
  text-align: left;
  
}

.services .left-2 {
  text-align: left;
  
}

.break-line {
    display: block;
    margin-top: 10px; /* Sesuaikan dengan margin yang diinginkan */
    margin-bottom: 10px; /* Sesuaikan dengan margin yang diinginkan */
  }

  </style>

</head>



<body>

  <!-- ======= Header ======= -->
  @include('tools_user.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('tools_user.Hero')
  <!-- End Hero -->

  <main id="main">

   <!-- ======= About Me Section ======= -->
   <section id="Status" class="pricing">
    <div class="container">

      <div class="section-title">
        <span>Status</span>
        <h2>Keterangan Status</h2>
        {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> --}}
      </div>

      <div class="row">

        <div class="d-flex justify-content-center"> <!-- Menambahkan d-flex dan justify-content-center -->
          <div class="box" style="width: 100%; max-width: 500px; text-align: center;"> <!-- Menambahkan text-align: center; -->
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Status</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="200">Pemeriksaan Kelengkapan</td>
                  <td class ="left" >Spj diperiksa kelengkapannya</td>
                </tr>

                <tr>
                  <td width="200">Lengkap</td>
                  <td class ="left" >Spj lengkap Spj akan di serahkan kepada kasubag keuangan untuk di paraf.</td>
                </tr>

                <tr>
                  <td width="200">Tidak Lengkap (Dikembalikan)</td>
                  <td class ="left" >Spj kurang lengkap dan kembalikan ke bendahara untuk diserahkan ke PPTK</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

      </div>

    </div>
  </section>

<section id="SPJK" class="services">
  <div class="container">

    <div class="section-title">
      <span>SPJK</span>
      <h2>Surat Pertanggung Jawaban Kegiatan</h2>
      <p>Data Pemeriksaan Surat Pertanggung Jawaban di Dinas Ketahanan Pangan, Pertanian dan Perikanan</p>
    </div>

    <div class="col-md-6 col-lg-12">
      <div class="icon-box">
        <form class="form-inline left-2" action="{{ url('/') }}" method="GET" style="margin-bottom: 10px;">
          <div class="form-group">
            <input type="search" class="form-control" id="search" placeholder="Search" name="search">
          </div>
        </form>
        <table id="example2" class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Program</th>
              <th>Tanggal</th>
              <th>PPTK</th>
              <th>Status</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            @php 
            $no = ($s->currentPage() - 1) * $s->perPage() + 1;
            @endphp
            @foreach($s as $item)
            <tr>
              <td width="30">{{ $no++ }}</td>
              <td class ="left-2" width="300">{{ $item ->program }}</td>
              <td>{{ $item ->tgl }}</td>
              <td width="200">{{ $item ->pptk }}</td>

              {{-- <td style="background-color: {{ $item->status == 'Lengkap' ? '#7CFC00' : '#FF3333' }}; 
                padding: 0.5rem; display: inline-block; border-radius: 0.5rem; text-align: center; margin: 0.7rem 0;">{{ $item->status }}</td> --}}
               
               <td style="background-color: 
                @if($item->status == 'Lengkap') 
                    #7CFC00 
                @elseif($item->status == 'Pemeriksaan Kelengkapan') 
                    #4169E1 
                @else 
                    #FF3333 
                @endif; 
                padding: 0.5rem; 
                display: inline-block; 
                border-radius: 0.5rem; 
                text-align: center; 
                margin: 0.7rem 0;">
                {{ $item->status }}
            </td>

              <td>
                {{-- <a href="{{ url ('detail/' .$item->id) }}">Lihat </a> --}}
                {{-- <a href="{{ url ('detail/'.$item->id) }}" class="btn btn-primary lihat-btn" data-bs-toggle="modal" data-bs-target="#detailspj" data-item-id="{{ $item->id }}">Lihat</a> --}}
                {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailspj{{ $loop->iteration }}">Open Modal</button> --}}
                <button type="button" class="btn btn-primary open-modal-btn" data-toggle="modal" data-target="#detailspj{{ $item->id }}">Lihat</button>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        <div class="icon-box1">{{ $s->links() }}
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="modals">
  @foreach($s as $item)
  <div id="detailspj{{ $item->id }}" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!-- Konten Modal-->
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title mx-auto">Detail Surat Pertanggung Jawaban Kegiatan</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body custom-modal-body">
                  <h2>Surat Pertanggung Jawaban Kegiatan</h2>
                  <div class="row">
                      <div class="col-md-12">
                          <p><strong>Kode Program </strong> : {{ $item->kode_program }}</p>
                          <p><strong>Program </strong> : {{ $item->program }}</p>
                          <p><strong>PPTK </strong> : {{ $item->pptk }}</p>
                          <p><strong>Belanja </strong> : {{ $item->bagian->nama_bagian }}</p>
                          <p><strong>Tanggal </strong> : {{ $item->tgl }}</p>
                          <p><strong>Kegiatan </strong> : {{ $item->kegiatan }}</p>
                          <p><strong>Sub kegiatan </strong> : {{ $item->sub_kegiatan }}</p>
                          <p><strong>Belanja </strong> : {{ $item->belanja->nama_belanja }}</p>

                          {{-- <p><strong>Status</strong> : <span class="{{ $item->status == 'Lengkap' ? 'text-success' : 'text-danger' }}" 
                            style="background-color: {{ $item->status == 'Lengkap' ? '#7CFC00' : '#FFC0CB' }}; 
                            padding: 0.5rem; 
                            border-radius: 0.5rem;
                            color: #000;">
                            {{ $item->status }}
                        </span></p> --}}

                        <p><strong>Status</strong> : <span class="{{ $item->status == 'Lengkap' ? 'text-success' : ($item->status == 'Pemeriksaan Kelengkapan' ? 'text-black' : 'text-danger') }}" 
                          style="background-color: {{ $item->status == 'Lengkap' ? '#7CFC00' : ($item->status == 'Pemeriksaan Kelengkapan' ? '#4169E1' : '#FFC0CB') }}; 
                          padding: 0.5rem; 
                          border-radius: 0.5rem;
                          color: #ffff;">
                          {{ $item->status }}
                      </span></p>

                      </div>
                  </div><br>
                  <h2>Dokumen</h2>
                  <div class="row">
                    <div class="col-md-12">
                      @if($item->dokumen->first())
                          <p><strong>NPD</strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->npd) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                          <p><strong>Pernyataan PPTk</strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->pernyataan) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                          <p><strong>SURAT TANGGUNG JAWAB BELANJA</strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->stj_belanja) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                          <p><strong>GAMBAR</strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->gambar) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                          <p><strong>BKU</strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->bku) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                          <p><strong>BELANJA ADMINISTRASI</strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->belanja_adm) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                          <p><strong>KWITANSI</strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->kwitansi) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                          <p><strong>DAFTAR HADIR</strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->dftr_hdr) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                          <p><strong>SSP PAJAK </strong> : <a href="{{ asset('lampiran/'.$item->dokumen->first()->ssp) }}" target="_blank" rel="noopener noreferrer">Lihat file</a></p>
                      @else
                          @if($item->status == 'Pemeriksaan Kelengkapan')
                              <span style="color: rgb(28, 96, 213);">Pemeriksaan Kelengkapan Dokumen</span>
                          @else
                              <span style="color: red;">Dokumen belum lengkap!</span>
                          @endif
                      @endif
                  </div>                  
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
          </div>
      </div>
  </div>
@endforeach
</div>




   <!-- End About Me Section -->

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

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('tools_user.Footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template2/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="{{ asset('template2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template2/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('template2/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template2/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('template2/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template2/assets/js/main.js') }}"></script>

  <script>
    $(document).ready(function () {
      // Listen for the "Open Modal" button click
      $('.open-modal-btn').click(function () {
        // Get the modal ID from the data-target attribute
        var modalId = $(this).data('target');
        
        // Show the modal
        $(modalId).modal('show');
      });
    });

    // Menyimpan posisi scroll
    window.addEventListener('beforeunload', function () {
        sessionStorage.setItem('scrollPosition', window.scrollY);
    });

    // Mengembalikan posisi scroll
    window.addEventListener('load', function () {
        var scrollPosition = sessionStorage.getItem('scrollPosition');
        if (scrollPosition !== null) {
            window.scrollTo(0, parseInt(scrollPosition));
            sessionStorage.removeItem('scrollPosition');
        }
    });
    

  </script>
  
</body>

</html>