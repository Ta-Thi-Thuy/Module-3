<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới sản phẩm </h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('edit',$product->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Ten sản phẩm </label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label>Số lượng </label>
                    <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}"  placeholder="Enter quantity">
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}"  placeholder="Enter price">
                </div>

                <div class="form-group">
                    <label for="inputName">Tên ảnh </label>
                    <input type="text"
                           id="inputName"
                           name="inputName" class="form-control">
                    <input type="file"
                           id="inputFile"
                           name="inputFile" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Chinh sua</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
