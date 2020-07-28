<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <META http-equiv="expires" content="0">
    <title>BIG-WOOD ADMIN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" type="text/css" />
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <!-- jqvmap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--datatable-->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>
<style>
    .sidebar-mini {
        padding-right: 0 !important;
    }

    .bg-darkgreen{
        background-color: #2F6669;
    }

    .modal {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        transform: scale(1.1);
        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
    }

    .modal-content {
        align-self: center;
        background-color: white;
        padding: 1rem 1.5rem;
        width: 40rem;
        border-radius: 0.5rem;
    }
            
    .btn-close {
        float: right;
        width: 1.5rem;
        line-height: 1.5rem;
        text-align: center;
        cursor: pointer;
        border-radius: 0.25rem;
        background-color: lightgray;
    }
            
    .show-modal {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
    }  
    
    .custom-select {
    font-family: Arial;
    }

    .custom-select select {
    display: none; /*hide original SELECT element:*/
    }

    /*style the arrow inside the select element:*/
    .select-selected:after {
    position: absolute;
    content: "";
    top: 14px;
    right: 10px;
    width: 0;
    height: 0;
    border: 6px solid transparent;
    border-color: #fff transparent transparent transparent;
    }

    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
    border-color: transparent transparent #fff transparent;
    top: 7px;
    }

    /*style the items (options), including the selected item:*/
    .select-items div,.select-selected {
    color: #000000;
    padding: 8px 16px;
    border: 1px solid transparent;
    border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
    cursor: pointer;
    user-select: none;
    }

    /*style items (options):*/
    .select-items {
    position: absolute;
    background-color: white;
    top: 100%;
    left: 0;
    right: 0;
    z-index: 99;
    }

    /*hide the items when the select box is closed:*/
    .select-hide {
    display: none;
    }

    .select-items div:hover, .same-as-selected {
    background-color: rgba(0, 0, 0, 0.1);
    }

    .container {
    width: 320px;
    height: 180px;
    }

    .container img {
    width: auto;
    height: auto;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <p href="#" onclick="fn_index()" class="nav-link">หน้าแรก</p>
                </li>
                <li class="nav-item d-none d-sm-inline-block dropdown">
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

            @guest
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/avatar2.png" class="user-image img-circle elevation-2 mr-1" alt="User Image">
                            <span class="d-none d-md-inline showname"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/avatar2.png" class="user-image img-circle elevation-2 mr-1" alt="User Image">
                            <span class="d-none d-md-inline showname"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-light-gradient">
                                <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
                                <p>
                                    <b class="fullname"></b>
                                    <small class="lsat_login"></small>
                                </p>

                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <li class="user-footer text-dark">
                                    <a class="btn btn-danger  float-right" 
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endguest
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <!-- Brand Logo -->

            <a href="{{ url('adminpage') }}" class="brand-link navbar-white text-dark">
                <img src="images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">BIGWOOD</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!-- <div class="image">
                        <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
                    </div> -->
                    <div class="info">
                        <a href="#" class="d-block text-monospace font-weight-bold username"></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">PAGES</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-archive nav-icon"></i>
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('nav_admin') }}" class="nav-link " id="page_home">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Navbar & Footer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('home_admin') }}" class="nav-link " id="page_home">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Home content</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-archive nav-icon"></i>
                                <p>
                                    Product & Service
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('product_admin') }}" class="nav-link" id="page_product_service">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Product &  content</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('product_type_admin') }}" class="nav-link" id="page_product_service">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Types of product</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-archive nav-icon"></i>
                                <p>
                                    Quatations
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('massage_admin') }}" class="nav-link" id="page_product_referance">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Massages</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('quopic_admin') }}" class="nav-link" id="page_product_referance">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Quatations image</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" id="page_contact">
                            <a href="{{ url('contact_admin') }}" class="nav-link">
                                <i class="fas fa-address-card nav-icon"></i>
                                <p>Contact as</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="content">
            @yield('content')
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="http://www.papluscon.com">BIG WOOD</a></strong> All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!--datatable-->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <!--datatable select-->
    <script src="plugins/datatables-select/js/dataTables.select.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- sweetalert2-->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.world.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/inputmask/jquery.inputmask.bundle.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- JSON-MASTER -->
    <script src="plugins\JSON-master\jquery.serializejson.js"></script>
    <!-- json -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
            $.ajax({
                type:"GET",
                url:"home.blade.html",
                dataType:"html",
                success:function(data) {
                    var out = "";
                    $(data).find("your selectors").each(function(loop, item){
                        out += $(item).html();
                    });
                    data = out;
                    alert(data);
                    $("body").html(data);
                }
            });
        });
    
        function relond_home() {
            $.ajax({
                url: sessionStorage.getItem("getFileConfig") + '/php/action.php?en=get_homepage',
                type: 'GET',
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType
                success: function (msg) {
                    var dataJSON = JSON.parse(msg);
                    $('#title_1').val(dataJSON.title1);
                    $('#content_1').val(dataJSON.des1);
                    $('#title_2').val(dataJSON.title2);
                    $('#content_2').val(dataJSON.des2);
                    $('#pic_1').val(dataJSON.pic1);
                    $('#pic_2').val(dataJSON.pic2);
                    $('#last_update').html('อัพเดทครั้งล่าสุดเมื่อ : ' + dataJSON.update_at)
                    $('#local_pic1').html('Choose file');
                    $('#local_pic2').html('Choose file');
                    $('#imgUpload1').attr('src', '');
                    $('#imgUpload2').attr('src', '');
                    $('#piccontent1').val('');
                    $('#piccontent2').val('');
                }
            });
        }
    </script>

    <script>
        const triggers = document.getElementsByClassName('trigger');
        const triggerArray = Array.from(triggers).entries();
        const modals = document.getElementsByClassName('modal');
        const closeButtons = document.getElementsByClassName('btn-close');

        for (let [index, trigger] of triggerArray) {
        let triggerIndex = index;
        function toggleModal() {
            modals[triggerIndex].classList.toggle('show-modal');
        }
        trigger.addEventListener("click", toggleModal);
        closeButtons[triggerIndex].addEventListener("click", toggleModal);
        }
    </script>

<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    </script>
</body>