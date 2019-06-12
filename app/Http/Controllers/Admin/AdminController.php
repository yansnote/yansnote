<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Admin controller
 */
class AdminController extends Controller
{
    /**
     * Constructor Method
     *
     * @return App\Http\Controllers\Admin\AdminController
     **/
    public function __construct()
    {
        $this->middleware('auth');
    }
}
