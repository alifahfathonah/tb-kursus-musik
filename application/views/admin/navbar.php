<div class="navbar-fixed">
    <nav class="<?php echo $info['kode']; ?>">
        <div class="nav-wrapper container">
            <a href="<?php echo base_url(); ?>" class="brand-logo white-text"><?php echo $info['tema']; ?></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url('admin'); ?>" class="<?php echo $info['kode']; ?>-text waves-effect waves-<?php echo $info['kode']; ?> btn white">Dashboard</a></li>
                <li><a href="<?php echo base_url('admin/setting'); ?>" class="<?php echo $info['kode']; ?>-text waves-effect waves-<?php echo $info['kode']; ?> btn white">Pengaturan</a></li>
                <li><a href="<?php echo base_url('admin/peserta'); ?>" class="<?php echo $info['kode']; ?>-text waves-effect waves-<?php echo $info['kode']; ?> btn white">Peserta</a></li>
                <li><a href="<?php echo base_url('home/logout'); ?>" class="<?php echo $info['kode']; ?>-text waves-effect waves-<?php echo $info['kode']; ?> btn white" onclick="return confirm('Anda yakin ingin logout?');">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <li><a href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
    <li><a href="<?php echo base_url('admin/setting'); ?>">Pengaturan</a></li>
    <li><a href="<?php echo base_url('admin/peserta'); ?>">Peserta</a></li>
    <li><a href="<?php echo base_url('home/logout'); ?>" onclick="return confirm('Anda yakin ingin logout?');">Logout</a></li>
</ul>