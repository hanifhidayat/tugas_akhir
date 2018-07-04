<?php  ?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Warga</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .bs-example{
      margin: 20px;
    }
  </style>
  </head>
  <body>
    <h1 class="text-center">List Warga</h1>
    <div class="container">
  <?php echo "<a href='".base_url()."index.php/warga/create/' class='btn btn-primary'>Tambah</a>"; ?>

  
    
     <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Kepala Keluarga</th>
            <th>No. induk KK</th>
            <th>Jumlah Anggota Keluarga</th>
            <th>Pekerjaan Kepala Keluarga</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($software_list as $row) {
            echo "<tr><td>";
            echo $row['namakepalakeluarga'];
            echo "</td><td>";
            echo $row['nokk'];
            echo "</td><td>";
            echo $row['jumlahanggotakeluarga'];
            echo '</td><td>';
            echo $row['pekerjaankepalakeluarga'];
            echo '</td><td>';
            echo "<a href='".base_url()."index.php/warga/update/".$row['id']."' class='btn btn-warning'>Update</a>";
            echo " ";
            echo "<a href='".base_url()."index.php/warga/delete/".$row['id']."' class='btn btn-danger'>Hapus</a>";
            echo "</td></tr>";
          }



          ?>
        </tbody>
      </table>

      </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
  </body>
</html>