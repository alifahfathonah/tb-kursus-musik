<div class="container" id="vimi">
    <div class="section center ">

        <!--   Icon Section   -->
        <h4 class=" <?php echo $info['kode']; ?>-text"><?php echo $title; ?></h4>
        <div class=" divider">
        </div>

        <div class="row">
            <?php foreach ($peserta as $p) : ?>
                <div class="col l4 m6 s12">
                    <div class="card sticky-action">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/img/profile/') . $p['foto']; ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?php echo $p['nama']; ?><i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-action">
                            <a href="<?php echo base_url('admin/pesertahapus/') . $p['id_user']; ?>" class="<?php echo $info['kode']; ?>-text" onclick="return confirm('Anda yakin ingin mengeluarkan <?php echo $p['nama']; ?> dari kursus?');">Keluarkan</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo $p['nama']; ?><i class="material-icons right">close</i></span>
                            <p><?php echo $p['kursus']; ?></p>
                            <p><?php echo $p['email']; ?></p>
                            <p><?php echo $p['alamat']; ?></p>
                            <p><?php echo $p['no_hp']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>