<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=companies&m=create" class="btn btn-info">Crear nuevo compañia</a>
                          <div class="table-responsive mt-4">
                            <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">NOMBRE</th>
                                        <th class="text-center">NIT</th>
                                        <th class="text-center">DIRECCION</th>
                                        <th class="text-center">TELEFONO</th>
                                        <th class="text-center">LOGO</th>
                                        <th width="260" class="text-center">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<10;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>Coca Cola</td>
                                        <td>5512521-2</td>
                                        <td>Calle falsa 1 2 3</td>
                                        <td>0800045215154</td>
                                        <td>p</td>
                                        <td>
                                            <a href="?c=companies&m=show" class="btn btn-sm btn-info">Detalles</a>
                                            <a href="?c=companies&m=edit" class="btn btn-sm btn-info">Editar</a>
                                            <button class="btn btn-sm btn-danger" onclick="NotificacionEliminar();">Eliminar</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                          </div>
                          <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
