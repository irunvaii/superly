<?php $__env->startSection('content'); ?>

<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div>
<?php endif; ?>
<?php if(session()->has('message')): ?>
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('message')); ?></div>
<?php endif; ?>
      <?php
        if($general_setting->theme == 'default.css') {
          $color = '#733686';
          $color_rgba = 'rgba(115, 54, 134, 0.8)';
        }
        elseif($general_setting->theme == 'green.css') {
            $color = '#2ecc71';
            $color_rgba = 'rgba(46, 204, 113, 0.8)';
        }
        elseif($general_setting->theme == 'blue.css') {
            $color = '#3498db';
            $color_rgba = 'rgba(52, 152, 219, 0.8)';
        }
        elseif($general_setting->theme == 'dark.css'){
            $color = '#34495e';
            $color_rgba = 'rgba(52, 73, 94, 0.8)';
        }
      ?>
      <div class="row">
        <div class="container-fluid">
          <?php if(\Auth::user()->role_id <= 2 && isset($_COOKIE['login_now']) && $_COOKIE['login_now']): ?>
            <div id="update-alert-section" class="<?php echo e($alertVersionUpgradeEnable===true ? null : 'd-none'); ?> alert alert-primary alert-dismissible fade show" role="alert">
                <p id="announce" class="<?php echo e($alertVersionUpgradeEnable===true ? null : 'd-none'); ?>"><strong>Hurray !!!</strong> A new version <?php echo e(config('auto_update.VERSION')); ?> <span id="newVersionNo"></span> has been released. Please <i><b><a href="<?php echo e(route('new-release')); ?>">Click here</a></b></i> to check upgrade details.</p>
                <button type="button" id="closeButtonUpgrade" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php setcookie('login_now', 0, time() + (86400 * 1), "/");?>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="brand-text float-left mt-4">
                <h3><?php echo e(trans('file.welcome')); ?> <span><?php echo e(Auth::user()->name); ?></span></h3>
            </div>
            <?php
              $revenue_profit_summary = $role_has_permissions_list->where('name', 'revenue_profit_summary')->first();
            ?>
            <?php if($revenue_profit_summary): ?>
            <div class="filter-toggle btn-group">
              <button class="btn btn-secondary date-btn" data-start_date="<?php echo e(date('Y-m-d')); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.Today')); ?></button>
              <button class="btn btn-secondary date-btn" data-start_date="<?php echo e(date('Y-m-d', strtotime(' -7 day'))); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.Last 7 Days')); ?></button>
              <button class="btn btn-secondary date-btn active" data-start_date="<?php echo e(date('Y').'-'.date('m').'-'.'01'); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.This Month')); ?></button>
              <button class="btn btn-secondary date-btn" data-start_date="<?php echo e(date('Y').'-01'.'-01'); ?>" data-end_date="<?php echo e(date('Y').'-12'.'-31'); ?>"><?php echo e(trans('file.This Year')); ?></button>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <!-- Counts Section -->
      <section class="dashboard-counts"> 
        <div class="container-fluid">
          <div class="row">
            <?php if($revenue_profit_summary): ?>
            <div class="col-md-12 form-group">
              <div class="row">
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title">
                    <div class="icon"><i class="dripicons-graph-bar" style="color: #733686"></i></div>
                    <div>
                        <div class="count-number revenue-data"><?php echo e(number_format((float)$revenue,$general_setting->decimal, '.', '')); ?></div>
                        <div class="name"><strong style="color: #733686"><?php echo e(trans('file.revenue')); ?></strong></div>
                    </div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title">
                    <div class="icon"><i class="dripicons-return" style="color: #ff8952"></i></div>
                    <div>
                        <div class="count-number return-data"><?php echo e(number_format((float)$return,$general_setting->decimal, '.', '')); ?></div>
                        <div class="name"><strong style="color: #ff8952"><?php echo e(trans('file.Sale Return')); ?></strong></div>
                    </div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title">
                    <div class="icon"><i class="dripicons-media-loop" style="color: #00c689"></i></div>
                    <div>
                        <div class="count-number purchase_return-data"><?php echo e(number_format((float)$purchase_return,$general_setting->decimal, '.', '')); ?></div>
                        <div class="name"><strong style="color: #00c689"><?php echo e(trans('file.Purchase Return')); ?></strong></div>
                    </div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title">
                    <div class="icon"><i class="dripicons-trophy" style="color: #297ff9"></i></div>
                    <div>
                        <div class="count-number profit-data"><?php echo e(number_format((float)$profit,$general_setting->decimal, '.', '')); ?></div>
                        <div class="name"><strong style="color: #297ff9"><?php echo e(trans('file.profit')); ?></strong></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php
              $cash_flow = $role_has_permissions_list->where('name', 'cash_flow')->first();
            ?>
            <?php if($cash_flow): ?>
            <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4><?php echo e(trans('file.Cash Flow')); ?></h4>
                </div>
                <div class="card-body">
                  <canvas id="cashFlow" data-color = "<?php echo e($color); ?>" data-color_rgba = "<?php echo e($color_rgba); ?>" data-recieved = "<?php echo e(json_encode($payment_recieved)); ?>" data-sent = "<?php echo e(json_encode($payment_sent)); ?>" data-month = "<?php echo e(json_encode($month)); ?>" data-label1="<?php echo e(trans('file.Payment Recieved')); ?>" data-label2="<?php echo e(trans('file.Payment Sent')); ?>"></canvas>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php
              $monthly_summary = $role_has_permissions_list->where('name', 'monthly_summary')->first();
            ?>
            <?php if($monthly_summary): ?>
            <div class="col-md-5 mt-4">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(date('F')); ?> <?php echo e(date('Y')); ?></h4>
                </div>
                <div class="pie-chart mb-2">
                    <canvas id="transactionChart" data-color = "<?php echo e($color); ?>" data-color_rgba = "<?php echo e($color_rgba); ?>" data-revenue=<?php echo e($revenue); ?> data-purchase=<?php echo e($purchase); ?> data-expense=<?php echo e($expense); ?> data-label1="<?php echo e(trans('file.Purchase')); ?>" data-label2="<?php echo e(trans('file.revenue')); ?>" data-label3="<?php echo e(trans('file.Expense')); ?>" width="100" height="95"> </canvas>
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <?php
              $yearly_report = $role_has_permissions_list->where('name', 'yearly_report')->first();
            ?>
            <?php if($yearly_report): ?>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4><?php echo e(trans('file.yearly report')); ?></h4>
                </div>
                <div class="card-body">
                  <canvas id="saleChart" data-sale_chart_value = "<?php echo e(json_encode($yearly_sale_amount)); ?>" data-purchase_chart_value = "<?php echo e(json_encode($yearly_purchase_amount)); ?>" data-label1="<?php echo e(trans('file.Purchased Amount')); ?>" data-label2="<?php echo e(trans('file.Sold Amount')); ?>"></canvas>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <div class="col-md-7">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(trans('file.Recent Transaction')); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary"><?php echo e(trans('file.latest')); ?> 5</div>
                  </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#sale-latest" role="tab" data-toggle="tab"><?php echo e(trans('file.Sale')); ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#purchase-latest" role="tab" data-toggle="tab"><?php echo e(trans('file.Purchase')); ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#quotation-latest" role="tab" data-toggle="tab"><?php echo e(trans('file.Quotation')); ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#payment-latest" role="tab" data-toggle="tab"><?php echo e(trans('file.Payment')); ?></a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade show active" id="sale-latest">
                      <div class="table-responsive">
                        <table id="recent-sale" class="table">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.customer')); ?></th>
                              <th><?php echo e(trans('file.status')); ?></th>
                              <th><?php echo e(trans('file.grand total')); ?></th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="purchase-latest">
                      <div class="table-responsive">
                        <table id="recent-purchase" class="table">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.Supplier')); ?></th>
                              <th><?php echo e(trans('file.status')); ?></th>
                              <th><?php echo e(trans('file.grand total')); ?></th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="quotation-latest">
                      <div class="table-responsive">
                        <table id="recent-quotation" class="table">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.customer')); ?></th>
                              <th><?php echo e(trans('file.status')); ?></th>
                              <th><?php echo e(trans('file.grand total')); ?></th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="payment-latest">
                      <div class="table-responsive">
                        <table id="recent-payment" class="table">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.Amount')); ?></th>
                              <th><?php echo e(trans('file.Paid By')); ?></th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(trans('file.Best Seller').' '.date('F')); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary"><?php echo e(trans('file.top')); ?> 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table id="monthly-best-selling-qty" class="table">
                      <thead>
                        <tr>
                          <th><?php echo e(trans('file.Product Details')); ?></th>
                          <th><?php echo e(trans('file.qty')); ?></th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(trans('file.Best Seller').' '.date('Y'). '('.trans('file.qty').')'); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary"><?php echo e(trans('file.top')); ?> 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table id="yearly-best-selling-qty" class="table">
                      <thead>
                        <tr>
                          <th><?php echo e(trans('file.Product Details')); ?></th>
                          <th><?php echo e(trans('file.qty')); ?></th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(trans('file.Best Seller').' '.date('Y') . '('.trans('file.price').')'); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary"><?php echo e(trans('file.top')); ?> 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table id="yearly-best-selling-price" class="table">
                      <thead>
                        <tr>
                          <th><?php echo e(trans('file.Product Details')); ?></th>
                          <th><?php echo e(trans('file.grand total')); ?></th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        url: '<?php echo e(url("/yearly-best-selling-price")); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var url = '<?php echo e(url("/public/images/product")); ?>';
            data.forEach(function(item){
              if(item.product_images)
                var images = item.product_images.split('|');
              else
                var images = ['zummXD2dvAtI.png'];
              $('#yearly-best-selling-price').find('tbody').append('<tr><td><img src="'+url+'/'+images[0]+'" height="25" width="30"> '+item.product_name+' ['+item.product_code+']</td><td>'+item.total_price+'</td></tr>');
            })
        }
      });
    });

    $(document).ready(function(){
      $.ajax({
        url: '<?php echo e(url("/yearly-best-selling-qty")); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var url = '<?php echo e(url("/public/images/product")); ?>';
            data.forEach(function(item){
              if(item.product_images)
                var images = item.product_images.split('|');
              else
                var images = ['zummXD2dvAtI.png'];
              $('#yearly-best-selling-qty').find('tbody').append('<tr><td><img src="'+url+'/'+images[0]+'" height="25" width="30"> '+item.product_name+' ['+item.product_code+']</td><td>'+item.sold_qty+'</td></tr>');
            })
        }
      });
    });

    $(document).ready(function(){
      $.ajax({
        url: '<?php echo e(url("/monthly-best-selling-qty")); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var url = '<?php echo e(url("/public/images/product")); ?>';
            data.forEach(function(item){
              if(item.product_images)
                var images = item.product_images.split('|');
              else
                var images = ['zummXD2dvAtI.png'];
              $('#monthly-best-selling-qty').find('tbody').append('<tr><td><img src="'+url+'/'+images[0]+'" height="25" width="30"> '+item.product_name+' ['+item.product_code+']</td><td>'+item.sold_qty+'</td></tr>');
            })
        }
      });
    });

    $(document).ready(function(){
      $.ajax({
        url: '<?php echo e(url("/recent-sale")); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            data.forEach(function(item){
              var sale_date = dateFormat(item.created_at.split('T')[0], '<?php echo e($general_setting->date_format); ?>')
              if(item.sale_status == 1){
                var status = '<div class="badge badge-success"><?php echo e(trans("file.Completed")); ?></div>';
              } else if(item.sale_status == 2) {
                var status = '<div class="badge badge-danger"><?php echo e(trans("file.Pending")); ?></div>';
              } else {
                var status = '<div class="badge badge-warning"><?php echo e(trans("file.Draft")); ?></div>';
              }
              $('#recent-sale').find('tbody').append('<tr><td>'+sale_date+'</td><td>'+item.reference_no+'</td><td>'+item.name+'</td><td>'+status+'</td><td>'+item.grand_total+'</td></tr>');
            })
        }
      });
    });

    $(document).ready(function(){
      $.ajax({
        url: '<?php echo e(url("/recent-purchase")); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            data.forEach(function(item){
              var payment_date = dateFormat(item.created_at.split('T')[0], '<?php echo e($general_setting->date_format); ?>')
              if(item.payment_status == 1){
                var status = '<div class="badge badge-success"><?php echo e(trans("file.Completed")); ?></div>';
              } else if(item.payment_status == 2) {
                var status = '<div class="badge badge-danger"><?php echo e(trans("file.Pending")); ?></div>';
              } else {
                var status = '<div class="badge badge-warning"><?php echo e(trans("file.Draft")); ?></div>';
              }
              $('#recent-purchase').find('tbody').append('<tr><td>'+payment_date+'</td><td>'+item.reference_no+'</td><td>'+item.name+'</td><td>'+status+'</td><td>'+item.grand_total+'</td></tr>');
            })
        }
      });
    });

    $(document).ready(function(){
      $.ajax({
        url: '<?php echo e(url("/recent-quotation")); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            data.forEach(function(item){
              var quotation_date = dateFormat(item.created_at.split('T')[0], '<?php echo e($general_setting->date_format); ?>')
              if(item.quotation_status == 1){
                var status = '<div class="badge badge-success"><?php echo e(trans("file.Completed")); ?></div>';
              } else if(item.quotation_status == 2) {
                var status = '<div class="badge badge-danger"><?php echo e(trans("file.Pending")); ?></div>';
              } else {
                var status = '<div class="badge badge-warning"><?php echo e(trans("file.Draft")); ?></div>';
              }
              $('#recent-quotation').find('tbody').append('<tr><td>'+quotation_date+'</td><td>'+item.reference_no+'</td><td>'+item.name+'</td><td>'+status+'</td><td>'+item.grand_total+'</td></tr>');
            })
        }
      });
    });

    $(document).ready(function(){
      $.ajax({
        url: '<?php echo e(url("/recent-payment")); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            data.forEach(function(item){
              var payment_date = dateFormat(item.created_at.split('T')[0], '<?php echo e($general_setting->date_format); ?>')
              $('#recent-payment').find('tbody').append('<tr><td>'+payment_date+'</td><td>'+item.payment_reference+'</td><td>'+item.amount+'</td><td>'+item.paying_method+'</td></tr>');
            })
        }
      });
    });

    function dateFormat(inputDate, format) {
        const date = new Date(inputDate);
        //extract the parts of the date
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();    
        //replace the month
        format = format.replace("m", month.toString().padStart(2,"0"));        
        //replace the year
        format = format.replace("Y", year.toString());
        //replace the day
        format = format.replace("d", day.toString().padStart(2,"0"));
        return format;
    }
    

    $(document).ready(function(){
      $.ajax({
        url: '<?php echo e(url("/")); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#userShowModal').modal('show');
            $('#user-id').text(data.id);
            $('#user-name').text(data.name);
            $('#user-email').text(data.email);
        }
      });
    })
    // Show and hide color-switcher
    $(".color-switcher .switcher-button").on('click', function() {
        $(".color-switcher").toggleClass("show-color-switcher", "hide-color-switcher", 300);
    });

    // Color Skins
    $('a.color').on('click', function() {
        /*var title = $(this).attr('title');
        $('#style-colors').attr('href', 'css/skin-' + title + '.css');
        return false;*/
        $.get('setting/general_setting/change-theme/' + $(this).data('color'), function(data) {
        });
        var style_link= $('#custom-style').attr('href').replace(/([^-]*)$/, $(this).data('color') );
        $('#custom-style').attr('href', style_link);
    });

    $(".date-btn").on("click", function() {
        $(".date-btn").removeClass("active");
        $(this).addClass("active");
        var start_date = $(this).data('start_date');
        var end_date = $(this).data('end_date');
        $.get('dashboard-filter/' + start_date + '/' + end_date, function(data) {
            //console.log(data);
            dashboardFilter(data);
        });
    });

    function dashboardFilter(data){
        $('.revenue-data').hide();
        $('.revenue-data').html(parseFloat(data[0]).toFixed(<?php echo e($general_setting->decimal); ?>));
        $('.revenue-data').show(500);

        $('.return-data').hide();
        $('.return-data').html(parseFloat(data[1]).toFixed(<?php echo e($general_setting->decimal); ?>));
        $('.return-data').show(500);

        $('.profit-data').hide();
        $('.profit-data').html(parseFloat(data[2]).toFixed(<?php echo e($general_setting->decimal); ?>));
        $('.profit-data').show(500);

        $('.purchase_return-data').hide();
        $('.purchase_return-data').html(parseFloat(data[3]).toFixed(<?php echo e($general_setting->decimal); ?>));
        $('.purchase_return-data').show(500);
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepro310\resources\views/backend/index.blade.php ENDPATH**/ ?>