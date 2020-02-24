<div class="navbar-fixed">
    <nav class="<?php echo $info['kode']; ?>">
        <div class="nav-wrapper container">
            <a href="#home" class="brand-logo white-text"><?php echo $info['tema']; ?></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url('/'); ?>#vimi" class="<?php echo $info['kode']; ?>-text waves-effect waves-<?php echo $info['kode']; ?> btn white">Visi & Misi</a></li>
                <li><a href="<?php echo base_url('/'); ?>#jadwal" class="<?php echo $info['kode']; ?>-text waves-effect waves-<?php echo $info['kode']; ?> btn white">Jadwal Kursus</a></li>
                <li><a href="<?php echo base_url('/'); ?>#fasilitas" class="<?php echo $info['kode']; ?>-text waves-effect waves-<?php echo $info['kode']; ?> btn white">Fasilitas</a></li>
                <li><a href="<?php echo base_url('/'); ?>#tentang" class="<?php echo $info['kode']; ?>-text waves-effect waves-<?php echo $info['kode']; ?> btn white">Kontak</a></li>
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <li><a href="<?php echo base_url('/'); ?>#vimi">Visi & Misi</a></li>
    <li><a href="<?php echo base_url('/'); ?>#jadwal">Jadwal Kursus</a></li>
    <li><a href="<?php echo base_url('/'); ?>#fasilitas">Fasilitas</a></li>
    <li><a href="<?php echo base_url('/'); ?>#tentang">Kontak</a></li>
</ul>