<?php
include('../koneksi/koneksi.php');
?>

<div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Rekening</h2>
    <div class="row justify-content-center">
<table class="table table-striped table-hover table-bordered" id="data">
                <thead>
                    <tr align="center">
                    <th>No</th>
			        <th>Nama</th>
                    <th>Rekening</th>
                    <th>Tanggal Buka</th>
                    <th>Setoran Awal</th>
                    <th>Setoran Akhir</th>
			        
                    </tr>
                </thead>
                <tbody>
                <?php 
		include '../koneksi/koneksicrud.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from rekening");
		while($d = mysqli_fetch_array($data)){
			?>
             
             <tr align="center">
				<td><?php echo $no++; ?></td> 
				<td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['rek']; ?></td>
                <td><?php echo $d['tgl_buka']; ?></td>
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