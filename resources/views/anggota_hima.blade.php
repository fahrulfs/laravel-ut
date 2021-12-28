<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <style>

#hima{
  width: 100%;
  height: 20px;
  border: 1px solid #ddd;

}

#hima th{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04aa6d;
  color: white;
}
    </style>
</head>
<body>
     <?php
        echo '<h3>ANGGOTA HIMATEKNO</h3>';
        $anggota = [
            [
                "nim" => "1709001",
                "nama" => "Dian",
                "tempat"=>"jakarta",
                "tgl"=>"05 agustus 1995",
                "angkatan"=>"2020"
            ],
            [
   
                "nim" => "1709002",
                "nama" => "Fera",
                "tempat"=>"Bandung",
                "tgl"=>"07 Juli 1997",
                "angkatan"=>"2020"
            ],
          
        ];

        ?>


<table id="hima">
<thead>
   <th>NIM</th>
    <th>Nama</th>
    <th>Tempat</th>
    <th>Tanggal Lahir</th>
    <th>Angktan</th>
</thead>

        @foreach ($anggota as $orang)
 
<tr>
 <td>{{ $orang["nim"]}}</td>
 <td>{{ $orang["nama"]}}</td>
 <td>{{ $orang["tempat"]}}</td>
 <td>{{ $orang["tgl"]}}</td>
 <td>{{ $orang["angkatan"] }}</td>
       
</tr>        
        @endforeach
</table>


  
</body>
</html>