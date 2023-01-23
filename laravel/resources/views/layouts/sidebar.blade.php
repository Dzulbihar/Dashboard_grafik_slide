  <aside class="main-sidebar sidebar-light-dark elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link">
      <img src="{{asset('logo/logo_tpks.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Dashboard Grafik </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('logo/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('/home')}}" class="d-block"> {{ Auth::user()->name }}  </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Dashboard -->
          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link {{($title === "home") ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!-- Master -->
          <li class="nav-item">
            <a href="#" class="nav-link {{($title === "syscode") || ($title === "user") || ($title === "target_rkap") ? 'active' : ''}}">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/syscode')}}" class="nav-link {{($title === "syscode") ? 'active' : ''}}">
                  <i class="fa fa-cog nav-icon"></i>
                  <p> Syscode </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/target_rkap')}}" class="nav-link {{($title === "target_rkap") ? 'active' : ''}}">
                  <i class="nav-icon fa fa-usd"></i>
                  <p> Target RKAP  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/user')}}" class="nav-link {{($title === "user") ? 'active' : ''}}">
                  <i class="fa fa-user nav-icon"></i>
                  <p> User </p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Data Table -->
          <li class="nav-item">
            <a href="#" class="nav-link {{($title === "data_arus") || ($title === "data_arus_percustomer") || ($title === "data_cost_perteus") ? 'active' : ''}}">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Data Tabel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/data_arus')}}" class="nav-link {{($title === "data_arus") ? 'active' : ''}}">
                  <i class="nav-icon fa fa-table"></i>
                  <p> Data Arus </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/data_arus_percustomer')}}" class="nav-link {{($title === "data_arus_percustomer") ? 'active' : ''}}">
                  <i class="fa fa-bars nav-icon"></i>
                  <p> Data Arus PerCustomer </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/data_cost_perteus')}}" class="nav-link {{($title === "data_cost_perteus") ? 'active' : ''}}">
                  <i class="fa fa-server nav-icon"></i>
                  <p> Data COST PerTeus </p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Slider -->
          <li class="nav-item">
            <a href="#" class="nav-link {{($title === "shipcall_gt") || ($title === "arus_domestik") || ($title === "arus_international")  || ($title === "arus_total") || ($title === "produksi_pendapatan") || ($title === "kinerja_kapal") || ($title === "market_domestik") || ($title === "market_international") || ($title === "market_total") || ($title === "arus_grafik") || ($title === "market_share") || ($title === "nota") || ($title === "departure") ? 'active' : ''}}">
              <i class="fa fa-sliders nav-icon"></i>
              <p>
                Slide Grafik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--               
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "shipcall_gt") ? 'active' : ''}}">
                  <i class="fa fa-ship nav-icon"></i>
                  <p> 
                    Arus Kapal
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/shipcall_gt')}}" class="nav-link {{($title === "shipcall_gt") ? 'active' : ''}}">
                      <i class="fa fa-ship nav-icon"></i>
                      <p>ShipCall </p>
                    </a>
                  </li>
                </ul>
              </li>
               -->
              <li class="nav-item">
                <a href="{{url('/shipcall_gt')}}" class="nav-link {{($title === "shipcall_gt") ? 'active' : ''}}">
                  <i class="fa fa-ship nav-icon"></i>
                  <p> Arus Kapal </p>
                </a>
              </li>
              <!-- 
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "arus_domestik") || ($title === "arus_international")  || ($title === "arus_total") ? 'active' : ''}}">
                  <i class="nav-icon fa fa-fire"></i>
                  <p> 
                    Arus Grafik
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/arus_domestik')}}" class="nav-link {{($title === "arus_domestik") ? 'active' : ''}}">
                      <i class="fa fa-bar-chart nav-icon"></i>
                      <p>Arus Domestik</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/arus_international')}}" class="nav-link {{($title === "arus_international") ? 'active' : ''}}">
                      <i class="fa fa-bar-chart nav-icon"></i>
                      <p>Arus International</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/arus_total')}}" class="nav-link {{($title === "arus_total") ? 'active' : ''}}">
                      <i class="fa fa-bar-chart nav-icon"></i>
                      <p>Arus Total</p>
                    </a>
                  </li>
                </ul>
              </li>
               -->
              <li class="nav-item">
                <a href="{{url('/arus_grafik')}}" class="nav-link {{($title === "arus_grafik") ? 'active' : ''}}">
                  <i class="fa fa-bar-chart nav-icon"></i>
                  <p> Arus Grafik </p>
                </a>
              </li>

              <!-- 
              <li class="nav-item">
                <a href="{{url('/produksi_pendapatan')}}" class="nav-link {{($title === "produksi_pendapatan") ? 'active' : ''}}">
                  <i class="nav-icon fa fa-bookmark"></i>
                  <p> Produksi & Pendapatan </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/kinerja_kapal')}}" class="nav-link {{($title === "kinerja_kapal") ? 'active' : ''}}">
                  <i class="nav-icon fa fa-bookmark"></i>
                  <p> Kinerja Kapal </p>
                </a>
              </li>
               -->

              <!-- 
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "market_domestik") || ($title === "market_international") || ($title === "market_total")  ? 'active' : ''}}">
                  <i class="nav-icon fa fa-industry"></i>
                  <p> 
                    Market Share
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/market_domestik')}}" class="nav-link {{($title === "market_domestik") ? 'active' : ''}}">
                      <i class="fa fa-pie-chart nav-icon"></i>
                      <p>Market Domestik</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/market_international')}}" class="nav-link {{($title === "market_international") ? 'active' : ''}}">
                      <i class="fa fa-pie-chart nav-icon"></i>
                      <p>Market International</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/market_total')}}" class="nav-link {{($title === "market_total") ? 'active' : ''}}">
                      <i class="fa fa-pie-chart nav-icon"></i>
                      <p>Market Total</p>
                    </a>
                  </li>
                </ul>
              </li>
              -->
              <li class="nav-item">
                <a href="{{url('/market_share')}}" class="nav-link {{($title === "market_share") ? 'active' : ''}}">
                  <i class="fa fa-pie-chart nav-icon"></i>
                  <p> Market Share </p>
                </a>
              </li>

              <!-- 
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "nota_satuan") ? 'active' : ''}}">
                  <i class="nav-icon fa fa-industry"></i>
                  <p> 
                    Nota
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/nota_satuan')}}" class="nav-link {{($title === "nota_satuan") ? 'active' : ''}}">
                      <i class="fa fa-pie-chart nav-icon"></i>
                      <p>Nota Satuan</p>
                    </a>
                  </li>
                </ul>
              </li>
               -->

              <li class="nav-item">
                <a href="{{url('/nota')}}" class="nav-link {{($title === "nota") ? 'active' : ''}}">
                  <i class="nav-icon fa fa-sticky-note"></i>
                  <p> Nota </p>
                </a>
              </li>

              <!-- 
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "departure_domestik") || ($title === "departure_international") || ($title === "departure_total")? 'active' : ''}}">
                  <i class="nav-icon fa fa-industry"></i>
                  <p> 
                    Departure
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/departure_domestik')}}" class="nav-link {{($title === "departure_domestik") ? 'active' : ''}}">
                      <i class="fa fa-pie-chart nav-icon"></i>
                      <p>Departure Domestik</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/departure_international')}}" class="nav-link {{($title === "departure_international") ? 'active' : ''}}">
                      <i class="fa fa-pie-chart nav-icon"></i>
                      <p>Departure International</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/departure_total')}}" class="nav-link {{($title === "departure_total") ? 'active' : ''}}">
                      <i class="fa fa-pie-chart nav-icon"></i>
                      <p>Departure Domestik & International</p>
                    </a>
                  </li>
                </ul>
              </li>
              -->

              <li class="nav-item">
                <a href="{{url('/departure')}}" class="nav-link {{($title === "departure") ? 'active' : ''}}">
                  <i class="nav-icon fa fa-bookmark"></i>
                  <p> Departure </p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Kinerja -->
          <!--           
          <li class="nav-item">
            <a href="#" class="nav-link {{($title === "kinerja_lapangan") || ($title === "kinerja_gudang")  || ($title === "kinerja_dermaga") ? 'active' : ''}}">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Kinerja
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/kinerja_lapangan')}}" class="nav-link {{($title === "kinerja_lapangan") ? 'active' : ''}}">
                  <i class="fa fa-map nav-icon"></i>
                  <p> Kinerja Lapangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/kinerja_gudang')}}" class="nav-link {{($title === "kinerja_gudang") ? 'active' : ''}}">
                  <i class="fa fa-university nav-icon"></i>
                  <p> Kinerja Gudang </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/kinerja_dermaga')}}" class="nav-link {{($title === "kinerja_dermaga") ? 'active' : ''}}">
                  <i class="fa fa-exchange nav-icon"></i>
                  <p> Kinerja Dermaga </p>
                </a>
              </li>
            </ul>
          </li>
          -->

          <!-- KPI -->
          <li class="nav-item">
            <a href="{{url('/kpi')}}" class="nav-link {{($title === "kpi") ? 'active' : ''}}">
              <i class="nav-icon fa fa-th"></i>
              <p>
                KPI
              </p>
            </a>
          </li>

          <!-- Kinerja -->
          <li class="nav-item">
            <a href="#" class="nav-link {{($title === "vessel_detail") || ($title === "vessel_performance") || ($title === "grafik_vessel_performance") || ($title === "tanggal_vessel_performance") || ($title === "bulan_vessel_performance") ? 'active' : ''}}">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Kinerja
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/vessel_detail')}}" class="nav-link {{($title === "vessel_detail") ? 'active' : ''}}">
                  <i class="fa fa-ship nav-icon"></i>
                  <p> Data Vessel Details </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/vessel_performance')}}" class="nav-link {{($title === "vessel_performance") ? 'active' : ''}}">
                  <i class="fa fa-ship nav-icon"></i>
                  <p> Data Vessel Performance </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/grafik_vessel_performance')}}" class="nav-link {{($title === "grafik_vessel_performance") ? 'active' : ''}}">
                  <i class="fa fa-line-chart nav-icon"></i>
                  <p> Grafik Vessel Performance </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/tanggal_vessel_performance')}}" class="nav-link {{($title === "tanggal_vessel_performance") ? 'active' : ''}}">
                  <i class="fa fa-line-chart nav-icon"></i>
                  <p> Grafik perhari Vessel </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/bulan_vessel_performance')}}" class="nav-link {{($title === "bulan_vessel_performance") ? 'active' : ''}}">
                  <i class="fa fa-line-chart nav-icon"></i>
                  <p> Grafik perbulan Vessel </p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Real Monitoring -->
          <!-- 
          <li class="nav-item">
            <a href="#" class="nav-link {{($title === "behandle") || ($title === "ex_behandle") || ($title === "karantina") || ($title === "ex_karantina") || ($title === "ex_karantina") || ($title === "shift") || ($title === "activity_per_cy") || ($title === "activity_per_block") || ($title === "perjam") || ($title === "estimasi") ? 'active' : ''}}">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Real Monitoring
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "behandle") || ($title === "ex_behandle") || ($title === "karantina") || ($title === "ex_karantina") || ($title === "rubah_status") ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> 
                    Antrian Relokasi
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/behandle')}}" class="nav-link {{($title === "behandle") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Behandle </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/ex_behandle')}}" class="nav-link {{($title === "ex_behandle") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Ex Behandle </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/karantina')}}" class="nav-link {{($title === "karantina") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Karantina </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/ex_karantina')}}" class="nav-link {{($title === "ex_karantina") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Ex Karantina </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/rubah_status')}}" class="nav-link {{($title === "rubah_status") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Rubah Status </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "shift") ? 'active' : ''}}">
                  <i class="nav-icon far fa-circle"></i>
                  <p> 
                    Gate Activity
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/shift')}}" class="nav-link {{($title === "shift") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> R/D perhari/shift</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "activity_per_cy") || ($title === "activity_per_block") ? 'active' : ''}}">
                  <i class="nav-icon far fa-circle"></i>
                  <p> 
                    Yard Activity
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/activity_per_cy')}}" class="nav-link {{($title === "activity_per_cy") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Activity Per CY </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/activity_per_block')}}" class="nav-link {{($title === "activity_per_block") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Activity Per Block </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{($title === "perjam") || ($title === "estimasi") ? 'active' : ''}}">
                  <i class="nav-icon far fa-circle"></i>
                  <p> 
                    Kinerja Kapal
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/perjam')}}" class="nav-link {{($title === "perjam") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Per Jam </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/estimasi')}}" class="nav-link {{($title === "estimasi") ? 'active' : ''}}">
                      <i class="fa fa-circle nav-icon"></i>
                      <p> Estimasi Selesai </p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
           -->

          <!-- Alert -->
          <!-- 
          <li class="nav-item">
            <a href="{{url('/alert')}}" class="nav-link {{($title === "alert") ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Alert
              </p>
            </a>
          </li>
           -->

          <!-- Fullscreen -->
          <li class="nav-item">
            <a href="#" class="nav-link" data-widget="fullscreen" role="button">
              <i class="nav-icon fas fa-expand-arrows-alt"></i>
              <p>Fullscreen</p>
            </a>
          </li>

          <!-- Logout -->
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fa fa-sign-out" aria-hidden="true"></i>
              <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>