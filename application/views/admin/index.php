<div class="container" id="vimi">
    <div class="section center ">

        <!--   Icon Section   -->
        <h4 class=" <?php echo $info['kode']; ?>-text"><?php echo $title; ?></h4>
        <div class=" divider">
        </div>
        <div class="row">

            <div class="col s12 m6">
                <div class="card-panel purple darken-1">
                    <div class="row">
                        <div class="white-text col s12 m12 l4">
                            <a href="<?php echo base_url('admin/peserta'); ?>" class="white-text">
                                <i class="fa fa-users" style="font-size: 72px"></i>
                            </a>
                            <h4>Peserta</h4>
                        </div>
                        <div class="white-text col s12 m12 l8">
                            <h3>
                                <?php echo $jml_peserta; ?>
                            </h3>
                            <a class="waves-effect waves-light btn btn-small white <?php echo $info['kode']; ?>-text" href="<?php echo base_url('admin/cetakpeserta'); ?>" target="_blank">Cetak</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card-panel deep-orange darken-1">
                    <div class="row">
                        <div class="white-text col s12 m12 l4">
                            <i class="fa fa-graduation-cap" style="font-size: 72px"></i>
                            <h4>Kursus</h4>
                        </div>
                        <div class="white-text col s12 m12 l8">
                            <h3>
                                <?php echo $jml_kursus; ?>
                            </h3>
                            <a class="waves-effect waves-light btn btn-small white <?php echo $info['kode']; ?>-text" href="<?php echo base_url('admin/cetakkursus'); ?>" target="_blank">Cetak</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>