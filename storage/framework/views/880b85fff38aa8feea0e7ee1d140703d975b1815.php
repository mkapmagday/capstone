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
                            <h1 class="m-0">User List</h1>
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
            <form action="<?php echo e(route('user.export')); ?>">
            <button class="open-button" style="background-color: #c2fbd7; color: green; margin-left:30px; margin-top:25px;" style="margin-left:50px"> Export User to Excel <center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/add-user-group-woman-man-skin-type-7.png" /></center></button>
            </form>
            </tr>
            <tr>
            <button class="open-button" style="background-color: #c2fbd7; color: green; margin-left:30px; margin-top:25px;" onclick="openForm()" style="margin-left:50px"> Create User <center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/add-user-group-woman-man-skin-type-7.png" /></center></button>
</tr>
        </table>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="<?php echo e(route('user.filter')); ?>">
                <div class="row" style="margin-left:150px; margin-top: 20px;">
                    <div class="col">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" style="margin-top: 15px;">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" style="margin-top: 15px;">
                    </div>
                    <button class="open-button" style="background-color: #228B22; color: white; width:100px" type="submit">Filter<center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/find-user-male--v1.png" /></center></button>

            </form>
                    <div class="col">
                        <form action="<?php echo e(route('user.index')); ?>">
                            <button class="open-button" style="background-color: #0047AB; color: white;" type="submit">Clear Filter<center><img class="btn-logo" src="https://img.icons8.com/color/48/000000/clear-search.png" /></center></button>
                        </form>
                    </div>
                </div>
            <br>
            <br>                <div class="popup">
                    <div class="cnt223">
                    <a href='' class='close'><img src="https://img.icons8.com/color/48/000000/delete-sign--v1.png" /></a>

                        <form method="POST" action="<?php echo e(route('user.update', $user->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <!-- Name -->
                            <div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'name','value' => __('Name')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'name','class' => 'block mt-1 w-full','type' => 'text','name' => 'name','value' => $user->name,'required' => true,'autofocus' => true]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'name','class' => 'block mt-1 w-full','type' => 'text','name' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user->name),'required' => true,'autofocus' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('name'),'class' => 'mt-2']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('name')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'email','value' => __('Email')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Email'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'email','class' => 'block mt-1 w-full','type' => 'email','name' => 'email','value' => $user->email,'required' => true]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'email','class' => 'block mt-1 w-full','type' => 'email','name' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user->email),'required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mt-2']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>

                            <!-- Password -->
                            
                            <div class="flex items-center justify-end mt-4">
                                <button class="open-button ml-4" style="background-color: #c2fbd7; color: green;">
                                    <?php echo e(__('Update User')); ?>

                                </button>
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

                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->id); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->name); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->email); ?></td>
                            <td class="px-6 py-4 text-sm">
                                <form action="<?php echo e(route('role.show',$user->id)); ?>">
                                    <button class="open-button" style="background-color: #4F7942; color: white;" type="submit">Roles</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <form action="<?php echo e(route('user.edit',$user->id)); ?>">
                                    <button class="open-button" style="background-color: #0047AB; color: white;" type="submit">Edit</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <button class="open-button delete_button" value='<?php echo e($user->id); ?>' style="background-color: #8B0000; color: white;" type="submit">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($users->links('pagination::bootstrap-5')); ?>



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
            var url =  "<?php echo e(route('user.destroy', ":delete_id")); ?>";
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
</script><?php /**PATH C:\xampp\htdocs\capstone\resources\views/admin/user/useredit.blade.php ENDPATH**/ ?>