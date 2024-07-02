<?php

// namespace App\Http\Controllers;

// abstract class Controller
// {
//     //
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('puser')
            ->leftJoin('pcontracts', 'puser.id', '=', 'pcontracts.user_id')
            ->select('puser.id', 'puser.name', 'pcontracts.status')
            ->where('pcontracts.status', '=', '未契約')
            ->get();

        return view('users.index', compact('users'));
    }
}

// $users = DB::table('puser')
//     ->leftJoin('pcontracts', 'puser.id', '=', 'pcontracts.user_id')
//     ->select('puser.id', 'puser.name', 'pcontracts.status')
//     ->where('pcontracts.status', '=', '契約中')
//     ->get();
