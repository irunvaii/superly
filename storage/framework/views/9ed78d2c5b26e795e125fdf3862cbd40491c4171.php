<!DOCTYPE html>
<html dir="<?php if( Config::get('app.locale') == 'ar' || $general_setting->is_rtl): ?><?php echo e('rtl'); ?><?php endif; ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if(!config('database.connections.saleprosaas_landlord')): ?>
    <link rel="icon" type="image/png" href="<?php echo e(url('logo', $general_setting->site_logo)); ?>" />
    <title><?php echo e($general_setting->site_title); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="manifest" href="<?php echo e(url('manifest.json')); ?>">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="preload" href="<?php echo asset('vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="<?php echo asset('vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo asset('vendor/jquery-timepicker/jquery.timepicker.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/jquery-timepicker/jquery.timepicker.min.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="<?php echo asset('vendor/bootstrap/css/awesome-bootstrap-checkbox.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/bootstrap/css/awesome-bootstrap-checkbox.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="<?php echo asset('vendor/bootstrap/css/bootstrap-select.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/bootstrap/css/bootstrap-select.min.css') ?>" rel="stylesheet"></noscript>
    <!-- Font Awesome CSS-->
    <link rel="preload" href="<?php echo asset('vendor/font-awesome/css/font-awesome.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"></noscript>
    <!-- Drip icon font-->
    <link rel="preload" href="<?php echo asset('vendor/dripicons/webfont.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/dripicons/webfont.css') ?>" rel="stylesheet"></noscript>
    
    <!-- jQuery Circle-->
    <link rel="preload" href="<?php echo asset('css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" rel="stylesheet"></noscript>
    <!-- Custom Scrollbar-->
    <link rel="preload" href="<?php echo asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" rel="stylesheet"></noscript>

    <?php if(Route::current()->getName() != '/'): ?>
    <!-- date range stylesheet-->
    <link rel="preload" href="<?php echo asset('vendor/daterange/css/daterangepicker.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/daterange/css/daterangepicker.min.css') ?>" rel="stylesheet"></noscript>
    <!-- table sorter stylesheet-->
    <link rel="preload" href="<?php echo asset('vendor/datatable/dataTables.bootstrap4.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('vendor/datatable/dataTables.bootstrap4.min.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css" rel="stylesheet"></noscript>
    <link rel="preload" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet"></noscript>
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo asset('css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/dropzone.css') ?>">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo asset('css/custom-'.$general_setting->theme) ?>" type="text/css" id="custom-style">

    <?php if( Config::get('app.locale') == 'ar' || $general_setting->is_rtl): ?>
      <!-- RTL css -->
      <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap-rtl.min.css') ?>" type="text/css">
      <link rel="stylesheet" href="<?php echo asset('css/custom-rtl.css') ?>" type="text/css" id="custom-style">
    <?php endif; ?>
    <?php else: ?>
    <link rel="icon" type="image/png" href="<?php echo e(url('../../logo', $general_setting->site_logo)); ?>" />
    <title><?php echo e($general_setting->site_title); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="manifest" href="<?php echo e(url('manifest.json')); ?>">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('../../vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="preload" href="<?php echo asset('../../vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="<?php echo asset('../../vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="<?php echo asset('../../vendor/jquery-timepicker/jquery.timepicker.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/jquery-timepicker/jquery.timepicker.min.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="<?php echo asset('../../vendor/bootstrap/css/awesome-bootstrap-checkbox.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/bootstrap/css/awesome-bootstrap-checkbox.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="<?php echo asset('../../vendor/bootstrap/css/bootstrap-select.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/bootstrap/css/bootstrap-select.min.css') ?>" rel="stylesheet"></noscript>
    <!-- Font Awesome CSS-->
    <link rel="preload" href="<?php echo asset('../../vendor/font-awesome/css/font-awesome.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"></noscript>
    <!-- Drip icon font-->
    <link rel="preload" href="<?php echo asset('../../vendor/dripicons/webfont.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/dripicons/webfont.css') ?>" rel="stylesheet"></noscript>
    
    <!-- jQuery Circle-->
    <link rel="preload" href="<?php echo asset('../../css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" rel="stylesheet"></noscript>
    <!-- Custom Scrollbar-->
    <link rel="preload" href="<?php echo asset('../../vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" rel="stylesheet"></noscript>

    <?php if(Route::current()->getName() != '/'): ?>
    <!-- date range stylesheet-->
    <link rel="preload" href="<?php echo asset('../../vendor/daterange/css/daterangepicker.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/daterange/css/daterangepicker.min.css') ?>" rel="stylesheet"></noscript>
    <!-- table sorter stylesheet-->
    <link rel="preload" href="<?php echo asset('../../vendor/datatable/dataTables.bootstrap4.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="<?php echo asset('../../vendor/datatable/dataTables.bootstrap4.min.css') ?>" rel="stylesheet"></noscript>
    <link rel="preload" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css" rel="stylesheet"></noscript>
    <link rel="preload" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet"></noscript>
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo asset('../../css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('../../css/dropzone.css') ?>">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo asset('../../css/custom-'.$general_setting->theme) ?>" type="text/css" id="custom-style">

    <?php if( Config::get('app.locale') == 'ar' || $general_setting->is_rtl): ?>
      <!-- RTL css -->
      <link rel="stylesheet" href="<?php echo asset('../../vendor/bootstrap/css/bootstrap-rtl.min.css') ?>" type="text/css">
      <link rel="stylesheet" href="<?php echo asset('../../css/custom-rtl.css') ?>" type="text/css" id="custom-style">
    <?php endif; ?>
    <?php endif; ?>
    <!-- Google fonts - Roboto -->
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Nunito:400,500,700" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css?family=Nunito:400,500,700" rel="stylesheet"></noscript>
  </head>

  <body class="<?php if($theme == 'dark'): ?>dark-mode dripicons-brightness-low <?php endif; ?>  <?php if(Route::current()->getName() == 'sale.pos'): ?> pos-page <?php endif; ?>" onload="myFunction()">
    <div id="loader"></div>
      <!-- Side Navbar -->
      <nav class="side-navbar">
        <span class="brand-big">
            <?php if($general_setting->site_logo): ?>
            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('logo', $general_setting->site_logo)); ?>" width="115"></a>
            <?php else: ?>
            <a href="<?php echo e(url('/')); ?>"><h1 class="d-inline"><?php echo e($general_setting->site_title); ?></h1></a>
            <?php endif; ?>
        </span>
        <?php echo $__env->make('backend.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </nav>

    <div class="page">
        <!-- navbar-->
      <?php if(Route::current()->getName() != 'sale.pos'): ?>
      <header class="container-fluid">
        <nav class="navbar">
            <a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i></a>


            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
            <div class="dropdown">
              <a class="btn-pos btn-sm" type="button" data-toggle="dropdown" aria-expanded="false">
                <i class="dripicons-plus"></i>
              </a>
              <ul class="dropdown-menu">
                <?php
                    $category_permission_active = $role_has_permissions_list->where('name', 'category')->first();
                ?>
                <?php if($category_permission_active): ?>
                <li class="dropdown-item"><a data-toggle="modal" data-target="#category-modal"><?php echo e(__('file.Add Category')); ?></a></li>
                <?php endif; ?>
                <?php
                    $add_permission_active = $role_has_permissions_list->where('name', 'products-add')->first();
                ?>
                <?php if($add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('products.create')); ?>"><?php echo e(__('file.add_product')); ?></a></li>
                <?php endif; ?>
                <?php
                $add_permission_active = $role_has_permissions_list->where('name', 'purchases-add')->first();
                ?>
                <?php if($add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('purchases.create')); ?>"><?php echo e(trans('file.Add Purchase')); ?></a></li>
                <?php endif; ?>
                <?php
                $sale_add_permission_active = $role_has_permissions_list->where('name', 'sales-add')->first();
                ?>
                <?php if($sale_add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('sales.create')); ?>"><?php echo e(trans('file.Add Sale')); ?></a></li>
                <?php endif; ?>
                <?php
                $expense_add_permission_active = $role_has_permissions_list->where('name', 'expenses-add')->first();
                ?>
                <?php if($expense_add_permission_active): ?>
                <li class="dropdown-item"><a data-toggle="modal" data-target="#expense-modal"> <?php echo e(trans('file.Add Expense')); ?></a></li>
                <?php endif; ?>
                <?php
                $quotation_add_permission_active = $role_has_permissions_list->where('name', 'quotes-add')->first();
                ?>
                <?php if($quotation_add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('quotations.create')); ?>"><?php echo e(trans('file.Add Quotation')); ?></a></li>
                <?php endif; ?>
                <?php
                $transfer_add_permission_active = $role_has_permissions_list->where('name', 'transfers-add')->first();
                ?>
                <?php if($transfer_add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('transfers.create')); ?>"><?php echo e(trans('file.Add Transfer')); ?></a></li>
                <?php endif; ?>
                <?php
                $return_add_permission_active = $role_has_permissions_list->where('name', 'returns-add')->first();
                ?>
                <?php if($return_add_permission_active): ?>
                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#add-sale-return"> <?php echo e(trans('file.Add Return')); ?></a></li>
                <?php endif; ?>
                <?php
                $purchase_return_add_permission_active = $role_has_permissions_list->where('name', 'purchase-return-add')->first();
                ?>
                <?php if($purchase_return_add_permission_active): ?>
                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#add-purchase-return"> <?php echo e(trans('file.Add Purchase Return')); ?></a></li>
                <?php endif; ?>
                <?php
                    $user_add_permission_active = $role_has_permissions_list->where('name', 'users-add')->first();
                ?>
                <?php if($user_add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('user.create')); ?>"><?php echo e(trans('file.Add User')); ?></a></li>
                <?php endif; ?>
                <?php
                    $customer_add_permission_active = $role_has_permissions_list->where('name', 'customers-add')->first();
                ?>
                <?php if($customer_add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('customer.create')); ?>"><?php echo e(trans('file.Add Customer')); ?></a></li>
                <?php endif; ?>
                <?php
                    $biller_add_permission_active = $role_has_permissions_list->where('name', 'billers-add')->first();
                ?>
                <?php if($biller_add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('biller.create')); ?>"><?php echo e(trans('file.Add Biller')); ?></a></li>
                <?php endif; ?>
                <?php
                    $supplier_add_permission_active = $role_has_permissions_list->where('name', 'suppliers-add')->first();
                ?>
                <?php if($supplier_add_permission_active): ?>
                <li class="dropdown-item"><a href="<?php echo e(route('supplier.create')); ?>"><?php echo e(trans('file.Add Supplier')); ?></a></li>
                <?php endif; ?>
              </ul>
            </div>
            <?php
                $empty_database_permission_active = $role_has_permissions_list->where('name', 'empty_database')->first();

                $sale_add_permission_active = $role_has_permissions_list->where('name', 'sales-add')->first();

                $product_qty_alert_active = $role_has_permissions_list->where('name', 'product-qty-alert')->first();

                $general_setting_permission_active = $role_has_permissions_list->where('name', 'general_setting')->first();
            ?>
            <?php if($sale_add_permission_active): ?>
            <li class="nav-item"><a class="btn-pos btn-sm" href="<?php echo e(route('sale.pos')); ?>"><i class="dripicons-shopping-bag"></i><span> POS</span></a></li>
            <?php endif; ?>
            <li class="nav-item"><a id="switch-theme" data-toggle="tooltip" title="<?php echo e(trans('file.Switch Theme')); ?>"><i class="dripicons-brightness-max"></i></a></li>
            <li class="nav-item"><a id="btnFullscreen" data-toggle="tooltip" title="<?php echo e(trans('file.Full Screen')); ?>"><i class="dripicons-expand"></i></a></li>
            <?php if(\Auth::user()->role_id <= 2): ?>
                <li class="nav-item"><a href="<?php echo e(route('cashRegister.index')); ?>" data-toggle="tooltip" title="<?php echo e(trans('file.Cash Register List')); ?>"><i class="dripicons-archive"></i></a></li>
            <?php endif; ?>
            <?php if($product_qty_alert_active && ($alert_product + $dso_alert_product_no + \Auth::user()->unreadNotifications->where('data.reminder_date', date('Y-m-d'))->count() ) > 0): ?>
                <li class="nav-item" id="notification-icon">
                    <a rel="nofollow" data-toggle="tooltip" title="<?php echo e(__('Notifications')); ?>" class="nav-link dropdown-item"><i class="dripicons-bell"></i><span class="badge badge-danger notification-number"><?php echo e($alert_product + $dso_alert_product_no + \Auth::user()->unreadNotifications->where('data.reminder_date', date('Y-m-d'))->count()); ?></span>
                    </a>
                    <ul class="right-sidebar">
                        <li class="notifications">
                            <a href="<?php echo e(route('report.qtyAlert')); ?>" class="btn btn-link"> <?php echo e($alert_product); ?> product exceeds alert quantity</a>
                        </li>
                        <?php if($dso_alert_product_no): ?>
                        <li class="notifications">
                            <a href="<?php echo e(route('report.dailySaleObjective')); ?>" class="btn btn-link"> <?php echo e($dso_alert_product_no); ?> product could not fulfill daily sale objective</a>
                        </li>
                        <?php endif; ?>
                        <?php $__currentLoopData = \Auth::user()->unreadNotifications->where('data.reminder_date', date('Y-m-d')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="notifications">
                                <?php if($notification->data['document_name']): ?>
                                <a target="_blank" href="<?php echo e(url('public/documents/notification', $notification->data['document_name'])); ?>" class="btn btn-link"><?php echo e($notification->data['message']); ?></a>
                                <?php else: ?>
                                <a href="#" class="btn btn-link"><?php echo e($notification->data['message']); ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(\Auth::user()->unreadNotifications->where('data.reminder_date', date('Y-m-d'))->count() > 0): ?>
                <li class="nav-item" id="notification-icon">
                    <a rel="nofollow" data-toggle="tooltip" title="<?php echo e(__('Notifications')); ?>" class="nav-link dropdown-item"><i class="dripicons-bell"></i><span class="badge badge-danger notification-number"><?php echo e(\Auth::user()->unreadNotifications->where('data.reminder_date', date('Y-m-d'))->count()); ?></span>
                    </a>
                    <ul class="right-sidebar">
                        <?php $__currentLoopData = \Auth::user()->unreadNotifications->where('data.reminder_date', date('Y-m-d')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="notifications">
                                <?php if($notification->data['document_name']): ?>
                                <a target="_blank" href="<?php echo e(url('public/documents/notification', $notification->data['document_name'])); ?>" class="btn btn-link"><?php echo e($notification->data['message']); ?></a>
                                <?php else: ?>
                                <a href="#" class="btn btn-link"><?php echo e($notification->data['message']); ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                    <a rel="nofollow" title="<?php echo e(trans('file.language')); ?>" data-toggle="tooltip" class="nav-link dropdown-item"><i class="dripicons-web"></i></a>
                    <ul class="right-sidebar">
                        <li>
                        <a href="<?php echo e(url('language_switch/en')); ?>" class="btn btn-link"> English</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/es')); ?>" class="btn btn-link"> Español</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/ar')); ?>" class="btn btn-link"> عربى</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/id')); ?>" class="btn btn-link"> Bahasa</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/ms')); ?>" class="btn btn-link"> Malay</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/s_chinese')); ?>" class="btn btn-link">中国人</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/t_chinese')); ?>" class="btn btn-link">中國人</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/pt_BR')); ?>" class="btn btn-link"> Portuguese</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/fr')); ?>" class="btn btn-link"> Français</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/de')); ?>" class="btn btn-link"> Deutsche</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/hi')); ?>" class="btn btn-link"> हिंदी</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/vi')); ?>" class="btn btn-link"> Tiếng Việt</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/ru')); ?>" class="btn btn-link"> русский</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/bg')); ?>" class="btn btn-link"> български</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/tr')); ?>" class="btn btn-link"> Türk</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/it')); ?>" class="btn btn-link"> Italiano</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/nl')); ?>" class="btn btn-link"> Nederlands</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/lao')); ?>" class="btn btn-link"> Lao</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('language_switch/sawahili')); ?>" class="btn btn-link"> Sawahili</a>
                        </li>
                    </ul>
            </li>
            <li class="nav-item">
                <a rel="nofollow" data-toggle="tooltip" class="nav-link dropdown-item"><i class="dripicons-user"></i> <span><?php echo e(ucfirst(Auth::user()->name)); ?></span> <i class="fa fa-angle-down"></i>
                </a>
                <ul class="right-sidebar">
                    <li>
                    <a href="<?php echo e(route('user.profile', ['id' => Auth::id()])); ?>"><i class="dripicons-user"></i> <?php echo e(trans('file.profile')); ?></a>
                    </li>
                    <?php if($general_setting_permission_active): ?>
                    <li>
                    <a href="<?php echo e(route('setting.general')); ?>"><i class="dripicons-gear"></i> <?php echo e(trans('file.settings')); ?></a>
                    </li>
                    <?php endif; ?>
                    <li>
                    <a href="<?php echo e(url('my-transactions/'.date('Y').'/'.date('m'))); ?>"><i class="dripicons-swap"></i> <?php echo e(trans('file.My Transaction')); ?></a>
                    </li>
                    <?php if(Auth::user()->role_id != 5): ?>
                    <li>
                    <a href="<?php echo e(url('holidays/my-holiday/'.date('Y').'/'.date('m'))); ?>"><i class="dripicons-vibrate"></i> <?php echo e(trans('file.My Holiday')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if($empty_database_permission_active): ?>
                    <li>
                    <a onclick="return confirm('Are you sure want to delete? If you do this all of your data will be lost.')" href="<?php echo e(route('setting.emptyDatabase')); ?>"><i class="dripicons-stack"></i> <?php echo e(trans('file.Empty Database')); ?></a>
                    </li>
                    <?php endif; ?>
                    <li>
                    <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="dripicons-power"></i>
                        <?php echo e(trans('file.logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                    </li>
                </ul>
            </li>
            </ul>
        </nav>
      </header>
      <?php endif; ?>
      

      <div style="display:none" id="content" class="animate-bottom">
          <?php echo $__env->yieldContent('content'); ?>
      </div>

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <p>&copy; <?php echo e($general_setting->site_title); ?> | <?php echo e(trans('file.Developed')); ?> <?php echo e(trans('file.By')); ?> <span class="external"><?php echo e($general_setting->developed_by); ?></span> | V <?php echo e(env('VERSION')); ?></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- notification modal -->
      <div id="notification-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Send Notification')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'notifications.store', 'method' => 'post', 'files'=> true]); ?>

                      <div class="row">
                          <?php
                              $lims_user_list = DB::table('users')->where([
                                ['is_active', true],
                                ['id', '!=', \Auth::user()->id]
                              ])->get();
                          ?>
                          <div class="col-md-4 form-group">
                                <input type="hidden" name="sender_id" value="<?php echo e(\Auth::id()); ?>">
                              <label><?php echo e(trans('file.User')); ?> *</label>
                              <select name="receiver_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select user...">
                                  <?php $__currentLoopData = $lims_user_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($user->id); ?>"><?php echo e($user->name . ' (' . $user->email. ')'); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                          <div class="col-md-4 form-group">
                                <label><?php echo e(trans('file.Reminder Date')); ?></label>
                                <input type="text" name="reminder_date" class="form-control date" value="<?php echo e(date('d-m-Y')); ?>">
                          </div>
                          <div class="col-md-4 form-group">
                                <label><?php echo e(trans('file.Attach Document')); ?></label>
                                <input type="file" name="document" class="form-control">
                          </div>
                          <div class="col-md-12 form-group">
                              <label><?php echo e(trans('file.Message')); ?> *</label>
                              <textarea rows="5" name="message" class="form-control" required></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end notification modal -->

      <!-- Category Modal -->
      <div id="category-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <?php echo Form::open(['route' => 'category.store', 'method' => 'post', 'files' => true]); ?>

              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Add Category')); ?></h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
              </div>
              <div class="modal-body">
                <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label><?php echo e(trans('file.name')); ?> *</label>
                          <?php echo e(Form::text('name',null,array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'Type category name...'))); ?>

                      </div>
                      <div class="col-md-6 form-group">
                          <label><?php echo e(trans('file.Image')); ?></label>
                          <input type="file" name="image" class="form-control">
                      </div>
                      <div class="col-md-6 form-group">
                          <label><?php echo e(trans('file.Parent Category')); ?></label>
                          <select name="parent_id" class="form-control selectpicker" id="parent">
                              <option value="">No <?php echo e(trans('file.parent')); ?></option>
                              <?php $__currentLoopData = $categories_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>
                      <?php if(\Schema::hasColumn('categories', 'woocommerce_category_id')): ?>
                      <div class="col-md-6 form-group mt-4">
                        <h5><input name="is_sync_disable" type="checkbox" id="is_sync_disable" value="1">&nbsp; <?php echo e(trans('file.Disable Woocommerce Sync')); ?></h5>
                      </div>
                     <?php endif; ?>
                  </div>

                  <div class="form-group">
                    <input type="submit" value="<?php echo e(trans('file.submit')); ?>" class="btn btn-primary">
                  </div>
              </div>
              <?php echo e(Form::close()); ?>

            </div>
          </div>
      </div>
      <!-- Category Modal -->

      <!-- expense modal -->
      <div id="expense-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Add Expense')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'expenses.store', 'method' => 'post']); ?>

                    <?php
                      $lims_expense_category_list = DB::table('expense_categories')->where('is_active', true)->get();
                      if(Auth::user()->role_id > 2)
                        $lims_warehouse_list = DB::table('warehouses')->where([
                          ['is_active', true],
                          ['id', Auth::user()->warehouse_id]
                        ])->get();
                      else
                        $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                      $lims_account_list = \App\Account::where('is_active', true)->get();
                    ?>
                      <div class="row">
                        <div class="col-md-6 form-group">
                            <label><?php echo e(trans('file.Date')); ?></label>
                            <input type="text" name="created_at" class="form-control date" placeholder="Choose date"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label><?php echo e(trans('file.Expense Category')); ?> *</label>
                            <select name="expense_category_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select Expense Category...">
                                <?php $__currentLoopData = $lims_expense_category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($expense_category->id); ?>"><?php echo e($expense_category->name . ' (' . $expense_category->code. ')'); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label><?php echo e(trans('file.Warehouse')); ?> *</label>
                            <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select Warehouse...">
                                <?php $__currentLoopData = $lims_warehouse_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label><?php echo e(trans('file.Amount')); ?> *</label>
                            <input type="number" name="amount" step="any" required class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label> <?php echo e(trans('file.Account')); ?></label>
                            <select class="form-control selectpicker" name="account_id">
                            <?php $__currentLoopData = $lims_account_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($account->is_default): ?>
                                <option selected value="<?php echo e($account->id); ?>"><?php echo e($account->name); ?> [<?php echo e($account->account_no); ?>]</option>
                                <?php else: ?>
                                <option value="<?php echo e($account->id); ?>"><?php echo e($account->name); ?> [<?php echo e($account->account_no); ?>]</option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label><?php echo e(trans('file.Note')); ?></label>
                          <textarea name="note" rows="3" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end expense modal -->

      <!-- sale return modal -->
      <div id="add-sale-return" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <?php echo Form::open(['route' => 'return-sale.create', 'method' => 'get']); ?>

              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Sale Return</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
              </div>
              <div class="modal-body">
                <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                 <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label><?php echo e(trans('file.Sale Reference')); ?> *</label>
                              <input type="text" name="reference_no" class="form-control">
                          </div>
                      </div>
                 </div>
                  <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

              </div>
              <?php echo Form::close(); ?>

            </div>
          </div>
      </div>
      <!-- end sale return modal -->

      <!-- purchase return modal -->
      <div id="add-purchase-return" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <?php echo Form::open(['route' => 'return-purchase.create', 'method' => 'get']); ?>

              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Purchase Return</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
              </div>
              <div class="modal-body">
                <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                 <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label><?php echo e(trans('file.Purchase Reference')); ?> *</label>
                              <input type="text" name="reference_no" class="form-control">
                          </div>
                      </div>
                 </div>
                  <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

              </div>
              <?php echo Form::close(); ?>

            </div>
          </div>
      </div>
      <!-- end purchase return modal -->

      <!-- account modal -->
      <div id="account-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Add Account')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'accounts.store', 'method' => 'post']); ?>

                      <div class="form-group">
                          <label><?php echo e(trans('file.Account No')); ?> *</label>
                          <input type="text" name="account_no" required class="form-control">
                      </div>
                      <div class="form-group">
                          <label><?php echo e(trans('file.name')); ?> *</label>
                          <input type="text" name="name" required class="form-control">
                      </div>
                      <div class="form-group">
                          <label><?php echo e(trans('file.Initial Balance')); ?></label>
                          <input type="number" name="initial_balance" step="any" class="form-control">
                      </div>
                      <div class="form-group">
                          <label><?php echo e(trans('file.Note')); ?></label>
                          <textarea name="note" rows="3" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end account modal -->

      <!-- account statement modal -->
      <div id="account-statement-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Account Statement')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'accounts.statement', 'method' => 'post']); ?>

                      <div class="row">
                        <div class="col-md-6 form-group">
                            <label> <?php echo e(trans('file.Account')); ?></label>
                            <select class="form-control selectpicker" name="account_id">
                            <?php $__currentLoopData = $lims_account_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($account->id); ?>"><?php echo e($account->name); ?> [<?php echo e($account->account_no); ?>]</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label> <?php echo e(trans('file.Type')); ?></label>
                            <select class="form-control selectpicker" name="type">
                                <option value="0"><?php echo e(trans('file.All')); ?></option>
                                <option value="1"><?php echo e(trans('file.Debit')); ?></option>
                                <option value="2"><?php echo e(trans('file.Credit')); ?></option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label><?php echo e(trans('file.Choose Your Date')); ?></label>
                            <div class="input-group">
                                <input type="text" class="account-statement-daterangepicker-field form-control" required />
                                <input type="hidden" name="start_date" />
                                <input type="hidden" name="end_date" />
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end account statement modal -->

      <!-- warehouse modal -->
      <div id="warehouse-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Warehouse Report')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'report.warehouse', 'method' => 'post']); ?>

                    
                      <div class="form-group">
                          <label><?php echo e(trans('file.Warehouse')); ?> *</label>
                          <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" id="warehouse-id" data-live-search-style="begins" title="Select warehouse...">
                              <?php $__currentLoopData = $lims_warehouse_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                      <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />

                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end warehouse modal -->

      <!-- user modal -->
      <div id="user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.User Report')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'report.user', 'method' => 'post']); ?>

                    <?php
                      $lims_user_list = DB::table('users')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label><?php echo e(trans('file.User')); ?> *</label>
                          <select name="user_id" class="selectpicker form-control" required data-live-search="true" id="user-id" data-live-search-style="begins" title="Select user...">
                              <?php $__currentLoopData = $lims_user_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($user->id); ?>"><?php echo e($user->name . ' (' . $user->phone. ')'); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                      <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />

                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end user modal -->

      <!-- customer modal -->
      <div id="customer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Customer Report')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'report.customer', 'method' => 'post']); ?>

                    <?php
                      $lims_customer_list = DB::table('customers')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label><?php echo e(trans('file.customer')); ?> *</label>
                          <select name="customer_id" class="selectpicker form-control" required data-live-search="true" id="customer-id" data-live-search-style="begins" title="Select customer...">
                              <?php $__currentLoopData = $lims_customer_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name . ' (' . $customer->phone_number. ')'); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                      <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />

                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end customer modal -->

      <!-- customer group modal -->
      <div id="customer-group-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Customer Group Report')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'report.customer_group', 'method' => 'post']); ?>

                    <?php
                      $lims_customer_group_list = DB::table('customer_groups')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label><?php echo e(trans('file.Customer Group')); ?> *</label>
                          <select name="customer_group_id" class="selectpicker form-control" required data-live-search="true" id="customer-group-id" data-live-search-style="begins" title="Select customer group...">
                              <?php $__currentLoopData = $lims_customer_group_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($customer_group->id); ?>"><?php echo e($customer_group->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                      <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />

                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end customer group modal -->

      <!-- supplier modal -->
      <div id="supplier-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(trans('file.Supplier Report')); ?></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                    <?php echo Form::open(['route' => 'report.supplier', 'method' => 'post']); ?>

                    <?php
                      $lims_supplier_list = DB::table('suppliers')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label><?php echo e(trans('file.Supplier')); ?> *</label>
                          <select name="supplier_id" class="selectpicker form-control" required data-live-search="true" id="supplier-id" data-live-search-style="begins" title="Select Supplier...">
                              <?php $__currentLoopData = $lims_supplier_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name . ' (' . $supplier->phone_number. ')'); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                      <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />

                      <div class="form-group">
                          <button type="submit" class="btn btn-primary"><?php echo e(trans('file.submit')); ?></button>
                      </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
      </div>
      <!-- end supplier modal -->
    </div>
    <?php if(!config('database.connections.saleprosaas_landlord')): ?>
        <script type="text/javascript" src="<?php echo asset('vendor/jquery/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/jquery/jquery-ui.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/jquery/jquery.timepicker.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/popper.js/umd/popper.min.js') ?>">
        </script>
        <script type="text/javascript" src="<?php echo asset('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/bootstrap-toggle/js/bootstrap-toggle.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>
        <?php if(Route::current()->getName() == 'sale.pos'): ?>
        <script type="text/javascript" src="<?php echo asset('vendor/keyboard/js/jquery.keyboard.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/keyboard/js/jquery.keyboard.extension-autocomplete.js') ?>"></script>
        <?php endif; ?>
        <script type="text/javascript" src="<?php echo asset('js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/jquery.cookie/jquery.cookie.js') ?>">
        </script>
        <script type="text/javascript" src="<?php echo asset('vendor/chart.js/Chart.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/charts-custom.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>
        <?php if( Config::get('app.locale') == 'ar' || $general_setting->is_rtl): ?>
          <script type="text/javascript" src="<?php echo asset('js/front_rtl.js') ?>"></script>
        <?php else: ?>
          <script type="text/javascript" src="<?php echo asset('js/front.js') ?>"></script>
        <?php endif; ?>

        <?php if(Route::current()->getName() != '/'): ?>
        <script type="text/javascript" src="<?php echo asset('vendor/daterange/js/moment.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/daterange/js/knockout-3.4.2.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/daterange/js/daterangepicker.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/dropzone.js') ?>"></script>

        <!-- table sorter js-->
        <?php if( Config::get('app.locale') == 'ar'): ?>
            <script type="text/javascript" src="<?php echo asset('vendor/datatable/pdfmake_arabic.min.js') ?>"></script>
            <script type="text/javascript" src="<?php echo asset('vendor/datatable/vfs_fonts_arabic.js') ?>"></script>
        <?php else: ?>
            <script type="text/javascript" src="<?php echo asset('vendor/datatable/pdfmake.min.js') ?>"></script>
            <script type="text/javascript" src="<?php echo asset('vendor/datatable/vfs_fonts.js') ?>"></script>
        <?php endif; ?>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/jquery.dataTables.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/dataTables.bootstrap4.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/dataTables.buttons.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/jszip.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/buttons.bootstrap4.min.js') ?>">"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/buttons.colVis.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/buttons.html5.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/buttons.printnew.js') ?>"></script>

        <script type="text/javascript" src="<?php echo asset('vendor/datatable/sum().js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('vendor/datatable/dataTables.checkboxes.min.js') ?>"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
        <?php endif; ?>
    <?php else: ?>
        <script type="text/javascript" src="<?php echo asset('../../vendor/jquery/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/jquery/jquery-ui.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/jquery/jquery.timepicker.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/popper.js/umd/popper.min.js') ?>">
        </script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/bootstrap-toggle/js/bootstrap-toggle.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>

        <script type="text/javascript" src="<?php echo asset('../../js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/jquery.cookie/jquery.cookie.js') ?>">
        </script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/chart.js/Chart.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../js/charts-custom.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>
        <?php if( Config::get('app.locale') == 'ar' || $general_setting->is_rtl): ?>
          <script type="text/javascript" src="<?php echo asset('../../js/front_rtl.js') ?>"></script>
        <?php else: ?>
          <script type="text/javascript" src="<?php echo asset('../../js/front.js') ?>"></script>
        <?php endif; ?>

        <?php if(Route::current()->getName() != '/'): ?>
        <script type="text/javascript" src="<?php echo asset('../../vendor/daterange/js/moment.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/daterange/js/knockout-3.4.2.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/daterange/js/daterangepicker.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../js/dropzone.js') ?>"></script>

        <!-- table sorter js-->
        <?php if( Config::get('app.locale') == 'ar'): ?>
            <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/pdfmake_arabic.min.js') ?>"></script>
            <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/vfs_fonts_arabic.js') ?>"></script>
        <?php else: ?>
            <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/pdfmake.min.js') ?>"></script>
            <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/vfs_fonts.js') ?>"></script>
        <?php endif; ?>
        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/jquery.dataTables.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/dataTables.bootstrap4.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/dataTables.buttons.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/buttons.bootstrap4.min.js') ?>">"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/buttons.colVis.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/buttons.html5.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/buttons.printnew.js') ?>"></script>

        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/sum().js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../../vendor/datatable/dataTables.checkboxes.min.js') ?>"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
        <?php endif; ?>
    <?php endif; ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script>
        if ('serviceWorker' in navigator ) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/salepro/service-worker.js').then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
    </script>
    <script type="text/javascript">
        var theme = <?php echo json_encode($theme); ?>;
        if(theme == 'dark') {
            $('body').addClass('dark-mode');
            $('#switch-theme i').addClass('dripicons-brightness-low');
        }
        else {
            $('body').removeClass('dark-mode');
            $('#switch-theme i').addClass('dripicons-brightness-max');
        }
        $('#switch-theme').click(function() {
            if(theme == 'light') {
                theme = 'dark';
                var url = <?php echo json_encode(route('switchTheme', 'dark')); ?>;
                $('body').addClass('dark-mode');
                $('#switch-theme i').addClass('dripicons-brightness-low');
            }
            else {
                theme = 'light';
                var url = <?php echo json_encode(route('switchTheme', 'light')); ?>;
                $('body').removeClass('dark-mode');
                $('#switch-theme i').addClass('dripicons-brightness-max');
            }

            $.get(url, function(data) {
                console.log('theme changed to '+theme);
            });
        });

        var alert_product = <?php echo json_encode($alert_product) ?>;

      if ($(window).outerWidth() > 1199) {
          $('nav.side-navbar').removeClass('shrink');
      }
      
      function myFunction() {
          setTimeout(showPage, 100);
      }

      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content").style.display = "block";
      }

      $("div.alert:not(#update-alert-section)").delay(4000).slideUp(800);

      function confirmDelete() {
          if (confirm("Are you sure want to delete?")) {
              return true;
          }
          return false;
      }

      $("li#notification-icon").on("click", function (argument) {
          $.get('notifications/mark-as-read', function(data) {
              $("span.notification-number").text(alert_product);
          });
      });

      $("a#add-expense").click(function(e){
        e.preventDefault();
        $('#expense-modal').modal();
      });

      $("a#send-notification").click(function(e){
        e.preventDefault();
        $('#notification-modal').modal();
      });

      $("a#add-account").click(function(e){
        e.preventDefault();
        $('#account-modal').modal();
      });

      $("a#account-statement").click(function(e){
        e.preventDefault();
        $('#account-statement-modal').modal();
      });

      $("a#profitLoss-link").click(function(e){
        e.preventDefault();
        $("#profitLoss-report-form").submit();
      });

      $("a#report-link").click(function(e){
        e.preventDefault();
        $("#product-report-form").submit();
      });

      $("a#purchase-report-link").click(function(e){
        e.preventDefault();
        $("#purchase-report-form").submit();
      });

      $("a#sale-report-link").click(function(e){
        e.preventDefault();
        $("#sale-report-form").submit();
      });
      $("a#sale-report-chart-link").click(function(e){
        e.preventDefault();
        $("#sale-report-chart-form").submit();
      });

      $("a#payment-report-link").click(function(e){
        e.preventDefault();
        $("#payment-report-form").submit();
      });

      $("a#warehouse-report-link").click(function(e){
        e.preventDefault();
        $('#warehouse-modal').modal();
      });

      $("a#user-report-link").click(function(e){
        e.preventDefault();
        $('#user-modal').modal();
      });

      $("a#customer-report-link").click(function(e){
        e.preventDefault();
        $('#customer-modal').modal();
      });

      $("a#customer-group-report-link").click(function(e){
        e.preventDefault();
        $('#customer-group-modal').modal();
      });

      $("a#supplier-report-link").click(function(e){
        e.preventDefault();
        $('#supplier-modal').modal();
      });

      $("a#due-report-link").click(function(e){
        e.preventDefault();
        $("#customer-due-report-form").submit();
      });

      $("a#supplier-due-report-link").click(function(e){
        e.preventDefault();
        $("#supplier-due-report-form").submit();
      });

      $(".account-statement-daterangepicker-field").daterangepicker({
          callback: function(startDate, endDate, period){
            var start_date = startDate.format('YYYY-MM-DD');
            var end_date = endDate.format('YYYY-MM-DD');
            var title = start_date + ' To ' + end_date;
            $(this).val(title);
            $('#account-statement-modal input[name="start_date"]').val(start_date);
            $('#account-statement-modal input[name="end_date"]').val(end_date);
          }
      });

      $('.date').datepicker({
         format: "dd-mm-yyyy",
         autoclose: true,
         todayHighlight: true
       });

      $('.selectpicker').selectpicker({
          style: 'btn-link',
      });
    </script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\salepro310\resources\views/backend/layout/main.blade.php ENDPATH**/ ?>