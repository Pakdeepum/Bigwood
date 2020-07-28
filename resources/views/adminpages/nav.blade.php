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
                    <li class="breadcrumb-item ">Navbar & Footer</li>
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
                                <div class="card-header bg-darkgreen">
                                    <h3 class="card-title text-white">เกี่ยวกับเรา</h3>
                                </div>
                                @php
                                    $count = 1;
                                @endphp
                                <div class="card-body">
                                    @if ($message = Session::get('success_product'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                        
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @foreach ($images as $image)
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">ภาพประกอบ {{ $count }}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <form method="post" action="nav_admin_edit_slide/{{$image->id}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                        
                                                        <div class="col-md-10">
                                                            <input type="file" name="image" class="form-control" required>
                                                        </div>
                                        
                                                        <div class="col-md-2">
                                                            <button type="submit" class="btn btn-success">Upload</button>
                                                        </div>
                                        
                                                    </div>
                                                </form>
                                                <div class="form mt-2">
                                                    <div class="row">
                                                        <div class="col-lg-12 float-left">
                                                            @if($image->image_name!=null)
                                                                <img style="max-width:100%;"  src="images/{{ $image->image_name }}">
                                                            @else
                                                                <img style="max-width:100%;" src="/bigwood_images/images.jpg">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $count += 1
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                            <!-- footer -->
                            <div class="card">
                                <div class="card-header bg-darkgreen">
                                    <h3 class="card-title text-white">ช่องทางติดต่อ</h3>
                                </div>
                                <form method="post" action="nav_admin_edit_footer" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        @if ($message = Session::get('success_footer'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                            </div>
                                        @endif
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">Phone number1</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="20" class="form-control" name="phonenum1"
                                                        id="phonenum1" cols="30" rows="1" placeholder="Phone number" 
                                                        value={{$phonenum1->value}} required>{{$phonenum1->value}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">Phone number2</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="20" class="form-control" name="phonenum2"
                                                        id="phonenum2" cols="30" rows="1" placeholder="Phone number" 
                                                        value={{$phonenum2->value}} required>{{$phonenum2->value}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputEmail1">Phone number3</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="20" class="form-control" name="phonenum3"
                                                        id="phonenum3" cols="30" rows="1" placeholder="Phone number" 
                                                        value={{$phonenum3->value}} required>{{$phonenum3->value}}</textarea>
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
                                                        value={{$email->value}} required>{{$email->value}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">Contact</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="contact"
                                                        id="contact" cols="30" rows="1" placeholder="Contact" 
                                                        value={{$contact->value}} required>{{$contact->value}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">Contact link</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="contact_link"
                                                        id="contact_link" cols="1" rows="1" placeholder="Contact link" 
                                                        value={{$contact_link->value}} required>{{$contact_link->value}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <label for="exampleInputPassword1 float-left">Shipping</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="ship1"
                                                        id="ship1" cols="3" rows="3" placeholder="Shipping line1" 
                                                        value={{$ship1->value}} required>{{$ship1->value}}</textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12 float-left">
                                                    <textarea maxlength="1000" class="form-control" name="ship2"
                                                        id="ship2" cols="3" rows="3" placeholder="Shipping line2" 
                                                        value={{$ship2->value}} required>{{$ship2->value}}</textarea>
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