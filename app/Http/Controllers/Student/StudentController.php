<?php

namespace App\Http\Controllers\Student;

use App\Models\Peserta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $search = Peserta::where('kategori_peserta', 'Student');

        if(request('search')){
            $search->where('nama_peserta', 'like', '%' . request('search') . '%')
                    ->orWhere('email_peserta', 'like', '%' . request('search') . '%')
                    ->orWhere('asal_peserta', 'like', '%' . request('search') . '%')
                    ->orWhere('judul_peserta', 'like', '%' . request('search') . '%');
        }

        return view('admin.student.index', [
            'students' => $search->orderBy('id_peserta', 'desc')
            ->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Peserta::create([
            'nama_peserta' => $request->nama_peserta,
            'email_peserta' => $request->email_peserta,
            'asal_peserta' => $request->asal_peserta,
            'kategori_peserta' => 'Student',
            'judul_peserta' => $request->judul_peserta,
        ]);

        if($validated){
            return redirect('/data-student')->with('toast_success', 'Add Participants Successfully!');
        }else{
            return back()->with('toast_error', 'Add Participant Failed!');
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
        return view('admin.student.edit', [
            'pesertas' => Peserta::where('id_peserta', $id)->first(),
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
        $validated = Peserta::where('id_peserta', $id)->update([
            'nama_peserta' => $request->nama_peserta,
            'email_peserta' => $request->email_peserta,
            'asal_peserta' => $request->asal_peserta,
            'kategori_peserta' => 'Student',
            'judul_peserta' => $request->judul_peserta,
        ]);

        if($validated){
            return redirect('/data-student')->with('toast_success', 'Update Participants Successfully!');
        }else{
            return back()->with('toast_error', 'Update Participant Failed!');
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
        $deleted = Peserta::where('id_peserta', $id);

        if ($deleted->delete()) {
            return redirect('/data-student')->with('toast_success', 'Delete Participants Successfully!');
        }else{
            return back()->with('toast_error', 'Delete Participant Failed!');
        }
    }
}
