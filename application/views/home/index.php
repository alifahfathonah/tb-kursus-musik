<div id="home">
    <div class="parallax-container">
        <div class="section">
            <div class="container">
                <h1 class="header center white-text text-lighten-2">Pendaftaran Online Kursus <?php echo $info['tema']; ?></h1>
                <div class="row center">
                    <h5 class="header col s12 light"><?php echo $info['alamat']; ?></h5>
                </div>
                <div class="row center">
                    <a class="btn btn-large waves-effect waves-light <?php echo $info['kode']; ?>" href="#login">Daftar</a>
                    <a class="btn btn-large waves-effect waves-light <?php echo $info['kode']; ?>-text white modal-trigger" href="#daftar">Login</a>

                    <!-- Modal Structure -->
                    <div id="daftar" class="modal modal-fixed-footer">
                        <form action="<?php echo base_url('home/login'); ?>" method="post">
                            <div class="modal-content">
                                <h4 class="<?php echo $info['kode']; ?>-text">Login</h4>
                                <div class="divider"></div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate" name="email" required>
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="password" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-<?php echo $info['kode']; ?> btn-flat">Batal</a>
                                <button type="submit" class="waves-effect waves-white <?php echo $info['kode']; ?> btn" name="daftar">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="<?php echo base_url('assets/img/galeri/'); ?>03.png" alt="Unsplashed background img 1"></div>
    </div>
</div>


<div class="container" id="vimi">
    <div class="section center ">

        <!--   Icon Section   -->
        <h4 class=" <?php echo $info['kode']; ?>-text">Visi & Misi</h4>
        <div class=" divider">
        </div>
        <div class="row">
            <div class="col s12 l12 m12 ">
                <!-- <h4>Visi</h4> -->
                <p><?php echo $info['visi']; ?></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($misi as $m) : ?>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center <?php echo $info['kode']; ?>-text"><i class="material-icons"><?php echo $m['gambar']; ?></i></h2>
                        <!-- <h5 class="center">Speeds up development</h5> -->
                        <p class="light"><?php echo $m['misi']; ?>.</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<div class="parallax-container valign-wrapper" id="jadwal">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel <?php echo $info['kode']; ?>">
                            <h4 class="white-text m12">Jadwal Kursus</h4>
                            <!-- <hr> -->
                            <table class="highlight responsive-table">
                                <thead class="white <?php echo $info['kode']; ?>-text">
                                    <tr>
                                        <th>#</th>
                                        <th>Kursus</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 0; ?>
                                    <?php foreach ($jadwal as $k) : ?>
                                        <tr>
                                            <td><?php echo ++$no; ?></td>
                                            <td><?php echo $k['kursus']; ?></td>
                                            <td><?php echo $k['hari']; ?></td>
                                            <td><?php echo $k['waktu_mulai'] . '-' . $k['waktu_selesai'] . ' WITA'; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/img/galeri/'); ?>02.png" alt="Unsplashed background img 2"></div>
</div>

<div class="container" id="fasilitas">
    <div class="section center">
        <div class="row">
            <div class="col s12">
                <h4 class=" <?php echo $info['kode']; ?>-text">Fasilitas</h4>
                <div class="divider"></div>
                <div class="row">
                    <?php foreach ($fas as $m) : ?>
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="<?php echo $info['kode']; ?>-text"><i class="material-icons"><?php echo $m['gambar']; ?></i></h2>
                                <p class="light"><?php echo $m['fasilitas']; ?>.</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper" id="login">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card">
                        <?php echo form_open_multipart('home/daftar'); ?>
                        <div class="card-content <?php echo $info['kode']; ?>-text">
                            <span class="card-title">
                                <h4 class="center">Pendaftaran</h4>
                            </span>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="input-field col s10 offset-s1">
                                    <input id="first_name" type="text" class="validate" name="nama" required>
                                    <label for="first_name">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10 offset-s1">
                                    <select name="kursus" required>
                                        <option value="" disabled selected>--Pilih Kursus--</option>
                                        <?php foreach ($kursus as $k) : ?>
                                            <option value="<?php echo $k['id_kursus']; ?>"><?php echo $k['kursus']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label>Kursus</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10 offset-s1">
                                    <textarea id="alamatDaftar" class="materialize-textarea" name="alamat"></textarea>
                                    <label for="alamatDaftar">Alamat</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s10 offset-s1 left-align">
                                    <label>Jenis Kelamin</label>
                                    <p>
                                        <label>
                                            <input value="l" name="jk" class="<?php echo $info['kode']; ?>" type="radio" checked />
                                            <span>Laki-laki</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input value="p" name="jk" class="<?php echo $info['kode']; ?>" type="radio" />
                                            <span>Perempuan</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10 offset-s1">
                                    <input id="nohp" name="nohp" type="text" class="validate" required>
                                    <label for="nohp">No. HP</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10 offset-s1">
                                    <input id="email" name="email" type="email" class="validate" required>
                                    <label for="email">Email</label>
                                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s10 offset-s1">
                                    <div class="btn <?php echo $info['kode']; ?>">
                                        <span>Foto</span>
                                        <input type="file" name="foto" id="foto" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" name="foto2" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action <?php echo $info['kode']; ?>">
                            <button type="submit" class="waves-effect waves-light btn white <?php echo $info['kode']; ?>-text">Daftar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/img/galeri/'); ?>31.png" alt="Unsplashed background img 2"></div>
</div>