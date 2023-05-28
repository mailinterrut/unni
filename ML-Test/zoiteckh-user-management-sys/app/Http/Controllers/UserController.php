<?php
 

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function assignRole(Request $request, User $user)
    {
        $role = Role::findOrFail($request->role_id);
        $user->roles()->attach($role);

        return redirect()->back()->with('success', 'Role assigned successfully.');
    }

    public function revokeRole(Request $request, User $user)
    {
        $role = Role::findOrFail($request->role_id);
        $user->roles()->detach($role);

        return redirect()->back()->with('success', 'Role revoked successfully.');
    }
}
