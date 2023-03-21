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

        <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                                    </tr>
                                    <?php $__currentLoopData = $docres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($docress->user_id); ?></td>
                                        <td><?php echo e($docress->lname); ?></td>
                                        <td><?php echo e($docress->fname); ?></td>
                                        <?php $__currentLoopData = $doclist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($docress->document_id == $document->id): ?>
                                        <td><?php echo e($document->document_name); ?></td>
                                        <?php if($docress->status == "pending"): ?>
                                        <td><button type="button" class="btn btn-primary" disabled><?php echo e($docress->status); ?></button></td>
                                        <?php elseif($docress->status == "approved"): ?>
                                        <td><button type="button" class="btn btn-secondary" disabled><?php echo e($docress->status); ?></button></td>
                                        <?php elseif($docress->status == "for_claiming"): ?>
                                        <td><button type="button" class="btn btn-success" disabled><?php echo e($docress->status); ?></button></td>
                                        <?php elseif($docress->status == "claimed"): ?>
                                        <td><button type="button" class="btn btn-danger" disabled><?php echo e($docress->status); ?></button></td>
                                        <?php endif; ?>
                                        
                                        <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($docres->links()); ?>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><?php /**PATH C:\xampp\htdocs\capstone\resources\views/resident/docres/docresstatus.blade.php ENDPATH**/ ?>