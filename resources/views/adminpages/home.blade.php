@extends('layouts.adminpage')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a href="#">HOME</a></li>
                    <li class="breadcrumb-item ">Home content</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <!-- content-header -->
    <div class="card">
        <div class="card-header text-center">
            <br>
            <h4 class="mb-3">การจัดการข้อมูลหน้า Home</h4>
        </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-12" id="home-main-detail">
                        <div class="row mt-3 mb-3">
                            <div class="col-lg-6">
                                <!-- about us -->
                                <div class="card">
                                <form method="post" action="home_admin_edit_aboutus/{{1}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header bg-darkgreen">
                                        <h3 class="card-title text-white">เกี่ยวกับเรา</h3>
                                    </div>
                                    @if ($message = Session::get('success_ab'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">เนื้อหาภาษาไทย</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="textTH"
                                                        id="textTH" cols="30" rows="5" placeholder="Thai content" 
                                                        value={{$aboutus->textTH}} required>{{$aboutus->textTH}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">เนื้อหาภาษาอังกฤษ</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="textEN"
                                                        id="textEN" cols="30" rows="5" placeholder="English content" 
                                                        value={{$aboutus->textEN}} required>{{$aboutus->textEN}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">ภาพประกอบ</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <input type="file" id="image_name" name="image_name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    @if($aboutus->image_name!=null)
                                                        <img style="max-width:100%;" src="images/{{ $aboutus->image_name }}">
                                                    @else
                                                        <img style="max-width:100%;" src="/bigwood_images/images.jpg">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <!-- content2 -->
                                <div class="card">
                                <form method="post" action="home_admin_edit_aboutus/{{2}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header bg-darkgreen">
                                        <h3 class="card-title text-white">เนื้อหา2</h3>
                                    </div>
                                    @if ($message = Session::get('success_c2'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">เนื้อหาภาษาไทย</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="textTH"
                                                        id="textTH" cols="30" rows="5" placeholder="Thai content" 
                                                        value={{$content2->textTH}} required>{{$content2->textTH}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">เนื้อหาภาษาอังกฤษ</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="textEN"
                                                        id="textEN" cols="30" rows="5" placeholder="English content" 
                                                        value={{$content2->textEN}} required>{{$content2->textEN}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">ภาพประกอบ
                                                        </label>
                                                    <input type="hidden" id="contentPIC" name="contentPIC">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <input type="file" id="image_name" name="image_name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    @if($content2->image_name!=null)
                                                        <img style="max-width:100%;"  src="images/{{ $content2->image_name }}">
                                                    @else
                                                        <img style="max-width:100%;" src="/bigwood_images/images.jpg">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <!-- content3 -->
                                <div class="card">
                                <form method="post" action="home_admin_edit_aboutus/{{3}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header bg-darkgreen">
                                        <h3 class="card-title text-white">เนื้อหา3</h3>
                                    </div>
                                    @if ($message = Session::get('success_c2'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">เนื้อหาภาษาไทย</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="textTH"
                                                        id="textTH" cols="30" rows="5" placeholder="Thai content" 
                                                        value={{$content3->textTH}} required>{{$content3->textTH}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">เนื้อหาภาษาอังกฤษ</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="textEN"
                                                        id="textEN" cols="30" rows="5" placeholder="English content" 
                                                        value={{$content3->textEN}} required>{{$content3->textEN}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">ภาพประกอบ
                                                        </label>
                                                    <input type="hidden" id="contentPIC" name="contentPIC">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <input type="file" id="image_name" name="image_name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    @if($content3->image_name!=null)
                                                        <img style="max-width:100%;"  src="images/{{ $content3->image_name }}">
                                                    @else
                                                        <img style="max-width:100%;" src="/bigwood_images/images.jpg">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <!-- content4 -->
                                <div class="card">
                                <form method="post" action="home_admin_edit_aboutus/{{4}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header bg-darkgreen">
                                        <h3 class="card-title text-white">เนื้อหา4</h3>
                                    </div>
                                    @if ($message = Session::get('success_c2'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">เนื้อหาภาษาไทย</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="textTH"
                                                        id="textTH" cols="30" rows="5" placeholder="Thai content" 
                                                        value={{$content4->textTH}} required>{{$content4->textTH}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">เนื้อหาภาษาอังกฤษ</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="textEN"
                                                        id="textEN" cols="30" rows="5" placeholder="English content" 
                                                        value={{$content4->textEN}} required>{{$content4->textEN}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">ภาพประกอบ
                                                        </label>
                                                    <input type="hidden" id="contentPIC" name="contentPIC">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <input type="file" id="image_name" name="image_name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    @if($content4->image_name!=null)
                                                        <img style="max-width:100%;"  src="images/{{ $content4->image_name }}">
                                                    @else
                                                        <img style="max-width:100%;" src="/bigwood_images/images.jpg">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <!-- homelink1 -->
                                <div class="card">
                                    <form method="post" action="home_admin_edit_homelink/{{1}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header bg-darkgreen">
                                            <h3 class="card-title text-white">link เพจ1</h3>
                                        </div>
                                        @if ($message = Session::get('success_h1'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputEmail1">ชื่อเพจ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <textarea maxlength="1000" class="form-control" name="name"
                                                        id="name" cols="30" rows="5" placeholder="Page name" 
                                                        value={{$link1->name}} required>{{$link1->name}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputPassword1 float-left">link เพจ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <textarea maxlength="1000" class="form-control" name="link"
                                                        id="link" cols="30" rows="5" placeholder="Page link" 
                                                        value={{$link1->link}} required>{{$link1->link}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputPassword1 float-left">ภาพประกอบ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <div class="col-lg-12 float-left">
                                                            <input type="file" id="image_name" name="image_name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        @if($link1->image_name!=null)
                                                            <img style="max-width:100%;"  src="images/{{ $link1->image_name }}">
                                                        @else
                                                            <img style="max-width:100%;" src="/bigwood_images/images.jpg">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- homelink2 -->
                                <div class="card">
                                    <form method="post" action="home_admin_edit_homelink/{{2}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header bg-darkgreen">
                                            <h3 class="card-title text-white">link เพจ2</h3>
                                        </div>
                                        @if ($message = Session::get('success_h2'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputEmail1">ชื่อเพจ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <textarea maxlength="1000" class="form-control" name="name"
                                                        id="name" cols="30" rows="5" placeholder="Page name" 
                                                        value={{$link2->name}} required>{{$link2->name}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputPassword1 float-left">link เพจ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <textarea maxlength="1000" class="form-control" name="link"
                                                        id="link" cols="30" rows="5" placeholder="Page link" 
                                                        value={{$link2->link}} required>{{$link2->link}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputPassword1 float-left">ภาพประกอบ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <div class="col-lg-12 float-left">
                                                            <input type="file" id="image_name" name="image_name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        @if($link2->image_name!=null)
                                                            <img style="max-width:100%;"  src="images/{{ $link2->image_name }}">
                                                        @else
                                                            <img style="max-width:100%;" src="/bigwood_images/images.jpg" id="index-cover1">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- homelink3 -->
                                <div class="card">
                                    <form method="post" action="home_admin_edit_homelink/{{3}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header bg-darkgreen">
                                            <h3 class="card-title text-white">link เพจ3</h3>
                                        </div>
                                        @if ($message = Session::get('success_h3'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputEmail1">ชื่อเพจ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <textarea maxlength="1000" class="form-control" name="name"
                                                        id="name" cols="30" rows="5" placeholder="Page name" 
                                                        value={{$link3->name}} required>{{$link3->name}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputPassword1 float-left">link เพจ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <textarea maxlength="1000" class="form-control" name="link"
                                                        id="link" cols="30" rows="5" placeholder="Page link" 
                                                        value={{$link3->link}} required>{{$link3->link}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputPassword1 float-left">ภาพประกอบ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <div class="col-lg-12 float-left">
                                                            <input type="file" id="image_name" name="image_name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        @if($link3->image_name!=null)
                                                            <img style="max-width:100%;" src="images/{{ $link3->image_name }}">
                                                        @else
                                                            <img style="max-width:100%;" src="/bigwood_images/images.jpg">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- homelink4 -->
                                <div class="card">
                                    <form method="post" action="home_admin_edit_homelink/{{4}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header bg-darkgreen">
                                            <h3 class="card-title text-white">link เพจ4</h3>
                                        </div>
                                        @if ($message = Session::get('success_h4'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputEmail1">ชื่อเพจ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <textarea maxlength="1000" class="form-control" name="name"
                                                        id="name" cols="30" rows="5" placeholder="Page name" 
                                                        value={{$link4->name}} required>{{$link4->name}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputPassword1 float-left">link เพจ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <textarea maxlength="1000" class="form-control" name="link"
                                                        id="link" cols="30" rows="5" placeholder="Page link" 
                                                        value={{$link4->link}} required>{{$link4->link}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <label for="exampleInputPassword1 float-left">ภาพประกอบ</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <div class="col-lg-12 float-left">
                                                            <input type="file" id="image_name" name="image_name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        @if($link4->image_name!=null)
                                                            <img style="max-width:100%;"  src="images/{{ $link4->image_name }}">
                                                        @else
                                                            <img style="max-width:100%;" src="/bigwood_images/images.jpg">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mt-2">
                                                <div class="row">
                                                    <div class="col-lg-12 float-left">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- preview -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label id="last_update"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block text-center">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Preview</label>
                                    </div>
                                </div>
                                <div class="row">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="trigger button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-eye" aria-hidden="true"></i> Preview
                </button>
            </div>
        </form>
    </div>

    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe class="embed-responsive-item" src="http://www.papluscon.com"></iframe> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

</section>
    
@endsection