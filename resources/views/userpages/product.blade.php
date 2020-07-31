@extends('layouts.userpage')

@section('content')

     <br>
     <br>

    <div class="container">
        <i class="fa-2x fas fa-caret-right" id="subproduct1" style="color: white;">
            @if(Session::get('language')=='eng')
                {{$types->nameEN}}
            @else
                {{$types->nameTH}}
            @endif
        </i>
        @if(Session::get('language')=='eng')
            <p id="madeto" style="color: white; padding-left: 20px;">Made to order, if interested, can specify the specification to receive a quotation.
        @else
            <p id="madeto" style="color: white; padding-left: 20px;">รับทำตามออเดอร์หากสนใจสามารถระบุสเป็คเพื่อรับใบเสนอราคา
        @endif
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
                                    @if(Session::get('language')=='eng')
                                        <a href="#" class="producttext" id="title_pd1">{{$product->nameEN}}</a>
                                    @else
                                        <a href="#" class="producttext" id="title_pd1">{{$product->nameTH}}</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1 class="text-center"> No product found </h1>
                    @endif
                    <div class="col-sm-12 text-center">
                        <br>
                            @if(Session::get('language')=='eng')
                                <a class="button2 btn btn-primary col-lg-4" style=" background-color: goldenrod; color: black; border-radius: 20px; max-width:200px;" href="{{ url('askmore') }}">
                                    Quatation request
                                </a>
                            @else
                                <a class="button2 btn btn-primary col-lg-4" style=" background-color: goldenrod; color: black; border-radius: 20px; max-width:200px;" href="{{ url('askmore') }}">
                                    ขอใบเสนอราคา
                                </a>
                            @endif
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <br>
    <br>

@endsection