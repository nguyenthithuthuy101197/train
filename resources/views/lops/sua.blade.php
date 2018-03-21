
@extends('layouts.flat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 my-3">
            <div class="card">
                
                <div class="card-body">
                    <h1 class="text-center">TẤT CẢ CÁC LỚP TRONG BẢNG</h1>
                    <form action="/lops/{{$lop->id}}" method="POST" class="form-group">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                        <div class="form-group ml-3">
                          <label>Tên Lớp</label>
                          <input type="text" class="col-md-12 form-control" name="name" value="{{$lop->name}}"  placeholder="Nhập tên">
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


