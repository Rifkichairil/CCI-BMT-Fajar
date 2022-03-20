
    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Penarikan.xls");
	?>
     
            <table class="table table-striped table-hover table-bordered" id="data">
                <thead>
                    <tr align="center">
       <th>No</th>
       <th>Id Pegawai</th>
       <th>Id Nasabah</th>
			<th>Nomor Rekening</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
            <th>Saldo Awal</th>
            <th>Saldo Akhir</th>
      </tr>
                </thead>
                <tbody>
                <?php 
		include 'koneksicrud.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_ambil");
		while($d = mysqli_fetch_array($data)){
			?>
		 <tr align="center">
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_pegawai']; ?></td>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['rek']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
                <td><?php echo $d['awal']; ?></td>
                <td><?php echo $d['akhir']; ?></td>
			
			</tr>
                <?php } ?>
   
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>