<?php

namespace Skg\Devland\app\Http\Controllers;

class HomeController extends Controller {

    public function index() {
        return view("DevLand::welcome");
    }

}
