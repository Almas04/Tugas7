<!DOCTYPE html>
<html>

<body>
	  <!-- form untuk mendapat input data -->
        <form method="POST" action="tampilkontak.php">
            <table align="center"  >
	            <tr align="center">
	            	<td><h2>KONTAK</h2></td>
	            </tr>    
	            <tr>
		            <td>
		        <div class="border">    
		            <table cellspacing="10">
			            <tr>
			            	<td>NAMA</td>
			            	<td><input type="text" name="nama"></td>
			            </tr>
			            <tr>
			            	<td>JENIS KELAMIN</td>
			            	<td>
			                <input type="radio" name="jenis_kelamin" value="L">Laki laki
			                <input type="radio" name="jenis_kelamin" value="P">Perempuan
			                </td>
			            </tr> 
			            <tr>
			                <td>EMAIL</td>
			                <td><input type="text" name="email"></td>
			            </tr>
			            <tr>
			                <td>ALAMAT</td><td><input type="text" name="alamat"></td>
			            </tr>
			            <tr>
			                <td>KOTA</td>
			                <td><input type="text" name="kota"></td>
			            </tr>
			            <tr>
			                <td>PESAN</td>
			                <td><input type="text" name="pesan"></td>
			            </tr>
			            <tr>
			                <td colspan="2"><button type="submit" value="simpan">SIMPAN
			            </tr>
	           		</table>
	        	</div>
	            	</td>
            	</tr>
            </table>
        </form>
</body>
</html>