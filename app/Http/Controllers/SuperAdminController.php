<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use DB;

class SuperAdminController extends Controller
{
    public function index()
    {
        $user = User::with('role')->get()->reverse();
        // dd($user);

        foreach($user as $key => $us)
        {
            $user[$key]->date = Carbon::createFromFormat('Y-m-d H:i:s', $us->created_at)->format('F d, Y');
        }

        return view('admin.userManagement', array('users' => $user));
    }

    public function createUser(Request $request){

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user =  new User();
        $user->role_id = $request->role;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();


        return back();
    }

    public function updateUser(Request $request, $id){
        
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        DB::table('users')
        ->where('id', $id)
        ->update([
            'name'  => $request->name,
            'email'  => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        return back();
    }

    public function deleteUser($id){
        $res = DB::table('users')
        ->where('id', $id)
        ->delete();
        return back();
    }
}
