<?php 
echo form_open_multipart('admin/setting');

if ($this->session->flashdata('pesan')) {
    echo'<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>
<div class="col-sm-4">
    <label for="">Foto Kepala Sekolah</label><br>
    <img src="<?= base_url('foto_kepsek/'.$setting -> foto_kepsek) ?>" width="200px">
    <div class="form-group">
        <br>
        <input class="form-control" type="file" name="foto_kepsek">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label for="">Nama Sekolah</label>
        <input class="form-control" value="<?= $setting -> nama_sekolah?>" type="text" name="nama_sekolah" placeholder="Nama Sekolah">
    </div>
    <div class="form-group">
        <label for="">Alamat Sekolah</label>
        <input class="form-control" value="<?= $setting -> alamat?>" type="text" name="alamat" placeholder="Alamat Sekolah">
    </div>
    <div class="form-group">
        <label for="">No.telpon Sekolah</label>
        <input class="form-control" value="<?= $setting -> no_sekolah?>" type="text" name="no_sekolah" placeholder="No.telpon Sekolah">
    </div>
    <div class="form-group">
        <label for="">Nama Kepala Sekolah</label>
        <input class="form-control" value="<?= $setting -> kepala_sekolah?>" type="text" name="kepala_sekolah" placeholder="Nama Kepala Sekolah">
    </div>
    <div class="form-group">
        <label for="">NIP Kepala Sekolah</label>
        <input class="form-control" value="<?= $setting -> nip?>" type="text" name="nip" placeholder="NIP Kepala Sekolah">
    </div>
</div>

<div class="col-sm-12">
    <div class="form-group">
        <label>Sejarah Sekolah</label>
        <textarea class="form-control" name="sejarah" rows="5"><?= $setting -> sejarah?></textarea>
    </div>
    <div class="form-group">
        <label>Visi Sekolah</label>
        <textarea class="form-control" name="visi" rows="5"><?= $setting -> misi?></textarea>
    </div>
    <div class="form-group">
        <label>Misi Sekolah</label>
        <textarea class="form-control" name="misi" rows="5"><?= $setting -> visi?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Update</button>
    </div>
</div>
<?php 
echo form_close();
?> 