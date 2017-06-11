<?php $this->load->view('print/headjs.php');?>
<body>
<div id="content" class="container_12 clearfix">
<div id="content-main" class="grid_7">

<link href="<?php echo base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
<div>
<table width="100%">
<tr style="font-weight: normal;"><td colspan="3" align="right">Lampiran 8 KMA No. 298 Tahun 2003</td></tr>
<tr style="font-weight: normal;"><td colspan="3" align="right">Pasal 5 Ayat (1)</td></tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr style="font-weight: bold;"><td colspan="3" align="right"><b>Model N-2</b></td></tr>
<tr style="font-weight: bold;"><td width="35%">KANTOR DESA/KELURAHAN</td><td width="3%">:</td><td width="60%"><?php echo strtoupper(unpenetration($desa['nama_desa']))?></td></tr>
<tr style="font-weight: bold;"><td>KECAMATAN</td><td>:</td><td><?php echo strtoupper(unpenetration($desa['nama_kecamatan']))?></td></tr>
<tr style="font-weight: bold;"><td>KABUPATEN</td><td>:</td><td><?php echo strtoupper(unpenetration($desa['nama_kabupaten']))?></td></tr>
<table>

<div align="center"><h5 class="kop3" style="margin: 30px 0 0 0"><u>SURAT KETERANGAN TENTANG ORANG TUA</u></h5></div>
<div align="center"><div style="margin: 6px 0 0 0">Nomor: <?php echo $input['nomor']?></div></div>
</table>
<div class="clear"></div>

<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<td><b>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</b></td></tr>

<table width="100%">
<tr><td width="5%" align="right">I.&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="25%">1. Nama lengkap dan alias</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($pribadi['nama']); ?></td></tr>
<tr><td></td><td>2. Tempat dan tanggal lahir</td><td>:</td><td><?php echo $pribadi['tempatlahir']; ?> <?php echo tgl_indo($pribadi['tanggallahir']); ?></td></tr>
<tr><td></td><td>3. Warga negara</td><td>:</td><td><?php echo $pribadi['wn']; ?></td></tr>
<tr><td></td><td>4. Agama</td><td>:</td><td><?php echo $pribadi['agama']; ?></td></tr>
<tr><td></td><td>5. Jenis kelamin</td><td>:</td><td><?php echo $pribadi['sex']; ?></td></tr>
<tr><td></td><td>6. Pekerjaan</td><td>:</td><td><?php echo $pribadi['pek']; ?></td></tr>
<tr><td></td><td>7. Tempat tinggal</td><td>:</td><td>Dusun <?php echo unpenetration(ununderscore($pribadi['dusun'])); ?>, Desa <?php echo unpenetration($desa['nama_desa']); ?>, Kec. <?php echo unpenetration($desa['nama_kecamatan']); ?>, Kab. <?php echo unpenetration($desa['nama_kabupaten']); ?></td></tr>
</table>

<tr>
<td><b>adalah benar anak kandung dari pernikahan seorang pria :</b></td>
</tr>

</table>
 <div id="isi2">
<table width="100%">
<tr><td width="5%" align="right">II.&nbsp;&nbsp;</td><td width="25%">1. Nama lengkap dan alias</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($input['nama_ayah']); ?></td></tr>
<tr><td></td><td>2. Tempat dan tanggal lahir</td><td>:</td><td><?php echo $input['tempat_lahir_ayah']; ?>, <?php echo tgl_indo(tgl_indo_in($input['tgl_lahir_ayah'])); ?></td></tr>
<tr><td></td><td>3. Warga negara</td><td>:</td><td><?php echo $input['wn_ayah']; ?></td></tr>
<tr><td></td><td>4. Agama</td><td>:</td><td><?php echo $input['agama_ayah']; ?></td></tr>
<tr><td></td><td>5. Pekerjaan</td><td>:</td><td><?php echo $input['pekerjaan_ayah']; ?></td></tr>
<tr><td></td><td>6. Tempat tinggal</td><td>:</td><td><?php echo $input['tempat_tinggal_ayah']; ?></td></tr>
<table width="100%">
<tr><td width="5%" align="right"></td><td width="25%">dengan seorang wanita :</td><td width="3%"></td><td width="64%"></td></tr>
</table>
<table width="100%">
<tr><td width="5%" align="right"></td><td width="25%">1. Nama lengkap dan alias</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($input['nama_ibu']); ?></td></tr>
<tr><td></td><td>2. Tempat dan tanggal lahir</td><td>:</td><td><?php echo $input['tempat_lahir_ibu']; ?>, <?php echo tgl_indo(tgl_indo_in($input['tgl_lahir_ibu'])); ?></td></tr>
<tr><td></td><td>3. Warga negara</td><td>:</td><td><?php echo $input['wn_ibu']; ?></td></tr>
<tr><td></td><td>4. Agama</td><td>:</td><td><?php echo $input['agama_ibu']; ?></td></tr>
<tr><td></td><td>5. Pekerjaan</td><td>:</td><td><?php echo $input['pekerjaan_ibu']; ?></td></tr>
<tr><td></td><td>6. Tempat tinggal</td><td>:</td><td><?php echo $input['tempat_tinggal_ibu']; ?></td></tr>
</table>
</table>
   <table width="100%">
<tr></tr>
</table>
<table width="100%">
<tr>
<td class="indentasi">Demikian surat keterangan keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk dipergunakan seperlunya.</td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</table></div>
<table width="100%">
<tr></tr>
<tr><td width="10%"></td><td width="30%"></td><td  align="center"><?php echo unpenetration($desa['nama_desa'])?>, <?php echo $tanggal_sekarang?></td></tr>
<tr><td width="10%"></td><td width="30%"></td><td align="center"><?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($desa['nama_desa'])?></td></tr>
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
<tr><td><td></td><td td align="center">( <?php echo unpenetration($input['pamong'])?> )</td></tr>
<tr><td colspan="3"><b>*)nama lengkap</b><td></td>
</table></div></div>
<div id="aside">
</div>
</div>
</body>
</html>
