<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();

        return view('kelola.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelola.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role' => 'required',
            ],);

            user::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password),
            ]);

            return redirect()->back()->with('success', 'Berhasil Menambah Data Akun!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('kelola.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required',
            'password' => 'nullable',
            'role' => 'required',
        ]);
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);
        return redirect()->route('user.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('delete', 'Berhasil Menghapus Data akun!');
    }
}
