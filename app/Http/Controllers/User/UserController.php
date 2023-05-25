<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = User::where('level', '!=', 'Admin');

        if(request('search')){
            $search->where('nama_lengkap', 'like', '%' . request('search') . '%')
                    ->orWhere('username', 'like', '%' . request('search') . '%')
                    ->orWhere('level', 'like', '%' . request('search') . '%');
        }

        return view('admin.user.index', [
            'users' => $search->orderBy('id', 'desc')->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => $request->password,
            'level' => 'Juri',
        ]);

        if($validated){
            return redirect('/data-user')->with('toast_success', 'Add User Data Succesfully!');
        }else{
            return back()->with('toast_error', 'Add User Data Failed!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.user.edit', [
            'users' => User::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = User::where('id', $id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => $request->password,
            'level' => 'Juri',
        ]);

        if($validated){
            return redirect('/data-user')->with('toast_success', 'Updated User Data Succesfully!');
        }else{
            return back()->with('toast_error', 'Updated User Data Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = User::where('id', $id);
        
        if($deleted->delete()){
            return redirect('/data-user')->with('toast_success', 'Delete User Succesfully!');
        }else{
            return back()->with('toast_error', 'Delete User Failed!');
        }

    }
}
