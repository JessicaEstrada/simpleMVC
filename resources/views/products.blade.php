 @extends ('index')

 @section('content')
    <!-- Image Showcases-->
        <section class="showcase" id="products">
            @foreach ($product_info as $list)
                @if ($loop -> odd)
                <div class="container-fluid p-0"> 
                    <div class="row g-0">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img"> <img src="{{$list ['img']}}" width="760px" height="480px" alt="">
                        </div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>{{$list ['flavor']}}</h2>
                            <p class="lead mb-0">{{$list ['desc']}}</p>
                        </div>
                    </div>
                @else
                    <div class="row g-0">
                        <div class="col-lg-6 text-white showcase-img"><img src="{{$list ['img']}}" width="760px" height="480px" alt=""></div>
                        <div class="col-lg-6 my-auto showcase-text">
                            <h2>{{$list ['flavor']}}</h2>
                            <p class="lead mb-0">{{$list ['desc']}}</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </section>
@endsection