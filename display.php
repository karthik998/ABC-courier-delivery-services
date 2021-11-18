<?php
session_start();
require_once("db.php");
?>

<html>
<head>
<title>Display Complaints</title>
<style>
.center {
  margin-left: auto;
  margin-top: 5%;
  margin-right: auto;
}
.footer {
        position: fixed;
        text-align: center;
        bottom: 0px;
        width: 100%;
        margin-bottom: 5%;
        font-size: 25px;
    }
body{font-family:arial;letter-spacing:1px;

background-image: url(background1.jpg);
background-color: white;
  height: 480px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
text-align: center;
}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #dddddd;   margin-left: auto;
  margin-right: auto; text-align: center;}
.tbl-qa th.table-header {padding: 25px;text-align: center; margin-left: auto;
  margin-right: auto;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;margin-left: auto;
  margin-right: auto;text-align: center;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;}
</style>
</head>
<body class="center" >
<?php
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM complaint WHERE Compid=?");
	$pdo_statement->bindParam(1,$_SESSION['compid'], PDO::PARAM_INT);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
	
?>
<div align="center">
	<h2 style="color: red ; font-size: 35px";>Read Complaints</h2>
<table class="tbl-qa" >
  <thead>
	<tr>
	  <th class="table-header" width="20%">Complaint ID</th>
	  <th class="table-header" width="20%">Complaint Type</th>
	  <th class="table-header" width="20%">Complaint Description</th>
	  <th class="table-header" width="20%">Solution</th>
	  <th class="table-header" width="20%">Complaint Status</th>
	  <th class="table-header" width="20%">Customer ID</th>
	  <th class="table-header" width="20%">Update</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><?php echo $row["Compid"]; ?></td>
		<td><?php echo $row["CompType"]; ?></td>
		<td><?php echo $row["CompDesc"]; ?></td>
		<td><?php echo $row["Solution"]; ?></td>
		<td><?php echo $row["CompStatus"]; ?></td>
		<td><?php echo $row["Custid"]; ?></td>
		<td>
<div align="center">
			<a class="ajax-action-links" href='update.php?id=<?php echo $row['Compid']; ?>'><img src="edit.png" title="Edit"  /></a> </div></td>
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>

<div style="text-align:center; margin-top: 5%; font-size: 20px;"><a href="index.php" class="button_link">Back to Home</a></div>

<div class="footer">Designed By Kothamasu Karthik</div>
</div>
</body>
</html>