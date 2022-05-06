<?php
session_start();
$con = new mysqli("localhost","root","","financial");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}