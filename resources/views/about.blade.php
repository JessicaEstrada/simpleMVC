@extends('index')

@section('content')
@foreach ($about_info as $list)
<section class="about-section text-center">
    <div class="container">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"> <img src="{{$list ['img']}}" width="760px" height="480px" alt="">
                </div>
                <h2>{{$list ['flavor']}}</h2>
                <p>
                    {{$list ['desc']}}
                </p>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection