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
                    <li class="breadcrumb-item active"><a href="#">CONTACT</a></li>
                    <li class="breadcrumb-item ">PAGE</li>
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
            <h4 class="mb-3">การจัดการข้อมูลหน้า Contact</h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="col-12" id="home-main-detail">
                    <div class="row mt-3 mb-3">
                        <div class="col-lg-6">
                            <!-- contact -->
                            <div class="card">
                                <div class="card-header bg-darkgreen">
                                    <h3 class="card-title text-white">ช่องทางติดต่อ</h3>
                                </div>
                                <form method="post" action="contact_admin_edit/{{1}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        @if ($message = Session::get('success_c'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                            </div>
                                        @endif
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">Address</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="200" class="form-control" name="address"
                                                        id="address" cols="30" rows="1" placeholder="Address" 
                                                        value={{$contacts->address}} required>{{$contacts->address}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">Phone number</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="20" class="form-control" name="phone"
                                                        id="phone" cols="30" rows="1" placeholder="Phone number" 
                                                        value={{$contacts->phone}} required>{{$contacts->phone}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">Line</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="100" class="form-control" name="line"
                                                        id="line" cols="30" rows="1" placeholder="Line" 
                                                        value={{$contacts->line}} required>{{$contacts->line}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="100" class="form-control" name="email"
                                                        id="email" cols="30" rows="1" placeholder="Email" 
                                                        value={{$contacts->email}} required>{{$contacts->email}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-right">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- quapic -->
                            <div class="card">
                                <form method="post" action="contact_admin_edit_pic/{{1}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header bg-darkgreen">
                                        <h3 class="card-title text-white">รูปภาพหน้า Contact</h3>
                                    </div>
                                    @if ($message = Session::get('success_cp'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <input type="file" id="image_name" name="image_name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    @if($contact_pics->image_name!=null)
                                                        <img style="max-width:100%;"  src="images/{{ $contact_pics->image_name }}">
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
                                <div class="col-lg-12">
                                    <!-- <iframe src="http://www.papluscon.com" height="800" width="500">
                                    </iframe> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-eye" aria-hidden="true"></i> Preview
            </button>
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