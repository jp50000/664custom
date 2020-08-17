<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <form action="<?php echo base_url(); ?>Supplier/update" method="post">
        <div class="row">
          <div class="col-md-6 px-1">
            <div class="form-group">
              <input type="hidden" name="Id" value="<?php echo $supplier->Id ?>">
              <label>Nombre</label>
              <input type="text" name="Name" class="form-control"  value="<?php echo $supplier->Name; ?>">
            </div>
          </div>
          <div class="col-md-6 pl-1">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="Email" class="form-control" value="<?php echo $supplier->Email; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 px-1">
            <div class="form-group">
              <label>Telefono</label>
              <input type="text" name="Phone" class="form-control" value="<?php echo $supplier->Phone; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 px-1">
            <div class="form-group">
              <label>Nota</label>
              <textarea class="form-control textarea" name="Nota"><?php echo $supplier->Nota; ?></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="update ml-auto mr-auto">
            <button type="submit" class="btn btn-primary btn-round">Actualizar</button>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
