<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <span class="brand-text font-weight-light">Kurkuma</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="dashboard.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <!-- Gestión de Usuarios -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Gestión de Usuarios
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="<?php echo site_url('usuarios'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Administradores</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="<?php echo site_url('clientes'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Clientes</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="<?php echo site_url('empleados'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Empleados</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Gestión de Menú -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-utensils"></i>
            <p>
              Gestión de Menú
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
           
         
            <li class="nav-item">
                <a href="<?php echo site_url('platos'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Comidas</p>
                </a>
            </li>


          </ul>
        </li>

        <!-- Gestión de Pedidos -->
        <li class="nav-item">
        <a href="<?php echo site_url('pedidos'); ?>" class="nav-link">
            <i class="nav-icon fas fa-receipt"></i>
            <p>Gestión de Pedidos</p>
          </a>
        </li>

        <!-- Gestión de Ventas -->
        <li class="nav-item">
        <a href="<?php echo site_url('ventas'); ?>" class="nav-link">
            <i class="nav-icon fas fa-cash-register"></i>
            <p>Gestión de Ventas</p>
          </a>
        </li>

        <!-- Reportes -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>
              Reportes
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="<?php echo site_url('reportes'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reportes de Ventas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/reportes/pedidos.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reportes de Pedidos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/reportes/usuarios.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reportes de Usuarios</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Search -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>
              Búsquedas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/search/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Búsqueda Simple</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/search/avanzada.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Búsqueda Avanzada</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Miscellaneous -->
        <li class="nav-header">MISCELÁNEOS</li>
        <li class="nav-item">
          <a href="iframe.html" class="nav-link">
            <i class="nav-icon fas fa-ellipsis-h"></i>
            <p>Plugin IFrame</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://adminlte.io/docs/3.1/" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Documentación</p>
          </a>
        </li>

        <!-- Labels -->
        <li class="nav-header">ETIQUETAS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Importante</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Advertencia</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informativo</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
