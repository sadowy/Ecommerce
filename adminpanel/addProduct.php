<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Nie połączono z serwerem';
	}
	
	if(!mysqli_select_db($con,'gruszka'))
	{
		echo 'Nie wybrano bazy daynch';
	}
	
	$CategoryID = $_POST['CategoryID'];
	$BrandID = $_POST['BrandID'];
	$Title = $_POST['Title'];
	$Price = $_POST['Price'];
	$Description = $_POST['Description'];
	$Photos = $_POST['Photos'];
	$Tags = $_POST['Tags'];
	
	$sql= "INSERT INTO products (CategoryID,BrandID,Title,Price,Description,Photos,Tags) VALUES ('$CategoryID','$BrandID','$Title','$Price','$Description','$Photos','$Tags')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Dodanie nie powiodło sie';
	}
	else
	{
		echo 'Dodano Produkt';
	}
	
	header("refresh:2; url=products.php");
?>