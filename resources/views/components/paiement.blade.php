<div>
    @props(['price','back'])
    <script amount="{{$price}}" callback="http://127.0.0.1:8000/{{$back}}" position="center" theme="#0095ff" sandbox="true" key="7d5309b01e5911ed995cd39f617b9df2" src="https://cdn.kkiapay.me/k.js">
    </script>
    <div class="">
        <span class="kkiapay-button my-btn bg-green pack-submit" style="cursor:pointer">Payer
            <i class="fa-solid fa-cart-shopping"></i>
        </span>
    </div>
</div>