<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
    <style>
input[type="text"],
[type="date"],
[type="number"] {
  box-sizing: border-box;
  width: 70%;
  height: 30px;
  padding: 15px 15px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  width: 20%;
  background-color: #04aa6d;
  color: white;
  padding: 14px 20px;
  margin: 15px 0;
  border: 0;
  cursor: pointer;
}
    </style>
</head>
<body>
 
	<form action="/form/procces" method="post">
        @csrf
        <h1>INPUT DATA</h1>
        <label for="nim">Nim</label><br>
        <input type="number"name="nim"><br>
      	<label for="nama">Nama</label><br>
          <input type="text" name="nama"><br>
	    <label for="ttl">Tempat tanggal Lahir</label><br>
        <input type="text" name="tmpt">
        <input type="date" name="ttl"><br>
        <label for="akt">Tahun Angkatan</label><br>
        <select name="akt" id="">
            <option value=""></option>
            <option value="2016/2017">2016/2017</option>
            <option value="2017/2018">2017/2018</option> 
        </select><br><br>
        <label for="jns">Jenis Kelamin</label><br>
        <label for="rdata">Laki-Laki</label>
        <input type="radio" id="" name="jns" value="Laki-Laki">
        <label for="rdata">Perempuan</label>
        <input type="radio" id="" name="jns1" value="Perempuan">
        <br><br>
        <label for="file">Upload Foto</label><br>
        <input type="file" name="file" id=""><br><br>
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" id="" cols="70" rows="10"></textarea><br>
        <input type="submit" value="SUBMIT">
        <input type="submit"value="BACK">
	</form>
 
</body>
</html>