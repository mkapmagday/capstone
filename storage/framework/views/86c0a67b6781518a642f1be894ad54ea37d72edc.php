<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <?php echo $__env->make('layouts.anavigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Document Request List</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <table>
                    <tr>
            <form action="<?php echo e(route('docres.export')); ?>">
                <button class="open-button" style="background-color: #c2fbd7; color: green; margin-left:30px; margin-top:25px;" style="margin-left:50px"> Export Document Request to Excel <center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/add-user-group-woman-man-skin-type-7.png" /></center></button>
            </form>
                    </tr>
            <tr>
                <button class="open-button" style="background-color: #c2fbd7; color: green; margin-left:30px; margin-top:25px;" onclick="openForm()"> Add Document Type <center><img onclick="openForm()" height="20px" width="20px" src="https://img.icons8.com/color/48/000000/add--v1.png" /></center> </button>
            </tr>
            </table>
                <table>
                <form action="<?php echo e(route('docres.filter')); ?>" >
                <center>
                    
                <tr>
                <td>
                    <div class="row">

                        <td>

                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Full Name" style="margin-top: 15px;">

                        </td>
                        <td>
                        
                            <select required name="docname" id="docname" class="form-control" style="margin-top: 15px;">
                                <option value=" "></option>
                                <?php $__currentLoopData = $doclist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=<?php echo e($document->id); ?>><?php echo e($document->document_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </td>
                        
                        <td>
                        
                            <select required name="status" id="status" class="form-control" style="margin-top: 15px;">
                                <option value=" "></option>
                                <?php $__currentLoopData = \App\Enums\DocumentRequestStatus::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($status->value); ?>"><?php echo e($status->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        
                        </td>
                        </center>
                        <td>
                        <button class="open-button" style="background-color: #228B22; color: white; width:100px;" type="submit">Filter<center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/find-user-male--v1.png" /></center></button>
                        </td>
                    
                    </form>
                
                <td>
                <div class="col-2">
                    <form action="<?php echo e(route('docres.index')); ?>">
                        <button class="open-button" style="background-color: #0047AB; color: white; width:125px;" type="submit">Clear Filter<center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/clear-search.png" /></center></button>
                    </form>
                    </td>   
                </div>
                </tr>
                    </table>
                <br>
                <br>
                <div class="popup">
                    <div class="cnt223">
                        <a href='' class='close'><img src="https://img.icons8.com/color/48/000000/delete-sign--v1.png" /></a>
                        <form method="POST" action="<?php echo e(route('docres.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div style="padding-top: 0px;">
                                <select required name="document_list" id="document_list" class="form-control">
                                    <?php $__currentLoopData = $doclist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=<?php echo e($document->id); ?>><?php echo e($document->document_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <br>
                                <div id="representative">
                                    <tr>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'representative','value' => __('Representative')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'representative','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Representative'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'representative','type' => 'text','name' => 'representative']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'representative','type' => 'text','name' => 'representative']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                    </tr>
                                </div>
                                
                                <div id="purpose">
                                    <tr>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'purpose','value' => __('Purpose')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'purpose','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Purpose'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'purpose','type' => 'text','name' => 'purpose']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'purpose','type' => 'text','name' => 'purpose']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                    </tr>
                                </div>
                                <div id="reason">
                                    <tr>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'reason','value' => __('Reason')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'reason','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Reason'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'reason','type' => 'text','name' => 'reason']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'reason','type' => 'text','name' => 'reason']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                    </tr>
                                </div>
                                <div id="relationship">
                                    <tr>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'relation','value' => __('Relation')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'relation','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Relation'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'relation','type' => 'text','name' => 'relation']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'relation','type' => 'text','name' => 'relation']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                    </tr>
                                </div>
                                <br>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><button onclick="return confirm('Do you want to submit request? ')" class="open-button ml-4" style="background-color: #c2fbd7; color: green; float: right;" type="submit"><img src="https://img.icons8.com/external-sbts2018-flat-sbts2018/58/000000/external-submit-basic-ui-elements-2.3-sbts2018-flat-sbts2018.png" />SUBMIT</button></td>
                                </tr>
                            </div>

                        </form>
                        <br>
                    

                    </div>
                </div>

                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">USER_ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">FIRST NAME</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">DOCUMENT NAME</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider">DOCUMENT STATUS</th>
                            <th colspan="4" scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 dark:text-black-200 uppercase tracking-wider" style="text-align:center ;">ACTIONS
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                        </tr>

                        <?php $__currentLoopData = $docres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($docress->user_id); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($docress->fname); ?></td>
                            <?php $__currentLoopData = $doclist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($docress->document_id == $document->id): ?>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($document->document_name); ?></td>
                            <?php if($docress->status == "pending"): ?>
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-primary" disabled><?php echo e($docress->status); ?></button></td>
                            <?php elseif($docress->status == "approved"): ?>
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-secondary" disabled><?php echo e($docress->status); ?></button></td>
                            <?php elseif($docress->status == "for_claiming"): ?>
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-success" disabled><?php echo e($docress->status); ?></button></td>
                            <?php elseif($docress->status == "claimed"): ?>
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-danger" disabled><?php echo e($docress->status); ?></button></td>
                            <?php endif; ?>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="<?php echo e(route('docres.edit',$docress->id)); ?>">
                                    <button type="submit" class="open-button" style="background-color: #0047AB; color: white;">Edit</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="<?php echo e(route('docres.destroy',$docress->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button class="open-button" style="background-color: #8B0000; color: white;" onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                </form>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="<?php echo e(route('pdf.show',$docress->id)); ?>">
                                    <button type="submit" class="open-button" style="background-color: #F28C28; color: white;">Show</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="<?php echo e(route('pdf.generatePDF',$docress->id)); ?>">
                                    <button class="open-button" style="background-color: #4F7942; color: white;" type="submit">Download</button>
                                </form>
                            </td>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($docres->links('pagination::bootstrap-5')); ?>



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

    <!-- jQuery -->

</body>

</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
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

    td {
        margin-left:20px;
        padding-left: 15px;
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
            var url = "<?php echo e(route('user.destroy', ": delete_id ")); ?>";
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
                            url: url,
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
</script><?php /**PATH C:\xampp\htdocs\capstone\resources\views/admin/docres/docreslist.blade.php ENDPATH**/ ?>