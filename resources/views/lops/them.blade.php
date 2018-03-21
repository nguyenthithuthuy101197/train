@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align: center;">
                 <div class="card-body">
                            <h1 class="text-center">THÊM LỚP VÀO BẢNG</h1>
                            <form action="/lops" method="POST" class="form-group">
            
                 <form action="/lops" method="POST" class="form-group">
                    @csrf
                    {{--  <div class="form-group">
                        <label>Lớp</label>
                        <input type="text" name="name" value="">
                    </div>  --}}
                    <div class="form-group">
                        <label>Lớp</label>
                        <input type="text" class="form-control" name="name"  placeholder="Nhập lớp">
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 offset-md-4">
                            <button class="btn btn-primary" type="submit">Thêm </button>
                        </div>
                    </div>
                </form> 
                    
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
