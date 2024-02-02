<?php $this->load->view('anggota/header')?>
<div class="content-wrapper">
  <h3>Tambah Anggota</h3>
  <form action="<?php echo $action?>" method="post">
    <div class="mb-3">
      <label class="form-label">Nama Anggota</label>
      <input type="text" class="form-control" name="nama_anggota" value="<?php echo isset($nama_anggota) ? $nama_anggota : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Gender</label>
      <input type="text" class="form-control" name="gender" value="<?php echo isset($gender) ? $gender : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">No Tlp</label>
      <input type="text" class="form-control" name="no_tlp" value="<?php echo isset($no_tlp) ? $no_tlp : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name="password" value="<?php echo isset($password) ? $password : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Total Simpanan</label>
      <input type="number" class="form-control" name="simpan_pokok" value="<?php echo isset($simpan_pokok) ? $simpan_pokok : ''; ?>">
    </div>
    <input type="hidden" class="form-control" name="id_anggota" value="<?php echo isset($id_anggota) ? $id_anggota : ''; ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php $this->load->view('anggota/footer')?>