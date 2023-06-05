<?php $__env->startSection('title', 'NEGO | E-com'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="m-0 text-dark">Dashboard</h1>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body bg-primary">
                    <h3 class="h3"><?php echo e($customer_count); ?></h3>
                    <p>Clients in your store </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body bg-info">
                    <h3 class="h3">Ksh. <?php echo e($average_purchase_price); ?> </h3>
                    <p>Average spent in Product Purchase </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body bg-success">
                    <h3 class="h3">Ksh. <?php echo e($average_income); ?></h3>
                    <p>Average Sales Income</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5 pb-3">
        
        <div class="col-12 col-sm-12 col-md-5">
            <div class="card">
                <div class="card-body pt-3">
                    <h3 class="h3">Store Status</h3>

                    <div class="row pt-5 bg-success">
                        <div class="col-12 col-md-12 col-lg-12 col-sm-12 pt-2 pb-2">
                            <h4 class="text-white"><span><i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                        </span> Running</h4>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <p class="text-mute">Last Downtime</p>
                            <p class="">Never</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <p class="text-mute">Response Time</p>
                            <p class="">00:00:00</p>
                        </div>
                    </div>

                    <div class="row pt-4 bg-light">
                        <div class="col-12 col-sm-12 col-md-12 pt-2 pb-2">
                            <h4>Engineer on Call</h4>
                            <p>Mugo Gachuki</p>
                        </div>
                    </div>
                    
                    <div class="row pt-4">
                        <div class="col-12 col-sm-12 col-md-12">
                            <h4>Contact Information</h4>
                            <p><span><i class="fa fa-phone" aria-hidden="true"></i>
                                </span> +254768276444</p>
                            <p><span><i class="fa fa-envelope" aria-hidden="true"></i>
                                </span> mugohenry19@gmail.com</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-7">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="mb-3 btn btn-block btn-info" data-toggle="modal" data-target="#addTask">Add Task + </button>

                    <h4 class="pb-3 h4">Task List</h4>


                    <table id="task_table" class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Task</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Deadline</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Urgency</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Actions</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td colspan="3"> <?php echo e($data->task_title); ?> </td>
                                <td colspan="3"> <?php echo e($data->deadline); ?> </td>
                                <td colspan="3">
                                    <?php if($data->urgency == 1): ?>
                                        <p class="badge badge-danger">Very Urgent</p>
                                    <?php elseif($data->urgency == 2): ?>
                                        <p class="badge badge-warning">Urgent</p>
                                    <?php elseif($data->urgency == 3): ?>
                                        <p class="badge badge-primary">Important</p>
                                    <?php else: ?>
                                        <p class="badge badge-secondary">Not Urgent</p>
                                    <?php endif; ?>
                                </td>
                                <td colspan="3">
                                    <?php if($data->status == 0): ?>
                                        <p class="badge badge-info">Scheduled</p>
                                    <?php elseif($data->status == 1): ?>
                                        <p class="badge badge-warning">In progress</p>
                                    <?php else: ?>
                                        <p class="badge badge-success">Completed</p>
                                    <?php endif; ?>
                                </td>
                                <td colspan="3">
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-solid btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="100%" class="text-center"> No Tasks Created </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

<!-- Task creation modal -->
<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addTask" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Task Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action=" <?php echo e(route('tasks.store')); ?> " method="POST">
            <?php echo csrf_field(); ?>
             <div class="form-group row">
                 <label for="task_title">Task</label>
                 <input type="text" name="task_title" class="form-control">
             </div>
             <div class="form-group row">
                 <label for="deadline">Deadline</label>
                 <input type="date" name="deadline" class="form-control">
             </div>
             <div class="form-group row">
                  <div class="col-12 col-sm-12 col-md-6">
                      <label for="urgency">Urgency</label>
                      <select class="form-control" name="urgency">
                          <option value="1">Very Urgent</option>
                          <option value="2">Urgent</option>
                          <option value="3">Important</option>
                          <option value="4">Not Urgent</option>
                      </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                      <label for="status">Task Status</label>
                      <select class="form-control" name="status">
                          <option value="0">Scheduled</option>
                          <option value="1">In Progress</option>
                          <option value="2">Completed</option>
                      </select>
                  </div>
             </div>
             <div class="form-group row p-3">
                 <div class="col-12 text-center">
                     <input type="submit" name="submit" class="btn btn-block btn-success" value="Create Task">
                 </div>
             </div>

         </form>
      </div>
    </div>
  </div>
</div>

<!-- Task deletion modal -->
<?php if(count($tasks) > 0): ?>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <h4 class="text-center">Confirm Delete</h4>
        <form action=" <?php echo e(route('tasks.destroy',$data->id)); ?> " method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <div class="form-group row">
                <div class="col-12 text-center">
                    <input type="submit" name="submit" value="Yes" class="btn btn-block btn-success">
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
         $('#task_table').DataTable();
     </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mugo\Documents\nego-master\nego-master\resources\views/home.blade.php ENDPATH**/ ?>