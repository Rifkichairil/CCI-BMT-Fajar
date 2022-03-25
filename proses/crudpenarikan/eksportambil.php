
<?php
include('../koneksi/koneksi.php');
?>

<div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Penarikan</h2>
    <div class="row justify-content-center">
<table class="table table-striped table-hover table-bordered" id="data">
                <thead>
                    <tr align="center">
					<tr align="center">
						<th>No</th>
						<!-- <th>Id Transaksi</th> -->
						<!-- <th>Id Pegawai</th> -->
						<!-- <th>Id Rekening</th> -->
						<th>Nama Nasabah</th>
						<th>Nomor Rekening</th>
						<th>Tanggal</th>
						<th>Jumlah</th>
						<th>Setoran Awal</th>
						<th>Saldo Akhir</th>
      				</tr>
                    </tr>
                </thead>
                <tbody>
				<?php 
		include '../koneksi/koneksicrud.php';
		$no = 1;
        $sql = 'SELECT * FROM penarikan INNER JOIN rekening ON penarikan.rekening_id = rekening.id_rekening';

		$data = mysqli_query($koneksi,$sql );
		while($d = mysqli_fetch_array($data)){
			?>
		<tr align="center">
			<td><?php echo $no++; ?></td>
			<!-- <td><?php echo $d['id_transaksi']; ?></td> -->
			<!-- <td><?php echo $d['admin_id']; ?></td> -->
			<!-- <td><?php echo $d['rekening_id']; ?></td> -->
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['rekening']; ?></td>
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
<?php
    include "../../template/footer.php";
    ?>
<script>
    window.print();
</script> 