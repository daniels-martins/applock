<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    public function index()
    {
        // return view('maggot');
        // $conn = new \mysqli('localhost', 'root', '', 'fish_db');
        // if (mysqli_connect_errno()) {
        //     die('Could not connect to the database');
        // }

        // // Prepare the statement
        // $stmt = $conn->prepare('SELECT * FROM USERS WHERE ID = ?');

        // // Bind the parameter
        // $id = 5;
        // $stmt->bind_param('i', $id); // 'i' indicates that the parameter is an integer

        // // Execute the statement
        // $stmt->execute();

        // // Fetch the result
        // $result = $stmt->get_result();
        // while ($row = $result->fetch_assoc()) {
        //     // Process each row
        //     print_r($row);
        // }

        // // Close the statement and connection
        // $stmt->close();
        // $conn->close();


        User::find(5);
    }
    //
}
