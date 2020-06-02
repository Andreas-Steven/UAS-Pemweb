<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('Admin/User/User', ['user' => $user]);
    }

    public function Profile(User $user)
    {
        //return compact('user');
        return view('Profile/Index', compact('user'));
    }

    public function edit(User $user)
    {
        //return compact('user');
        return view('Profile/Update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'birth' => 'required|date',
            'email' => 'required',
        ]);

        $OldFileName = $request->post('OldPhoto');
        echo "Nama Foto Lama: " . $OldFileName;
        
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $tujuan_upload = 'FotoProfile';
            $file->move($tujuan_upload, $file->getClientOriginalName());
            $FileName = $file->getClientOriginalName();
            echo "Nama Foto Baru: " . $FileName;
            
            User::where('id', $id)->update([
                'firstname' => $request->fname,
                'lastname' => $request->lname,
                'birthday' => $request->birth,
                'email' => $request->email,
                'picture' => $FileName
            ]);
        }
        else
        {
             User::where('id', $id)->update([
                'firstname' => $request->fname,
                'lastname' => $request->lname,
                'birthday' => $request->birth,
                'email' => $request->email,
                'picture' => $OldFileName
            ]);
        }

        return redirect()->route('home')->with('status', 'Data Berhasil Diubah!');
    }
}
