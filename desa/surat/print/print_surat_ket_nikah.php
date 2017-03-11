<?php $this->load->view('print/headjs.php');?>

<body>
<div id="content" class="container_12 clearfix">
<div id="content-main" class="grid_7">

<table width="100%">
<tr style="font-weight: normal;"><td colspan="3" align="right">Lampiran 7 KMA No. 298 Tahun 2003</td></tr>
<tr style="font-weight: normal;"><td colspan="3" align="right">Pasal 5 Ayat (1)</td></tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr style="font-weight: bold;"><td colspan="3" align="right"><b>Model N-1</b></td></tr>
<tr style="font-weight: bold;"><td width="35%">KANTOR DESA/KELURAHAN</td><td width="3%">:</td><td width="60%"><?php echo strtoupper(unpenetration($desa['nama_desa']))?></td></tr>
<tr style="font-weight: bold;"><td>KECAMATAN</td><td>:</td><td><?php echo strtoupper(unpenetration($desa['nama_kecamatan']))?></td></tr>
<tr style="font-weight: bold;"><td>KABUPATEN/KOTA</td><td>:</td><td><?php echo strtoupper(unpenetration($desa['nama_kabupaten']))?></td></tr>
<table>

<div align="center"><h5 class="kop3" style="margin: 30px 0 0 0"><u>SURAT KETERANGAN UNTUK NIKAH</u></h5></div>
<div align="center"><div style="margin: 6px 0 0 0">Nomor: <?php echo $input['nomor']?></div></div>
</table>
<div class="clear"></div>


<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<td class="indentasi">Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa:  </td></tr>
</table><div id="isi3">
<table width="100%">
<tr><td width="30%">1.  Nama Lengkap dan alias</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($data['nama'])?></td></tr>
<tr><td>2.  Jenis Kelamin</td><td>:</td><td><?php echo $data['sex']?></td></tr>
<tr><td>3.  Tempat dan Tgl. Lahir </td><td>:</td><td><?php echo $data['tempatlahir'] ?>, <?php echo tgl_indo($data['tanggallahir'])?> </td></tr>
<tr><td>4.  Warga negara</td><td>:</td><td><?php echo $data['warganegara']?></td></tr>
<tr><td>5.  Agama</td><td>:</td><td><?php echo $data['agama']; ?></td></tr>
<tr><td>6.  Pekerjaan</td><td>:</td><td><?php echo $data['pekerjaan']?></td></tr>
<tr><td>7.  Tempat Tinggal</td><td>:</td><td>Dusun <?php echo unpenetration(ununderscore($data['dusun']))?>, Desa <?php echo unpenetration($desa['nama_desa'])?>, Kec. <?php echo unpenetration($desa['nama_kecamatan'])?>, Kab. <?php echo unpenetration($desa['nama_kabupaten'])?></td></tr>
<tr><td>8. Bin/Binti</td><td>:</td><td><?php echo $input['bin'] ?></td></tr>
<tr><td>9.  Status Perkawinan</td><td></td><td></td></tr>
<tr></tr>
<table width="100%">
<tr><td width="5%" align="right">&nbsp;&nbsp;</td><td width="25%">a. Jika pria, terangkan jejaka, duda atau beristri dan berapa istrinya</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($input['jaka'])?></td></tr>
<tr><td></td><td>b. Jika wanita, terangkan gadis atau janda</td><td>:</td><td><?php echo unpenetration($input['gadis'])?></td></tr>
<table width="100%">
<tr><td width="30%">10. Nama istri/suami terdahulu</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($input['pasangan_dulu'])?></td></tr>
</table>

<tr></tr>
<tr></tr>
<tr>

<td class="indentasi">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk dipergunakan seperlunya.</td>
</tr>
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
<tr><td colspan="3">*)nama lengkap<td>
</table>  </div></div>
<div id="aside">
</div>
</div>
</body>
</html>
