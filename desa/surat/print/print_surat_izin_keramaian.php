<?php $this->load->view('print/headjs.php');?>

<body>
<div id="content" class="container_12 clearfix">
<div id="content-main" class="grid_7">

<link href="<?php echo base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
<div>
<table width="100%">

<tr> <img src="<?php echo LogoDesa($desa['logo']);?>" alt="" class="logo"></tr>

<div class="header">
<h4 class="kop">PEMERINTAH KABUPATEN <?php echo strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
<h4 class="kop">KECAMATAN <?php echo strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
<h4 class="kop">DESA <?php echo strtoupper(unpenetration($desa['nama_desa']))?></h4>
<h5 class="kop2"><?php echo (unpenetration($desa['alamat_kantor']))?> </h5>

<div style="text-align: center;">
<hr /></div></div>


<div class="clear"></div>
<table width="100%">

</table>
<div class="clear"></div>

<div id="isi3">

<table width="100%">
<tr>
<td width="10%"></td><td></td>
<td width="50%" align="left"></td>
<td align="right"><?php echo $desa['nama_desa']?>, <?php  echo $tanggal_sekarang?>
</td>


</tr>

<tr>
<td ></td><td></td>
<td align="left"></td>
</tr><tr>
<td >Nomor</td><td>:</td><td  align="left"><?php  echo $input['nomor'] ?>  </td></tr><tr>
<td>Perihal</td><td>:</td><td><u>Mohon Izin Hiburan <b></u>
</table>

</tr><tr>
<tr></tr>
<tr></tr>
<tr></tr>
<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td colspan="3" align="left"><p>Kepada Yth. </td></tr>
<tr><td><b>Bapak Kapolsek Pantai Cermin</b></td></tr>
<tr><td>di  <?php  echo unpenetration($desa['nama_kecamatan']) ?></td></tr>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</table>
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
<table width="100%">

<td class="indentasi"><?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($desa['nama_desa'])?>, Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?>,
     Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?>, Provinsi <?php echo unpenetration($desa['nama_propinsi'])?> menerangkan bahwa:  </td></tr>
</table>

<table width="100%">
<tr><td width="35%">NIK / Nama</td><td width="3%">:</td><td ><?php echo unpenetration($data['nama'])?></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $data['sex']?></td></tr>
<tr><td>Tempat dan Tgl. Lahir </td><td>:</td><td><?php echo $data['tempatlahir']?>, <?php echo tgl_indo($data['tanggallahir'])?> </td></tr>
<tr><td>Pekerjaan </td><td>:</td><td><?php echo $data['pekerjaan']?> </td></tr>
<tr><td>Alamat</td><td>:</td><td> Dusun <?php echo unpenetration(ununderscore($data['dusun']))?>, Desa <?php echo unpenetration($desa['nama_desa'])?>, Kec. <?php echo unpenetration($desa['nama_kecamatan'])?>, Kab. <?php echo unpenetration($desa['nama_kabupaten'])?></td></tr>
<tr><td>Agama</td><td>:</td><td><?php echo $data['agama']?></td></tr>
<tr><td>Kewarganegaraan </td><td>:</td><td><?php echo $data['warganegara']?></td></tr>
<tr><td>Pekerjaan</td><td>:</td><td><?php echo $data['pekerjaan']?></td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td colspan="3"> Bahwa sesuai dengan Surat Pernyataan yang bersangkutan (terlampir), maka dengan ini dimohonkan kepada Bapak, agar dapat kiranya untuk memberi izin Hiburan/Pertunjukan sebagai mana dimaksud berupa : </td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td>Jenis Hiburan</td><td>:</td><td><?php echo $input['jenis_keramaian']?></td></tr>
<tr><td>Nama Grup</td><td>:</td><td><?php echo $input['nama_grup']?></td></tr>
<tr><td>Alamat Grup</td><td>:</td><td><?php echo $input['alamat_grup']?></td></tr>
<tr><td>No Handphone</td><td>:</td><td><?php echo $input['no_hp']?></td></tr>
<td>Yang akan dilaksanakan : </td>
<tr><td>Hari</td><td>:</td><td><?php echo $input['hari']?></td></tr>
<tr><td>Tanggal</td><td>:</td><td><?php echo $input['tanggal']?></td></tr>
<tr><td>Tempat</td><td>:</td><td><?php echo $input['tempat']?></td></tr>
<tr><td>Pukul</td><td>:</td><td><?php echo $input['pukul']?></td></tr>
<tr><td>Acara</td><td>:</td><td><?php echo $input['acara']?></td></tr>
</table>
<table>


<table>
<td class="indentasi">Demikian Surat Permohonan Izin Hiburan disampaikan, untuk dapat dipergunakan sebagaimana mestinya.</td>
</table>
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
<tr></tr>
<tr></tr>
<tr><td width="10%"></td><td width="50%"></td><td  align="center"><?php echo unpenetration($desa['nama_desa'])?>, <?php echo $tanggal_sekarang?></td></tr>
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
<tr><td> <td></td><td align="center">( <?php echo unpenetration($input['pamong'])?> )</td></tr>
</table>  </div></div>
<div id="aside">
</div>
</div>
</body>
</html>
