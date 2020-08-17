<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <h6>Actualizar Servicio</h6>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url(); ?>Services/update" method="post">
                <div class="row">

                  <div class="col-md-12 col-sm-12 px-2">
                    <div class="form-group">
                      <label>Servicio</label>
                      <input type="hidden" name="Id" value="<?php echo $service->Id; ?>">
                      <input type="text" name="Name" value="<?php echo $service->Name; ?>" class="form-control" placeholder="Nombre de Servicio" value="" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 px-2">
                    <div class="form-group">
                      <label>Proveedor</label>
                      <select class="form-control" name="SupplierId" required>
                        <option value="<?php echo $service->SupplierId; ?>"><?php echo $service->Supplier; ?></option>
                        <?php foreach ($suppliers as $s): ?>
                          <option value="<?php echo $s->Id; ?>"><?php echo $s->Name; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Descripción</label>
                      <textarea class="form-control textarea" name="Description" value=""><?php echo $service->Description; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-outline-secondary btn-round"> <i class="fas fa-plus"></i> Guardar</button>
                  </div>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>
