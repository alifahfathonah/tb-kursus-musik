<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $info['tema']; ?></title>

    <!-- CSS  -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo/') . $info['ikon']; ?>" class=" rounded-lg" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 50px;">
                <center>
                    <h4>FORMULIR PENDAFTARAN CALON PESERTA KURSUS</h4>
                    <h4><?php echo strtoupper($info['tema']); ?></h4>
                    <h6><?php echo $info['alamat']; ?></h6>
                </center>
                <table id="example1" class="table table-bordered mt-5">
                    <thead>
                        <tr>
                            <th width="250px">NAMA</th>
                            <th colspan="2"><?php echo $user['nama'] ?></th>
                        </tr>
                        <tr>
                            <th>KURSUS</th>
                            <th colspan="2"><?php echo $user['kursus'] ?></th>
                        </tr>
                        <tr>
                            <th>IURAN PER BULAN</th>
                            <th colspan="2">Rp<?php echo $user['iuran'] ?></th>
                        </tr>
                        <tr>
                            <th>ALAMAT</th>
                            <th colspan="2"><?php echo $user['alamat'] ?>
                        </tr>
                        <tr>
                            <th>JENIS KELAMIN</th>
                            <th colspan="2"><?php echo ($user['jk'] == 'l') ? 'Laki-laki' : 'Perempuan'; ?></th>
                        </tr>
                        <tr>
                            <th>NO HP</th>
                            <th colspan="2"><?php echo $user['no_hp'] ?></th>
                        </tr>
                        <tr>
                            <th>EMAIL</th>
                            <th colspan="2"><?php echo $user['email'] ?></th>
                        </tr>
                        <tr>
                            <th>
                                <center>
                                    <img src="<?php echo base_url('assets/img/profile/') . $user['foto'] ?>" width="250px" height="auto">
                                </center>
                                <center>
                                    Foto Peserta
                                </center>
                            </th>
                            <th width="50%">
                                <center>Paraf Peserta</center>
                            </th>
                            <th width="50%">
                                <center>
                                    Banjarmasin, <?php echo date('d F Y'); ?>
                                </center>
                                <p>
                                    <!-- <center>Petugas</center> -->
                                </p>
                                <br /><br /><br /><br /><br /><br /><br /><br />
                                <p>
                                    <center>Petugas</center>
                                </p>
                            </th>
                        </tr>
                    </thead>
                </table>
                <p>Catatan :</p>
                <p>*) Pastikan data di atas sesuai, karena data tersebut akan digunakan untuk pada sertifikat</p>
                <p>*) Biaya pendaftaran langsung kasih ke petugas yang berjaga sebesar Rp35.000</p>
            </div>
        </div>
    </div><!-- penutup container -->
    <script>
        window.print();
    </script>
</body>

</html>