@extends('layouts.userpage')

@section('content')

    <br>
    <br>

    <div class="container">
        <div class="row top-col">
            <div class="col">
                <div class="row">
                    <div class="col-lg-6 left-col">
                        <div class="form-group">
                            <br><br>
                            @if(Session::get('language')=='eng')
                                <h3 id="mainname" style="color: goldenrod;"> Contact us </h3>
                            @else
                                <h3 id="mainname" style="color: goldenrod;"> ช่องทางการติดต่อ </h3>
                            @endif
                            <br>
                            <div style="display: flex;margin-bottom: 15px;">
                                <i class="fa-2x fas fa-map-marked-alt" style="text-align: center;
                                align-self: center; color: goldenrod;"></i>&emsp;<span class="addresscontent" id="address">{{$contacts->address}}</span>
                            </div>
                            <br>
                            <div style="display: flex;margin-bottom: 15px;">
                                <i class="fa-2x fas fa-mobile-alt" style="text-align: center;
                                align-self: center; color: goldenrod;"></i>&emsp; <span class="addresscontent" id="tel_company">{{$contacts->phone}}</span>
                            </div>
                            <br>
                            <div style="display: flex;margin-bottom: 15px;">
                                <i class="fa-2x fab fa-line" style="text-align: center;
                                 align-self: center; color: goldenrod;"></i> &emsp; <span class="addresscontent" id="line_company">{{$contacts->line}}</span>
                            </div>  
                            <br>
                            <div style="display: flex;margin-bottom: 15px;">
                                <i class="fa-2x fas fa-envelope" style="text-align: center;
                                  align-self: center; color: goldenrod;"></i> &emsp; <span class="addresscontent" id="email_company">{{$contacts->email}}</span>
                            </div>
                            <br>
                        </div>
                    </div>

                     <div class="col-lg-6 right-col">
                         <br>
                          <br>
                            <div class="form-group">
                                <div class="contactpic">
                                    <div id="contact-doublepic">    
                                    </div> 
                                    <div>
                                        @if($contact_pics->image_name!=null)
                                            <img id="contactpic" class="imgcontact" src="images/{{ $contact_pics->image_name }}" alt="">
                                        @else
                                            <img id="contactpic" class="imgcontact" src="/bigwood_images/images.jpg" alt="">
                                        @endif
                                    </div>     
                                </div>
                            </div>
                         <br> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=%E0%B8%AB%E0%B8%A1%E0%B8%B9%E0%B9%88%E0%B8%97%E0%B8%B5%E0%B9%88%205%20138/1%20%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5%20%E0%B8%A8%E0%B8%A3%E0%B8%B5%E0%B8%AA%E0%B8%B8%E0%B8%99%E0%B8%97%E0%B8%A3%20%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B8%96%E0%B8%A5%E0%B8%B2%E0%B8%87%20%E0%B8%A0%E0%B8%B9%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%95%2083110+(Big%20Wood%20Phuket%20&amp;%20Gallery)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="http://www.gps.ie/">
    </a>
    </div>

@endsection