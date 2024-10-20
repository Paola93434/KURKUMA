<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestión de Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Product Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-box mr-1"></i>
                                Lista de Productos
                            </h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="todo-list" data-widget="todo-list">
                                <li>
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="producto1" id="productoCheck1">
                                        <label for="productoCheck1"></label>
                                    </div>
                                    <span class="text">Lácteos - Yogur Natural</span>
                                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 días</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="producto2" id="productoCheck2" checked>
                                        <label for="productoCheck2"></label>
                                    </div>
                                    <span class="text">Verduras - Espinacas Frescas</span>
                                    <small class="badge badge-info"><i class="far fa-clock"></i> 1 semana</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="producto3" id="productoCheck3">
                                        <label for="productoCheck3"></label>
                                    </div>
                                    <span class="text">Frutas - Manzanas Orgánicas</span>
                                    <small class="badge badge-warning"><i class="far fa-clock"></i> 3 días</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="producto4" id="productoCheck4">
                                        <label for="productoCheck4"></label>
                                    </div>
                                    <span class="text">Carnes - Pollo Orgánico</span>
                                    <small class="badge badge-success"><i class="far fa-clock"></i> 1 semana</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="producto5" id="productoCheck5">
                                        <label for="productoCheck5"></label>
                                    </div>
                                    <span class="text">Cereales - Avena Integral</span>
                                    <small class="badge badge-primary"><i class="far fa-clock"></i> 2 semanas</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar Producto</button>
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->

                <!-- Right col -->
                <section class="col-lg-5 connectedSortable">
                    <!-- Sales Graph Card -->
                    <div class="card bg-gradient-info">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="fas fa-chart-line mr-1"></i>
                                Gráfica de Ventas
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="text-white">Ventas Online</div>
                                </div>
                                <div class="col-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="text-white">Ventas en Tienda</div>
                                </div>
                                <div class="col-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="text-white">Pedidos por Correo</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    <!-- Calendar Card -->
                    <div class="card bg-gradient-success">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendario
                            </h3>
                            <div class="card-tools">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a href="#" class="dropdown-item">Agregar nuevo evento</a>
                                        <a href="#" class="dropdown-item">Limpiar eventos</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">Ver calendario</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <!-- Calendar can be embedded here -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Right col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
