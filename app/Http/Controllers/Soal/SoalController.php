<?php

namespace App\Http\Controllers\Soal;

use App\Models\Soal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $search = Soal::latest();

        if(request('search')){
            $search->where('soal_jawaban', 'like', '%' . request('search') . '%')
                    ->orWwhere('keterangan_jawaban', 'like', '%' . request('search') . '%');
        }

        return view('admin.soal.index', [
            'soals' => $search->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.soal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Soal::create([
            'soal_jawaban' => $request->soal_jawaban,
            'keterangan_jawaban' => $request->keterangan_jawaban,
        ]);

        if($validated){
            return redirect('/data-soal')->with('toast_success', 'Add Question Successfully!');
        }else{
            return back()->with('toast_error', 'Add Question Failed!');
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
        return view('admin.soal.edit', [
            'soals' => Soal::where('id_soal', $id)->first(),
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
        $validated = Soal::where('id_soal', $id)->update([
            'soal_jawaban' => $request->soal_jawaban,
            'keterangan_jawaban' => $request->keterangan_jawaban,
        ]);

        if($validated){
            return redirect('/data-soal')->with('toast_success', 'Add Question Successfully!');
        }else{
            return back()->with('toast_error', 'Add Question Failed!');
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
        $deleted = Soal::where('id_soal', $id);

        if ($deleted->delete()) {
            return redirect('/data-soal')->with('toast_success', 'Delete Question Successfully!');
        }else{
            return back()->with('toast_error', 'Delete Question Failed!');
        }
    }
}
