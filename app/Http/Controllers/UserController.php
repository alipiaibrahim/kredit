<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::with('roles')->get();
        $roles = Role::all();
        return view('akun.show', compact('user', 'users'));
    }
    public function create()
    {
        return view('akun.tambah');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:accounts',
        //     'password' => 'required|min:8',
        //     'roles_id' => 'required',
        // ]);

        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->roles_id = $request->get('roles_id');
        $user->save();

        return redirect()->route('akun.show')->with('success', 'Akun berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('akun.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:accounts,email,' . $id,
        //     'password' => 'nullable|min:8',
        //     'roles_id' => 'required',
        // ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($request->get('password')) {
            $user->password = Hash::make($request->get('password'));
        }
        $user->roles_id = $request->get('roles_id');
        $user->save();

        return redirect()->route('akun.show')->with('success', 'Akun berhasil diubah.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        // storage::delete('public/photo_user/' . $req->get('old_photo'));
        $user->delete();

        Session::flash('status', 'Hapus data topik berhasil!!!');
        return redirect()->back();
    }
}
