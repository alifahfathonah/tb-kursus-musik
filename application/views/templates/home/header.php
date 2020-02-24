<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $info['tema']; ?></title>

    <!-- CSS  -->
    <link rel='shortcut icon' type='image/vnd.microsoft.icon' href='<?php echo base_url('assets/img/logo/') . $info['ikon']; ?>'> <!-- IE -->
    <link rel='apple-touch-icon' type='image/png' href='<?php echo base_url('assets/img/logo/') . $info['ikon']; ?>'> <!-- iPhone -->
    <link rel='apple-touch-icon' type='image/png' sizes='72x72' href='<?php echo base_url('assets/img/logo/') . $info['ikon']; ?>'> <!-- iPad -->
    <link rel='apple-touch-icon' type='image/png' sizes='114x114' href='<?php echo base_url('assets/img/logo/') . $info['ikon']; ?>'> <!-- iPhone4 -->
    <link rel='icon' type='image/png' href='<?php echo base_url('assets/img/logo/') . $info['ikon']; ?>'> <!-- Opera Speed Dial, at least 144×114 px -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="<?php echo base_url('assets/css/'); ?>style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="<?php echo base_url('assets/fa/css/'); ?>all.min.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <!--  Scripts-->
    <script src="<?php echo base_url('assets/js/'); ?>jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/'); ?>materialize.js"></script>
    <script src="<?php echo base_url('assets/js/'); ?>init.js"></script>

</head>

<body>
    <?php echo $this->session->flashdata('pesan'); ?>