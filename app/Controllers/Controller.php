<?php 
namespace App\Controllers;

use App\Models\User;

class Controller {
    public function index() {
        $user = new User();
        $user->name = "Test";
        echo $user->name;
    }
}