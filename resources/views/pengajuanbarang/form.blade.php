<!-- Modal -->
<div class="modal fade" id="form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('barang') }}" method="POST">
        @csrf
        @method('post')
        <div class="modal-body">
          <div class="mb-3 row">
              <label for="nama_pengaju" class="col-sm-4 col-form-label">Nama Pengaju</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="nama_barang" class="col-sm-4 col-form-label">Nama barang</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="tanggal_pengajuan" class="col-sm-4 col-form-label">tanggal pengajuan</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" id="tangga_pengajuan" name="tanggal_pengajuan">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="qty" class="col-sm-4 col-form-label">Quantity</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="qty" name="qty">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Understood</button>
        </div>
    </form>
</div>
</div>
</div>
