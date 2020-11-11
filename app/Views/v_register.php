<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../adminlte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../adminlte/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript'>
  $(window).load(function(){
  $("#level").change(function() {
        console.log($("#level option:selected").val());
        if ($("#level option:selected").val() == '2') {
          $('#form_pengadopsi').prop('hidden', false);
          $('#bantuan').prop('hidden', 'true');
        } else{
          $('#form_pengadopsi').prop('hidden', 'true');
          $('#bantuan').prop('hidden', false);
        }
      });
  });
  </script>
  <script type="text/javascript">
   function harga() {
  var tes = document.getElementById("paket").value;
        document.getElementById("harga_paket").value=tes;
}
</script>
  
</head>
<body class="hold-transition register-page">
  
<div class="register-box" style="width: 60%;">
  <div class="register-logo">
  <img src="../adminlte/dist/img/applogo.png" style="width: 100px; height: 100px;">
  </div>

  <div class="register-box-body">
    <!-- PESAN VALIDASI ERROR -->
    <?php $errors = session()->getFlashdata('errors');
      if(!empty($errors)) { ?>
          <div class="alert alert-danger" role="alert">
            <ul>
              <?php foreach ($errors as $error) : ?>
                  <li><?= esc($error) ?></li>
              <?php endforeach ?>
            </ul>
          </div>  
      <?php } ?>
      <?php
      if(session()->getFlashdata('pesan')){
        echo '<div class="alert alert-success" role="alert">';
        echo session()->getFlashdata('pesan');
        echo '</div>'; 
      } ?>
      <!-- AKHIR PESAN VALIDASI ERROR -->

    <?php echo form_open('auth/save_register') ?>
    <div class="row"> 
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="nama_depan">Nama Depan :</label>
          <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Nama Depan">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
              <label for="nama_belakang">Nama Belakang :</label>
              <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang">
            </div>
      </div>
    </div>

    <div class="row"> 
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email">
        </div>
      </div>
  
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Institusi/Perorangan :</label>
            <select name="institusi" class="form-control">
              <option>Pilih...</option>
              <option value="Institusi">Institusi</option>
              <option value="Perorangan">Perorangan</option>
              
            </select>
          </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group">
              <label for="no_hp">No Handphone :</label>
              <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukan No.Handphone">
          </div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group">
              <label for="no_whatsapp">No Whatsapp :</label>
              <input type="text" class="form-control" name="no_whatsapp" id="no_whatsapp" placeholder="Masukan No.Whatsapp">
          </div>

      </div>
    </div>
    

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="tempat_lahir">Kota Lahir :</label>
          <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan kota lahir">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir :</label>
          <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="DD/MM/YYYY Masukan sesuai format">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="provinsi">Provinsi :</label>
          <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Masukan provinsi..">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="kab_kota">Kabupaten/Kota :</label>
          <input type="text" class="form-control" name="kab_kota" id="kab_kota" placeholder="Masukan Kabupaten/Kota">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="kecamatan">Kecamatan :</label>
          <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukan kecamatan..">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="kelurahan">Kelurahan :</label>
          <input type="text" class="form-control" name="kelurahan" id="kelurahan" placeholder="Masukan kelurahan...">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="alamat">Alamat :</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan nama jalan...">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group">
            <label>Peran :</label>
            <select name="level" id="level" class="form-control">
              <option>Pilih...</option>
              <option value="1">Donatur</option>
              <option value="2">Pengadopsi</option>
              <option value="3">Mitra</option>          
            </select>
          </div>
        </div>
      </div>
      
      <div id="form_pengadopsi" hidden>
        
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="form-group">
              <label>Paket :</label>
              <select  id="paket" name="paket" class="form-control" onchange="harga()">
                <option value="">Pilih...</option>
                <option value="250.000">Paket A - Rp.250.000</option>
                <option value="500.000">Paket B - Rp.500.000</option>
                <option value="1.000.000">Paket C - Rp.1.000.000</option>          
                <option value="5.000.000">Paket D - Rp.5.000.000</option>          
                <option value="10.000.000">Paket E - Rp.10.000.000</option>          
              </select>
            </div>
          </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <label for="harga">Harga :</label>
                  <input type="text" id="harga_paket" class="form-control" disabled>
              </div>
            </div>
            
        </div>
      </div>


    <div id="bantuan" class="form-group" hidden>
        <label for="bantuan">Jumlah Bantuan :</label>
        <input type="text" class="form-control" name="bantuan" id="bantuan" placeholder="Masukan jumlah bantuan...">
    </div>


    <div class="form-group">
        <label for="bukti">File input</label>
        <input type="file" name="bukti" id="bukti">

        <p class="help-block">File gambar dengan format .jpg/.jpeg/.png</p>
    </div>

    <div class="form-group">
        <label for="catatan">Catatan : </label>
        <textarea class="form-control" rows="3" name="catatan" placeholder="Max. 255 karakter......."></textarea>
    </div>
    
    <div class="form-group">
        <label for="password">Password : </label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    
    <div class="row">
      
      <!-- /.col -->
      <div class="col-lg-4 col-xs-4">
      <a href="login" class="text-center">Already have an account?</a>
      </div>
      <div class="col-lg-8 col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
      </div>
      <!-- /.col -->
    </div>
  <?php form_close(); ?>
    
    
    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../../adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../adminlte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script>
  window.setTimeout(function(){
    $(".alert").fadeTo(500,0).slideUp(500,function(){
      $(this).remove();
    });
  },3000);
</script>
</body>
</html>
