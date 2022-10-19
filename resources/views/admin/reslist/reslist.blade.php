<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->

        @include('layouts.anavigation')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Resident List</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
            <button class="open-button" style="background-color: #c2fbd7; color: green; margin-left:30px; margin-top:25px;" onclick="openForm()" style="margin-left:50px"> Create User <center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/add-user-group-woman-man-skin-type-7.png" /></center></button>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('reslist.filter') }}">
                <div class="row" style="margin-left:150px; margin-top: 20px;">
                    <div class="col">
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name" style="margin-top: 15px;">
                    </div>
                    <button class="open-button" style="background-color: #228B22; color: white; width:100px" type="submit">Filter<center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/find-user-male--v1.png" /></center></button>
            </form>
                    <div class="col">
                        <form action="{{ route('reslist.index') }}">
                            <button class="open-button" style="background-color: #0047AB; color: white;" type="submit">Clear Filter<center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/clear-search.png" /></center></button>
                        </form>
                    </div>
                </div>
            <br>
            <br>                <div class="popup">
                    <div class="cnt223">
                        <a href='' class='close'><img src="https://img.icons8.com/color/48/000000/delete-sign--v1.png" /></a>

                        <form method="POST" action="{{route('reslist.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">


                                    {{-- File Input --}}
                                    <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                        <span style="color:red;">*</span>File Input(Datasheet)</label>
                                        <input type="file" class="form-control form-control-user @error('file') is-invalid @enderror" id="exampleFile" name="file" value="{{ old('file') }}">

                                        @error('file')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-user float-right mb-3">Upload Residents</button>
                                <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('reslist.index') }}">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Email</th>
                            <th scope="col" colspan="3" style="text-align:center;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                        </tr>

                        @foreach ($residents as $resident)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{$resident->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$resident->fname}}</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="{{ route('reslist.edit',$resident->id) }}" class="open-button" style="background-color: #0047AB; color: white;">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <button class="open-button delete_button" value={{$resident->id}} style="background-color: #8B0000; color: white;"  type="submit">Delete</button>
                                </td>
                            </tr>

                        @endforeach
                        {{ $residents->links('pagination::bootstrap-5') }}


                    </tbody>
                </table>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

</body>

</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    @media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {
    table, thead, tbody, th, td, tr { 
		display: block; 
	}
}

    img {
        height: 30px;
        width: 30px;
    }


    .close {
        float: right;
        width: 20px;
        height: 20px;
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        filter: alpha(opacity=70);
        -moz-opacity: 0.7;
        -khtml-opacity: 0.7;
        opacity: 0.7;
        z-index: 100;
        display: none;
    }

    .popup {
        padding-top: 10px;
        display: none;
        position: absolute;
        right: 35%;

        z-index: 101;
    }

    .cnt223 {
        min-width: 600px;
        width: 600px;
        min-height: 150px;
        margin: 100px auto;
        background: #f3f3f3;
        position: relative;
        z-index: 103;
        padding: 15px 35px;
        border-radius: 5px;
        box-shadow: 0 2px 5px #000;
    }

    .cnt223 p {
        clear: both;
        color: #555555;
        /* text-align: justify; */
        font-size: 20px;
        font-family: sans-serif;
    }

    .cnt223 p a {
        color: #d91900;
        font-weight: bold;
    }

    .cnt223 .x {
        float: right;
        height: 35px;
        left: 22px;
        position: relative;
        top: -25px;
        width: 34px;
    }

    .cnt223 .x:hover {
        cursor: pointer;
    }

    .btn-logo {
        width: 25px;
        height: 25px;
    }

    .open-button {
        border-radius: 15px;
        width: fit-content;
        box-shadow: green;
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 16px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;

    }

    .open-button:hover {
        transform: scale(1.05) rotate(-1deg);
    }
    .responsive {
  width: 100%;
  max-width: 900px;
  height: auto;
}
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type='text/javascript'>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.delete_button').click(function(e) {
            e.preventDefault();
            var delete_id = $(this).val();
            var url =  "{{route('reslist.destroy', ":delete_id") }}";
            url = url.replace(":delete_id", delete_id);
            console.log(delete_id);
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this User!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = {
                            "_token": $('input[name="csrf-token"]').val(),
                            "id": delete_id,
                        }
                        $.ajax({
                            type: "delete",
                            url:url,
                            data: data,
                            
                            success: function() {
                                console.log(url);
                                swal("User has been deleted!", {
                                        icon: "success",
                                    })
                                    .then((willDelete) => {
                                        location.reload();
                                    });
                            }
                        });
                    }

                });

        });
    });

    function openForm() {
        $(function() {
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').show();
            $('.close').click(function() {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });

            $('.x').click(function() {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
        });
    }
</script>