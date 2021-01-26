<!DOCTYPE html>
<html>
<head>
	<title>maribelajarcoding.com</title>
</head>
<body>
<div align="center">
	<H3>Membuat Text Editor dengan CKEditor</H3>
	<table>
		<form>
		<tr>
			<td>Artikel</td>
			<td><textarea name="artikel"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
		</form>
	</table>
	<h3><a href="https://www.maribelajarcoding.com">maribelajarcoding.com</a></h3>
</div>
 <script src="ckeditor/ckeditor.js"></script>
  <script src="ckeditor/styles.js"></script>

  <script type="text/javascript">
  	CKEDITOR.replace('artikel');
  </script>
  
</body>
</html>