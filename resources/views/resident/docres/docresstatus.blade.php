<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="https://i.ibb.co/GQzgtG1/My-project.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('layouts.navigation')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">STATUS</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <table>
                                    <tr>
                                        <th>USER_ID</th>
                                        <th>LAST NAME </th>
                                        <th>FIRST NAME</th>
                                        <th>DOCUMENT NAME</th>
                                        <th>STATUS</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                    @foreach ($docres as $docress)
                                    <tr>
                                        <td>{{$docress->user_id}}</td>
                                        <td>{{$docress->lname}}</td>
                                        <td>{{$docress->fname}}</td>
                                        @foreach($doclist as $document)
                                        @if($docress->document_id == $document->id)
                                        <td>{{$document->document_name}}</td>
                                        @if($docress->status == "pending")
                                        <td><button type="button" class="btn btn-primary" disabled>{{$docress->status}}</button></td>
                                        @elseif($docress->status == "approved")
                                        <td><button type="button" class="btn btn-secondary" disabled>{{$docress->status}}</button></td>
                                        @elseif($docress->status == "for_claiming")
                                        <td><button type="button" class="btn btn-success" disabled>{{$docress->status}}</button></td>
                                        @elseif($docress->status == "claimed")
                                        <td><button type="button" class="btn btn-danger" disabled>{{$docress->status}}</button></td>
                                        @endif
                                        <td>
                                            <form action="{{ route('residentpdf.show',$docress->id) }}">
                                                <button type="submit" class="btn btn-success">Show</button>
                                            </form>
                                        </td>
                                        @endif

                                        @endforeach
                                    </tr>
                                    @endforeach
                                    {{$docres->links()}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!---->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>