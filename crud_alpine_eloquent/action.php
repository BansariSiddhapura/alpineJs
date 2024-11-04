<?php
require_once "./vendor/autoload.php";
require_once "./classes/Students.php";
require_once "./includes/connection.php";


if (isset($_POST)) {

    $data = json_decode(file_get_contents("php://input"), true);  //convert string data into object
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // die();
    if ($data['action'] == "insert") {
        $allData = ["name" => $data['studentsDetails']['name'], "email" => $data['studentsDetails']['email'], "password" => $data['studentsDetails']['password'], "address" => $data['studentsDetails']['address'], "gender" => $data['studentsDetails']['gender']];
        $id = $data['studentsDetails']['id'];
        $query = Students::updateOrCreate(['id' => $id], $allData);
        $message = !empty($id) ? 'update success' : 'insert success';
        echo json_encode(['message' => $message]);
    }
    if ($data['action'] == "show") {
        if (!empty($data['id'])) {
            $id = $data['id'];
            $query = Students::where('id', $id)->get();
        } else if (!empty($data['search'])) {
            $query = Students::where('name', $data['search'])->get();
        } else if (!empty($data['selectGender'])) {
            $query = Students::where('gender', $data['selectGender'])->get();
        } else if (!empty($data['selectCity'])) {
            $query = Students::where('address', $data['selectCity'])->get();
        } else {
            $query = Students::all()->toArray();
        }
        echo json_encode($query);
    }
    if ($data['action'] == "delete") {
        $id = $data['id'];
        $query = Students::where('id', $id)->delete();
        $message = $query ? 'delete success' : 'something went wrong!';
        echo json_encode(['message' => $message]);
    }
}
