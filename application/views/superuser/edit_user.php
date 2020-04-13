<div class="row">
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <h3>Form Edit User</h3>
            <form class="form-horizontal form-material" method="POST" action="">
            <input type="hidden" name="id" value="<?= $list['id'] ?>">
                <div class="form-group">
                    <label class="col-md-12">Username</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Username" class="form-control form-control-line" name="username" id="username" value="<?= $list['username'] ?>">
                    </div>
                    <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="kecamatan" class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Email" class="form-control form-control-line" name="email" id="kecamatan" value="<?= $list['email'] ?>">
                    </div>
                    <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="kecamatan" class="col-md-12">Status</label>
                        <select class="custom-select col-12" id="role" name="role">
                            <!-- <option selected><?= $list['status'] ?></option> -->
                            <?php foreach($user_role as $role) : ?>
                                <?php if($role['id'] == $list['status']) : ?>
                                <option value="<?= $role['id'] ?>" selected><?= $role['id'] ?></option>
                                <?php else:?>
                                    <option value="<?= $role['id'] ?>"><?= $role['id'] ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Update Data</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>