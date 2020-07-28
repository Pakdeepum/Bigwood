@extends('layouts.userpage')

@section('content')

     <br>
     <br>

    <div class="container">
        <i class="fa-2x fas fa-caret-right" id="subproduct1" style="color: white;">{{$types->nameTH}}
        </i>
        <p id="madeto" style="color: white; padding-left: 20px;">รับทำตามออเดอร์หากสนใจสามารถระบุสเป็คเพื่อรับใบเสนอราคา
        </p>
    </div>
    <br>

    <div class="container">
        <div class="col-lg-12 lineup">
            <div class="d-flex justify-content-around bd-highlight">
                <div class="row">
                    @if(count($products)>0)
                        @foreach($products as $product)
                            <div class="col-lg-4 text-center productpic">
                                <div class="bd-highlight productpic">
                                    @if($product->image_name!=null)
                                        <img src="/images/{{$product->image_name}}" id="pic1_pd1" alt="">
                                    @else
                                        <img src="/images/images.jpg" id="pic1_pd1" alt="">
                                    @endif
                                    <a href="#" class="producttext" id="title_pd1">{{$product->nameTH}}</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1 class="text-center"> No product found </h1>
                    @endif
                    <div class="col-sm-12 text-center">
                        <br>
                            <button type="button" onclick="" class="button2 btn btn-primary col-lg-4" 
                            style=" background-color: goldenrod; color: black; border-radius: 20px; max-width:200px;">
                                ขอใบเสนอราคา
                            </button>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <br>
    <br>

@endsection