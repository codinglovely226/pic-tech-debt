<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;
use App\User;
use App\Team;
use App\Role;

class HomeController
{
    public function index()
    {
		$user = User::with(['roles','team'])->find(Auth::user()->id);
		
        if ($user) {
            $roles            = $user->roles()->with('permissions')->get();
            $permissionsArray = [];

            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }
        }
        
		$user=json_decode(json_encode($user,true),true);
		$roles=json_decode(json_encode($roles['0'],true),true);

        return view('home', compact('user','permissionsArray','roles'));
    }
}
