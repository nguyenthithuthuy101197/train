@extends('layouts.flat')
@section('content')
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

<div class="container">
        <h1 class="text-center">DANH SÁCH TẤT CẢ CÁC LỚP</h1>
        <a role="button" href="lops/create" class="float-left btn btn-outline-info mb-3 float-right">Thêm Lớp</a>
        <form class="form-inline" action="/lops/search" method="GET">
            <div class="form-group mx-sm-3 mb-2">
                <label for="" class="sr-only">Put name here</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập từ cần tìm">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="search">Tìm kiếm</button>
        </form>
<table class="table table-striped bg-white">
    
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Lớp</th>
        <th scope="col">Thời Gian</th>
         <th scope="col">Thao Tác</th>
    </tr>
    @foreach($lops as $lop)
    <tr>
        <td>{{$lop->id}}</td>
        <td><a href="/lops/{{$lop->id}}">{{$lop->name}}</a></td>
        <td>{{$lop->created_at}}</td>
        <td>
            <a role="button" href="/lops/{{$lop->id}}/edit" class="float-left btn btn-primary mr-3 btn-sm"><i class="fas fa-pencil-alt"></i></a>
            <form action="/lops/{{$lop->id}}" method="POST" class="form-group m-0">
                @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    {{--  <input type="submit" value="xóa">  --}}
                    <button   name="delete" class="btn btn-danger btn-sm"  type="submit"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>
 @endforeach

</table>
</div>
@endsection


