<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css"/>
	<title><?php echo $title; ?></title>
</head>
<body>
<style>
	/*body {
		background: rgb(0,224,255);
		background: radial-gradient(circle, rgba(0,224,255,1) 0%, rgba(67,6,251,1) 100%);
	}
	.isi {
		width: 600px;
		margin: auto;
		padding-top: 200px;

	}
	.table {
		background: rgb(61,0,246);
		background: linear-gradient(0deg, rgba(61,0,246,1) 0%, rgba(79,181,219,1) 100%);
		border-collapse: separate;
		border: solid black 3px;
		border-radius: 10px;
	}*/

</style>	
<div class="isi">

<div class="container ">
<table class="table table-striped table-bordered">
  <thead class="text-center thead-dark">
    <tr>
      <th colspan="2"><h2>Biodata Ku</h2></th>
    </tr>
  </thead>
  <tbody style="color: white">
    <tr>
      <th scope="row">Nama</th>
      <td>= <?php echo $nama; ?></td>
    </tr>
    <tr>
      <th scope="row">Alamat</th>
      <td>= <?php echo $alamat; ?></td>    	
    </tr>
    <tr>
      <th scope="row">Jenis Kelamin</th>
      <td>= <?php echo $jk; ?></td>    	
    </tr>
    <tr>
      <th scope="row">Asal Sekolah</th>
      <td>= <?php echo $sekolah; ?></td>    	
    </tr>

  </tbody>
</table>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>