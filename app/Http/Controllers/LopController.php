<?php

namespace App\Http\Controllers;

use App\Lop;
use App\Sinhvien;
use Illuminate\Http\Request;

class LopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lops = Lop::get();

        return view('lops.lop', ['lops'=>$lops]);
    }
    public function search() {
        $name = request()->input('name');
        $lops = Lop::where([ 
            ['name', 'LIKE', '%' . $name . '%'],
        ])->get();
        return view('/lops.lop',['lops'=>$lops]);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lops =Lop::get();
        return view('lops.them',['lops'=> $lops]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name= request()->input('name');
        $lop= new Lop();
        $lop->name=$name;
        $lop->save();
        return redirect('/lops');

     
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lops =Lop::with('sinhvien')->find($id);
        return view('lops.chitiet',['lops'=>$lops]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lop = Lop::find($id);
        
        return view('/lops.sua')->with('lop',$lop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lop = Lop::find($id);
        $lop->name = $request->input('name');
        $lop->save();

        return redirect('lops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lop = Lop::find($id);
        
        $lop->delete();
        return redirect('/lops');
    }
}
