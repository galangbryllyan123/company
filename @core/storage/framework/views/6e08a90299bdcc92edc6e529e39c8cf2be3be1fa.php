<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            padding: 0 !important;
        }
        div.dataTables_wrapper div.dataTables_length select {
            width: 60px;
            display: inline-block;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('All Donation Logs')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.error-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <h4 class="header-title"><?php echo e(__('All Donation Logs')); ?></h4>
                                    <div class="bulk-delete-wrapper">
                                        <div class="select-box-wrap">
                                            <select name="bulk_option" id="bulk_option">
                                                <option value=""><?php echo e(__('Bulk Action')); ?></option>
                                                <option value="delete"><?php echo e(__('Delete')); ?></option>
                                            </select>
                                            <button class="btn btn-primary btn-sm" id="bulk_delete_btn"><?php echo e(__('Apply')); ?></button>
                                        </div>
                                    </div>
                                    <div class="data-tables datatable-primary table-responsive">
                                        <table id="all_user_table" >
                                            <thead class="text-capitalize">
                                            <tr>
                                                <th class="no-sort">
                                                    <div class="mark-all-checkbox">
                                                        <input type="checkbox" class="all-checkbox">
                                                    </div>
                                                </th>
                                                <th><?php echo e(__('ID')); ?></th>
                                                <th><?php echo e(__('Payer Name')); ?></th>
                                                <th><?php echo e(__('Payer Email')); ?></th>
                                                <th><?php echo e(__('Donation Name')); ?></th>
                                                <th><?php echo e(__('Donated Amount')); ?></th>
                                                <th><?php echo e(__('Payment Gateway')); ?></th>
                                                <th><?php echo e(__('Status')); ?></th>
                                                <th><?php echo e(__('Date')); ?></th>
                                                <th><?php echo e(__('Action')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $all_donation_logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <div class="bulk-checkbox-wrapper">
                                                            <input type="checkbox" class="bulk-checkbox" name="bulk_delete[]" value="<?php echo e($data->id); ?>">
                                                        </div>
                                                    </td>
                                                    <td><?php echo e($data->id); ?></td>
                                                    <td><?php echo e($data->name); ?></td>
                                                    <td><?php echo e($data->email); ?></td>
                                                    <td>
                                                        <?php if(!empty($data->donation)): ?>
                                                        <?php echo e($data->donation->title); ?>

                                                        <?php else: ?>
                                                        <div class="alert alert-warning"><?php echo e(__('This Donation Is not available or Removed')); ?></div>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e(amount_with_currency_symbol($data->amount)); ?></td>
                                                    <td><strong><?php echo e(ucwords(str_replace('_',' ',$data->payment_gateway))); ?></strong></td>
                                                    <td>
                                                        <?php if($data->status == 'pending'): ?>
                                                            <span class="alert alert-warning text-capitalize"><?php echo e(__($data->status)); ?></span>
                                                        <?php else: ?>
                                                            <span class="alert alert-success text-capitalize"><?php echo e(__($data->status)); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e(date_format($data->created_at,'d M Y')); ?></td>
                                                    <td>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-popover','data' => ['url' => route('admin.donations.payment.delete',$data->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('delete-popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.donations.payment.delete',$data->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                        <a href="#"
                                                           data-toggle="modal"
                                                           data-target="#view_quote_details_modal"
                                                           data-email="<?php echo e($data->email); ?>"
                                                           data-name="<?php echo e($data->name); ?>"
                                                           <?php if(!empty($data->donation)): ?>
                                                           data-donation_name="<?php echo e($data->donation->title); ?>"
                                                           <?php endif; ?>
                                                           data-donate_amount="<?php echo e(site_currency_symbol()); ?><?php echo e($data->amount); ?>"
                                                           data-payment_gateway="<?php echo e(ucwords(str_replace('_',' ',$data->payment_gateway))); ?>"
                                                           data-transaction_id="<?php echo e($data->transaction_id); ?>"
                                                           data-status="<?php echo e($data->status); ?>"
                                                           data-date="<?php echo e(date_format($data->created_at,'d M Y')); ?>"
                                                           class="btn btn-xs btn-primary btn-sm mb-3 mr-1 view_quote_details_btn"
                                                        >
                                                            <i class="ti-eye"></i>
                                                        </a>
                                                        <?php if($data->payment_gateway === 'manual_payment' && $data->status === 'pending'): ?>
                                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.payment-approve','data' => ['url' => route('admin.donations.payment.approve',$data->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.payment-approve'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.donations.payment.approve',$data->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                        <?php endif; ?>
                                                        <?php if(!empty($data->donation) && $data->status === 'complete'): ?>
                                                        <form action="<?php echo e(route('frontend.donation.invoice.generate')); ?>"  method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="id" id="invoice_generate_order_field" value="<?php echo e($data->id); ?>">
                                                            <button class="btn btn-secondary mb-2" type="submit"><?php echo e(__('Invoice')); ?></button>
                                                        </form>
                                                        <?php endif; ?>
                                                        <?php if(!empty($data->user_id) && $data->status === 'pending'): ?>
                                                            <form action="<?php echo e(route('admin.donation.reminder')); ?>"  method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                                                                <button class="btn btn-secondary mb-2" type="submit"><i class="fas fa-bell"></i></button>
                                                            </form>
                                                        <?php endif; ?>

                                                        <?php if(!empty($data->manual_payment_attachment)): ?>
                                                            <a class="btn btn-warning mt-2 btn-xs mb-3" href="<?php echo e(url('assets/uploads/attachment/'.$data->manual_payment_attachment) ?? ''); ?>" target="_blank">
                                                                <?php echo e(__('View Attachment')); ?>

                                                            </a>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Primary table end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="view_quote_details_modal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="view-quote-details-info">
                    <h4 class="title"><?php echo e(__('View Payment Logs Details Information')); ?></h4>
                    <div class="view-quote-top-wrap">
                        <div class="status-wrap">
                            <?php echo e(__('Status:')); ?> <span class="quote-status-span"></span>
                        </div>
                        <div class="data-wrap">
                           <?php echo e(__(' Date:')); ?> <span class="quote-date-span"></span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="quote-all-custom-fields table-striped table-bordered"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Start datatable js -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function($) {

            $(document).on('click','#bulk_delete_btn',function (e) {
                e.preventDefault();

                var bulkOption = $('#bulk_option').val();
                var allCheckbox =  $('.bulk-checkbox:checked');
                var allIds = [];
                allCheckbox.each(function(index,value){
                    allIds.push($(this).val());
                });
                if(allIds != '' && bulkOption == 'delete'){
                    $(this).text('<?php echo e(__('Deleting...')); ?>');
                    $.ajax({
                        'type' : "POST",
                        'url' : "<?php echo e(route('admin.donations.payment.bulk.action')); ?>",
                        'data' : {
                            _token: "<?php echo e(csrf_token()); ?>",
                            ids: allIds
                        },
                        success:function (data) {
                            location.reload();
                        }
                    });
                }

            });

            $('.all-checkbox').on('change',function (e) {
                e.preventDefault();
                var value = $('.all-checkbox').is(':checked');
                var allChek = $(this).parent().parent().parent().parent().parent().find('.bulk-checkbox');
                //have write code here fr
                if( value == true){
                    allChek.prop('checked',true);
                }else{
                    allChek.prop('checked',false);
                }
            });

            $(document).on('click','.view_quote_details_btn',function (e) {
                e.preventDefault();
                var el = $(this);
                var allData = el.data();
                var parent = $('#view_quote_details_modal');
                var statusClass = allData.status == 'pending' ? 'alert alert-warning' : 'alert alert-success';

                parent.find('.quote-status-span').text(allData.status).addClass(statusClass);
                parent.find('.quote-date-span').text(allData.date);
                parent.find('.quote-all-custom-fields').html('');
                delete allData.date;
                delete allData.status;
                delete allData.target;
                delete allData.toggle;
                $.each(allData,function (index,value) {
                    var curSymbol = index == 'package_price' ? "<?php echo e(site_currency_symbol()); ?>" :  "";
                    parent.find('.quote-all-custom-fields').append('<tr><td class="fname">'+index.replace('_',' ')+'</td> <td class="fvalue">'+curSymbol+value+'</td></tr>');
                });
            });

            $('#all_user_table').DataTable( {
                "order": [[ 1, "desc" ]],
                "columnDefs": [ {
                    "targets": 'no-sort',
                    "orderable": false,
                } ]
            } );

        } );
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/nexelit.xgenious.com/@core/resources/views/backend/donations/donation-payment-logs-all.blade.php ENDPATH**/ ?>