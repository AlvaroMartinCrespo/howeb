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

        $credenciales = [
            'email' => $emailUser,
            'password' => $request->password,
        ];

        // Check if passwords match
        if (Auth::attempt($credenciales)) {

            if ($request->newPassword === null && $request->email === null) {
                return redirect()->back()->with('field', 'Empty fields');
            }
            if ($request->newPassword !== null) {
                $user->password = Hash::make($request->newPassword);
            }
            if ($request->email !== null) {
                $user->email = $request->email;
            }
            $user->save();
            return redirect()->back()->with('success', 'Data updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Incorrect password');
        }
    }

    /**
     * Delete the data of user in the database.
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('users'))->with('success', 'Data deleted successfully!');
    }
}
