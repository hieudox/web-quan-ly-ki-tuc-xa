<div class="infor">
	<div class="search" style="padding-left: 100px; margin-top: 20px;">

		<?php
					
                    header("Content-type: text/html; charset=utf-8");
                    $tenmaychu='localhost';
                    $tentaikhoan='root';
                    $pass='';
                    $csdl='qlktx';
                    $conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
                    mysqli_select_db($conn,$csdl);
                    mysqli_query($conn,"SET NAMES 'UTF8'");
                
                   
					if(isset($_POST["search"]))
					{
						$MaPhong_search = $_POST['nhap'];
						$sql = "select * from phong where MaPhong = '$MaPhong_search'";
						mysqli_query($con,$sql);
					}else
					{
						$sql = "select * from phong";
					}
					$result = mysqli_query($conn,$sql);

		?>
		<form action="" method="POST" enctype="multipart/form-data">
		<tr>
			<td ><input type="text" name="nhap" size="100">
				<input type="submit" name="search" value="Tìm kiếm">
			</td>
		</tr>
	</form>
	</div>
				<table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
					<tr>
						<th width="50px;">Mã phòng</th>
						<th width="200px;">Mã khu</th>
						<th width="100px;">Số người tối đa</th>
						<th width="100px;">Số người hiện tại</th>
						<th width="100px;">Giá</th>

					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaPhong']; ?> </td>
						<td><?php echo $row['MaKhu']; ?></td>
						<td><?php echo $row['SoNguoiToiDa']; ?></td>
						<td><?php echo $row['SoNguoiHienTai']; ?></td>
                        <td><?php echo $row['Gia']; ?></td>
						
					</tr>
			 <?php } ?>
					
				</table>
			</div>