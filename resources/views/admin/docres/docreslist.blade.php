<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('How to use this feature?') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('docres.store')}}">
        <div class='popup'>
            <div class='cnt223'>
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <a href='' class='close'><img src="https://img.icons8.com/color/48/000000/delete-sign--v1.png" /></a>


                        @csrf
                        <div style="padding-top: 0px;">
                            <select required name="document_list" id="document_list" class="form-control">
                                @foreach ($doclist as $document)
                                <option value={{$document->id}}>{{$document->document_name}}</option>
                                @endforeach
                            </select>
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

           
            <form action="{{ route('docres.filter',$document->id) }}">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name" style="margin-top: 15px;">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" style="margin-top: 15px;">
                    </div>
                    <div class="col">
                        <select required name="docname" id="docname" class="form-control" style="margin-top: 15px;">
                            <option value=" "></option>
                            @foreach ($doclist as $document)
                            <option value={{$document->id}}>{{$document->document_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <select required name="status" id="status" class="form-control" style="margin-top: 15px;">
                            <option value=" "></option>
                            @foreach(\App\Enums\DocumentRequestStatus::cases() as $status)
                            <option value="{{ $status->value }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <button class="open-button" style="background-color: #228B22; color: white; width:100px" type="submit">Filter<center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/find-user-male--v1.png"/></center></button>
                        <form action="{{ route('docres.index') }}">
                    <button class="open-button" style="background-color: #0047AB; color: white;" type="submit">Clear Filter<center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/clear-search.png"/></center></button>
                </form>
                    </div>
                </div>
            </form>
            <br>
            
            <br>

            <div class="col">
                
            </div>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <button class="open-button" style="background-color: #c2fbd7; color: green; margin-left:30px; margin-top:25px;"  onclick="openForm()"> Add Document Type <center><img onclick="openForm()" height="20px" width="20px" src="https://img.icons8.com/color/48/000000/add--v1.png" /></center> </button>
              <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">USER_ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">LAST NAME </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">FIRST NAME</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">DOCUMENT NAME</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">DOCUMENT STATUS</th>
                            <th colspan="4" scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider" style="text-align:center ;">ACTIONS
                        </tr>

                        @foreach ($docres as $docress)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docress->user_id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docress->lname}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docress->fname}}</td>
                            @foreach($doclist as $document)
                            @if($docress->document_id == $document->id)
                            <td class="px-6 py-4 whitespace-nowrap">{{$document->document_name}}</td>
                            @if($docress->status == "pending")
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-primary" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "approved")
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-secondary" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "for_claiming")
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-success" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "claimed")
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-danger" disabled>{{$docress->status}}</button></td>
                            @endif
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('docres.edit',$docress->id) }}">
                                    <button type="submit" class="open-button" style="background-color: #0047AB; color: white;">Edit</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('docres.destroy',$docress->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="open-button" style="background-color: #8B0000; color: white;" onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                </form>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('pdf.show',$docress->id) }}">
                                    <button type="submit" class="open-button" style="background-color: #F28C28; color: white;">Show</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('pdf.generatePDF',$docress->id) }}">
                                    <button class="open-button" style="background-color: #4F7942; color: white;" type="submit">Download</button>
                                </form>
                            </td>
                            @endif
                            @endforeach
                        </tr>
                        @endforeach
                        {{ $docres->links() }}
                    </table>
                </div>
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

    
    .open-button {
  border-radius: 15px;
  box-shadow: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
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

.btn-logo {
        width:25px;
        height:25px;
    }
</style>




<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>

<script type='text/javascript'>
    $("#docname").click(function() {
        console.log($(this).val());
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


    $("#country_code").change(function() {
        if ($(this).val() == "ph") {
            document.getElementById("pnum").value = "63";
        }
    });
    $(function() {

        //Get the selected value
        $('.Certification').show();
        $('.Authorization').hide();
        $('.Indigency').hide();
        $('.Jobseeker').hide();
        $('.Oath').hide();
        $('.Oneness').hide();

        if ($("#document_list").val() == 1) {
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

