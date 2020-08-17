<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="table-responsive">
        <table class="table table-sm">
          <thead>
            <th colspan="2" class="text-center">Proveedor Info</th>

          </thead>
          <tbody>
            <tr>
              <td>Proveedor</td>
              <td><?php echo $supplier->Name; ?></td>
            </tr>
            <tr>
              <td>Telefono</td>
              <td><?php echo $supplier->Phone; ?></td>
            </tr>
            <tr>
              <td>Proveedor</td>
              <td><?php echo $supplier->Email; ?></td>
            </tr>
            <tr>
              <td>Nota</td>
              <td><?php echo $supplier->Nota; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row justify-content-center">
        <a href="<?php echo base_url(); ?>Supplier" class="btn btn-round btn-outline-default"><i class="fas fa-stop"></i> Cancelar</a>
        <a href="<?php echo base_url(); ?>Supplier/deletep/<?php echo $supplier->Id; ?>" class="btn btn-round btn-outline-danger"><i class="fas fa-trash"></i> Eliminar</a>
      </div>
    </div>
  </div>
</div>
