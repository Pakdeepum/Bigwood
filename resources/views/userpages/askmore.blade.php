@extends('layouts.userpage')

@section('content')

    <br>
    <br>

    <div class="container">
        <p style="font-size: 25px; color:white;">สอบถามเพิ่มเติม/ขอใบเสนอราคา
        </p>            
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
                                <p style="color: white;">ชื่อ-นามสกุล</p>
                                <input type="name " class="form-control " id="name" name="name" aria-describedby="namelHelp " placeholder="Name " required>
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputName " hidden></label>
                                <p style="color: white;">เบอร์ติดต่อ</p>
                                <input type="text " class="form-control " maxlength="12 " id="phone" name="phone" aria-describedby="namelHelp " placeholder="Tel. " required>
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputEmail1 " hidden></label>
                                <p style="color: white;">อีเมล์</p>
                                <input type="text " class="form-control " id="email" name="email" aria-describedby="emailHelp " placeholder="Email " required>
                                <!-- <small id="emailHelp " class="form-text text-muted "></small> -->
                            </div>
                            <div class="form-group ">
                                <p style="color: white;">ระบบสเปคที่ต้องการ เช่น ประเภทไม้/ขนาด/จำนวน/หมายเหตุ อื่นๆ เพิ่มเติม</p>
                                <textarea class="form-control " id="detail" name="detail" rows="3 " placeholder="Message " required></textarea>
                            </div>
                            <br>
                            <button type="submit " class="btn btn-primary col-md-3 " style="background-color: goldenrod; color: black; border-radius: 20px;">
                                    ส่ง</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection