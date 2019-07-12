<?php
	include_once("inc/connection.php");
	session_start();
	if(isset($_POST['sub'])){
		$exam = $_POST['exam'];
		$year = $_POST['year'];
		$board = $_POST['board'];
		$roll = $_POST['roll'];
		$reg = $_POST['reg'];
		$_SESSION['roll']=$roll;
		$_SESSION['board']=$board;
		$_SESSION['exam']=$exam;
		$_SESSION['reg']=$reg;
		$_SESSION['year']=$year;
		$data = $conn -> query("SELECT * FROM student WHERE (exam = '$exam' and roll ='$roll')");
		while($dt = $data->fetch_assoc()){
			$board1 = $dt['board'];
			$yr= $dt['yr'];
			if($board1==$board and $yr==$year){
				header("location:view.php");
				echo $_SESSION['name']=$dt['name'];
				echo $_SESSION['fname']=$dt['fname'];
				echo $_SESSION['mname']=$dt['mname'];
				$_SESSION['type']=$dt['type'];
				$_SESSION['dob']=$dt['dob'];
				$_SESSION['inst']=$dt['inst'];
				$_SESSION['gpa']=$dt['gpa'];
				$_SESSION['group']=$dt['grp'];
				echo $_SESSION['bang_o']=$dt['ba_o'];
				echo $_SESSION['bang_g']=$dt['ba_g'];
				echo $_SESSION['bang_gp']=$dt['ba_gp'];
				echo $_SESSION['math_o']=$dt['ma_o'];
				echo $_SESSION['math_g']=$dt['ma_g'];
				echo $_SESSION['math_gp']=$dt['ma_gp'];
				echo $_SESSION['eng_o']=$dt['eng_o'];
				echo $_SESSION['eng_g']=$dt['eng_g'];
				echo $_SESSION['eng_gp']=$dt['eng_gp'];
				echo $_SESSION['ss_o']=$dt['ss_o'];
				echo $_SESSION['ss_g']=$dt['ss_g'];
				echo $_SESSION['ss_gp']=$dt['ss_gp'];
				echo $_SESSION['re_o']=$dt['re_o'];
				echo $_SESSION['re_g']=$dt['re_g'];
				echo $_SESSION['re_gp']=$dt['re_gp'];
				echo $_SESSION['ph_o']=$dt['ph_o'];
				echo $_SESSION['ph_g']=$dt['ph_g'];
				echo $_SESSION['ph_gp']=$dt['ph_gp'];
				echo $_SESSION['ch_o']=$dt['ch_o'];
				echo $_SESSION['ch_g']=$dt['ch_g'];
				echo $_SESSION['ch_gp']=$dt['ch_gp'];
				echo $_SESSION['opt_o']=$dt['opt_o'];
				echo $_SESSION['opt_g']=$dt['opt_g'];
				echo $_SESSION['opt_gp']=$dt['opt_gp'];
				echo $_SESSION['ict_o']=$dt['ict_o'];
				echo $_SESSION['ict_g']=$dt['ict_g'];
				echo $_SESSION['ict_gp']=$dt['ict_gp'];
				echo $_SESSION['op_name']=$dt['op_name'];
				echo $_SESSION['result']=$dt['res'];
				echo $_SESSION['gpa']=$dt['gpa'];

				
			}
			else 
			{
				header("location:search.php");	
				 $error= "fail";
			}
		}
		if(empty($exam)||empty($year)||empty($board)||empty($roll)||empty($reg)){
			$req= "All field is required";
			header("location:search.php");	
		}
		
	}
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Results</title>
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<div class="header-up">
				<img src="images/search_header.jpg" alt="">
			</div>
			<div class="search_box">
				<table cellpadding="5">
					<?php
						if(isset($req)){
							echo "<h2 class='alert alert-danger'>".$req."</h2>";
						}
						if(isset($error)){
							echo "<h2 class='alert alert-danger'>".$error."</h2>";
						}
						
					?>
					<form action="" method="post">
						<tr>
							<td width="13%"><h5>Examination</h5></td>
							<td><h5>:</h5></td>
							<td width="74%">
								<select name="exam" id="">
									<option value="SSC">SSC/Dakhil/Equivalent</option>
									<option value="HSC">HSC</option>
									<option value="JSC">JSC</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><h5>Year</h5></td>
							<td>:</td>
							<td>
								<select name="year" id="">
									<option value="">Select One</option>
									<option value="2019">2019</option>
									<option value="2018">2018</option>
									<option value="2017">2017</option>
									<option value="2016">2016</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><h5>Board</h5></td>
							<td><h5>:</h5></td>
							<td>
								<select name="board" id="">
									<option value="">Select One</option>
									<option value="DHAKA">Dhaka</option>
									<option value="Cumilla">Cumilla</option>
									<option value="Chattagram">Chattagram</option>
									<option value="Sylhet">Sylhet</option>
									<option value="Mymennsigh">Mymennsigh</option>
									<option value="Barishal">Barishal</option>
									<option value="Jesshore">Jesshore</option>
									<option value="Rajshahi">Rajshahi</option>
									<option value="Rangpur">Rangpur</option>
									<option value="Dinajpur">Dinajpur</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><h5>Roll</h5></td>
							<td><h5>:</h5></td>
							<td>
								<input type="text" name="roll" class="form-control">
							</td>
						</tr>
						<tr>
							<td><h5>Reg: no</h5></td>
							<td><h5>:</h5></td>
							<td>
								<input type="text" name="reg" class="form-control">
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="button" name="reset" value="Reset">
								<input type="submit" name="sub" value="Submit">
							</td>
						</tr>
					</form>
				</table>
			</div>
			<div class="footer">
				<img src="images/search_footer.jpg" alt="">
			</div>
		</div>
		<div class="ad">
			<div class="row">
				<div class="col-3">
					<img src="images/playst.jpg" alt="" width="100%">
				</div>
				<div class="col-4" class="text-center">
					<h6 class="">Public Result on Andorid</h6>
					<img src="images/android.jpg" alt="">
					<h6>It's completely free</h6>
				</div>
				<div class="col-5 text-right">
					<h6>Last Update 06 May 2018 <br>Trial Version </h6>
				</div>
			</div>
		</div>

	</div>
	
</body>
</html>