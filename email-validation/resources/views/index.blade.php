<div  class = "main-content">
    <h1>Ung dung kiem tra email hop le </h1>
    <form method="post" action="{{route('checkEmail')}}">
        @csrf
        <label for="email-input">Email:</label>
        <input id="email-input" type="text" placeholder="Nhap email can kiem tra" name="email">
        <input type="submit" value="Check">
    </form>

    @if(isset($isEmail))
        Ket qua: {{ $isEmail ? 'Dung dinh dang Email': 'Sai dinh dang Email'}}
    @endif
</div>
