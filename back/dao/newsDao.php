<?php
include "connexionDb.php";
include "../model/news.php";

$db = new Database();
$conn = $db->getConnection();

$request_method = $_SERVER["REQUEST_METHOD"];

switch($request_method)
	{
		case 'GET':
            // Retrive Products
            if (!empty($_GET["id"])) {
                $id = intval($_GET["id"]);
                getNews($id);
                
            } else {
                getNews();
            }
            break;

        default:
            // Invalid Request Method
            header("HTTP/1.0 405 Method Not Allowed");
            break;
	}
	
function getNews()
	{
        global $conn;
		$query="SELECT * FROM news";
		$response=array();
		$result=mysqli_query($conn, $query);
		while ($row=mysqli_fetch_array($result)) {
            $response[]=$row;
        }
		header('Content-Type: application/json');
		echo json_encode($response);
	}