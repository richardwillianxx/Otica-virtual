<?php

namespace App\Controllers;

use App\Controllers\Controller;

class SobreController extends Controller {

    public function index() {

        return require_once __DIR__ . '/../Views/sobre.php';
    }
    
}