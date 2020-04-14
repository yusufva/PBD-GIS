<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <?php 
                if($this->session->flashdata('flash')){

                    echo $this->session->flashdata('flash'); 
                }?>

                <form action="<?= base_url('Maps/superuser/export') ?>" method="post">
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Export</button>
                    </div>
                </div>
                </form>
                &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload">
                    Upload
                </button><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                    <caption>©tabel data kelurahan kota Semarang</caption>
                        <thead>
                            <tr>
                                <th class="text-center" scope="row" width="5%">No.</th>
                                <th class="text-center" scope="col">Kelurahan</th>
                                <th class="text-center" scope="col">Kecamatan</th>
                                <th class="text-center" width ="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- tag php foreach -->
                            <?php
                            foreach ($kelurahan as $klr) :?>
                                <tr>
                                    <td class="text-center" ><?= $klr['id_wilayah'] ?></td>
                                    <td class="text-center" width="20%"><?= $klr['nama_wilayah'] ?></td>
                                    <td class="text-center" width="20%"><?= $klr['wilayah'] ?></td>
                                    <td class="text-center" width="10%">
                                    <a href="<?= base_url('Maps/superuser/editKelurahan/') . $klr['id_wilayah'] ?>" class="badge badge-success">Edit</a>
                                    &NonBreakingSpace;
                                    <a href="<?= base_url('Maps/superuser/hapusKelurahan/'). $klr['id_wilayah'] ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="judulModal">Upload Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <form action="<?= base_url('Maps/superuser/upload') ?>" method="post" enctype="multipart/form-data">
                    <label>Upload Excel Data</label>
                    <input type="file" class="form-control" name="filekcmt" id="filekcmt" required accept=".xls, .xlsx"/>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-success">Upload Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>