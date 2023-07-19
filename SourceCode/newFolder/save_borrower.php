<?php
	require_once'class.php';
	if(ISSET($_POST['save'])){
		$db=new db_class();
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$contact_no=$_POST['contact_no'];
		$address=$_POST['address'];
		$age=$_POST['age'];
		$birthdate =$_POST['birthdate'];
		$birthplace =$_POST['birthplace'];
		$civilstatus =$_POST['civilstatus'];
		$religion =$_POST['religion'];
		$occupation =$_POST['occupation'];
		$monthlyIncome =$_POST['monthlyIncome'];
		$otherIncome =$_POST['otherIncome'];
		$spouse =$_POST['spouse'];
		$dependents =$_POST['dependents'];
		$company =$_POST['company'];
		$employment =$_POST['employment'];
		$emergency =$_POST['emergency'];
	
		
		$db->save_borrower($firstname,$lastname,$contact_no,$address,$age,
		$birthdate,$birthplace,$civilstatus,$religion ,$occupation ,$monthlyIncome,
		$otherIncome, $spouse,$dependents,$company ,$employment,$emergency );
		
		header("location: borrower.php");
	}
?>