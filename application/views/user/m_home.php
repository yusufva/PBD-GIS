<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                    <caption>©tabel data kelurahan kota Semarang</caption>
                        <thead>
                            <tr>
                                <th class="text-center" scope="row" width="5%">No.</th>
                                <th class="text-center" scope="col">Kelurahan</th>
                                <th class="text-center" scope="col">Kecamatan</th>
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
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>