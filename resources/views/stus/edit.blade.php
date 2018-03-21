
@extends('layouts.flat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 my-3">
            <div class="card">
                
                <div class="card-body">
                    <h1 class="text-center">SỬA SINH VIÊN TRONG BẢNG</h1>
                    <form action="/sinhviens/{{$sinhvien->id}}" method="POST" class="form-group">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                        <div class="form-group ml-3">
                          <label>Tên</label>
                          <input type="text" class="col-md-12 form-control" name="name" value="{{$sinhvien->name}}"  placeholder="Nhập tên">
                        </div>
                        <div class="form-group  ml-3">
                          <label >Tuổi</label>
                          <input type="text" class="col-md-12 form-control" name="age" value="{{$sinhvien->age}}" placeholder="Nhập tuổi">
                        </div>
                        <div class="form-group ml-3">
                            <label>Lớp</label>
                            <select class=" col-md-12 form-control" name="lop">
                                @foreach($lops as $lop)
                                    @if($sinhvien->lop_id= $lop->id)
                                        <option value="{{$lop->id}}">{{$lop->name}}</option>
                                    @else
                                    
                                        <option value="{{$lop->id}}">{{$lop->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ml-3">
                            <button class="btn btn-primary " type="submit">Thêm </button>
                        </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection


