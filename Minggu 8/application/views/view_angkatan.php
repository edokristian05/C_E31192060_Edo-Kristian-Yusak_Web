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
        <th>Tahun</th>
        
    </tr>
    <?php 
        $nomer=1;
        foreach($Mahasiswa as $row)
        {
    ?>
    <tr>
            <td><?= $nomer; ?>.</td>
            <td><?= $row["tahun"]; ?></td>
    </tr>
    <?php $nomer++; ?>
    <?php } ?>

</table>
