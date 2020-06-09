<?php
include('includes/Logger.php');
date_default_timezone_set("Asia/Calcutta"); 
$load = new Load;
$load->setLogger(new DemoLogger);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logger</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Logger</h1>
    <div class="alert alert-success" style="margin-top:10%">
        <?php $load->log('Page reloaded', date('d-m-Y g:i:s A')); ?>
    </div>
    </div>
</body>
</html>
