<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    
    public function inbox() {
        return view('admin/pages/email_inbox');
    }

    
    public function compose() {
        return view('admin/pages/email_compose');
    }

    public function detail() {
        return view('admin/pages/email_detail');
    }
}
