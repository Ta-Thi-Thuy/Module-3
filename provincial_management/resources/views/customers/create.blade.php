@extends('master')
@section('title')
    Them moi khach hang
@endsection
@section('content')
<div class="container">
<div class="col-12 col-md-12">
    <div  class="row">
        <div class="col-12">
            <h1  style="font-size: 50px">Thêm mới khách hàng</h1>
        </div>
        <div style="font-size: 30px" class="col-12">
            <form method="post" action="{{ route('customers.store') }}">
                @csrf
                <div class="form-group">
                    <label>Tên khách hàng</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
                    @if ($errors->any())
                        {{ $errors->first('name') }}
                        @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    @if ($errors->any())
                        {{ $errors->first('email') }}
                    @endif
                </div>
                <div class="form-group">
                    <label>Ngày sinh</label>
                    <input type="date" class="form-control" name="dob" required>
                    @if ($errors->any())
                        {{ $errors->first('dob') }}
                    @endif
                </div>
                <div class="form-group">
                    <label>Tỉnh thành</label>
                    <select class="form-control" name="city_id">
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->any())
                        {{ $errors->first('city_id') }}
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
