@extends('layouts.userpage')

@section('content')

<br>
<br>
<br>

    <div class="container content">
                    <div class="row">
                        <div class="col-lg-4" id="index-content1">
                            @if($aboutus->image_name!=null)
                                <img src="images/{{ $aboutus->image_name }}" id="img1" alt="" class="imgcontent1">
                            @else
                                <img src="/bigwood_images/images.jpg" id="img1" alt="" class="imgcontent1">
                            @endif
                        </div>
                            <div class="col-lg-8" id="index-content2">
                                <br>
                                <h5><b id="title_1" style="color: white;"> เกี่ยวกับเรา </b></h5>
                                <p id="text2" style="text-align: justify; color: white; font-size: 15px;">
                                    {{$aboutus->textTH}}
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container content2">
        <div class="row">
            <div class="col-lg-8">
                <br>
                <p id="text3" style="color: white; font-size: 15px; text-align: justify;"> 
                    {{$content2->textTH}}
                    <br>
                    <br>
                    <i class="fas fa-caret-right"></i>&emsp;{{$content3->textTH}}
                    <br>
                    <i class="fas fa-caret-right"></i>&emsp;{{$content4->textTH}}
                </p>
            </div>
                <div class="col-lg-4">
                    @if($content2->image_name!=null)
                        <img src="images/{{ $content2->image_name }}" id="img2" alt="" class="imgcontent2">
                    @else
                        <img src="bigwood_images/images.jpg" id="img2" alt="" class="imgcontent2">
                    @endif
                </div>
        </div>
    </div>
    <br>
    <br>

    <div class="container" id="index-content3">
        <P style="text-align:left; color: white; font-size: 30px;"> ผลงานของเรา 
        </P>
            <div class="lineup">
                    <div class="col-lg-12 lineup">
                        <div class="d-flex justify-content-around bd-highlight">
                            <div class="row">
                                <div class="col-lg-3 text-center productpic">
                                    <div class="bd-highlight productpic">
                                        @if($link1->image_name!=null)
                                            <img src="images/{{ $link1->image_name }}" id="pic1_pd1" alt="">
                                        @else
                                            <img src="bigwood_images/images.jpg" id="pic1_pd1" alt="">
                                        @endif
                                        <a href="{{ $link1->link }}" class="linkpagetext" id="title_pd1">{{ $link1->name }}</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center productpic">
                                    <div class="bd-highlight productpic">
                                        @if($link1->image_name!=null)
                                            <img src="images/{{ $link2->image_name }}" id="pic1_pd1" alt="">
                                        @else
                                            <img src="bigwood_images/images.jpg" id="pic2_pd2" alt="">
                                        @endif
                                        <a href="{{ $link2->link }}" class="linkpagetext" id="title_pd1">{{ $link2->name }}</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center productpic">
                                    <div class="bd-highlight productpic">
                                        @if($link1->image_name!=null)
                                            <img src="images/{{ $link3->image_name }}" id="pic1_pd1" alt="">
                                        @else
                                            <img src="bigwood_images/images.jpg" id="pic3_pd3" alt="">
                                        @endif
                                        <a href="{{ $link3->link }}" class="linkpagetext" id="title_pd1">{{ $link3->name }}</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center productpic">
                                    <div class="bd-highlight productpic">
                                        @if($link4->image_name!=null)
                                            <img src="images/{{ $link4->image_name }}" id="pic4_pd4" alt="">
                                        @else
                                            <img src="bigwood_images/images.jpg" id="pic1_pd1" alt="">
                                        @endif
                                        <a href="{{ $link4->link }}" class="linkpagetext" id="title_pd1">{{ $link4->name }}</a>
                                    </div>
                                </div>
                         </div>
                   </div>
              </div>
        </div>
    </div>
    <br>
    <br>
     
@endsection