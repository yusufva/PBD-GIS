<div class="row">
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <h3>Form Tambah Kelurahan</h3>
            <form class="form-horizontal form-material" method="POST" action="">
                <div class="form-group">
                    <label class="col-md-12">Nama Kelurahan</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Nama Kelurahan..." class="form-control form-control-line" name="kelurahan" id="kelurahan">
                    </div>
                    <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="kecamatan" class="col-md-12">Kecamatan</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Kecamatan" class="form-control form-control-line" name="kecamatan" id="kecamatan">
                    </div>
                    <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Add Data</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>