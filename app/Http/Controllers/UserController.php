<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    //
    public function getAllUser()
    {
        $authors = User::get();
        return $authors;
        // ddd($authors);
        // return view('components.layout.layout', [
        //     'authors' => $authors,
        // ]);
    }
}
