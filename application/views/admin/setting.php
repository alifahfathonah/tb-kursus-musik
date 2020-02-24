<div class="container" id="vimi">
    <div class="section center ">

        <!--   Icon Section   -->
        <h4 class=" <?php echo $info['kode']; ?>-text"><?php echo $title; ?></h4>
        <div class=" divider">
        </div>

        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Basic Info</span>
                        <div class="row">
                            <div class="col s4 m4 l4">
                                <img src="<?php echo base_url('assets/img/logo/') . $info['ikon']; ?>" alt="" width="80%" style="margin: 5%;">
                            </div>
                            <div class="col s8 m8 l8">
                                <?php echo form_open_multipart('admin/basicperbarui'); ?>
                                <input id="id" type="hidden" name="id" value="<?php echo $info['id']; ?>">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="nama" type="text" class="validate" name="nama" value="<?php echo $info['tema']; ?>">
                                        <label for="nama" class="active">Nama Tempat</label>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="input-field col s12">
                                        <select name="warna" required>
                                            <?php foreach ($warna as $w) : ?>
                                                <option value="<?php echo $w['id_warna']; ?>" <?php if ($w['id_warna'] == $info['id_warna']) echo 'selected'; ?>><?php echo $w['warna']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label>Warna Tema</label>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="input-field col s12">
                                        <textarea id="alamatDaftar" class="materialize-textarea" name="alamat"><?php echo $info['alamat']; ?></textarea>
                                        <label for="alamatDaftar">Alamat</label>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="input-field col s12">
                                        <input id="telepon" type="text" class="validate" name="telepon" value="<?php echo $info['telepon']; ?>">
                                        <label for="telepon" class="active">No. Telepon</label>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="input-field col s12">
                                        <input id="wa" type="text" class="validate" name="wa" value="<?php echo $info['whatsapp']; ?>">
                                        <label for="wa" class="active">No. WA</label>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="input-field col s12">
                                        <input id="facebook" type="text" class="validate" name="facebook" value="<?php echo $info['facebook']; ?>">
                                        <label for="facebook" class="active">Facebook</label>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="input-field col s12">
                                        <input id="instagram" type="text" class="validate" name="instagram" value="<?php echo $info['instagram']; ?>">
                                        <label for="instagram" class="active">Instagram</label>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="input-field col s12">
                                        <input id="website" type="text" class="validate" name="website" value="<?php echo $info['website']; ?>">
                                        <label for="website" class="active">Website</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="file-field input-field col s12">
                                        <div class="btn <?php echo $info['kode']; ?>">
                                            <span>Ikon</span>
                                            <input type="file" name="foto">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" name="foto2" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="input-field col s12">
                                        <textarea id="visi" class="materialize-textarea" name="visi"><?php echo $info['visi']; ?></textarea>
                                        <label for="visi">Visi</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-large waves-effect waves-light <?php echo $info['kode']; ?> right">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Misi</span>
                    <div class="row">
                        <div class="col s12 m10 offset-m1">
                            <?php $i = 0; ?>
                            <?php foreach ($misi as $m) : ?>
                                <div class="row">
                                    <form action="<?php echo base_url('admin/misiperbarui'); ?>" method="post">
                                        <div class="input-field col s7">
                                            <textarea id="nama" class="materialize-textarea" name="nama"><?php echo $m['misi']; ?></textarea>
                                            <label for="nama" class="active">Misi ke-<?php echo ++$i; ?></label>
                                        </div>
                                        <div class="col s3">
                                            <div class="row left-align">
                                                <div class="input-field col s12">
                                                    <input id="gambar" type="text" class="validate" name="gambar" value="<?php echo $m['gambar']; ?>">
                                                    <label for="gambar" class="active">Ikon</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s1">
                                            <i class="material-icons"><?php echo $m['gambar']; ?></i>
                                            <input type="hidden" name="id_misi" value="<?php echo $m['id_misi']; ?>">
                                        </div>
                                        <div class="col s1">
                                            <button type="submit" class="btn btn-small waves-effect waves-light <?php echo $info['kode']; ?>">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Fasilitas</span>
                    <div class="row">
                        <div class="col s12 m10 offset-m1">
                            <?php $i = 0; ?>
                            <?php foreach ($fas as $m) : ?>
                                <div class="row">
                                    <form action="<?php echo base_url('admin/fasperbarui'); ?>" method="post">
                                        <div class="input-field col s7">
                                            <textarea id="nama" class="materialize-textarea" name="nama"><?php echo $m['fasilitas']; ?></textarea>
                                            <label for="nama" class="active">Fasilitas ke-<?php echo ++$i; ?></label>
                                        </div>
                                        <div class="col s3">
                                            <div class="row left-align">
                                                <div class="input-field col s12">
                                                    <input id="gambar" type="text" class="validate" name="gambar" value="<?php echo $m['gambar']; ?>">
                                                    <label for="gambar" class="active">Ikon</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s1">
                                            <i class="material-icons"><?php echo $m['gambar']; ?></i>
                                            <input type="hidden" name="id_fasilitas" value="<?php echo $m['id_fasilitas']; ?>">
                                        </div>
                                        <div class="col s1">
                                            <button type="submit" class="btn btn-small waves-effect waves-light <?php echo $info['kode']; ?>">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>