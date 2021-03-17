@extends('master')

@section('title')
    Them moi thanh pho
@endsection

@section('content')
    <div class="container">
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới tỉnh thành</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('cities.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên tỉnh thành</label>
                        <input type="text" class="form-control" name="name"  placeholder="Nhập tỉnh thành....." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection

