<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới sản phẩm </h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('add')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Ten sản phẩm </label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label>Số lượng </label>
                    <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price" placeholder="Enter price">
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
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
