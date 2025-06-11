<?php
if (session()->getFlashdata('suksesedit')) {
    echo '<div class="alert alert-success alert-dismissible">';
    echo session()->getFlashdata('suksesedit');
    echo '</div>';
}

if (session()->getFlashdata('gagaledit')) {
    echo '<div class="alert alert-danger alert-dismissible">';
    echo session()->getFlashdata('gagaledit');
    echo '</div>';
}
?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <form method="post" action="<?= base_url('tabeluser/update'); ?>">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Ubah Username dan Password</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <?php
                $id = $data[0]['id'];
                $nama_user = $data[0]['nama_user'];
                $username = $data[0]['username'];
                $password = $data[0]['password'];
                $role = $data[0]['role'];
                ?>
                <div class="box-body">
                    <div class="form-group"> <input class="form-control" type="hidden" id="id" name="id" placeholder="ID" value="<?= $id ?>" required> </div>
                    <div class="form-group"> <label for="Username">Nama User:</label> <input class="form-control" type="text" id="nama_user" name="nama_user" placeholder="Nama" value="<?= $nama_user ?>" required> </div>
                    
                    <div class="form-group"> <label for="Username">Username:</label> <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="<?= $username ?>" <?php 
                    if (!(session()->get('role') == 1)) {
                        echo 'readonly ';
                    }
                    ?>required> </div>
                    <div class="form-group"> <label for="Password">Password:</label> <input class="form-control" type="text" id="password" name="password" placeholder="Password" value="<?= $password ?>" required> </div>
                    
                    <div class="form-group"><button class="btn btn-primary w-100 animated-btn" type="submit">Update</button></div>
                </div>

            </div>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>