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
                    <li class="breadcrumb-item active"><a href="#">PRODUCT & SERVICE</a></li>
                    <li class="breadcrumb-item ">TYPES OF PRODUCT</li>
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
    <div class="card">
        <div class="card-header text-center">
            <br>
            <h4 class="mb-3">การจัดการข้อมูลหน้า Product & Service</h4>
        </div>

        <div class="card-body">
            <div>
                <p class="text-right"><button class="trigger btn btn-primary text-light"> Add type </button></p>
            </div>
            <!--Add Modal-->
            <div class="modal" id="ajax-crud-modal">
                <div class="modal-content"><span class="btn-close">&times;</span>
                    <form method="post" action="product_type_admin_store" enctype="multipart/form-data">
                        <br>
                        <h3 class="text-center">Add type</h3>
                        <br>
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="titleid" class="col-sm-3 col-form-label">Name(TH)</label>
                            <div class="col-sm-9">
                                <textarea maxlength="200" class="form-control" name="nameTH"
                                    id="nameTH" cols="30" rows="2" placeholder="Name(TH)" 
                                    required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="publisherid" class="col-sm-3 col-form-label">Name(EN)</label>
                            <div class="col-sm-9">
                                <textarea maxlength="200" class="form-control" name="nameEN"
                                    id="nameEN" cols="30" rows="2" placeholder="Name(EN)" 
                                    required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="releasedateid" class="col-sm-3 col-form-label">Picture</label>
                            <div class="col-sm-9">
                                <input type="file" id="image_name" name="image_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if ($message = Session::get('success_type'))
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

            <table class="table" >
                <tr class="bg-darkgreen">
                    <th>
                        <p class="text-light text-center"> No </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> Picture </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> Product name(TH) </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> Product name(EN) </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> Action </p>
                    </th>
                </tr>

                @if(count($types)>0)
                @php
                    $count = 1; 
                @endphp
                    @foreach($types as $type)
                        <tr>
                            <td><p class="text-center">{{$count}}</p></td>
                            @php
                                $count += 1; 
                            @endphp
                            <td>
                                <p class="text-center">
                                    @if($type->image_name!=null)
                                        <img style="max-height:100px; max-width:200px; text-align:center;"  src="images/{{ $type->image_name }}">
                                    @else
                                        <img style="max-height:100px; max-width:200px; text-align:center;"  src="bigwood_images/images.jpg">
                                    @endif
                                </p>   
                            </td>
                            <td><p class="text-center">{{$type->nameTH}}</p></td>
                            <td><p class="text-center">{{$type->nameEN}}</p></td>
                            <td><p class="text-center"><button class="trigger btn btn-warning text-light" > Edit </button></a>
                            <button class="trigger btn btn-danger text-light" > Delete </button></p></td>
                            <!--Edit Medal-->
                            <div class="modal" id="ajax-crud-modal">
                                <div class="modal-content"><span class="btn-close">&times;</span>
                                    <form method="post" action="product_type_admin_edit/{{$type->id}}" enctype="multipart/form-data">
                                        <br>
                                        <h3 class="text-center text-warning">Edit</h3>
                                        <h5 class="text-center">{{$type->nameTH}}</h5>
                                        <br>
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="titleid" class="col-sm-3 col-form-label">Name(TH)</label>
                                            <div class="col-sm-9">
                                                <textarea maxlength="200" class="form-control" name="nameTH"
                                                    id="nameTH" cols="30" rows="2" placeholder="Name(TH)" 
                                                    required value={{$type->nameTH}}>{{$type->nameTH}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="publisherid" class="col-sm-3 col-form-label">Name(EN)</label>
                                            <div class="col-sm-9">
                                                <textarea maxlength="200" class="form-control" name="nameEN"
                                                    id="nameEN" cols="30" rows="2" placeholder="Name(EN)" 
                                                    required value={{$type->nameEN}}>{{$type->nameEN}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="releasedateid" class="col-sm-3 col-form-label">picture</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="image_name" name="image_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Delete Medal-->
                            <div class="modal" id="ajax-crud-modal">
                                <div class="modal-content"><span class="btn-close">&times;</span>
                                    <form method="get" action="{{url('product_type_admin_destroy')}}/{{$type->id}}">
                                        <br>
                                        <p class="text-center">
                                            <img style="max-height:70px; max-width:70px; text-align:center;"  src="bigwood_images/delete.png">
                                        </p>
                                        <h3 class="text-center text-danger">Delete</h3>
                                        <h5 class="text-center">{{$type->nameTH}}</h5>
                                        <br>
                                        <button style="text-align:center;" type="submit" class="btn btn-danger text-light">Confirm</button>
                                    </form>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                @else
                    <p> No type found <p>
                @endif
            </table>
        </div>
    </div>

</section>
    
@endsection