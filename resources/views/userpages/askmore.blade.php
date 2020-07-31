@extends('layouts.userpage')

@section('content')

    <br>
    <br>

    <div class="container">
        @if(Session::get('language')=='eng')
            <p style="font-size: 25px; color:white;">More infomation/Request quotation</p>  
        @else
            <p style="font-size: 25px; color:white;">สอบถามเพิ่มเติม/ขอใบเสนอราคา</p>  
        @endif          
    </div>

    <div class="container">
        <div class="row top-col">
            <div class="col">
                <div class="row">
                    <div class="col-lg-7 right-col">
                        <br>
                        <br>
                            <div class="form-group">
                                <div class="contactpic">
                                     <div id="contact-doublepic">
                                     </div>
                                     <div>
                                        @if($quopics->image_name!=null)
                                            <img id="contactpic" class="imgcontact" src="images/{{ $quopics->image_name }}" alt="">
                                        @else
                                            <img id="contactpic" class="imgcontact" src="/bigwood_images/images.jpg" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br> 
                    </div>

                    <div class="col-lg-5 right-col">
                        @if ($message = Session::get('success_mas'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form method="post" action="massage_store" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group ">
                                <label for="exampleInputName "></label>
                                @if(Session::get('language')=='eng')
                                    <p style="color: white;">Name-Surname</p>
                                @else
                                    <p style="color: white;">ชื่อ-นามสกุล</p>
                                @endif
                                <input type="name " class="form-control " id="name" name="name" aria-describedby="namelHelp " placeholder="Name " required>
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputName " hidden></label>
                                @if(Session::get('language')=='eng')
                                    <p style="color: white;">PhoneNo.</p>
                                @else
                                    <p style="color: white;">เบอร์ติดต่อ</p>
                                @endif
                                <input type="text " class="form-control " maxlength="12 " id="phone" name="phone" aria-describedby="namelHelp " placeholder="Tel. " required>
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputEmail1 " hidden></label>
                                @if(Session::get('language')=='eng')
                                    <p style="color: white;">Email</p>
                                @else
                                    <p style="color: white;">อีเมล์</p>
                                @endif
                                <input type="text " class="form-control " id="email" name="email" aria-describedby="emailHelp " placeholder="Email " required>
                                <!-- <small id="emailHelp " class="form-text text-muted "></small> -->
                            </div>
                            <div class="form-group ">
                                @if(Session::get('language')=='eng')
                                    <p style="color: white;">Specify the desired specification Ex : Wood type/Size/Amount/etc.</p>
                                @else
                                <p style="color: white;">ระบุสเปคที่ต้องการ เช่น ประเภทไม้/ขนาด/จำนวน/หมายเหตุ อื่นๆ เพิ่มเติม</p>
                                @endif
                                <textarea class="form-control " id="detail" name="detail" rows="3 " placeholder="Message " required></textarea>
                            </div>
                            <br>
                            @if(Session::get('language')=='eng')
                                <button type="submit " class="btn btn-primary col-md-3 " style="background-color: goldenrod; color: black; border-radius: 20px;">
                                    Submit</button><br>
                            @else
                                <button type="submit " class="btn btn-primary col-md-3 " style="background-color: goldenrod; color: black; border-radius: 20px;">
                                    ส่ง</button><br>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection