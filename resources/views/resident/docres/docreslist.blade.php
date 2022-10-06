<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
        </h2>
    </x-slot>
    <center>
    <form method="POST" action="{{ route('residentdocres.store')}}">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <select required name="document_list" id="document_list" class="form-control" style="width: 550px;">
                    @foreach (App\Models\DocumentList::all() as $document)
                    <option value={{$document->id}}>{{$document->document_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        </center>
     

        
    

        

        <div class='popup'>
            <div class='cnt223'>
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <a href='' class='close'><img src="https://img.icons8.com/color/48/000000/delete-sign--v1.png" /></a>


                        @csrf
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
                                    <x-input-label for="fname" :value="__('First Name')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-text-input id="fname" type="text" name="fname" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <x-input-label for="mname" :value="__('Middle Name')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-text-input id="mname" type="text" name="mname" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <x-input-label for="pnum" :value="__('Phone Number')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <select id="country_code">
                                        <option value="">Select Country</option>
                                        <option value="ph">&#127477;&#127469;</option>
                                    </select>
                                    <x-text-input id="pnum" type="text" name="pnum" />
                                </td>
                            </tr>
                            <div id="bdate">
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
                            <div id="years">
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
                            <div id="months">
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
                            <div id="municipality">
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
                            <div id="age">
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
                            <div id="representative">
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
                            <div id="address">
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
                            <div id="purpose">
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
                            <div id="reason">
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
                            <div id="relationship">
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

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="container-fluid" style="margin-left:130px;">
                <image id="documentimage" src="" style="height: 900px; width:850px;"></image>
    </div>
    
        </div>
    </div>



</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
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
        width: 100%;
        display: none;
        position: absolute;
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

    #documentimage {
        width: 100%;
        display: inline-block;
        overflow: hidden;
    }
</style>
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
            document.getElementById("documentimage").src = "https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.15752-9/308616100_1630366960691393_2984556608062881446_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=ae9488&_nc_ohc=AOk0e0CrUgAAX8t2PGZ&_nc_ht=scontent.fmnl25-1.fna&oh=03_AVI9werMXU4Z-_NsmDTSi7DItiWnHmhGtwPcyw1tpZC5fA&oe=635FCCF3";

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
            document.getElementById("documentimage").src = "https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.15752-9/308616100_1630366960691393_2984556608062881446_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=ae9488&_nc_ohc=AOk0e0CrUgAAX8t2PGZ&_nc_ht=scontent.fmnl25-1.fna&oh=03_AVI9werMXU4Z-_NsmDTSi7DItiWnHmhGtwPcyw1tpZC5fA&oe=635FCCF3";
            $('.Certification').show();
            $('.Authorization').hide();
            $('.Indigency').hide();
            $('.Jobseeker').hide();
            $('.Oath').hide();
            $('.Oneness').hide();

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
            document.getElementById("documentimage").src = "https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.15752-9/306697115_596256858865500_3335379389449982009_n.png?_nc_cat=107&ccb=1-7&_nc_sid=ae9488&_nc_ohc=IBhRUpMAwm8AX9K_B2y&tn=YQ2orxTiLTQIE6Y4&_nc_ht=scontent.fmnl25-1.fna&oh=03_AVKXHVLaEJM-Kbxiz2HNb3B7vK6vy_3mH8M5htxJ7Bq9yw&oe=63629087";
            $('.Certification').hide();
            $('.Authorization').show();
            $('.Indigency').hide();
            $('.Jobseeker').hide();
            $('.Oath').hide();
            $('.Oneness').hide();
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
            document.getElementById("documentimage").src = "https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.15752-9/301903689_1148803569324206_8261476907567918272_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_ohc=63UT8Cfj-pQAX_UM3nT&_nc_ht=scontent.fmnl25-1.fna&oh=03_AVLbaALjEkCzSduZNmMyjLCueSDhNpVp6gknfV_HPiDiLQ&oe=63624A8B";

            $('.Certification').hide();
            $('.Authorization').hide();
            $('.Indigency').show();
            $('.Jobseeker').hide();
            $('.Oath').hide();
            $('.Oneness').hide();
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
            document.getElementById("documentimage").src = "https://scontent.fmnl25-2.fna.fbcdn.net/v/t1.15752-9/307891830_443941887580665_334252895085087337_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=ae9488&_nc_ohc=hxTD09hNGeUAX-7M09_&_nc_ht=scontent.fmnl25-2.fna&oh=03_AVLMsAKSrqFSI_J0uYzEjXCq1ct_CaSs7RGDmrjO9f-kog&oe=6362EFE2";
            $('.Certification').hide();
            $('.Authorization').hide();
            $('.Indigency').hide();
            $('.Jobseeker').show();
            $('.Oath').hide();
            $('.Oneness').hide();
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
            document.getElementById("documentimage").src = "https://scontent.fmnl25-2.fna.fbcdn.net/v/t1.15752-9/307067253_616242610076244_5041754940304094391_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=ae9488&_nc_ohc=oTbELNbDHBMAX8VrpUw&_nc_ht=scontent.fmnl25-2.fna&oh=03_AVKuMejXLXzDKkoE15g-FMxQkgd9YQRxfx-gsb0LkJzOZA&oe=6360BA4A";

            $('.Certification').hide();
            $('.Authorization').hide();
            $('.Indigency').hide();
            $('.Jobseeker').hide();
            $('.Oath').show();
            $('.Oneness').hide();

            $('#purpose').hide();

            $('#age').show();
            $('#address').show();
            $('#municipality').show();

            $('#years').hide();
            $('#months').hide();


            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();


        } else {

        }

        if ($(this).val() == 6) {
            document.getElementById("documentimage").src = "https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.15752-9/307547365_636762158157607_6706884989649898839_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_ohc=GzxIlbgSy2AAX_9C1x8&_nc_ht=scontent.fmnl25-1.fna&oh=03_AVKomAzVYT81WsosOa3Oi2aKphxlx7NCUsnt1E59vwhjRg&oe=6360BDCD";

            $('.Certification').hide();
            $('.Authorization').hide();
            $('.Indigency').hide();
            $('.Jobseeker').hide();
            $('.Oath').hide();
            $('.Oneness').show();

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