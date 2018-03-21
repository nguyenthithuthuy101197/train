@extends('layouts.flat')
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

@section('content')
<style>

</style>
<div class="container">

<table class="table table-striped bf-white my-3">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Thời Gian</th>
        
    </tr>
    @foreach($lops->sinhvien as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->created_at}}</td>
 </tr>
 @endforeach
</table>
</div>
@endsection


