<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HOTEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau De Bord
              </p>
            </a>
          </li>
            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="{{ Auth::user()->photo }}" alt="" height="50px" width="50px" style="border-radius: 100%">
              <p>
                {{ Auth::user()->name }}
                {{--  <i class="fas fa-angle-left right"></i>  --}}
                {{--  <span class="badge badge-info right">6</span>  --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/register" class="nav-link">
                  
                  <p>
                    <form action="{{route('logout')}}" method="POST">
                      @csrf 
                      <button class="decon btn btn-dark" type="submit">Déconnexion</button>
                    </form> <br>
    
                    <form action="/profile" method="POST">
                      @csrf 
                      <input class="decon btn btn-dark" type="submit" value="Profile">
                    </form>
                  </p>
                </a>
              </li>
        </ul>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Gestion
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(Auth::User()->hasPermission('roles-read'))
              <li class="nav-item">
                <a href="/laratrust" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
              @endif
           
          
              @if(Auth::User()->hasPermission('chambres-read'))
              <li class="nav-item">
                <a href="/chambre" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chambre</p>
                </a>
              </li>
              @endif
              @if(Auth::User()->hasPermission('categorie-read'))
              <li class="nav-item">
                <a href="/categorie" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorie</p>
                </a>
             </li>
             @endif
             @if(Auth::User()->hasPermission('reservations-read'))
                <li class="nav-item">
                <a href="/demande" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Demande</p>
                </a>
                </li>
              @endif
              @if(Auth::User()->hasPermission('service-read'))
                <li>
                <a href="/service" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service</p>
                </a>
              </li>
              @endif
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
