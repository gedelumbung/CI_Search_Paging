<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<title>Tutorial CodeIgniter : Membuat dan Menerapkan Paging Pada Searching di CodeIgniter</title>
<style>
	body{
	font-family:Tahoma;
	font-size:12px;
	}
</style>
<body>
<form method="post" action="<?php echo base_url(); ?>index.php/search_paging/cari">
<table width="500" cellpadding="5" align="center">
<tr><td width="190">Masukkan Nama Dosen :</td><td><input type="text" name="nama" size="50" autocomplete="off" /></td></tr>
<tr><td width="190"></td><td><input type="submit" value="Cari Dosen" /></td></tr>
</table>
</form>
</body>