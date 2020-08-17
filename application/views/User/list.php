<div class="content">
  <div class="row m-3">
    <button type="button" name="button" class="btn btn-sm btn-outline-primary"  data-toggle="modal" data-target="#exampleModal">
      <span class="btn-icon"><i class="fa fa-plus"></i> </span><span class="text"> Nuevo</span>
    </button>
  </div>
  <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title m-0 text-center">Lista de Usuarios</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm">
                      <thead class=" text-primary">
                        <tr>
                          <th>
                            Nombre
                          </th>
                          <th>
                            Email
                          </th>
                          <th>Titulo</th>
                          <th>
                            Rol
                          </th>
                          <th>
                            Estado
                          </th>
                          <th>Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Aqui mostramos los datos que trajimos de la bd, se
                      debe llamar igual que la variable del arreglo -->
                        <?php foreach ($users as $u): ?>
                          <tr>
                            <td><?php echo $u->FullName; ?></td>
                            <td><?php echo $u->Email; ?></td>
                            <td><?php echo $u->Title; ?></td>
                            <td><?php echo $u->RolName; ?></td>
                            <td><?php echo $u->Status; ?></td>
                            <td>
                              <a href="<?php echo base_url(); ?>/User/details/<?php echo $u->Id; ?>" class="ml-2 text-primary" title="Ver"> <i class="fa fa-eye"></i> </a>
                              <a href="#" class="ml-2 text-warning" title="Editar"> <i class="fa fa-pencil"></i></a>
                              <a href="#" class="ml-2 text-danger" title="Eliminar"> <i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="" action="<?php echo base_url(); ?>User/create" method="post">


        <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6 pr-1">
                        <div class="form-group">
                          <label>Nombre Completo</label>
                          <input type="text" name="FullName" class="form-control" placeholder="Nombre Completo" value="">
                        </div>
                      </div>
                      <div class="col-md-6 px-1">
                        <div class="form-group">
                          <label>Titulo</label>
                          <input type="text" name="Title" class="form-control" placeholder="Titulo" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 pr-1">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="Email" class="form-control" placeholder="Correo Electrónico" value="">
                        </div>
                      </div>
                      <div class="col-md-6 pl-1">
                        <div class="form-group">
                          <label>Contraseña</label>
                          <input type="password" name="Password" class="form-control" placeholder="Contraseña" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Rol</label>
                          <select class="form-control" name="RolId">
                            <option value="">Elige un Rol</option>
                            <?php foreach ($roles as $r): ?>
                              <option value="<?php echo $r->Id ?>"><?php echo $r->RolName ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 pr-1">
                        <div class="form-group">
                          <label>Status</label>
                          <input type="text" name="Status" class="form-control" value="Activo" readonly>
                        </div>
                      </div>
                      <div class="col-md-6 px-1">
                        <div class="form-group">
                          <label>Creado Por</label>
                          <input type="text" class="form-control" placeholder="Country" value="">
                        </div>
                      </div>
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary btn-round">Guardar</button>
        </div>
          </form>
      </div>
    </div>
  </div>

</div>
