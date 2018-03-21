<?php

namespace App\Http\Controllers;

use App\Sinhvien;
use App\Lop;

use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sinhviens = Sinhvien::get(); // Lấy hết tất cả các hàng trong CSDL của bảng Sinhvien
        return view('sinhviens',['sinhviens'=>$sinhviens]);
    }

    public function search() {
        $name = request()->input('name');
        $sinhviens = Sinhvien::where([ 
            ['name', 'LIKE', '%' . $name . '%'],
        ])->get();
        return view('/sinhviens',['sinhviens'=>$sinhviens]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sinhviens = Sinhvien::get();
        $lops = Lop::get();
        return view('stus/add', ['sinhviens'=>$sinhviens,'lops'=>$lops]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //bắt lỗi client
         $request->validate([
            'name' => 'required|max:10',
            'age' => 'required',
            'lop' => 'required',
        ]);
        //bắt lỗi client
        $name= request()->input('name');
        $age= request()->input('age');
        $lop = request()->input('lop');
        // dd($lop);
        
    
       $sinhvien= new Sinhvien();
       $sinhvien->name=$name;
       $sinhvien->age=$age;
       $sinhvien->lop_id=$lop;
       $sinhvien->save();
       return redirect('/sinhviens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $sinhvien = Sinhvien::with('lop')->find($id);// tìm id của student trong bảng
        $lops = Lop::get();// tìm id student trong bảng
        return view('edit',['sinhvien'=> $sinhvien,'sinhviens'=> $sinhviens]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sinhvien = Sinhvien::find($id);
        $lops = Lop::get();
        return view('/stus.edit', ['sinhvien'=>$sinhvien,'lops'=>$lops]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // return $id;
        $name =request()->input('name');
        $age =request()->input('age');
        $lop =request()->input('lop');
        

        $sinhvien = Sinhvien::find($id);
        $sinhvien->name = $name;
        $sinhvien->age = $age;
        $sinhvien->lop_id = $lop;
        
       

        $sinhvien->save();

        return redirect('sinhviens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sinhvien = Sinhvien::find($id);
        $sinhvien->delete();
        return redirect('sinhviens');
    }
    
}
