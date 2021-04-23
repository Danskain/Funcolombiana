  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('assets/img/brand/FCL_Logotipo_horizontal_JPG.jpg') }}" class="navbar-brand-img" >
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ activo('home') }}" href="{{ route('home') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ activo('producto') }}" href="{{ route('producto.index') }}">
                  <i class="ni ni-paper-diploma text-warning"></i>
                  <span class="nav-link-text">Solicitudes</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ activo('cotizacion') }}" href="{{route('cotizaciones.index')}}">
                  <i class="ni ni-money-coins text-info"></i>
                  <span class="nav-link-text">Trazabilidad de Solicitudes</span>
                </a>
            </li>
            
        </ul>
        </div>
      </div>
    </div>
  </nav>
