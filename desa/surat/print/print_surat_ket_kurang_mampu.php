<?php $this->load->view('print/headjs.php');?>

<body>
<div id="content" class="container_12 clearfix" style="margin-top: 5mm">
<div id="content-main" class="grid_7">

<link href="<?php echo base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
<div>
<table width="100%">

<tr> <img src="<?php echo LogoDesa($desa['logo']);?>" alt=""  class="logo"></tr>

<div class="header">
<h4 class="kop">PEMERINTAH KABUPATEN <?php echo strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
<h4 class="kop">KECAMATAN <?php echo strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
<h4 class="kop">DESA <?php echo strtoupper(unpenetration($desa['nama_desa']))?></h4>
<h5 class="kop2"><?php echo (unpenetration($desa['alamat_kantor']))?> </h5>
<div style="text-align: center;">
<hr /></div></div>


<div align="center"><u><h4 class="kop">SURAT KETERANGAN</h4></u></div>
<div align="center"><h4 class="kop3">Nomor : <?php echo $input['nomor']?></h4></div>
</table>
<div class="clear"></div>

<table width="100%">

<td class="indentasi"><?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($desa['nama_desa'])?> Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?> Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?> menerangkan :</td></tr>
</table>
<div id="isi3">
<table width="100%">
<tr><td width="5%" style="text-align: right">1.&nbsp;&nbsp;</td><td width="25%">Nama </td><td width="3%">:</td><td width="64%"><?php echo unpenetration($data['nama']); ?></td></tr>
<tr><td></td><td>Jenis Kelamin</td><td>:</td><td><?php echo $data['sex']?></td></tr>
<tr><td></td><td>Tmp/tgl. lahir</td><td>:</td><td><?php echo $data['tempatlahir']; ?>, <?php echo tgl_indo(tgl_indo_in($data['tanggallahir'])); ?></td></tr>
<tr><td></td><td>Agama</td><td>:</td><td><?php echo $data['agama']?></td></tr>
<tr><td></td><td>Pekerjaan</td><td>:</td><td><?php echo $data['pekerjaan']?></td></tr>
<tr><td></td><td>Alamat</td><td>:</td><td>Dusun <?php echo unpenetration(ununderscore($data['dusun']))?>, Desa <?php echo unpenetration($desa['nama_desa'])?>, Kec. <?php echo unpenetration($desa['nama_kecamatan'])?>, Kab. <?php echo unpenetration($desa['nama_kabupaten'])?></td></tr>
				<tr>&nbsp;</tr>
<td colspan="4" >adalah benar anak kandung dari :</td>
				<tr>&nbsp;</tr>
<?php  if($ayah){?>
<tr><td width="10%" style="text-align: right">2.&nbsp;&nbsp;</td><td width="25%">Nama</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($ayah['nama']); ?></td></tr>
<tr><td></td><td>Umur</td><td>:</td><td><?php echo $ayah['tempatlahir']; ?>, <?php echo tgl_indo(tgl_indo_in($ayah['tanggallahir'])); ?></td></tr>
<tr><td></td><td>Pekerjaan</td><td>:</td><td><?php echo $ayah['pek']; ?></td></tr>
<tr><td></td><td>Alamat</td><td>:</td><td>Dusun <?php echo unpenetration(ununderscore($ayah['dusun'])); ?>, Desa <?php echo unpenetration($desa['nama_desa']); ?>, Kec. <?php echo unpenetration($desa['nama_kecamatan']); ?>, Kab. <?php echo unpenetration($desa['nama_kabupaten']); ?></td></tr>
<?php  } else {?>
<tr><td width="5%" style="text-align: right">2.&nbsp;&nbsp;</td><td width="25%">Nama</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($input['nama_ayah']); ?></td></tr>
<tr><td></td><td>Umur</td><td>:</td><td><?php echo $input['tempatlahir_ayah']; ?>, <?php echo tgl_indo(tgl_indo_in($input['tanggallahir_ayah'])); ?></td></tr>
<tr><td></td><td>Pekerjaan</td><td>:</td><td><?php echo $input['pek_ayah']; ?></td></tr>
<tr><td></td><td>Alamat</td><td>:</td><td><?php echo $input['alamat_ayah']; ?></td></tr>
<?php  }?>
				<tr>&nbsp;</tr>
<td colspan="4" >dengan seorang wanita  :</td>
				<tr>&nbsp;</tr>
<?php  if($ibu){?>
<tr><td width="5%" style="text-align: right">3.&nbsp;&nbsp;</td><td width="25%">Nama</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($ibu['nama']); ?></td></tr>
<tr><td></td><td>Umur</td><td>:</td><td><?php echo $ibu['tempatlahir']; ?>, <?php echo tgl_indo(tgl_indo_in($ibu['tanggallahir'])); ?></td></tr>
<tr><td></td><td>Pekerjaan</td><td>:</td><td><?php echo $ibu['pek']; ?></td></tr>
<tr><td></td><td>Alamat</td><td>:</td><td>Dusun <?php echo unpenetration($ibu['dusun']); ?>, Desa <?php echo unpenetration($desa['nama_desa']); ?>, Kec. <?php echo unpenetration($desa['nama_kecamatan']); ?>, Kab. <?php echo unpenetration($desa['nama_kabupaten']); ?></td></tr>
<?php  } else {?>
<tr><td width="5%" style="text-align: right">3.&nbsp;&nbsp;</td><td width="25%">Nama</td><td width="3%">:</td><td width="64%"><?php echo unpenetration($input['nama_ibu']); ?></td></tr>
<tr><td></td><td>Umur</td><td>:</td><td><?php echo $input['tempatlahir_ibu']; ?>, <?php echo tgl_indo(tgl_indo_in($input['tanggallahir_ibu'])); ?></td></tr>
<tr><td></td><td>Pekerjaan</td><td>:</td><td><?php echo $input['pek_ibu']; ?></td></tr>
<tr><td></td><td>Alamat</td><td>:</td><td><?php echo $input['alamat_ibu']; ?></td></tr>
<?php  }?>
</table>

<table width="100%" style="margin: 0 0 0 0">
<tr><td>benar nama-nama di atas penduduk Desa <?php echo unpenetration($desa['nama_desa'])?> Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?> Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?>.</td></tr>
</table>

<table width="100%" style="margin-top: 0">
<td class="indentasi">Selanjutnya diterangkan bahwa nama yang tersebut pada poin 1 (satu) di atas termasuk keluarga yang kurang mampu serta berpenghasilan rendah, yang bersekolah di SDN 106840 Desa <?php echo unpenetration($desa['nama_desa'])?>.</td></tr>
</table>

<table width="100%" style="margin: 0 0 0 0">
<td class="indentasi">Demikian Surat Keterangan ini dibuat dengan sebenar-benarnya untuk dapat dipergunakan dan dimaklumi adanya.</td></tr>
</table>

</div>
<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td width="23%"></td><td width="30%"></td><td  align="center"><?php echo unpenetration($desa['nama_desa'])?>, <?php echo $tanggal_sekarang?></td></tr>
<tr><td width="23%"></td><td width="30%"></td><td align="center"><?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($desa['nama_desa'])?></td></tr>
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
</table>  </div></div>
<div id="aside">
</div>
</div>
</body>
</html>
