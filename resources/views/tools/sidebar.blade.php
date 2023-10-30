<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form> --}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu">
        <li class="header">Home</li>
        <li><a href="{{ url ('Dasboard') }}"><i class="fa fa-home"></i> <span>Dasboard</span></a></li>
        <li class="header">Surat Pertanggung Jawaban</li>
        <li><a href="{{ url ('Spj') }}"><i class="fa fa-book"></i> <span>SPJK</span></a></li>
        <li><a href="{{ url ('Lihat-Dok') }}"><i class="fa fa-book"></i> <span>Dokumen</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Master Data</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url ('Belanja') }}"><i class="fa fa-circle-o"></i> Belanja</a></li>
            <li><a href="{{ url ('Bagian') }}"><i class="fa fa-circle-o"></i> Bagian</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>