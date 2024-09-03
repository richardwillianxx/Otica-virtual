<?php

namespace App\Controllers;

use App\Controllers\Controller;

class MostruarioController extends Controller {

    public function index() {

        return require_once __DIR__ . '/../Views/mostruario.php';
    }
    
}