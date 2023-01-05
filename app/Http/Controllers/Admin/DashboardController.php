<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $request->user()->id,
        ]);

        $request->user()->update($request->all());
        return redirect("/admin/users")->with('status', 'Email modifié avec succes !');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required',
            'passwordConfirmation' => 'required|same:newPassword',
        ]);
        
        if(!\Hash::check($request->currentPassword, $request->user()->password)) {
            return redirect()->back()->with('error', 'Mot de passe incorrect !');
        }
        
        $request->user()->password = bcrypt($request->newPassword);
        $request->user()->save();

        return redirect("/admin/users")->with('status', 'Mot de passe modifié avec succes !');
    }
}
