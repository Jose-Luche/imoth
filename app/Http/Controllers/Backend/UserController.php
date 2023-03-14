<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function UserView()
    {
        $data = User::all();
        //$data = User::where('super_admin', '0');
        return view('backend.user.viewUser', compact('data'));
    }

    public function UserAdd()
    {
        return view('backend.user.addUser');
    }

    public function UserStore(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        $code = rand(0000, 9999);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->account_type = $request->account_type;
        $data->mobile = $request->mobile;
        $data->password = bcrypt($code);
        $data->code = $code;

        $data->save();

        $notification = array(
            'message' => 'User Created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function userEdit($id)
    {
        $editData = User::find($id);
        return view('backend.user.editUser', compact('editData'));
    }

    public function userUpdate(Request $request, $id)
    {

        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;

        $data->save();

        $notification = array(
            'message' => 'User Updated successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('user.view')->with($notification);
    }
}
