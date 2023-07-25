<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        // return "hello";
        $users = User::get();
        // return $users;
        return view('example', compact('users'));
    }

    public function import()
    {
        // return "hello";
        Excel::import(new UsersImport, request()->file('file'));
        return redirect()->back();
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'Users.csv'); //'Users.xlsx'
    }
}