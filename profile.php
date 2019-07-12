<?php
	session_start();
	include_once("inc/connection.php");
	include_once("inc/function.php");
	if(empty($_SESSION['email']) || empty($_SESSION['pass'])){
		header("location:index.php");
	}
	$email= $_SESSION['email'];
	$pass= $_SESSION['pass'];
	$data = $conn -> query("SELECT * FROM reg1 WHERE email = '$email' && pass ='$pass'");
	while($dt = $data->fetch_assoc()){
		$phone =$dt['phone'];	
		$img = $dt['img'];
	}
	
?>
<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$type = $_POST['type'];
		$dob = $_POST['dob'];
		$inst = $_POST['inst'];
		$gpa = $_POST['gpa'];
		$exam = $_POST['exam'];
		$res = $_POST['res'];
		$roll = $_POST['roll'];
		$group = $_POST['group'];
		$board = $_POST['board'];
		$year = $_POST['year'];
		$op_name = $_POST['opt'];
		$bang_o = $_POST['bang_o'];
		$eng_o = $_POST['eng_o'];
		$math_o = $_POST['math_o']."<br>";
		$ss_o = $_POST['ss_o']."<br>";
		$r_o = $_POST['r_o']."<br>";
		$ict_o = $_POST['ict_o']."<br>";
		$p_o = $_POST['p_o']."<br>";
		$c_o = $_POST['c_o']."<br>";
		$opt_o = $_POST['opt_o']."<br>";
		$imgn = $_FILES['img']['name'];
		$imgt = $_FILES['img']['tmp_name'];
		$imga = explode(".",$imgn);
		$ext = end($imga);
		$uimg = md5(time().$imgn).".".$ext;
		$bang_gp=gradepoint($bang_o);
		$bang_g=grade($bang_o);
		$eng_gp=gradepoint($eng_o);
		$eng_g=grade($eng_o);
		$math_gp=gradepoint($math_o);
		$math_g=grade($math_o);
		$ss_gp=gradepoint($ss_o);
		$ss_g=grade($ss_o);
		$r_gp=gradepoint($r_o);
		$r_g=grade($r_o);
		$p_g=grade($p_o);
		$p_gp=gradepoint($p_o);
		$c_g=grade($c_o);
		$c_gp=gradepoint($c_o);
		$ict_g=grade($ict_o);
		$ict_gp=gradepoint($ict_o);
		$opt_g=grade($opt_o);
		$opt_gp=gradepoint($opt_o);
		if(empty($name)||empty($fname)||empty($exam)||empty($roll)||empty($board)||empty($year)||empty($op_name)||empty($bang_o)||empty($eng_o)||empty($math_o)||empty($ss_o)||empty($r_o)||empty($ict_o)||empty($p_o)||empty($c_o)||empty($opt_o)||empty($uimg)){
			echo "Field is not empty";
		}elseif((in_array($ext, ["jpg","png","jpeg","gif"]))==false){
			echo "image format is invalid";
		}
		else{
			$data = $conn -> query("INSERT INTO student(name,fname,mname,type,dob,inst,exam,roll,img,board,yr,ba_o,ba_g,ba_gp,ma_o,ma_g ,ma_gp,eng_o,eng_g,eng_gp,ss_o,ss_g,ss_gp,re_o,re_g,re_gp,ph_o,ph_g,ph_gp,ch_o,ch_g,ch_gp, opt_o,opt_g,opt_gp,ict_o,ict_g,ict_gp,op_name,gpa,grp,res)VALUES('$name','$fname','$mname','$type','$dob','$inst','$exam','$roll','$uimg','$board','$year','$bang_o','$bang_g','$bang_gp','$math_o','$math_g','$math_gp','$eng_o','$eng_g','$eng_gp','$ss_o','$ss_g','$ss_gp','$r_o','$r_g','$r_gp','$p_o','$p_g','$p_gp','$c_o','$c_g','$c_gp','$opt_o','$opt_g','$opt_gp','$ict_o','$ict_g','$ict_gp','$op_name','$gpa','$group','$res')");
			/*if($data==1){
				echo 'success';
			}
			else
				echo "fail";*/
			move_uploaded_file($imgt, "images/".$uimg);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


<div class="header">
	<div class="container">
			<ul>
				<li class=""><a href="">Home</a></li>
				<li><a href="">Education Board Results</a></li>
				<li><?php echo $email;?></li>
				<li><?php echo $phone;?></li>
				<li><a href="inc/logout.php">Logout</a></li>
				<li><a href=""><img src= "images/<?php echo $img;?>"></a></li>
			</ul>	
	</div>
</div>
	<div class="data_insert">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Full Name</label>
					<input type="text" name ="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Father Name</label>
					<input type="text" name ="fname" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Mother Name</label>
					<input type="text" name ="mname" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Type</label>
					<select name="type" id="">
						<option value="Regular">Regular</option>
						<option value="Irregular">Irregular</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Date Of Birth</label>
					<input type="date" name ="dob" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Institute</label>
					<input type="text" name ="inst" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Examination</label>
					<select name="exam" id="">
						<option value="">--SELECT--</option>
						<option value="SSC">SSC</option>
						<option value="HSC">HSC</option>
						<option value="JSC">JSC</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Roll</label>
					<input type="text" name ="roll" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Group</label>
					<input type="text" name ="group" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Board</label>
					<select name="board" id="">
						<option value="">--SELECT--</option>
						<option value="Dhaka">Dhaka</option>
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
				</div>
				<div class="form-group">
					<label for="">Year</label>
					<select name="year" id="">
						<option value="">--SELECT--</option>
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
				</div>
				<div class="form-group">
					<label for="">image</label>
					<input type="file" name ="img" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Bangla</label>
					<input type="text" name ="bang_o" class="form-control">
				</div>
				<div class="form-group">
					<label for="">English</label>
					<input type="text" name ="eng_o" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Mathematics</label>
					<input type="text" name ="math_o" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Social Science</label>
					<input type="text" name ="ss_o" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Religion</label>
					<input type="text" name ="r_o" class="form-control">
				</div>
				<div class="form-group">
					<label for="">ICT</label>
					<input type="text" name ="ict_o" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Physics</label>
					<input type="text" name ="p_o" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Chemistry</label>
					<input type="text" name ="c_o" class="form-control">
				</div>
				<div class="form-group">
					<label for="">optional</label>
					<select name="opt" id="">
						<option value="">--SELECT--</option>
						<option value="Higher Mathematics">Higher Mathematics</option>
						<option value="Biology">Biology</option>
						<option value="Agriculture">Agriculture</option>
						<option value="Statistics">Statistics</option>
					</select>
					<input type="text" name="opt_o" class="form-control" placeholder="optional subject">
				</div>
				<div class="form-group">
					<label for="">GPA</label>
					<input type="text" name ="gpa" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Result</label>
					<select name="res" id="">
						<option value="">--select--</option>
						<option value="PASSED">PASSED</option>
						<option value="FAIL">FAIL</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name ="submit" class="btn btn-success" value ="submit">
				</div>
			</form>
	</div>
</div>
	
</body>
</html>