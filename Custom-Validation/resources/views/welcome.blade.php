<div class="content">
    <div  style="font-size: 60px; color: #A00000" class="title m-b-md">
        Laravel Cusstom Validation
    </div>
    <div style="font-size: 30px" class="form-custom-validation">
        <form action="{{ route('form.submit') }}" method="GET">
            <label for="name">Name:</label>
            <input style="font-size: 30px" id="name" name="name" type="text" placeholder="Enter the full name...">
            <br>
            <label for="age">Age:</label>
            <input style="font-size: 30px" id="age" name="age" type="text" placeholder="Enter the age...">
            <br>
            <button style="font-size: 30px" type="submit">Submit</button>
<div class="error-message">
    @if($errors->any())
        @foreach($errors->all() as $nameError )
        <p style="color: red">{{$nameError}}</p>
        @endforeach
    @endif
        <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>

</div>
        </form>

    </div>

</div>
