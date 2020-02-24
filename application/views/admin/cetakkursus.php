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
                    <h4>DAFTAR KURSUS</h4>
                    <h4><?php echo strtoupper($info['tema']); ?></h4>
                    <h6><?php echo $info['alamat']; ?></h6>
                </center>
                <table id="example1" class="table table-bordered mt-5">
                    <thead>
                        <tr class="center">
                            <th>#</th>
                            <th>Kursus</th>
                            <th>Iuran per Bulan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($kursus as $u) : ?>
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $u['kursus']; ?></td>
                                <td>Rp<?php echo $u['iuran']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- penutup container -->
    <script>
        window.print();
    </script>
</body>

</html>