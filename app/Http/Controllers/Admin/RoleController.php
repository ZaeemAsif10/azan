<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin_side.role.index', compact('roles'));
    }

    public function storeRole(Request $request)
    {
        $role = new Role();
        $role->name = $request->input('name');
        $role->save();
        return back()->with('message', 'Role Add successfully');
    }

    public function editRole(Request $request)
    {
        $role = Role::find($request->id);
        return response()->json([
            'role' => $role,
        ]);
    }

    public function updateRole(Request $request)
    {
        $role = Role::find($request->role_id);
        $role->name = $request->input('name');
        $role->update();
        return back()->with('message', 'Role Update successfully');;
    }

    public function deleteRole(Request $request)
    {
        $role = Role::find($request->id);
        if ($role->delete()) {
            return response()->json([
                'status' => 200,
                'message' => 'Role Deleted Successfully',
            ]);
        }
    }
}
