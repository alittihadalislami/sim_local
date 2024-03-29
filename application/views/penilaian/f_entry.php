<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pl-3">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <div class="display-4 mb-5"><?=$nama_santri['nama_santri'];?></div>
          <form method="post" action="<?=base_url('penilaian/doentry') ?>">
            <div class="form-group">
              <label for="sakit" style="display: block;">Ketidakhadiran</label>
              <input type="number" class="form-control" id="sakit" placeholder="Sakit" style="width: 100px; display: inline-block;" name="sakit" required="true">
              <input type="number" class="form-control" id="sakit" placeholder="Ijin" style="width: 100px; display: inline-block;" name="ijin" required="true">
              <input type="number" class="form-control" id="sakit" placeholder="Alpa" style="width: 100px; display: inline-block;" name="alpa" required="true">
            </div>
            <div class="form-group">
              <label for="Nasehat">Nasehat</label>
              <textarea class="form-control" id="Nasehat" rows="4" name="nasehat" placeholder="Nasehat dan Bimbingan" required="true"></textarea>
            </div>
            <hr style="margin-bottom: 20px;margin-top: 50px;">
            <label>Untuk Raport Umum</label>
            <div class="form-group">
              <label for="pramuka">Pramuka</label>
              <select class="form-control" id="pramuka" name="pramuka" required="true">
                <option value="">-pilih nilai pramuka-</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="4">D</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ismii">Osis/Ismii</label>
              <select class="form-control" name="ismi" id="ismii" required="true">
                <option value="">-pilih nilai ismii-</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="4">D</option>
              </select>
            </div>
            <div class="form-group">
              <label for="tahfid">Tahfidz</label>
              <select class="form-control" name="tahfid" id="tahfid" required="true">
                <option value="">-pilih nilai tahfid-</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="4">D</option>
              </select>
            </div>
            <input type="text" name="santri_id" value="<?=$id_santri?>" hidden="true">
            <input type="text" name="kelas_id" value="<?=$id_kelas?>" hidden="true">
            <input type="text" name="tahun_id" value="<?=$id_tahun?>" hidden="true">
            <button class="btn btn-success" type="submit">Simpan</button>
          </form>
          <div style="margin-bottom: 50px;"></div>
        </div>
      </div>
    </div>
  </section>
</div>