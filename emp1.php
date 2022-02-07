<!DOCTYPE html>
<html lang="en">

<head>
<title>Employee details</title>
</head>
<body>
<div>
<h1 class="hreg">Employee Details</h1>
<form action="" method="POST">
<table class="tblk">
<tr>
<td> <label for="f1">Emp id</label></td>
<td><input name="emp_id" id="f1" type="text" placeholder="enter Emp_id" class="from_cmn "></td>
</tr>
<tr>
<td><label for="f2">emp_name</label></td>
<td><input name="emp_name" type="text" id="f2" placeholder="enter name" class="from_cmn"><br></td>
</tr>
<tr>
<td> <label for="f4">Job Name</label></td>
<td><input name="job_n" id="f4" type="text" placeholder="enter ur Job Name" class="from_cmn"></td>
</tr>
<tr>
<td> <label for="f5">Manager Id</label></td>
<td><input name="mn_id" id="f5" type="text" placeholder="enter manager Id" class="from_cmn"></td>
</tr>
<tr>
<td> <label for="f5">Salary</label></td>
<td><input name="salary" id="f6" type="number" placeholder="enter ur Salary" class="from_cmn"></td>
</tr>
</table>
<input type="submit" value="SUBMIT" name="subr" class="sub"><input type="reset" value="Clear" class="rest">
</from>
</div>

</body>
<?php
$conn = mysqli_connect("localhost", "root", "", "employee");
hlo($conn);
if (isset($_POST['subr'])) {
$eid = $_POST['emp_id'];
$ename = $_POST['emp_name'];
$ejob = $_POST['job_n'];
$mid = $_POST['mn_id'];
$sal = $_POST['salary'];
$sql = "INSERT INTO employee VALUES ('$eid', '$ename', '$ejob','$mid',$sal)";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('SUccess');</script>";

} else {
echo "<script>alert('error');</script>";
}
}
function hlo($con)
{
$VAL="SELECT * FROM employee where salary>35000;";
$res=mysqli_query($con,$VAL);
echo "<h2 style='color:black;margin-left:50%;'>Details of employees where salary graiter than 35000</h2><table border='1px solid black' class='tbl_clz'><tr><th>emp_name</th><th>salary</th></tr>";
while($row=mysqli_fetch_assoc($res)){
echo "<td>".$row['emp_name']."</td>";
echo "<td>".$row['salary']."</td></tr>";
}
echo "</table>";

}

?>

</html>