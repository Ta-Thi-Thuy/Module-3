<div  class="main-content">
    <h1>
        Ứng dụng xem giờ hiệ tại của các thành phố trên Thế Giới
    </h1>
    <label for="select-city"></label>
    <select id="select-city">
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Havana, Cuba</option>
        <option value="Asia-Hong_Kong">Hong Kong</option>
        <option value="Asia-Ho_Chi_Minh">Ho Chi Minh, Viet Nam</option>
    </select>
</div>

<script>
    document.getElementById("select-city").onchange = function (){
        ChooseCity()
    };
    function ChooseCity(){
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
