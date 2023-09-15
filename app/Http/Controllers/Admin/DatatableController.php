<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function users() {
        $users = User::select('id', 'name', 'email', 'created_at')->get();

        return datatables($users)->toJson();
    }
}
