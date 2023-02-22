<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\User;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class GroupController extends Controller
{
    public function create()
    {
        $groups = Group::all();
        return view('users.create_group', compact('groups'));
    }
}
