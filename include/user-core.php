<?php
session_start();
class User{


	public function register($firstname, $lastname, $email, $phone, $password, $address, $city, $state, $country){
		require('connect.php');
		$newPassword = md5($password);
		$query = "INSERT INTO customers (first_name,last_name,email,phone_no,password,address,city,state,country) value ('$firstname','lastname','$email','$phone','$newPassword','address','city','state','country')";
		$run = $yellow->query($query) or die($yellow->error.__LINE__);

		if ($run) {
			return true;
		}
	}

	public function login($email, $password){
		require('connect.php');
		$newPassword = md5($password);

		$query = "SELECT * FROM customers where email='$email' and password='$newPassword'";
		$run = $yellow->query($query) or die($yellow->error.__LINE__);
		$getUser = $run->num_rows;
		if($getUser > 0){
			if($row=mysqli_fetch_array($run)){
	          $_SESSION['user_id']=$row["id"];
	          header("Location: index.php");
	        }		
	        else{
	          header("Location: login.php?error=Authentication failed");
	        } 
		}

	}

 	public function checkAuth(){
    	if ($_SESSION['user_id']) {
	      	return true;
	    }else{
	      	return false;
	    }
  	}

  	public function logout(){
		session_destroy();
		header("Location: index.php");
		exit();
  	}

  	public function getUserInformation(){
  		require 'connect.php';

  		$id = $_SESSION['user_id'];

  		$query = "SELECT * FROM customers where custormer_id = '$id'";
		$run = $yellow->query($query) or die($yellow->error.__LINE__);
		$rows = mysqli_fetch_array($run);

		return $rows;

  	}

  	public function getUserInfo(){
  		require 'connect.php';

  		$identifier = "product";

  		$query = "SELECT * FROM product where identifier = '$identifier'";
		$run = $yellow->query($query) or die($yellow->error.__LINE__);
		$rows = mysqli_fetch_array($run);

		return $rows;

  	}

}

$user = new User();