 <?php $__env->startSection('content'); ?>

<?php if($errors->has('name')): ?>
<div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e($errors->first('name')); ?></div>
<?php endif; ?>
<?php if(session()->has('message')): ?>
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('message')); ?></div>
<?php endif; ?>
<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div>
<?php endif; ?>

<section>
    <div class="container-fluid">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#createModal"><i class="dripicons-plus"></i> <?php echo e(trans('file.Add Table')); ?></button>
    </div>
    <div class="table-responsive">
        <table id="table-table" class="table">
            <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th><?php echo e(trans('file.name')); ?></th>
                    <th><?php echo e(trans('file.Number of Person')); ?></th>
                    <th><?php echo e(trans('file.Description')); ?></th>
                    <th class="not-exported"><?php echo e(trans('file.action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $lims_table_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-id="<?php echo e($table->id); ?>">
                    <td><?php echo e($key); ?></td>
                    <td><?php echo e($table->name); ?></td>
                    <td><?php echo e($table->number_of_person); ?></td>
                    <td><?php echo e($table->description); ?></td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(trans('file.action')); ?>

                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                <li>
                                    <button type="button" data-id="<?php echo e($table->id); ?>" data-name="<?php echo e($table->name); ?>" data-number_of_person="<?php echo e($table->number_of_person); ?>" data-description="<?php echo e($table->description); ?>" class="edit-btn btn btn-link" data-toggle="modal" data-target="#editModal" ><i class="dripicons-document-edit"></i>  <?php echo e(trans('file.edit')); ?></button>
                                </li>
                                <li class="divider"></li>
                                <?php echo e(Form::open(['route' => ['tables.destroy', $table->id], 'method' => 'DELETE'] )); ?>

                                <li>
                                  <button type="submit" class="btn btn-link" onclick="return confirmDelete()"><i class="dripicons-trash"></i> <?php echo e(trans('file.delete')); ?></button>
                                </li>
                                <?php echo e(Form::close()); ?>

                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Create Modal -->
<div id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <?php echo Form::open(['route' => 'tables.store', 'method' => 'post']); ?>

        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Add Table')); ?></h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
        </div>
        <div class="modal-body">
          <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
          <form>
          	<div class="row">
          		<div class="col-md-6 form-group">
	                <label><?php echo e(trans('file.name')); ?> *</label>
	                <?php echo e(Form::text('name',null,array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'Type table name...'))); ?>

	            </div>
	            <div class="col-md-6 form-group">
	                <label><?php echo e(trans('file.Number of Person')); ?> *</label>
	                <?php echo e(Form::number('number_of_person', null, array('required' => 'required', 'class' => 'form-control'))); ?>

	            </div>
	            <div class="col-md-12 form-group">
	                <label><?php echo e(trans('file.Description')); ?> *</label>
	                <textarea class="form-control" name="description" rows="5"></textarea>
	            </div>
          	</div>
            <div class="form-group">
              <input type="submit" value="<?php echo e(trans('file.submit')); ?>" class="btn btn-primary">
            </div>
          </form>
        </div>
        <?php echo e(Form::close()); ?>

      </div>
    </div>
</div>
<!-- Edit Modal -->
<div id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
        <?php echo e(Form::open(['route' => ['tables.update', 1], 'method' => 'PUT'] )); ?>

      <div class="modal-header">
        <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Update Table')); ?></h5>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
      </div>
      <div class="modal-body">
        <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
        <form>
	      	<div class="row">
	      		<div class="col-md-6 form-group">
	      			<input type="hidden" name="table_id">
	                <label><?php echo e(trans('file.name')); ?> *</label>
	                <?php echo e(Form::text('name',null,array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'Type table name...'))); ?>

	            </div>
	            <div class="col-md-6 form-group">
	                <label><?php echo e(trans('file.Number of Person')); ?> *</label>
	                <?php echo e(Form::number('number_of_person', null, array('required' => 'required', 'class' => 'form-control'))); ?>

	            </div>
	            <div class="col-md-12 form-group">
	                <label><?php echo e(trans('file.Description')); ?> *</label>
	                <textarea class="form-control" name="description" rows="5"></textarea>
	            </div>
	      	</div>
	        <div class="form-group">
	          <input type="submit" value="<?php echo e(trans('file.submit')); ?>" class="btn btn-primary">
	        </div>
	    </form>
      <?php echo e(Form::close()); ?>

    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $("ul#setting").siblings('a').attr('aria-expanded','true');
    $("ul#setting").addClass("show");
    $("ul#setting #table-menu").addClass("active");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function confirmDelete() {
      if (confirm("Are you sure want to delete?")) {
          return true;
      }
      return false;
    }
$(document).ready(function() {
    $('.edit-btn').on('click', function(){
        $("#editModal input[name='table_id']").val($(this).data('id'));
        $("#editModal input[name='name']").val($(this).data('name'));
        $("#editModal input[name='number_of_person']").val($(this).data('number_of_person'));
        $("#editModal textarea[name='description']").val($(this).data('description'));
    });
});

    $('#table-table').DataTable( {
        "order": [],
        'language': {
            'lengthMenu': '_MENU_ <?php echo e(trans("file.records per page")); ?>',
             "info":      '<small><?php echo e(trans("file.Showing")); ?> _START_ - _END_ (_TOTAL_)</small>',
            "search":  '<?php echo e(trans("file.Search")); ?>',
            'paginate': {
                    'previous': '<i class="dripicons-chevron-left"></i>',
                    'next': '<i class="dripicons-chevron-right"></i>'
            }
        },
        'columnDefs': [
            {
                "orderable": false,
                'targets': [0, 3, 4]
            },
            {
                'render': function(data, type, row, meta){
                    if(type === 'display'){
                        data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                    }

                   return data;
                },
                'checkboxes': {
                   'selectRow': true,
                   'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                },
                'targets': [0]
            }
        ],
        'select': { style: 'multi',  selector: 'td:first-child'},
        'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        dom: '<"row"lfB>rtip',
        buttons: [
            {
                extend: 'pdf',
                text: '<i title="export to pdf" class="fa fa-file-pdf-o"></i>',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'excel',
                text: '<i title="export to excel" class="dripicons-document-new"></i>',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'csv',
                text: '<i title="export to csv" class="fa fa-file-text-o"></i>',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'print',
                text: '<i title="print" class="fa fa-print"></i>',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'colvis',
                text: '<i title="column visibility" class="fa fa-eye"></i>',
                columns: ':gt(0)'
            },
        ],
    } );
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\salepro\resources\views/backend/table/index.blade.php ENDPATH**/ ?>