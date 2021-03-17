@extends('master')


@section('title')
    Danh sach khach hang
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
<div class="col-12">
    <div class="row">
        <div class="col-12">
            <h1 style="font-size: 50px">Danh Sách Khách Hàng</h1>
        </div>
        <table style="font-size: 20px" class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Ngày Sinh</th>
                <th scope="col">Email</th>
                <th scope="col">Tỉnh thành</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($customers_page) == 0)
                <tr>
                    <td colspan="7" class="text-center">Không có dữ liệu</td>
                </tr>
            @else
                @foreach($customers_page as $key => $customer)
                    <tr>
                        <th scope="row">{{$customers_page->firstItem() +$key }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->dob }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->city->name }}</td>
                        <td><a href="{{ route('customers.edit', $customer->id) }}">Sửa</a></td>
                        <td><a href="{{ route('customers.delete', $customer->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <div style="text-align: right !important; font-size:20px !important; "> {{$customers_page->appends(request()->query()) }}  </div>
        <a class="btn btn-primary" href="{{ route('customers.create') }}">Thêm mới</a>
        @if(Session::has('search_result'))
        <a class="btn btn-primary" href="{{ route('customers.list') }}">Quay lại</a>
            @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cityModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <form action="{{ route('customers.filterByCity') }}" method="get">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <!--Lọc theo khóa học -->
                        <div class="select-by-program">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label border-right">Lọc khách hàng theo tỉnh thành</label>
                                <div class="col-sm-7">
                                    <select class="custom-select w-100" name="city_id">
                                        <option value="">Chọn tỉnh thành</option>
                                        @foreach($cities as $city)
                                            @if(isset($cityFilter))
                                                @if($city->id == $cityFilter->id)
                                                    <option value="{{$city->id}}" selected >{{ $city->name }}</option>
                                                @else
                                                    <option value="{{$city->id}}">{{ $city->name }}</option>
                                                @endif
                                            @else
                                                <option value="{{$city->id}}">{{ $city->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- </form> -->
                        </div>
                        <!--End-->

                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="submitAjax" class="btn btn-primary" >Chọn</button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Hủy</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

@endsection
