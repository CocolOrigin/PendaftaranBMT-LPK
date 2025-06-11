<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <form method="post" action="<?= base_url('tabeluser/store'); ?>">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> Tambah User</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="Nama-User">Nama User :</label>
                        <input class="form-control" type="text" id="nama_user" name="nama_user" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="Username">Username :</label>
                        <input class="form-control" type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password :</label>
                        <input class="form-control" type="text" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="Role">Role :</label>
                        <select class="form-control" name="role" placeholder="Role" required>
                            <option value="" selected disabled>Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Siswa</option>
                            <option value="3">Pendaftar</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-primary w-100 animated-btn" type="submit">Tambah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>