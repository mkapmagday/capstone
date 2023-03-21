<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                    <h1>Total Number Of Users: </h1>
                    <?php if(App\Models\User::all()): ?>
                        <h2><?php echo e(App\Models\User::count()); ?></h2>
                    <?php endif; ?>
                    <canvas id="myChart"></canvas>
                    <h1>Total Number Of Document Request: </h1>
                    <?php if(App\Models\User::all()): ?>
                        <h2><?php echo e(App\Models\DocumentRequest::count()); ?></h2>
                    <?php endif; ?>
                    <canvas id="docresChart"></canvas>
                    
                    <h1>Total Number Of Document Issued: </h1>
                    <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $claimed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <h2><?php echo e($claimed); ?></h2>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <canvas id="docresClaimedChart"></canvas>

                    <?php endif; ?>

                    <?php if(auth()->check() && auth()->user()->hasRole('resident')): ?>
  <div class="container text-center">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Number Of Request: </h5>
            <p class="card-text">
              <?php $__currentLoopData = $docres1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($loop->last): ?>
              <?php echo e($loop->count); ?>

              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Number Of Request Pending: </h5>
            <p class="card-text">
              <?php $__currentLoopData = $pending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($loop->last): ?>
              <?php echo e($loop->count); ?>

              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    &nbsp;
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Number Of Request Approved: </h5>
            <p class="card-text">
              <?php $__currentLoopData = $approved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $approved): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($loop->last): ?>
              <?php echo e($loop->count); ?>

              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Number Of Request Claimed: </h5>
            <p class="card-text">
              <?php $__currentLoopData = $claimed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $claimed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($loop->last): ?>
              <?php echo e($loop->count); ?>

              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
canvas {
  border:1px solid black;
  height: 150px;
  width: 600;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js">
            import { Chart, registerables } from 'chart.js';

</script>
<script type="text/javascript">
  
      var labels =  <?php echo e(Js::from($labels)); ?>;
      var users =  <?php echo e(Js::from($data)); ?>;

      var labels1 =  <?php echo e(Js::from($labels1)); ?>;
      var docres1 =  <?php echo e(Js::from($data1)); ?>;

      var labels2 =  <?php echo e(Js::from($labels2)); ?>;
      var docres2 =  <?php echo e(Js::from($data2)); ?>;
    

      const data = {
        labels: labels,
        datasets: [{
          label: 'No of Users',
          backgroundColor: [
                'Yellow',
                'Blue',
                'Red ',
                'Green',
                'Brown ',
                'Teal',
                'Purple',
                'Gray',
                'Orange',
                'Maroon',
                'Charcoal',
                'Aquamarine'
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };
      const data1 = {
        labels: labels1,
        datasets: [{
          label: 'No of Document Requested',
          backgroundColor: [
                'Yellow',
                'Blue',
                'Red ',
                'Green',
                'Brown ',
                'Teal',
                'Purple',
                'Gray',
                'Orange',
                'Maroon',
                'Charcoal',
                'Aquamarine'
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres1,
        }]
      };
      const data2 = {
        labels: labels2,
        datasets: [{
          label: 'No of Issued Documents',
          backgroundColor: [
                'Yellow',
                'Blue',
                'Red ',
                'Green',
                'Brown ',
                'Teal',
                'Purple',
                'Gray',
                'Orange',
                'Maroon',
                'Charcoal',
                'Aquamarine'
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres2,
        }]
      };
  
      const config = {
        type: 'bar',
        data: data,
        options: {}
      };
      const config1 = {
        type: 'bar',
        data: data1,
        options: {}
      };
      const config2 = {
        type: 'bar',
        data: data2,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
      const docresChart = new Chart(
        document.getElementById('docresChart'),
        config1
      );
      const docresClaimedChart = new Chart(
        document.getElementById('docresClaimedChart'),
        config2
      );
  
</script><?php /**PATH C:\xampp\htdocs\capstone\resources\views//dashboard.blade.php ENDPATH**/ ?>