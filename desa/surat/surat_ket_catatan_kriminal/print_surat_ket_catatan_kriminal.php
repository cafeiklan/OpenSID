<?php $this->load->view('print/headjs.php');?>

<body>
<div id="content" class="container_12 clearfix">
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

</table>
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
<td>Perihal</td><td>:</td><td>Mohon Mendapatkan <b><u>
<br>Surat Keterngan Catatan Kepolisian</b></u></td>
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
<tr><td colspan="3"> Benar Nama <?php echo unpenetration($data['nama'])?> adalah anak kandung dari seorang pria :   </td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td>Nama</td><td>:</td><td><?php echo $input['nama_ayah']?></td></tr>
<tr><td>Umur</td><td>:</td><td><?php echo $input['umur_ayah']?></td></tr>
<tr><td>Pekerjaan</td><td>:</td><td><?php echo $input['pekerjaan_ayah']?></td></tr>
<tr><td>Alamat</td><td>:</td><td><?php echo $input['alamat_ayah']?></td></tr>
<tr></tr>
<tr></tr>
<td>Dengan seorang Wanita : </td>
<tr></tr>
<tr></tr>
<tr><td>Nama</td><td>:</td><td><?php echo $input['nama_ibu']?></td></tr>
<tr><td>Umur</td><td>:</td><td><?php echo $input['umur_ibu']?></td></tr>
<tr><td>Pekerjaan</td><td>:</td><td><?php echo $input['pekerjaan_ibu']?></td></tr>
<tr><td>Alamat</td><td>:</td><td><?php echo $input['alamat_ibu']?></td></tr>
</table>
<table>
</table>
<table>
<tr>Adalah benar Nama <?php echo unpenetration($data['nama'])?> adalah penduduk Desa <?php echo unpenetration($desa['nama_desa'])?>, Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?>,Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?>.
</tr>
</table>
<table>
<tr>Selanjunta diterangkan bahwa Nama <?php echo unpenetration($data['nama'])?> selama berada di Desa <?php echo unpenetration($desa['nama_desa'])?>, Menurut sepengetahuan kami belum pernah melanggar Hukum Pidana, Perdata, maupun hukum adat yang berlaku di <?php echo unpenetration($desa['nama_desa'])?>.
</tr>
</table>
<table>
<tr>Surat Keterangan ini diberikan, guna untuk mengurus Surat Keterngan Catatan Kepolisian (SKCK) di Kantor Polsek Pantai Cermin.
</tr>
</table>
<table>
<td class="indentasi">Demikian Surat ini dibuat dengan sebenarnya, untuk dapat dipergunakan sebagaimana mestinya.</td>
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
