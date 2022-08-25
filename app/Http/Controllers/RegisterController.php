<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Registration',
            'active' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'no_telepon' => 'required|unique:users',
            'alamat' => 'required|max:255',
            'password' => 'required|min:5|max:255'
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        return redirect('/dashboard/marketing')->with('pesan','registrasi berhasil');
    }

    public function destroy(User $user){
        User::destroy($user->id);
        return redirect('/dashboard/marketing')->with('pesan','Berhasil menghapus data marketing');
    }
}
