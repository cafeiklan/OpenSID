<?php $this->load->view('print/headjs.php');?>
<body>
<div id="content" class="container_12 clearfix">
<div id="content-main" class="grid_7">

<link href="<?php echo base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />

<div>
<table width="100%">
<tr> <img src="<?php echo LogoDesa($desa['logo']);?>" alt=""  width="100" height="80" class="logo"></tr>

<div class="header">
<h4 class="kop">PEMERINTAH KABUPATEN <?php echo strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
<h4 class="kop">KECAMATAN <?php echo strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
<h4 class="kop">DESA <?php echo strtoupper(unpenetration($desa['nama_desa']))?></h4>
<h5 class="kop2"><?php echo ($desa['alamat_kantor'])?> </h5>

<div style="text-align: center;">
<hr></div></div>

<div align="center"><u><h4 class="kop">SURAT KETERANGAN</h4></u></div>
<div align="center"><h4 class="kop3">Nomor : <?php echo $input['nomor']?></h4></div>
</table>

<table width="100%">

<td class="indentasi">Yang bertanda tangan dibawah ini <?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($desa['nama_desa'])?>, Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?>,
Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?>, Provinsi <?php echo unpenetration($desa['nama_propinsi'])?> menerangkan dengan sebenarnya bahwa:  </td></tr>
</table>
<div id="isi3">
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td>
<table width="100%">
<tr><td width="20%">Nama Lengkap</td><td width="2%">:</td><td width="64%"><?php echo unpenetration($data['nama'])?></td></tr>
<tr><td>Nomor KTP</td><td>:</td><td><?php echo $data['nik']?></td></tr>
<tr><td>Pekerjaan</td><td>:</td><td><?php echo $data['pekerjaan']?></td></tr>
<tr><td>Kewarganegaraan </td><td>:</td><td><?php echo $data['warganegara']?></td></tr>
<tr><td>Tempat dan Tgl. Lahir </td><td>:</td><td><?php echo ($data['tempatlahir'])?>, <?php echo tgl_indo($data['tanggallahir'])?> </td></tr>
<tr><td>Alamat/ Tempat Tinggal</td><td>:</td><td>Dusun <?php echo ununderscore(unpenetration($data['dusun']))?>, Desa <?php echo unpenetration($desa['nama_desa'])?>, Kec. <?php echo unpenetration($desa['nama_kecamatan'])?>, Kab. <?php echo unpenetration($desa['nama_kabupaten'])?></td></tr>
<table width="100%">
<tr><td  class="indentasi">Benar Nama <?php echo unpenetration($data['nama'])?> adalah Penduduk Desa <?php echo unpenetration($desa['nama_desa'])?>, Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?>,
Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?>, Provinsi <?php echo unpenetration($desa['nama_propinsi'])?> dan menurut pengamatan kami bahwa anak dari keluarga <?php echo $data['nama']?> layak diberikan <b>Beasiswa</b> kepada anaknya yang sedang <b><?php echo $input['sdg_sekolah']?></b> berikut biodatanya :
</table>
<table width="100%">
<tr><td width="20%">Nama Lengkap</td><td width="2%">:</td><td width="64%"><?php echo unpenetration($input['nama_lengkap'])?></td></tr>
<tr><td>Tempat / Tgl. Lahir </td><td>:</td><td><?php echo $data['tempatlahir']?>, <?php echo tgl_indo($data['tanggallahir'])?> </td></tr>
<tr><td>Tempat Sekolah/Kuliah</td><td>:</td><td> <?php echo $input['tempat_sekolah']?></td></tr>
<tr><td>Alamat Sekolah/Kuliah</td><td>:</td><td> <?php echo $input['alamat_sekolah']?></td></tr>

<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td  class="indentasi">Demikian Surat Keterangan ini  kami buat untuk dapat dipergunakan sebagaimana mestinya. </td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</table></div>
<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td></td><td width="30%"></td><td  align="center"><?php echo unpenetration($desa['nama_desa'])?>, <?php echo $tanggal_sekarang?></td></tr>
<tr><td></td><td width="30%"></td><td align="center"><?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($desa['nama_desa'])?></td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td> <td></td><td align="center">( <?php echo unpenetration($input['pamong'])?> )</td></tr>
</table>

</div>
</div>

</div>
<div id="aside">

</div>
<div id="footer" class="container_12">
</div></div>
</body>
</html>

