<?php if (session()->get('role') == 1) { ?>
    <h1>Selamat Datang Admin</h1>
<?php } ?>

<!-- filter menu user -->
<?php if (session()->get('role') == 2) { ?>
    <h1>Selamat Datang User</h1>
<?php } ?>