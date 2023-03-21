<?php if(Auth::user()->hasrole('admin')): ?>
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
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <?php echo $__env->make('Chatify::layouts.headLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="messenger">
                    
                    <div class="messenger-listView">
                        
                        <div class="m-header">
                            <nav>
                                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span> </a>
                                
                                <nav class="m-header-right">
                                    <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                                </nav>
                            </nav>
                            
                            <input type="text" class="messenger-search" placeholder="Search" />
                            
                            <div class="messenger-listView-tabs">
                                <a href="#" <?php if($type=='user' ): ?> class="active-tab" <?php endif; ?> data-view="users">
                                    <span class="far fa-user"></span> People</a>
                                <a href="#" <?php if($type=='group' ): ?> class="active-tab" <?php endif; ?> data-view="groups">
                                    <span class="fas fa-users"></span> Groups</a>
                            </div>
                        </div>
                        
                        <div class="m-body contacts-container">
                            
                            
                            <div class="<?php if($type == 'user'): ?> show <?php endif; ?> messenger-tab users-tab app-scroll" data-view="users">

                                
                                <div class="favorites-section">
                                    <p class="messenger-title">Favorites</p>
                                    <div class="messenger-favorites app-scroll-thin"></div>
                                </div>
                                
                                <?php if(Auth::user()->hasrole('resident')): ?>
                                <p class="messenger-title">Barangay Officials</p>
                                <?php $__currentLoopData = App\Models\User::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->hasrole('admin') || $user->hasrole('kagawad') || $user->hasrole('chairman')): ?>
                                <div class="favorite-list-item">
                                    <div data-id="<?php echo e($user->id); ?>" data-action="0" class="avatar av-m" style="background-image: url('<?php echo e(Chatify::getUserWithAvatar($user)->avatar); ?>');">
                                    </div>
                                    <p><?php echo e($user->name); ?></p>

                                </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                
                                <?php echo view('Chatify::layouts.listItem', ['get' => 'saved']); ?>


                                
                                <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);position: relative;"></div>

                            </div>

                            
                            <div class="<?php if($type == 'group'): ?> show <?php endif; ?> messenger-tab groups-tab app-scroll" data-view="groups">
                                
                                <p style="text-align: center;color:grey;margin-top:30px">
                                    <a target="_blank" style="color:<?php echo e($messengerColor); ?>;" href="https://chatify.munafio.com/notes#groups-feature">Click here</a> for more info!
                                </p>
                            </div>

                            
                            <div class="messenger-tab search-tab app-scroll" data-view="search">
                                
                                <p class="messenger-title">Search</p>
                                <div class="search-records">
                                    <p class="message-hint center-el"><span>Type to search..</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="messenger-messagingView">
                        
                        <div class="m-header m-header-messaging">
                            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                
                                <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                                    <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                    </div>
                                    <a href="#" class="user-name">BRGY 386 MESSENGER</a>
                                </div>
                                
                                <nav class="m-header-right">
                                    <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                                    <a href="/"><i class="fas fa-home"></i></a>
                                    <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                                </nav>
                            </nav>
                        </div>
                        
                        <div class="internet-connection">
                            <span class="ic-connected">Connected</span>
                            <span class="ic-connecting">Connecting...</span>
                            <span class="ic-noInternet">No internet access</span>
                        </div>
                        
                        <div class="m-body messages-container app-scroll">
                            <div class="messages">
                                <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
                            </div>
                            
                            <div class="typing-indicator">
                                <div class="message-card typing">
                                    <p>
                                        <span class="typing-dots">
                                            <span class="dot dot-1"></span>
                                            <span class="dot dot-2"></span>
                                            <span class="dot dot-3"></span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            
                            <?php echo $__env->make('Chatify::layouts.sendForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    
                    <div class="messenger-infoView app-scroll">
                        
                        <nav>
                            <a href="#"><i class="fas fa-times"></i></a>
                        </nav>
                        <?php echo view('Chatify::layouts.info')->render(); ?>

                    </div>
                </div>

                <?php echo $__env->make('Chatify::layouts.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('Chatify::layouts.footerLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php else: ?>
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

        <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <?php echo $__env->make('Chatify::layouts.headLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="messenger">
                    
                    <div class="messenger-listView">
                        
                        <div class="m-header">
                            <nav>
                                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span> </a>
                                
                                <nav class="m-header-right">
                                    <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                                </nav>
                            </nav>
                            
                            <input type="text" class="messenger-search" placeholder="Search" />
                            
                            <div class="messenger-listView-tabs">
                                <a href="#" <?php if($type=='user' ): ?> class="active-tab" <?php endif; ?> data-view="users">
                                    <span class="far fa-user"></span> People</a>
                                <a href="#" <?php if($type=='group' ): ?> class="active-tab" <?php endif; ?> data-view="groups">
                                    <span class="fas fa-users"></span> Groups</a>
                            </div>
                        </div>
                        
                        <div class="m-body contacts-container">
                            
                            
                            <div class="<?php if($type == 'user'): ?> show <?php endif; ?> messenger-tab users-tab app-scroll" data-view="users">

                                
                                <div class="favorites-section">
                                    <p class="messenger-title">Favorites</p>
                                    <div class="messenger-favorites app-scroll-thin"></div>
                                </div>
                                
                                <?php if(Auth::user()->hasrole('resident')): ?>
                                <p class="messenger-title">Barangay Officials</p>
                                <?php $__currentLoopData = App\Models\User::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->hasrole('admin') || $user->hasrole('kagawad') || $user->hasrole('chairman')): ?>
                                <div class="favorite-list-item">
                                    <div data-id="<?php echo e($user->id); ?>" data-action="0" class="avatar av-m" style="background-image: url('<?php echo e(Chatify::getUserWithAvatar($user)->avatar); ?>');">
                                    </div>
                                    <p><?php echo e($user->name); ?></p>

                                </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                
                                <?php echo view('Chatify::layouts.listItem', ['get' => 'saved']); ?>


                                
                                <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);position: relative;"></div>

                            </div>

                            
                            <div class="<?php if($type == 'group'): ?> show <?php endif; ?> messenger-tab groups-tab app-scroll" data-view="groups">
                                
                                <p style="text-align: center;color:grey;margin-top:30px">
                                    <a target="_blank" style="color:<?php echo e($messengerColor); ?>;" href="https://chatify.munafio.com/notes#groups-feature">Click here</a> for more info!
                                </p>
                            </div>

                            
                            <div class="messenger-tab search-tab app-scroll" data-view="search">
                                
                                <p class="messenger-title">Search</p>
                                <div class="search-records">
                                    <p class="message-hint center-el"><span>Type to search..</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="messenger-messagingView">
                        
                        <div class="m-header m-header-messaging">
                            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                
                                <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                                    <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                    </div>
                                    <a href="#" class="user-name">BRGY 386 MESSENGER</a>
                                </div>
                                
                                <nav class="m-header-right">
                                    <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                                    <a href="/"><i class="fas fa-home"></i></a>
                                    <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                                </nav>
                            </nav>
                        </div>
                        
                        <div class="internet-connection">
                            <span class="ic-connected">Connected</span>
                            <span class="ic-connecting">Connecting...</span>
                            <span class="ic-noInternet">No internet access</span>
                        </div>
                        
                        <div class="m-body messages-container app-scroll">
                            <div class="messages">
                                <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
                            </div>
                            
                            <div class="typing-indicator">
                                <div class="message-card typing">
                                    <p>
                                        <span class="typing-dots">
                                            <span class="dot dot-1"></span>
                                            <span class="dot dot-2"></span>
                                            <span class="dot dot-3"></span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            
                            <?php echo $__env->make('Chatify::layouts.sendForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    
                    <div class="messenger-infoView app-scroll">
                        
                        <nav>
                            <a href="#"><i class="fas fa-times"></i></a>
                        </nav>
                        <?php echo view('Chatify::layouts.info')->render(); ?>

                    </div>
                </div>

                <?php echo $__env->make('Chatify::layouts.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('Chatify::layouts.footerLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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


<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\capstone\resources\views/vendor/Chatify/pages/app.blade.php ENDPATH**/ ?>