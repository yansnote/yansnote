<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * 
 */
class AdminController extends Controller
{
    /**
     * Constructor method
     **/
    public function FunctionName()
    {
        $this->middleware('auth');
    }
}
