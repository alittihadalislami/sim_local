<style>
  @media only screen and (max-width: 768px) {
    .card-body{
      padding: 0;
    }
    .br2 > input.form-control{
      text-align: center;
      width: 19%;
      float: left;
      margin-right:1%;
    }
    .ident{
      float: left;
      margin-right: 1%;
    }
    #dorongindent{
    padding-left: 10px;
    }
    .ident:after{
      content: ' - ';
    }
    .nmtebal{
      font-weight: bold;
      color: #084E08
    }
    .judul{
      display: none;
    }
    .nilai{
      padding: 5px;
    }
    .judulNilai > div:not(:last-child) {
      float: left;
    }
    .judulNilai > div {
      width: 19%;
      margin-right: 1%;
      text-align:center;
    }
    .frame-nilai{
    height: 500px; 
    overflow: auto;
  } 
  
  }
    .form-control::-webkit-input-placeholder { color: green; opacity: 0.4;text-align: center; font-size: 14px;}  /* WebKit, Blink, Edge */
    .form-control:-moz-placeholder { color: green; opacity: 0.4; text-align: center; font-size: 14px;}  /* Mozilla Firefox 4 to 18 */
    .form-control::-moz-placeholder { color: green; opacity: 0.4; text-align: center; }  /* Mozilla Firefox 19+ */
    .form-control:-ms-input-placeholder { color: white; }  /* Internet Explorer 10-11 */
    .form-control::-ms-input-placeholder { color: white; }  /* Microsoft Edge */

  .nilai:nth-child(odd){
    background-color: #D8F7D8;
  }
  
  .nilai:nth-child(even){
    background-color: whitesmoke;
  }


    .form-control{
      font-size: 20px;
      font-weight: bold;
      padding: 0;
      text-align: center;
      margin-top: 5px;
    }

@media only screen and (min-width: 769px) {
  .content-wrapper{
    padding-left: 10px;
  }
  
  
  .judulNilai {
    display: none; 
  }
  .card-body{
    padding: 0;
  }
  .card-body .judul {
    text-align: center;
    font-weight: bold;
    color: white; 
    width: 100%;
    background-color: darkgreen;
  }
  #dorongindent{
    text-align: center;
  }
  .nilai{
    height: 45px;
    line-height: 45px;
  }
  .br1{
    width: 13%;
    float: left;
    /*background-color: darkgreen;*/
  }
  .br1:not(:last-child){
    /*border-right: 1px solid black;*/

  }
  .br1:last-child:after{
    clear: left;
  }
  .lb-1{
    width: 5%;
  }
  .lb-1a{
    width: 10%;
  }
  .lb-2{
    width: 10.5%;
  }
  .lb-3{
    width: 30%;
  }
  .br2{
    float: left;
    margin-right: 2px;
  }
  .br2 input.form-control{
    position: relative;
    top: 3px;
    text-align:center;
  }
  .br2:last-child:after{
    clear: left;
  }
}

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm">
          <h1 id="head">Penilaian</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
  <div class="row">
    <div class="col-sm-12 col-md-10">

      <div class="card border-light mb-3">
        <div class="card-header bg-success" style="font-size: 20px;"><?php echo $judul.' - '.$atribut['nama_mapel'].' '.$atribut['nama_kelas']; ?></div>
        <div class="card-body">
          <form action="<?=base_url('penilaian/tambah_na') ?>" method="post">
          <div class="judul">
            <div class="br1 lb-1">NO</div>
            <div class="br1 lb-1a">Induk</div>
            <div class="br1 lb-3">Nama Santri</div>
            <div class="br1 lb-2">NKH</div>
            <div class="br1 lb-2">NHR</div>
            <div class="br1 lb-2">PTS</div>
            <div class="br1 lb-2">PAS</div>
            <div class="br1 lb-2">NRP</div>
            <div style="clear: both;"></div>
          </div>
          <div class="judulNilai" style="background-color: darkgreen; color: white; font-weight: bold; border-bottom: 2px solid #F1DB84">
            <div>NKH</div>
            <div>NHR</div>
            <div>PTS</div>
            <div>PAS</div>
            <div>NRP</div>
          <div style="clear: both;"></div>
          </div>
          <div class="frame-nilai">
          <?php $i=1;?> 
          <?php foreach ($santri as $s) : ?>
          <div class="nilai">
            <div class="br2 ident lb-1" id="dorongindent"><?=$i++;?></div>
            <div class="br2 ident lb-1a"><?= $s['idk_mii']; ?></div>
            <div class="br2 nmtebal lb-3"><?= $s['nama_santri']; ?></div>

            <div class="br2 awnilai lb-2"><input class="form-control lb-i nkh" type="number" readonly min="0" max="100" name="nkh-<?= $s['id_santri'];?>" id="nkh-<?=$i?>" placeholder="NKH" value="<?= isset($na[$s['id_santri']]['nkh']) ? $na[$s['id_santri']]['nkh'] : ''; ?>"></div>

            <div class="br2 awnilai lb-2"><input class="form-control lb-i nhr" type="text" readonly name="nhr-<?= $s['id_santri'];?>" value="<?= isset($nhr[$s['id_santri']]) ? $nhr[$s['id_santri']] : ''; ?>" id="nhr-<?=$i?>" placeholder="NHR"></div>

            <div class="br2 lb-2"><input class="form-control lb-i pts" type="number" min="0" max="100" name="pts-<?= $s['id_santri'];?>" id="pts-<?=$i?>" placeholder="PTS" value="<?= isset($na[$s['id_santri']]['pts']) ? $na[$s['id_santri']]['pts'] : ''; ?>"></div>

            <div class="br2 lb-2"><input class="form-control lb-i pas" type="number" min="0" max="100" name="pas-<?= $s['id_santri'];?>" id="pas-<?=$i?>" placeholder="PAS" value="<?= isset($na[$s['id_santri']]['pas']) ? $na[$s['id_santri']]['pas'] : ''; ?>"></div>

            <div class="br2 lb-2"><input class="form-control lb-i nrp" type="number" min="0" max="100" readonly name="nrp-<?= $s['id_santri'];?>" id="nrp-<?=$i?>" placeholder="NRP" value="<?= isset($na[$s['id_santri']]['nrp']) ? $na[$s['id_santri']]['nrp'] : ''; ?>"></div>

          <div style="clear: both;"></div>
          </div>
          <?php endforeach ?>
          <div style="background-color: darkgreen; height: 5px;"></div>
          </div>
          <input type="text" name="id_tahun-0" value="<?= $id_tahun;?>" hidden="true">
          <input type="text" name="id_mapel-0" value="<?= $id_mapel;?>" hidden="true">
          <input type="text" name="id_kelas-0" value="<?= $id_kelas;?>" hidden="true">
          <button type="submit" class="btn btn-success float-right m-3">Simpan</button>
          <button type="reset" class="btn m-3" onclick="return confirm('Yakin, menghapus data yang telah dientry ?');" >Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  </section>
</div>

<script src="<?=base_url() ?>/assets/js/jquery.min.js"></script>
<!-- <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script> --> 
<script>
  $(document).ready(function(){

    $(".form-control").keyup(function () {
        var idKotak = this.id
        var nilaiKotak   = this.value 
        var kotakAsal = idKotak.split("-")

        if (kotakAsal[0] == 'nkh') {
            kotakNext = $("#pts-"+kotakAsal[1])
        }
        if (kotakAsal[0] == 'pts') {
            kotakNext = $("#pas-"+kotakAsal[1])
        }
        if (kotakAsal[0] == 'pas') {
            kotakNext = $("#nkh-"+(parseInt(kotakAsal[1])+1) ) 
        }

        if (nilaiKotak.length == 2 || nilaiKotak == 100 ) {
          if (nilaiKotak != 10) {
            kotakNext.focus();
          }
        }


          
        

    });

    $(".form-control").change(function () {
      var idKotak = this.id
      var nilaiKotak   = this.value 
      var kotakAsal = idKotak.split("-")
      var idform = kotakAsal[1];

      var nkh = $("#nkh-"+idform+"").val();
      var pts = $("#pts-"+idform+"").val();
      var pas = $("#pas-"+idform+"").val();
      var nhr = $("#nhr-"+idform+"").val();
      var nrp = $("#nrp-"+idform+""); //menampung nilai saja.

      var nilai = (parseFloat(nkh) + parseFloat(nhr) + parseFloat(pts) + parseFloat(pas))/4;

      if (parseFloat(nkh) >= 0 && parseFloat(nhr) >= 0 && parseFloat(pts) >= 0 && parseFloat(pas) >= 0){
        nrp.val(nilai.toFixed(2));
      }else{
        nrp.val('');
      }

      if (nrp.val() < "<?= $kkm['kkm']; ?>" && (parseFloat(nkh) >= 0 && parseFloat(nhr) >= 0 && parseFloat(pts) >= 0 && parseFloat(pas) >= 0) ) {
          nrp.css({
              "background-color": "#EE6666",
              "color": "white",
            })
          }else{
            nrp.css({
              "background-color": "#E9ECEF",
              "color": "black",
            })
          }
    });

  });
</script>
