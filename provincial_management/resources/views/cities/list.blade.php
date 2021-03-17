@extends('master')

@section('title')
    Danh sach thanh pho
@endsection

@section('content')

    <style>
        th{
            color: black !important;
            font-size: 25px !important;
            font-style: italic !important;
        }
        td{
            color: black !important;
            font-size: 20px !important;
        }

    </style>
<div class="container">
<div  class="col-12">
    <div class="row">
        <div class="col-12">
            <h1>Danh Sách Thành Phố</h1>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên tỉnh thành</th>
                <th scope="col">Số khách hàng</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($cities_page) == 0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
            @else
            @foreach($cities_page as $key => $citie)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $citie->name }}</td>
                <td>{{ count($citie->customers) }}</td>
                <td><a href="{{route('cities.edit',$citie->id)}}">Sửa</a></td>
                <td><a href="{{route('cities.delete',$citie->id)}}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
        <div style="text-align: right !important; font-size:20px !important; "> {{$cities_page->links()}} </div>

        <a class="btn btn-primary" href="{{route('cities.create')}}">Thêm mới</a>
{{--        @if(Session::has('search_result'))--}}
{{--            <a class="btn btn-primary" href="{{ route('cities.list') }}">Quay lại</a>--}}
{{--        @endif--}}
    </div>
</div>

</div>
@endsection
