<div class="container" id="vimi">
    <div class="section center ">

        <!--   Icon Section   -->
        <h4 class=" <?php echo $info['kode']; ?>-text"><?php echo $title; ?></h4>
        <div class=" divider">
        </div>
        <div class="col s12 m7">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="<?php echo base_url('assets/img/profile/') . $user['foto']; ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h2 class="header"><?php echo $user['nama']; ?></h2>
                        <div class="divider"></div>
                        <br>
                        <div class="row left-align">
                            <div class="col s3 m3 l3">
                                <p>Email</p>
                            </div>
                            <div class="col s9 m9 l9">
                                <p><?php echo $user['email']; ?></p>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="col s3 m3 l3">
                                <p>Kursus</p>
                            </div>
                            <div class="col s9 m9 l9">
                                <p><?php echo $user['kursus']; ?></p>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="col s3 m3 l3">
                                <p>Alamat</p>
                            </div>
                            <div class="col s9 m9 l9">
                                <p><?php echo $user['alamat']; ?></p>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="col s3 m3 l3">
                                <p>Jenis Kelamin</p>
                            </div>
                            <div class="col s9 m9 l9">
                                <p><?php echo ($user['jk'] == "l") ? "Laki-laki" : "Perempuan"; ?></p>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="col s3 m3 l3">
                                <p>No. HP</p>
                            </div>
                            <div class="col s9 m9 l9">
                                <p><?php echo $user['no_hp']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo base_url('peserta/hapus'); ?>" onclick="return confirm('Anda yakin ingin berhenti dari kursus ini?');" class="<?php echo $info['kode']; ?>-text">Mengundurkan diri</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>