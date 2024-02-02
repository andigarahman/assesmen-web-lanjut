<?php $this->load->view('anggota/header')?>
<div class="content-wrapper">
<?php if ($this->session->flashdata('message')):?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('message')?>
  </div>        
<?php endif?>

<h3>List Kontak</h3> 
<a href="<?php echo site_url('CAnggota/tambah')?>">Tambah Data Anggota</a>
<?php if ($list_kontak):?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID Anggota</th>
        <th scope="col">Nama Anggota</th>
        <th scope="col">Gender</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Tlp</th>
        <th scope="col">Total Simpanan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1?>
      <?php foreach ($list_kontak as $lk):?>
      <tr>
        <th scope="row"><?php echo $i?></th>
        <td><?php echo $lk->id_anggota?></td>
        <td><?php echo $lk->nama_anggota?></td>
        <td><?php echo $lk->gender?></td>
        <td><?php echo $lk->alamat?></td>
        <td><?php echo $lk->no_tlp?></td>
        <td><?php echo $lk->simpan_pokok?></td>
        <td>
          <a href="<?php echo site_url('CAnggota/update/'.$lk->id_anggota)?>">Edit</a> | 
          <a href="<?php echo site_url('CAnggota/delete/'.$lk->id_anggota)?>" onclick="return confirm('Anda yakin hapus data ini?')">Delete</a>
        </td>
      </tr>
      <?php $i++?>
      <?php endforeach?>
    </tbody>
  </table>
<?php else:?>
  Data tidak ada
<?php endif?>
</div>
<?php $this->load->view('anggota/footer')?>
