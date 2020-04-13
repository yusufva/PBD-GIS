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
                    <caption>©User Table</caption>
                    <caption>nb: <br>
                        Status 1 : Superuser <br>
                        Status 2 : Admin <br>
                        Status 3 : User
                    </caption>
                        <thead>
                            <tr>
                                <th class="text-center" scope="row" width="5%">Username</th>
                                <th class="text-center" scope="col">Email</th>
                                <th class="text-center" scope="col">Status</th>
                                <th class="text-center" width ="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- tag php foreach -->
                            <?php
                            foreach ($list as $lst) :?>
                                <tr>
                                    <td class="text-center" ><?= $lst['username'] ?></td>
                                    <td class="text-center" width="20%"><?= $lst['email'] ?></td>
                                    <td class="text-center" width="20%"><?= $lst['status'] ?></td>
                                    <td class="text-center" width="10%">
                                    <a href="<?= base_url('Maps/superuser/editUser/') . $lst['id'] ?>" class="badge badge-success">Edit</a>
                                    &NonBreakingSpace;
                                    <a href="<?= base_url('Maps/superuser/hapusUser/'). $lst['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
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