<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->get('username');
        $users = DB::table('users')->where('name', 'like', '%' . $user . '%')->get();
        return redirect(route('cpanel'))->with('users', $users);
        // return view('page/cPanel', compact('users'));
    }

    /**
     * Update the data of user in the database.
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(Request $request)
    {
        $emailUser = auth()->user()->email;
        $user = auth()->user();

        dd($user);

        $credenciales = [
            'email' => $emailUser,
            'password' => $request->password,
        ];

        // Check if passwords match
        if (Auth::attempt($credenciales)) {

            if ($request->newPassword === '' || $request->newPassword === null && $request->email === '' || $request->email === null) {
                return redirect()->back()->with('error', 'Campos vacíos');
            }
            if ($request->newPassword !== '' || $request->newPassword !== null) {
                $user->password = Hash::make($request->password);
            }
            if ($request->email !== '' || $request->email !== null) {
                $user->email = $request->email;
            }
        } else {
            return redirect()->back()->with('error', 'Contraseña incorrecta');
        }
    }
}
