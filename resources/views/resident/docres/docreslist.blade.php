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
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

@include('layouts.navigation')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-4 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <center>
        <form method="POST" action="{{ route('residentdocres.store')}}">
            <select required name="document_list" id="document_list" class="form-control">
                @foreach (App\Models\DocumentList::all() as $document)
                <option value={{$document->id}}>{{$document->document_name}}</option>
                @endforeach
            </select>
            <br>
    </center>







    


            @csrf
            <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200" style="margin-left:50px; margin-top:20px; margin-bottom:20px; padding-bottom:30px; padding-right:20px; margin-right:15px; overflow-x:auto;">
            <div style="padding-top: 0px;">

                <tr>
                    <td>
                        <x-input-label for="lname" :value="__('Last Name')" />
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <x-text-input id="lname" type="text" name="lname" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-input-label  for="fname" :value="__('First Name')" />
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <x-text-input style="margin-top:10px;" id="fname" type="text" name="fname" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-input-label for="mname" :value="__('Middle Name')" />
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <x-text-input style="margin-top:10px;" id="mname" type="text" name="mname" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-input-label for="pnum" :value="__('Phone Number')" />
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <select id="country_code" style="margin-top:10px;">
                            <option value="">Select Country</option>
                            <option value="ph">&#127477;&#127469;</option>
                        </select>
                        <x-text-input id="pnum" type="text" name="pnum" />
                    </td>
                </tr>
                
                <div id="bdate" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="bdate" :value="__('Date of Birth')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="bdate" type="date" name="bdate" />
                        </td>
                    </tr>
                </div>
                <div id="years" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="years" :value="__('Years')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="years" type="text" name="years" />
                        </td>
                    </tr>
                </div>
                <div id="months" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="months" :value="__('Months')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="months" type="months" name="months" />
                        </td>
                    </tr>
                </div>
                <div id="municipality" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="municipality" :value="__('Municipality')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="municipality" type="text" name="municipality" />
                        </td>
                    </tr>
                </div>
                <div id="age" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="age" :value="__('age')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="age" type="text" name="age" />
                        </td>
                    </tr>
                </div>
                <div id="representative" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="representative" :value="__('Representative')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="representative" type="text" name="representative" />
                        </td>
                    </tr>
                </div>
                <div id="address" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="address" :value="__('Address')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="address" type="text" name="address" />
                        </td>
                    </tr>
                </div>
                <div id="purpose" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="purpose" :value="__('Purpose')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="purpose" type="text" name="purpose" />
                        </td>
                    </tr>
                </div>
                <div id="reason" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="reason" :value="__('Reason')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="reason" type="text" name="reason" />
                        </td>
                    </tr>
                </div>
                <div id="relationship" style="margin-top:10px;">
                    <tr>
                        <td>
                            <x-input-label for="relation" :value="__('Relation')" />
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <x-text-input id="relation" type="text" name="relation" />
                        </td>
                    </tr>
                </div>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><button onclick="return confirm('Do you want to submit request? ')" type="submit" style="float: right;"><img src="https://img.icons8.com/external-sbts2018-flat-sbts2018/58/000000/external-submit-basic-ui-elements-2.3-sbts2018-flat-sbts2018.png" />SUBMIT</button></td>
                </tr>
            </div>
                </div>
            </div>
        </div>
            </div>

   
    </form>
          
            <!-- /.card -->
          </section>
          
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-8 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <image id="documentimage" src="" style="height: 900px; width:850px;"></image>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
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

<!-- jQuery -->

</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    .close {
        float: right;
        width: 20px;
        height: 20px;
    }

    

    .popup {
        padding-top: 10px;
        width: 100%;
        display: none;
        position: absolute;
        z-index: 101;
    }

    .cnt223 {
        width: 50%;
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

    #documentimage {
        text-align: center;
        width: 100%;
        display: inline-block;
        overflow: hidden;
    }

    tr {
        margin-bottom:30px;
        padding-bottom:40px;
    }

    table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script type='text/javascript'>
    $("#doc_id").click(function() {
        console.log($(this).val());
    });

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





    $("#country_code").change(function() {
        if ($(this).val() == "ph") {
            document.getElementById("pnum").value = "63";
            console.log(document.getElementById("pnum").value)
        }
    });
    $(function() {
        if ($("#document_list").val() == 1) {
            document.getElementById("documentimage").src = "https://i.ibb.co/mtddBL1/certification.jpg";

            $('#bdate').show();
            $('#address').show();

            $('#years').hide();
            $('#months').hide();
            $('#municipality').hide();
            $('#vdate').hide();
            $('#age').hide();
            $('#representative').hide();
            $('#purpose').hide();
            $('#reason').hide();
            $('#relationship').hide();
        }
    });

    $("#document_list").change(function() {
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
        if ($(this).val() == "") {}
        console.log($(this).val());
        if ($(this).val() == 1) {
            document.getElementById("documentimage").src = "https://i.ibb.co/mtddBL1/certification.jpg";
            $('#bdate').show();
            $('#address').show();

            $('#years').hide();
            $('#months').hide();
            $('#municipality').hide();
            $('#vdate').hide();
            $('#age').hide();
            $('#representative').hide();
            $('#purpose').hide();
            $('#reason').hide();
            $('#relationship').hide();

        } else {

        }

        if ($(this).val() == 2) {
            document.getElementById("documentimage").src = "https://i.ibb.co/zZ58MJ7/stipend.jpg";
   
            $('#bdate').show();
            $('#relationship').show();
            $('#representative').show();
            $('#reason').show();

            $('#years').hide();
            $('#months').hide();
            $('#municipality').hide();
            $('#vdate').hide();
            $('#age').hide();

            $('#purpose').hide();
            $('#address').hide();




        } else {

        }

        if ($(this).val() == 3) {
            document.getElementById("documentimage").src = "https://i.ibb.co/tYswVQk/Indigency.jpg";

          
            $('#address').show();
            $('#years').hide();
            $('#months').hide();
            $('#municipality').hide();

            $('#purpose').show();

            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();
            $('#age').hide();

        } else {

        }

        if ($(this).val() == 4) {
            document.getElementById("documentimage").src = "https://i.ibb.co/3TXsx7W/JoBseek.jpg";
        
            $('#address').show();
            $('#age').hide();
            $('#municipality').show();


            $('#years').show();
            $('#months').show();

            $('#purpose').hide();

            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();


        } else {

        }

        if ($(this).val() == 5) {
            document.getElementById("documentimage").src = "https://i.ibb.co/940B0Kn/Oath.jpg";

         

            $('#purpose').hide();

            $('#age').show();
            $('#address').show();
            $('#municipality').show();

            $('#years').show();
            $('#months').show();


            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();


        } else {

        }

        if ($(this).val() == 6) {
            document.getElementById("documentimage").src = "https://i.ibb.co/1rypHj1/Oneness.jpg";

            $('#purpose').show();

            $('#age').hide();
            $('#address').hide();
            $('#municipality').hide();

            $('#years').hide();
            $('#months').hide();


            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();
        } else {


        }
    });
</script>