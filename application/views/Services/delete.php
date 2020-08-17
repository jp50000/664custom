<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-header">
        <h6 class="text-center m-0">Servicio Info</h6>
      </div>
      <div class="card-body">
        <table class="table table-sm">
          <tr>
            <td>Servicio</td>
            <td><?php echo $service->Name; ?></td>
          </tr>
          <tr>
            <td>Descripcion</td>
            <td><?php echo $service->Description; ?></td>
          </tr>
          <tr>
            <td>Proveedor</td>
            <td><?php echo $service->Supplier; ?></td>
          </tr>
        </table>
      </div>
      <div class="row justify-content-center">
        <a href="<?php echo base_url(); ?>Services" class="btn btn-round btn-outline-default"><i class="fas fa-stop"></i> Cancelar</a>
        <a href="<?php echo base_url(); ?>Services/deletep/<?php echo $service->Id; ?>" class="btn btn-round btn-outline-danger"><i class="fas fa-trash"></i> Eliminar</a>
      </div>
    </div>
  </div>
</div>
