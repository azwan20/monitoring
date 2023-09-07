<!doctype html>
<html lang="en">

<head>
    <title>Table 01</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    
</head>

<body>
<?php
	include 'koneksi.php';
	$sql = "select *from fill";
    $result = $conn->query($sql);
    if($result -> num_rows > 0){
       echo "<table id='example' class='table table-striped' style='width:100%'>
       <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Laboratorium</th>
                <th>Dosen Pengampu</th>
                <th>Mata Praktikum</th>
                <th>Catatan</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>";
    while($row = $result->fetch_assoc()){
        echo"<tr></td> <td>$row[nama]</td> <td>$row[laboratorium]</td> <td>$row[dosen]</td> <td>$row[praktikum]</td> <td>$row[catatan]</td> <td>$row[time]</td></tr>";
    };

    echo "</tbody>";
};
?>
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        select: true
    } );
} );
    </script>
</body>

</html>
