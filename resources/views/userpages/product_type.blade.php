@extends('layouts.userpage')

@section('content')

    <br>

    <div class="container">
        <p id="" style="font-size: 25px; color: white; text-align:center;">สินค้าและบริการ
        </p>
          <div class="col-lg-12 lineup">
              <div class="d-flex justify-content-around bd-highlight">
                   <div class="row">
                    @if(count($types)>0)
                        @foreach($types as $type)
                            <div class="col-lg-4 text-center productpic">
                                <div class="bd-highlight productpic">
                                    @if($type->image_name!=null)
                                        <img src="/images/{{$type->image_name}}" id="pic1_pd1" alt="">
                                    @else
                                        <img src="/bigwood_images/images.jpg" id="pic1_pd1" alt="">
                                    @endif
                                    <a href="{{ url('product') }}/{{$type->id}}" class="producttext" id="title_pd1">{{$type->nameTH}}</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1 class="text-center"> No type found </h1>
                    @endif
                   </div>
              </div>
         </div>    
    </div>
    <br>
    <br>

    <div class="container">
        <div class="importservice">
        <i class="fa-2x fas fa-plane" style="font-size:20px;"></i> &emsp;<span id="importcontent" style="font-size: 18px;">{{$ship1->value}}
        <br> {{$ship2->value}} </span>
        </div>
    </div>

@endsection


