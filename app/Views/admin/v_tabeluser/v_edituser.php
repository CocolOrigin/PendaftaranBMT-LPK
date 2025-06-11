<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <form method="post" action="<?= base_url('tabeluser/update'); ?>">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> Ubah Username dan Password</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <input class="form-control" type="hidden" id="id" name="id" placeholder="ID" value="<?= $data['id']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Username">Nama User :</label>
                        <input class="form-control" type="text" id="nama_user" name="nama_user" placeholder="Nama" value="<?= $data['nama_user']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Username">Username :</label>
                        <input class="form-control" type="text" id="username" name="username" placeholder="Nama" value="<?= $data['username']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password :</label>
                        <input class="form-control" type="text" id="password" name="password" placeholder="NIK" value="<?= $data['password']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Role">Role :</label>
                        <select class="form-control" name="role" placeholder="Role" required>
                            <option value="1" <?= ($data['role'] == '1') ? 'selected' : ''; ?>>Admin</option>
                            <option value="2" <?= ($data['role'] == '2') ? 'selected' : ''; ?>>Siswa</option>
                            <option value="3" <?= ($data['role'] == '3') ? 'selected' : ''; ?>>Pendaftar</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-primary w-100 animated-btn" type="submit">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>