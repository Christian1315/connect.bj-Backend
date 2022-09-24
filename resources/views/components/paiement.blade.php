<div>
    @props(['price','back'])

    <script amount="{{$price}}" callback="http://127.0.0.1:8000/{{$back}}" position="center" theme="#0095ff" sandbox="true" key="42956ef03c1611edafa2d398c4589a54" src="https://cdn.kkiapay.me/k.js">
    </script>
    <button class="mt-2 kkiapay-button my-btn bg-green pack-submit">Payer
        <i class="fa-solid fa-cart-shopping"></i>
    </button>
</div>