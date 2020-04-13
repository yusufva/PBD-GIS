<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
            <?php 
                if($this->session->flashdata('flash')){

                    echo $this->session->flashdata('flash'); 
                }?>
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
                                    <a href="<?= base_url('Maps/admin/editKelurahan/') . $klr['id_wilayah'] ?>" class="badge badge-success">Edit</a>
                                    &NonBreakingSpace;
                                    <a href="<?= base_url('Maps/admin/hapusKelurahan/'). $klr['id_wilayah'] ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
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