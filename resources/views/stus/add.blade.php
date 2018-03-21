@extends('layouts.flat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 my-3">
            <div class="card">
                
                <div class="card-body">
                    <h1 class="text-center">THÊM SINH VIÊN VÀO BẢNG</h1>
                    <form action="/sinhviens" method="POST" class="form-group">
                    @csrf
                        <div class="form-group ml-3">
                          <label>Tên</label>
                          <input type="text" class="col-md-12 form-control" name="name"  placeholder="Nhập tên">
                        </div>
                        <div class="form-group  ml-3">
                          <label >Tuổi</label>
                          <input type="text" class="col-md-12 form-control" name="age" placeholder="Nhập tuổi">
                        </div>
                        <div class="form-group ml-3">
                            <label>Lớp</label>
                            <select class=" col-md-12 form-control" name="lop">
                                <option value="">Chọn</option>
                                @foreach($lops as $lop)
                                    <option value="{{$lop->id}}">{{$lop->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group ml-3">
                            <button class="btn btn-primary " type="submit">Thêm </button>
                        </div>

                        {{-- bắt lỗi client--}}
                    @if($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- bắt lỗi client--}}

                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
