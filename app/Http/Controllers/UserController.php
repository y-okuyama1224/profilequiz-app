<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\User;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    /**
     * ユーザーをリダイレクトするパスの取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request) {
      return route('login');
    }
    
    public function index() {
        return view('users/profile');   
    }

    public function get_edit() {
        return view('users/profile_edit');
    }
    public function update(Request $request) {

        $user = Auth::user();
        // DD($user->birthday);

        $user->department = $request->department;
        $user->birthday = $request->birthday;
        $user->hobby = $request->hobby;
        $user->comefrom = $request->comefrom;

        if ($request->profile_image) {
            $user->profile_image = $request->file('profile_image')->store('profile_images');
        }

        $user->save();

        // 成功した場合はリダイレクトする
        return redirect()->route('update');
    }
    public function get_update() {
        return view('users/profile_update');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('logout')->withHeaders(['Cache-Control' => 'no-store']);
    }

    public function get_group() {
        return view('users/create_group');
    }

}
