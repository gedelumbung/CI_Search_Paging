<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<title>Tutorial CodeIgniter : Membuat dan Menerapkan Paging Pada Searching di CodeIgniter</title>
<style>
	body{
	font-family:Tahoma;
	font-size:12px;
	}
</style>
<body>
<table width="500" cellpadding="5" align="center">
<?php
	$banyak = count($nama_dosen->result_array());
	echo '<tr><td>Ditemukan <b>'.$banyak.'</b> hasil pencarian dengan kata <b>"'.$nama.'"</b></td></tr>';
	if(count($nama_dosen->result_array())>0)
	{
		foreach($nama_dosen->result_array() as $nd)
		{
			echo '<tr><td>&raquo; '.$nd['nama_dosen'].'</td></tr>';
		}
	}
	else
	{
		echo '<tr><td>Tidak ditemukan dosen dengan nama <b>"'.$nama.'"</b></td></tr>';
	}
?>
<tr><td><?php echo $paginator; ?></td></tr>
</table>
</body>