<div class="row">
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <h3>Form Tambah User</h3>
            <form class="form-horizontal form-material" method="POST" action="">
                <div class="form-group">
                    <label class="col-md-12">Username</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" name="username" id="username" value="<?= set_value('username') ?>">
                    </div>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" name="email" id="email" value="<?= set_value('email') ?>">
                    </div>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input type="password" class="form-control form-control-line" name="password" id="password">
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="kecamatan" class="col-md-12">Status</label>
                        <select class="custom-select col-md-12" id="role" name="role">
                            <!-- <option selected><?= $list['status'] ?></option> -->
                            <?php foreach($user_role as $role) : ?>
                                <?php if($role['id'] == set_value('role')) : ?>
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
                        <button class="btn btn-success">Add User</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>