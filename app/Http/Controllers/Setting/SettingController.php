<?php

namespace App\Http\Controllers\Setting;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index');
    }

    public function settingprofile(Request $request)
    {
        $validated = User::where('id', Auth()->user()->id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            'foto_profile' => $request->file('foto_profile')->store('foto_profile'),
        ]);

        if($validated){
            return redirect('/setting')->with('toast_success','Update Successfully!');
        }else{
            return back()->with('toast_error','Update Failed!');
        }

    }
}
