<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('assets/fire.png'); ?>" rel="icon">
    <title>Sipandor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/fire.png'); ?>" rel="icon">
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- <?php echo base_url(); ?>assets/bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
    <!--data tables-->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    


    <style>
        body {
            background-color: #f5f5f5;
        }
        
        .form-profile {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }
        
        .form-profile h1 {
            font-weight: bold;
            color: #333333;
            font-size: 36px;
            margin-bottom: 40px;
        }
        
        .form-profile label {
            font-weight: bold;
            color: #333333;
            margin-bottom: 10px;
        }
        
        .form-profile input[type="text"],
        .form-profile input[type="email"],
        .form-profile input[type="tel"],
        .form-profile select,
        .form-profile textarea {
            border: none;
            background-color: #f5f5f5;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        
        .form-profile select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,<svg viewBox='0 0 4 5'><path d='M2 0 L0 2 L4 2 Z' fill='%23333333'/></svg>");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 8px 10px;
            padding-right: 30px;
        }
        
        .form-profile button[type="submit"] {
            background-color: #333333;
            color: #ffffff;
            border-radius: 5px;
            padding: 15px 40px;
            border: none;
            transition: all 0.3s ease;
        }
        
        .form-profile button[type="submit"]:hover {
            background-color: #222222;
        }
        
        .form-profile .form-check-label {
            color: #333333;
        }
    </style>
  </head>