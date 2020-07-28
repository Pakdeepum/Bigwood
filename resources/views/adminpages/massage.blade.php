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
                    <li class="breadcrumb-item active"><a href="#">QUOTATION</a></li>
                    <li class="breadcrumb-item ">MASSAGES</li>
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
            <h4 class="mb-3">การจัดการข้อมูลหน้า Quotations</h4>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success_mas'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
            @endif
            <table class="table" >
                <tr class="bg-darkgreen">
                    <th>
                        <p class="text-light text-center"> No </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> name </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> email </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> Phone </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> detail </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> status </p>
                    </th>
                    <th>
                        <p class="text-light text-center"> Action </p>
                    </th>
                </tr>

                @if(count($quotations)>0)
                @php
                    $count = 1; 
                @endphp
                    @foreach($quotations as $quotation)
                        <tr>
                            <td><p class="text-center">{{$count}}</p></td>
                            @php
                                $count += 1; 
                            @endphp
                            <td><p class="text-center">{{$quotation->name}}</p></td>
                            <td><p class="text-center">{{$quotation->email}}</p></td>
                            <td><p class="text-center">{{$quotation->phone}}</p></td>
                            <td style="max-width:300px"><p class="text-center">{{$quotation->detail}}</p></td>
                            <td><p class="text-center">
                            @if($quotation->status=='1')
                                <button disabled class="btn btn-success text-light" > readed </button>
                            @else
                                <button disabled class="btn btn-warning text-light" > unread </button>
                            @endif
                            </p></td>
                            <td><p class="text-center"><button class="trigger btn btn-primary text-light" > view </button></a>
                            <button class="trigger btn btn-danger text-light" > Delete </button></p></td>
                            <!--view Medal-->
                            <div class="modal" id="ajax-crud-modal">
                                <div class="modal-content"><span class="btn-close">&times;</span>
                                    <form method="post" action="massage_admin_view/{{$quotation->id}}" enctype="multipart/form-data">
                                        <br>
                                        <h3 class="text-center text-warning">Edit</h3>
                                        <h5 class="text-center">{{$quotation->name}}</h5>
                                        <br>
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="titleid" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <textarea disabled maxlength="200" class="form-control" name="name"
                                                    id="name" cols="30" rows="2" placeholder="name" 
                                                    required value={{$quotation->name}}>{{$quotation->name}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="titleid" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <textarea disabled maxlength="200" class="form-control" name="email"
                                                    id="email" cols="30" rows="2" placeholder="Email" 
                                                    required value={{$quotation->email}}>{{$quotation->email}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="publisherid" class="col-sm-3 col-form-label">Phone num</label>
                                            <div class="col-sm-9">
                                                <textarea disabled maxlength="20" class="form-control" name="phone"
                                                    id="phone" cols="30" rows="1" placeholder="Phone number" 
                                                    required value={{$quotation->phone}}>{{$quotation->phone}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="publisherid" class="col-sm-3 col-form-label">Detail</label>
                                            <div class="col-sm-9">
                                                <textarea disabled maxlength="200" class="form-control" name="detail"
                                                    id="detail" cols="30" rows="5" placeholder="Detail" 
                                                    required value={{$quotation->detail}}>{{$quotation->detail}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary">readed</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Delete Medal-->
                            <div class="modal" id="ajax-crud-modal">
                                <div class="modal-content"><span class="btn-close">&times;</span>
                                    <form method="get" action="{{url('massage_admin_destroy')}}/{{$quotation->id}}">
                                        <br>
                                        <p class="text-center">
                                            <img style="max-height:70px; max-width:70px; text-align:center;"  src="bigwood_images/delete.png">
                                        </p>
                                        <h3 class="text-center text-danger">Delete</h3>
                                        <h5 class="text-center">{{$quotation->email}}</h5>
                                        <br>
                                        <button style="text-align:center;" type="submit" class="btn btn-danger text-light">Confirm</button>
                                    </form>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                @else
                    <td> No massage found </td>
                @endif
            </table>
        </div>
    </div>

</section>
    
@endsection