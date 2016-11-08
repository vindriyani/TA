<!DOCTYPE html>
<html>
<style type="text/css">
<!--
.style3 {
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
	font-size: 36px;
	color: #00FF33;
}
body {
	background-image: url(../images/pic01.jpg);
	background-repeat: no-repeat;
}
-->
</style>
<body tracingsrc="../images/pic01.jpg" tracingopacity="20">

<form action="action_page.php">
  <fieldset>
    <div align="center">
      <h3>
        <legend><span class="style3">LOGIN ADMIN</span></legend>
      </h3>
    </div>
  <p>Judul:<br>
      <input type="text" name="Judul" value="Mickey">
      <br>
    Sinopsis:<br>
		<textarea rows="4" cols="50">
			</textarea>
        <br>
    Tanggal Tayang :<br>
     <select>
       <option value="Tanggal">Tanggal</option>
       <option value="Tanggal">30</option>
      </select>
		<select>
		  <option value="Bulan">Bulan</option>
		  <option value="Bulan">Januari</option>
	        </select>
		<select>
		  <option value="Tahun">Tahun</option>
		  <option value="Tahun">2018</option>
	    </select>
        <br>
    Jam :<br>
        <select>
          <option value="Jam">Jam</option>
          <option value="Jam">15.30</option>
        </select>
        <br>
      <br>
        <input type="submit" value="Simpan">
      </p>
  </fieldset>
</form>

</body>
</html>

