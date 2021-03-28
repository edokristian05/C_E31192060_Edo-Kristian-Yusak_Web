<table border="1" cellspacing="0">
    <tr>
    <style>
            th {
                padding: 10px;
            }
            td {
                text-align: center;
            }
    </style>
        <th>No</th>
        <th>Nama</th>
        <th>Prodi</th>
    </tr>
    <?php 
        $nomer=1;
        foreach($Mahasiswa as $row)
        {
    ?>
    <tr>
            <td><?= $nomer; ?>.</td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["prodi"]; ?></td>
    </tr>
    <?php $nomer++; ?>
    <?php } ?>
</table>

<!-- Nama : <//?php echo $nama;?>
<br/>
Kelas : <//?php echo $prodi;?> -->

<!-- <//?php 
foreach($Mahasiswa as $row)
{
    echo "Nama : ".$row['nama'];
    echo "<br/>";
    echo "Prodi : ".$row['prodi'];
    echo "<hr/>";
}
?> -->
