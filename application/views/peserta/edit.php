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
                        <?php echo form_open_multipart('peserta/perbarui'); ?>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nama" type="text" class="validate" name="nama" value="<?php echo $user['nama']; ?>">
                                <label for="nama" class="active">Nama</label>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate " name="email" value="<?php echo $user['email']; ?>" readonly>
                                <label for="email" class="active">Email</label>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="input-field col s12">
                                <select name="kursus" required>
                                    <?php foreach ($kursus as $k) : ?>
                                        <option value="<?php echo $k['id_kursus']; ?>" <?php if ($k['id_kursus'] == $user['id_kursus']) echo 'selected'; ?>><?php echo $k['kursus']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label>Kursus</label>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="input-field col s12">
                                <textarea id="alamatDaftar" class="materialize-textarea" name="alamat"><?php echo $user['alamat']; ?></textarea>
                                <label for="alamatDaftar">Alamat</label>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="input-field col s12">
                                <!-- <label>Jenis Kelamin</label> -->
                                <p>
                                    <label>
                                        <input value="l" name="jk" class="<?php echo $info['kode']; ?>" type="radio" <?php if ($user['jk'] == 'l') echo 'checked'; ?> />
                                        <span>Laki-laki</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input value="p" name="jk" class="<?php echo $info['kode']; ?>" type="radio" <?php if ($user['jk'] == 'p') echo 'checked'; ?> />
                                        <span>Perempuan</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row left-align">
                            <div class="input-field col s12">
                                <input id="nohp" type="text" class="validate" name="nohp" value="<?php echo $user['no_hp']; ?>">
                                <label for="nohp" class="active">No. HP</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn <?php echo $info['kode']; ?>">
                                    <span>Foto</span>
                                    <input type="file" name="foto" id="foto">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="foto2" type="text">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-large waves-effect waves-light <?php echo $info['kode']; ?> right">Simpan</button>
                        </form>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo base_url('peserta/hapus'); ?>" onclick="return confirm('Anda yakin ingin berhenti dari kursus ini?');" class="<?php echo $info['kode']; ?>-text">Mengundurkan diri</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>