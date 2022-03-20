<?php
include('proses/koneksi/koneksi.php');
?>

<div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Rekening</h2>
    <div class="row justify-content-center">
<table class="table table-striped table-hover table-bordered" id="data">
                <thead>
                    <tr align="center">
                    <th>No</th>
                    <th>Id Nasabah</th>
			        <th>Nama</th>
                     <th>Alamat</th>
                    <th>Nomor KTP/SIM</th>
			        <th>Gender</th>
			        <th>Nomor Telfon</th>
			        
                    </tr>
                </thead>
                <tbody>
                <?php 
		include 'proses/koneksi/koneksicrud.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from nasabah");
		while($d = mysqli_fetch_array($data)){
			?>
             
             <tr align="center">
				<td><?php echo $no++; ?></td> 
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['ktp']; ?></td>
				<td><?php echo $d['gender']; ?></td>
				<td><?php echo $d['telp']; ?></td>
			</tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include "template/footer.php";
?>
<script>
    window.print();
</script> 