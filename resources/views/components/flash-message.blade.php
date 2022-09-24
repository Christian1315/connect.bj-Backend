<div class="row mb-5 fixed-top" x-data="{open:true}" x-init="setTimeout(()=>open=false,4000)">
    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6" x-show="open">
                <!-- <i class="fa-solid fa-circle-xmark float-end bg-green"></i> -->
                    <!-- SUCCESS MESSAGE -->
                    @if(session()->has('success'))
                    <div  class="bg-success py-3 text-center text-white rounded"> {{session()->get('success')}} </div>
                    @endif
                    <!-- ERROR MESSAGE -->
                    @if(session()->has('error'))
                    <div class="bg-danger py-3 text-center text-white rounded"> {{session()->get('error')}} </div>
                    @endif
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</div>