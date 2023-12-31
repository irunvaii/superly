        <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="<?php echo e(url('/dashboard')); ?>"> <i class="dripicons-meter"></i><span><?php echo e(__('file.dashboard')); ?></span></a></li>
            <?php

                $index_permission_active = $role_has_permissions_list->where('name', 'products-index')->first();

                $category_permission_active = $role_has_permissions_list->where('name', 'category')->first();

                $print_barcode_active = $role_has_permissions_list->where('name', 'print_barcode')->first();

                $stock_count_active = $role_has_permissions_list->where('name', 'stock_count')->first();

                $adjustment_active = $role_has_permissions_list->where('name', 'adjustment')->first();
            ?>
            <?php if($category_permission_active || $index_permission_active || $print_barcode_active || $stock_count_active || $adjustment_active): ?>
            <li><a href="#product" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-list"></i><span><?php echo e(__('file.product')); ?></span><span></a>
            <ul id="product" class="collapse list-unstyled ">
                <?php if($category_permission_active): ?>
                <li id="category-menu"><a href="<?php echo e(route('category.index')); ?>"><?php echo e(__('file.category')); ?></a></li>
                <?php endif; ?>
                <?php if($index_permission_active): ?>
                <li id="product-list-menu"><a href="<?php echo e(route('products.index')); ?>"><?php echo e(__('file.product_list')); ?></a></li>
                <?php
                    $add_permission_active = $role_has_permissions_list->where('name', 'products-add')->first();
                ?>
                <?php if($add_permission_active): ?>
                <li id="product-create-menu"><a href="<?php echo e(route('products.create')); ?>"><?php echo e(__('file.add_product')); ?></a></li>
                <?php endif; ?>
                <?php endif; ?>
                <?php if($print_barcode_active): ?>
                <li id="printBarcode-menu"><a href="<?php echo e(route('product.printBarcode')); ?>"><?php echo e(__('file.print_barcode')); ?></a></li>
                <?php endif; ?>
                <?php if($adjustment_active): ?>
                <li id="adjustment-list-menu"><a href="<?php echo e(route('qty_adjustment.index')); ?>"><?php echo e(trans('file.Adjustment List')); ?></a></li>
                <li id="adjustment-create-menu"><a href="<?php echo e(route('qty_adjustment.create')); ?>"><?php echo e(trans('file.Add Adjustment')); ?></a></li>
                <?php endif; ?>
                <?php if($stock_count_active): ?>
                <li id="stock-count-menu"><a href="<?php echo e(route('stock-count.index')); ?>"><?php echo e(trans('file.Stock Count')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>
            <?php
                $index_permission_active = $role_has_permissions_list->where('name', 'purchases-index')->first();
            ?>
            <?php if($index_permission_active): ?>
            <li><a href="#purchase" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-card"></i><span><?php echo e(trans('file.Purchase')); ?></span></a>
            <ul id="purchase" class="collapse list-unstyled ">
                <li id="purchase-list-menu"><a href="<?php echo e(route('purchases.index')); ?>"><?php echo e(trans('file.Purchase List')); ?></a></li>
                <?php
                $add_permission_active = $role_has_permissions_list->where('name', 'purchases-add')->first();
                ?>
                <?php if($add_permission_active): ?>
                <li id="purchase-create-menu"><a href="<?php echo e(route('purchases.create')); ?>"><?php echo e(trans('file.Add Purchase')); ?></a></li>
                <li id="purchase-import-menu"><a href="<?php echo e(url('purchases/purchase_by_csv')); ?>"><?php echo e(trans('file.Import Purchase By CSV')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>
            <?php
                $sale_index_permission_active = $role_has_permissions_list->where('name', 'sales-index')->first();
        
                $gift_card_permission_active = $role_has_permissions_list->where('name', 'gift_card')->first();
        
                $coupon_permission_active = $role_has_permissions_list->where('name', 'coupon')->first();

                $delivery_permission_active = $role_has_permissions_list->where('name', 'delivery')->first();

                $sale_add_permission_active = $role_has_permissions_list->where('name', 'sales-add')->first();
            ?>
            <?php if($sale_index_permission_active || $gift_card_permission_active || $coupon_permission_active || $delivery_permission_active): ?>
            <li><a href="#sale" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-cart"></i><span><?php echo e(trans('file.Sale')); ?></span></a>
            <ul id="sale" class="collapse list-unstyled ">
                <?php if($sale_add_permission_active): ?>
                <li id="sale-list-menu"><a href="<?php echo e(route('sales.index')); ?>"><?php echo e(trans('file.Sale List')); ?></a></li>
                <li><a href="<?php echo e(route('sale.pos')); ?>">POS</a></li>
                <li id="sale-create-menu"><a href="<?php echo e(route('sales.create')); ?>"><?php echo e(trans('file.Add Sale')); ?></a></li>
                <li id="sale-import-menu"><a href="<?php echo e(url('sales/sale_by_csv')); ?>"><?php echo e(trans('file.Import Sale By CSV')); ?></a></li>
                <?php endif; ?>

                <?php if($gift_card_permission_active): ?>
                <li id="gift-card-menu"><a href="<?php echo e(route('gift_cards.index')); ?>"><?php echo e(trans('file.Gift Card List')); ?></a> </li>
                <?php endif; ?>
                <?php if($coupon_permission_active): ?>
                <li id="coupon-menu"><a href="<?php echo e(route('coupons.index')); ?>"><?php echo e(trans('file.Coupon List')); ?></a> </li>
                <?php endif; ?>
                <li id="courier-menu"><a href="<?php echo e(route('couriers.index')); ?>"><?php echo e(trans('file.Courier List')); ?></a> </li>
                <?php if($delivery_permission_active): ?>
                <li id="delivery-menu"><a href="<?php echo e(route('delivery.index')); ?>"><?php echo e(trans('file.Delivery List')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>

            <?php
            $index_permission_active = $role_has_permissions_list->where('name', 'expenses-index')->first();
            ?>
            <?php if($index_permission_active): ?>
            <li><a href="#expense" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-wallet"></i><span><?php echo e(trans('file.Expense')); ?></span></a>
            <ul id="expense" class="collapse list-unstyled ">
                <li id="exp-cat-menu"><a href="<?php echo e(route('expense_categories.index')); ?>"><?php echo e(trans('file.Expense Category')); ?></a></li>
                <li id="exp-list-menu"><a href="<?php echo e(route('expenses.index')); ?>"><?php echo e(trans('file.Expense List')); ?></a></li>
                <?php
                $add_permission_active = $role_has_permissions_list->where('name', 'expenses-add')->first();
                ?>
                <?php if($add_permission_active): ?>
                <li><a id="add-expense" href=""> <?php echo e(trans('file.Add Expense')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>
            <?php
            $index_permission_active = $role_has_permissions_list->where('name', 'quotes-index')->first();
            ?>
            <?php if($index_permission_active): ?>
            <li><a href="#quotation" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-document"></i><span><?php echo e(trans('file.Quotation')); ?></span><span></a>
            <ul id="quotation" class="collapse list-unstyled ">
                <li id="quotation-list-menu"><a href="<?php echo e(route('quotations.index')); ?>"><?php echo e(trans('file.Quotation List')); ?></a></li>
                <?php
                $add_permission_active = $role_has_permissions_list->where('name', 'quotes-add')->first();
                ?>
                <?php if($add_permission_active): ?>
                <li id="quotation-create-menu"><a href="<?php echo e(route('quotations.create')); ?>"><?php echo e(trans('file.Add Quotation')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>
            <?php
            $index_permission_active = $role_has_permissions_list->where('name', 'transfers-index')->first();
            ?>
            <?php if($index_permission_active): ?>
            <li><a href="#transfer" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-export"></i><span><?php echo e(trans('file.Transfer')); ?></span></a>
            <ul id="transfer" class="collapse list-unstyled ">
                <li id="transfer-list-menu"><a href="<?php echo e(route('transfers.index')); ?>"><?php echo e(trans('file.Transfer List')); ?></a></li>
                <?php
                $add_permission_active = $role_has_permissions_list->where('name', 'transfers-add')->first();
                ?>
                <?php if($add_permission_active): ?>
                <li id="transfer-create-menu"><a href="<?php echo e(route('transfers.create')); ?>"><?php echo e(trans('file.Add Transfer')); ?></a></li>
                <li id="transfer-import-menu"><a href="<?php echo e(url('transfers/transfer_by_csv')); ?>"><?php echo e(trans('file.Import Transfer By CSV')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>

            <?php
                $sale_return_index_permission_active = $role_has_permissions_list->where('name', 'returns-index')->first();

                $purchase_return_index_permission_active = $role_has_permissions_list->where('name', 'purchase-return-index')->first();
            ?>
            <?php if($sale_return_index_permission_active || $purchase_return_index_permission_active): ?>
            <li><a href="#return" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-return"></i><span><?php echo e(trans('file.return')); ?></span></a>
            <ul id="return" class="collapse list-unstyled ">
                <?php if($sale_return_index_permission_active): ?>
                <li id="sale-return-menu"><a href="<?php echo e(route('return-sale.index')); ?>"><?php echo e(trans('file.Sale')); ?></a></li>
                <?php endif; ?>
                <?php if($purchase_return_index_permission_active): ?>
                <li id="purchase-return-menu"><a href="<?php echo e(route('return-purchase.index')); ?>"><?php echo e(trans('file.Purchase')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>
            <?php
            $index_permission_active = $role_has_permissions_list->where('name', 'account-index')->first();

            $money_transfer_permission_active = $role_has_permissions_list->where('name', 'money-transfer')->first();

            $balance_sheet_permission_active = $role_has_permissions_list->where('name', 'balance-sheet')->first();

            $account_statement_permission_active = $role_has_permissions_list->where('name', 'account-statement')->first();

            ?>
            <?php if($index_permission_active || $balance_sheet_permission_active || $account_statement_permission_active || $money_transfer_permission_active): ?>
            <li class=""><a href="#account" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-briefcase"></i><span><?php echo e(trans('file.Accounting')); ?></span></a>
            <ul id="account" class="collapse list-unstyled ">
                <?php if($index_permission_active): ?>
                <li id="account-list-menu"><a href="<?php echo e(route('accounts.index')); ?>"><?php echo e(trans('file.Account List')); ?></a></li>
                <li><a id="add-account" href=""><?php echo e(trans('file.Add Account')); ?></a></li>
                <?php endif; ?>
                <?php if($money_transfer_permission_active): ?>
                <li id="money-transfer-menu"><a href="<?php echo e(route('money-transfers.index')); ?>"><?php echo e(trans('file.Money Transfer')); ?></a></li>
                <?php endif; ?>
                <?php if($balance_sheet_permission_active): ?>
                <li id="balance-sheet-menu"><a href="<?php echo e(route('accounts.balancesheet')); ?>"><?php echo e(trans('file.Balance Sheet')); ?></a></li>
                <?php endif; ?>
                <?php if($account_statement_permission_active): ?>
                <li id="account-statement-menu"><a id="account-statement" href=""><?php echo e(trans('file.Account Statement')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>
            <?php
                $department_active = $role_has_permissions_list->where('name', 'department')->first();
                
                $index_employee_active = $role_has_permissions_list->where('name', 'employees-index')->first();
                
                $attendance_active = $role_has_permissions_list->where('name', 'attendance')->first();
                
                $payroll_active = $role_has_permissions_list->where('name', 'payroll')->first();

                $holiday_active = $role_has_permissions_list->where('name', 'holiday')->first();
            ?>

            <?php if($department_active || $index_employee_active || $attendance_active || $payroll_active || $holiday_active): ?>
            <li class=""><a href="#hrm" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user-group"></i><span>HRM</span></a>
            <ul id="hrm" class="collapse list-unstyled ">
                <?php if($department_active): ?>
                <li id="dept-menu"><a href="<?php echo e(route('departments.index')); ?>"><?php echo e(trans('file.Department')); ?></a></li>
                <?php endif; ?>
                <?php if($index_employee_active): ?>
                <li id="employee-menu"><a href="<?php echo e(route('employees.index')); ?>"><?php echo e(trans('file.Employee')); ?></a></li>
                <?php endif; ?>
                <?php if($attendance_active): ?>
                <li id="attendance-menu"><a href="<?php echo e(route('attendance.index')); ?>"><?php echo e(trans('file.Attendance')); ?></a></li>
                <?php endif; ?>
                <?php if($payroll_active): ?>
                <li id="payroll-menu"><a href="<?php echo e(route('payroll.index')); ?>"><?php echo e(trans('file.Payroll')); ?></a></li>
                <?php endif; ?>
                <?php if($holiday_active): ?>
                <li id="holiday-menu"><a href="<?php echo e(route('holidays.index')); ?>"><?php echo e(trans('file.Holiday')); ?></a></li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>
            <?php

                $user_index_permission_active = $role_has_permissions_list->where('name', 'users-index')->first();

                $customer_index_permission_active = $role_has_permissions_list->where('name', 'customers-index')->first();

                $biller_index_permission_active = $role_has_permissions_list->where('name', 'billers-index')->first();
                    
                $supplier_index_permission_active = $role_has_permissions_list->where('name', 'suppliers-index')->first();
                    
            ?>
            <?php if($user_index_permission_active || $customer_index_permission_active || $biller_index_permission_active || $supplier_index_permission_active): ?>
            <li><a href="#people" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user"></i><span><?php echo e(trans('file.People')); ?></span></a>
            <ul id="people" class="collapse list-unstyled ">

                <?php if($user_index_permission_active): ?>
                <li id="user-list-menu"><a href="<?php echo e(route('user.index')); ?>"><?php echo e(trans('file.User List')); ?></a></li>
                <?php
                    $user_add_permission_active = $role_has_permissions_list->where('name', 'users-add')->first();
                ?>
                <?php if($user_add_permission_active): ?>
                <li id="user-create-menu"><a href="<?php echo e(route('user.create')); ?>"><?php echo e(trans('file.Add User')); ?></a></li>
                <?php endif; ?>
                <?php endif; ?>

                <?php if($customer_index_permission_active): ?>
                <li id="customer-list-menu"><a href="<?php echo e(route('customer.index')); ?>"><?php echo e(trans('file.Customer List')); ?></a></li>
                <?php
                    $customer_add_permission_active = $role_has_permissions_list->where('name', 'customers-add')->first();
                ?>
                <?php if($customer_add_permission_active): ?>
                <li id="customer-create-menu"><a href="<?php echo e(route('customer.create')); ?>"><?php echo e(trans('file.Add Customer')); ?></a></li>
                <?php endif; ?>
                <?php endif; ?>

                <?php if($biller_index_permission_active): ?>
                <li id="biller-list-menu"><a href="<?php echo e(route('biller.index')); ?>"><?php echo e(trans('file.Biller List')); ?></a></li>
                <?php
                    $biller_add_permission_active = $role_has_permissions_list->where('name', 'billers-add')->first();
                ?>
                <?php if($biller_add_permission_active): ?>
                <li id="biller-create-menu"><a href="<?php echo e(route('biller.create')); ?>"><?php echo e(trans('file.Add Biller')); ?></a></li>
                <?php endif; ?>
                <?php endif; ?>

                <?php if($supplier_index_permission_active): ?>
                <li id="supplier-list-menu"><a href="<?php echo e(route('supplier.index')); ?>"><?php echo e(trans('file.Supplier List')); ?></a></li>
                <?php
                    $supplier_add_permission_active = $role_has_permissions_list->where('name', 'suppliers-add')->first();
                ?>
                <?php if($supplier_add_permission_active): ?>
                <li id="supplier-create-menu"><a href="<?php echo e(route('supplier.create')); ?>"><?php echo e(trans('file.Add Supplier')); ?></a></li>
                <?php endif; ?>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>

            <?php

                $profit_loss_active = $role_has_permissions_list->where('name', 'profit-loss')->first();

                $best_seller_active = $role_has_permissions_list->where('name', 'best-seller')->first();

                $warehouse_report_active = $role_has_permissions_list->where('name', 'warehouse-report')->first();

                $warehouse_stock_report_active = $role_has_permissions_list->where('name', 'warehouse-stock-report')->first();

                $product_report_active = $role_has_permissions_list->where('name', 'product-report')->first();

                $daily_sale_active = $role_has_permissions_list->where('name', 'daily-sale')->first();

                $monthly_sale_active = $role_has_permissions_list->where('name', 'monthly-sale')->first();

                $daily_purchase_active = $role_has_permissions_list->where('name', 'daily-purchase')->first();

                $monthly_purchase_active = $role_has_permissions_list->where('name', 'monthly-purchase')->first();

                $purchase_report_active = $role_has_permissions_list->where('name', 'purchase-report')->first();

                $sale_report_active = $role_has_permissions_list->where('name', 'sale-report')->first();

                $sale_report_chart_active = $role_has_permissions_list->where('name', 'sale-report-chart')->first();

                $payment_report_active = $role_has_permissions_list->where('name', 'payment-report')->first();
                
                $product_expiry_report_active = $role_has_permissions_list->where('name', 'product-expiry-report')->first();

                $product_qty_alert_active = $role_has_permissions_list->where('name', 'product-qty-alert')->first();

                $dso_report_active = $role_has_permissions_list->where('name', 'dso-report')->first();

                $user_report_active = $role_has_permissions_list->where('name', 'user-report')->first();

                $customer_report_active = $role_has_permissions_list->where('name', 'customer-report')->first();

                $supplier_report_active = $role_has_permissions_list->where('name', 'supplier-report')->first();

                $due_report_active = $role_has_permissions_list->where('name', 'due-report')->first();

                $supplier_due_report_active = $role_has_permissions_list->where('name', 'supplier-due-report')->first();

            ?>
            <?php if($profit_loss_active || $best_seller_active || $warehouse_report_active || $warehouse_stock_report_active || $product_report_active || $daily_sale_active || $monthly_sale_active || $daily_purchase_active || $monthly_purchase_active || $purchase_report_active || $sale_report_active || $sale_report_chart_active || $payment_report_active || $product_expiry_report_active || $product_qty_alert_active || $dso_report_active || $user_report_active || $customer_report_active || $supplier_report_active || $due_report_active || $supplier_due_report_active): ?>
            <li><a href="#report" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-document-remove"></i><span><?php echo e(trans('file.Reports')); ?></span></a>
            <ul id="report" class="collapse list-unstyled ">
                <?php if($profit_loss_active): ?>
                <li id="profit-loss-report-menu">
                <?php echo Form::open(['route' => 'report.profitLoss', 'method' => 'post', 'id' => 'profitLoss-report-form']); ?>

                <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                <a id="profitLoss-link" href=""><?php echo e(trans('file.Summary Report')); ?></a>
                <?php echo Form::close(); ?>

                </li>
                <?php endif; ?>
                <?php if($best_seller_active): ?>
                <li id="best-seller-report-menu">
                <a href="<?php echo e(url('report/best_seller')); ?>"><?php echo e(trans('file.Best Seller')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($product_report_active): ?>
                <li id="product-report-menu">
                <?php echo Form::open(['route' => 'report.product', 'method' => 'get', 'id' => 'product-report-form']); ?>

                <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                <input type="hidden" name="warehouse_id" value="0" />
                <a id="report-link" href=""><?php echo e(trans('file.Product Report')); ?></a>
                <?php echo Form::close(); ?>

                </li>
                <?php endif; ?>
                <?php if($daily_sale_active): ?>
                <li id="daily-sale-report-menu">
                <a href="<?php echo e(url('report/daily_sale/'.date('Y').'/'.date('m'))); ?>"><?php echo e(trans('file.Daily Sale')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($monthly_sale_active): ?>
                <li id="monthly-sale-report-menu">
                <a href="<?php echo e(url('report/monthly_sale/'.date('Y'))); ?>"><?php echo e(trans('file.Monthly Sale')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($daily_purchase_active): ?>
                <li id="daily-purchase-report-menu">
                <a href="<?php echo e(url('report/daily_purchase/'.date('Y').'/'.date('m'))); ?>"><?php echo e(trans('file.Daily Purchase')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($monthly_purchase_active): ?>
                <li id="monthly-purchase-report-menu">
                <a href="<?php echo e(url('report/monthly_purchase/'.date('Y'))); ?>"><?php echo e(trans('file.Monthly Purchase')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($sale_report_active): ?>
                <li id="sale-report-menu">
                <?php echo Form::open(['route' => 'report.sale', 'method' => 'post', 'id' => 'sale-report-form']); ?>

                <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                <input type="hidden" name="warehouse_id" value="0" />
                <a id="sale-report-link" href=""><?php echo e(trans('file.Sale Report')); ?></a>
                <?php echo Form::close(); ?>

                </li>
                <?php endif; ?>
                <?php if($sale_report_chart_active): ?>
                <li id="sale-report-chart-menu">
                    <?php echo Form::open(['route' => 'report.saleChart', 'method' => 'post', 'id' => 'sale-report-chart-form']); ?>

                    <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <input type="hidden" name="warehouse_id" value="0" />
                    <input type="hidden" name="time_period" value="weekly" />
                    <a id="sale-report-chart-link" href=""><?php echo e(trans('file.Sale Report Chart')); ?></a>
                    <?php echo Form::close(); ?>

                </li>
                <?php endif; ?>
                <?php if($payment_report_active): ?>
                <li id="payment-report-menu">
                <?php echo Form::open(['route' => 'report.paymentByDate', 'method' => 'post', 'id' => 'payment-report-form']); ?>

                <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                <a id="payment-report-link" href=""><?php echo e(trans('file.Payment Report')); ?></a>
                <?php echo Form::close(); ?>

                </li>
                <?php endif; ?>
                <?php if($purchase_report_active): ?>
                <li id="purchase-report-menu">
                <?php echo Form::open(['route' => 'report.purchase', 'method' => 'post', 'id' => 'purchase-report-form']); ?>

                <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                <input type="hidden" name="warehouse_id" value="0" />
                <a id="purchase-report-link" href=""><?php echo e(trans('file.Purchase Report')); ?></a>
                <?php echo Form::close(); ?>

                </li>
                <?php endif; ?>
                <?php if($customer_report_active): ?>
                <li id="customer-report-menu">
                <a id="customer-report-link" href=""><?php echo e(trans('file.Customer Report')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($customer_report_active): ?>
                <li id="customer-report-menu">
                    <a id="customer-group-report-link" href=""><?php echo e(trans('file.Customer Group Report')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($due_report_active): ?>
                <li id="due-report-menu">
                    <?php echo Form::open(['route' => 'report.customerDueByDate', 'method' => 'post', 'id' => 'customer-due-report-form']); ?>

                    <input type="hidden" name="start_date" value="<?php echo e(date('Y-m-d', strtotime('-1 year'))); ?>" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <a id="due-report-link" href=""><?php echo e(trans('file.Customer Due Report')); ?></a>
                    <?php echo Form::close(); ?>

                </li>
                <?php endif; ?>
                <?php if($supplier_report_active): ?>
                <li id="supplier-report-menu">
                    <a id="supplier-report-link" href=""><?php echo e(trans('file.Supplier Report')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($supplier_due_report_active): ?>
                <li id="supplier-due-report-menu">
                    <?php echo Form::open(['route' => 'report.supplierDueByDate', 'method' => 'post', 'id' => 'supplier-due-report-form']); ?>

                    <input type="hidden" name="start_date" value="<?php echo e(date('Y-m-d', strtotime('-1 year'))); ?>" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <a id="supplier-due-report-link" href=""><?php echo e(trans('file.Supplier Due Report')); ?></a>
                    <?php echo Form::close(); ?>

                </li>
                <?php endif; ?>
                <?php if($warehouse_report_active): ?>
                <li id="warehouse-report-menu">
                <a id="warehouse-report-link" href=""><?php echo e(trans('file.Warehouse Report')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($warehouse_stock_report_active): ?>
                <li id="warehouse-stock-report-menu">
                <a href="<?php echo e(route('report.warehouseStock')); ?>"><?php echo e(trans('file.Warehouse Stock Chart')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($product_expiry_report_active): ?>
                <li id="productExpiry-report-menu">
                <a href="<?php echo e(route('report.productExpiry')); ?>"><?php echo e(trans('file.Product Expiry Report')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($product_qty_alert_active): ?>
                <li id="qtyAlert-report-menu">
                <a href="<?php echo e(route('report.qtyAlert')); ?>"><?php echo e(trans('file.Product Quantity Alert')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($dso_report_active): ?>
                <li id="daily-sale-objective-menu">
                    <a href="<?php echo e(route('report.dailySaleObjective')); ?>"><?php echo e(trans('file.Daily Sale Objective Report')); ?></a>
                </li>
                <?php endif; ?>
                <?php if($user_report_active): ?>
                <li id="user-report-menu">
                <a id="user-report-link" href=""><?php echo e(trans('file.User Report')); ?></a>
                </li>
                <?php endif; ?>
            </ul>
            </li>
            <?php endif; ?>
            <?php if(\Schema::hasColumn('products', 'woocommerce_product_id')): ?>
                <li><a href="<?php echo e(route('woocommerce.index')); ?>"> <i class="dripicons-weight"></i> <span>WooCommerce</span></a></li>
            <?php endif; ?>
            <?php if(!config('database.connections.saleprosaas_landlord')): ?>
                <li id="addon-list"> <a href="<?php echo e(url('addon-list')); ?>" target="_blank"> <i class="dripicons-broadcast"></i><span style="color:red; font-weight: bold;"><?php echo e(trans('file.Addon List')); ?></span></a></li>
            <?php endif; ?>
            <li><a href="#setting" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-gear"></i><span><?php echo e(trans('file.settings')); ?></span></a>
                <ul id="setting" class="collapse list-unstyled ">
                    <?php
                        $all_notification_permission_active = $role_has_permissions_list->where('name', 'all_notification')->first();

                        $send_notification_permission_active = $role_has_permissions_list->where('name', 'send_notification')->first();

                        $warehouse_permission_active = $role_has_permissions_list->where('name', 'warehouse')->first();

                        $customer_group_permission_active = $role_has_permissions_list->where('name', 'customer_group')->first();

                        $brand_permission_active = $role_has_permissions_list->where('name', 'brand')->first();

                        $unit_permission_active = $role_has_permissions_list->where('name', 'unit')->first();

                        $currency_permission_active = $role_has_permissions_list->where('name', 'currency')->first();

                        $tax_permission_active = $role_has_permissions_list->where('name', 'tax')->first();

                        $general_setting_permission_active = $role_has_permissions_list->where('name', 'general_setting')->first();

                        $backup_database_permission_active = $role_has_permissions_list->where('name', 'backup_database')->first();

                        $mail_setting_permission_active = $role_has_permissions_list->where('name', 'mail_setting')->first();

                        $sms_setting_permission_active = $role_has_permissions_list->where('name', 'sms_setting')->first();

                        $create_sms_permission_active = $role_has_permissions_list->where('name', 'create_sms')->first();

                        $pos_setting_permission_active = $role_has_permissions_list->where('name', 'pos_setting')->first();

                        $hrm_setting_permission_active = $role_has_permissions_list->where('name', 'hrm_setting')->first();

                        $reward_point_setting_permission_active = $role_has_permissions_list->where('name', 'reward_point_setting')->first();

                        $discount_plan_permission_active = $role_has_permissions_list->where('name', 'discount_plan')->first();

                        $discount_permission_active = $role_has_permissions_list->where('name', 'discount')->first();

                        $custom_field_permission_active = $role_has_permissions_list->where('name', 'custom_field')->first();
                    ?>
                    <?php if($role->id <= 2): ?>
                    <li id="role-menu"><a href="<?php echo e(route('role.index')); ?>"><?php echo e(trans('file.Role Permission')); ?></a></li>
                    <?php if($custom_field_permission_active): ?>
                    <li id="custom-field-list-menu"><a href="<?php echo e(route('custom-fields.index')); ?>"><?php echo e(trans('file.Custom Field List')); ?></a></li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php if($discount_plan_permission_active): ?>
                    <li id="discount-plan-list-menu"><a href="<?php echo e(route('discount-plans.index')); ?>"><?php echo e(trans('file.Discount Plan')); ?></a></li>
                    <?php endif; ?>
                    <?php if($discount_permission_active): ?>
                    <li id="discount-list-menu"><a href="<?php echo e(route('discounts.index')); ?>"><?php echo e(trans('file.Discount')); ?></a></li>
                    <?php endif; ?>
                    <?php if($all_notification_permission_active): ?>
                    <li id="notification-list-menu">
                        <a href="<?php echo e(route('notifications.index')); ?>"><?php echo e(trans('file.All Notification')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if($send_notification_permission_active): ?>
                    <li id="notification-menu">
                    <a href="" id="send-notification"><?php echo e(trans('file.Send Notification')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if($warehouse_permission_active): ?>
                    <li id="warehouse-menu"><a href="<?php echo e(route('warehouse.index')); ?>"><?php echo e(trans('file.Warehouse')); ?></a></li>
                    <?php endif; ?>
                    <li id="table-menu"><a href="<?php echo e(route('tables.index')); ?>"><?php echo e(trans('file.Tables')); ?></a></li>
                    <?php if($customer_group_permission_active): ?>
                    <li id="customer-group-menu"><a href="<?php echo e(route('customer_group.index')); ?>"><?php echo e(trans('file.Customer Group')); ?></a></li>
                    <?php endif; ?>
                    <?php if($brand_permission_active): ?>
                    <li id="brand-menu"><a href="<?php echo e(route('brand.index')); ?>"><?php echo e(trans('file.Brand')); ?></a></li>
                    <?php endif; ?>
                    <?php if($unit_permission_active): ?>
                    <li id="unit-menu"><a href="<?php echo e(route('unit.index')); ?>"><?php echo e(trans('file.Unit')); ?></a></li>
                    <?php endif; ?>
                    <?php if($currency_permission_active): ?>
                    <li id="currency-menu"><a href="<?php echo e(route('currency.index')); ?>"><?php echo e(trans('file.Currency')); ?></a></li>
                    <?php endif; ?>
                    <?php if($tax_permission_active): ?>
                    <li id="tax-menu"><a href="<?php echo e(route('tax.index')); ?>"><?php echo e(trans('file.Tax')); ?></a></li>
                    <?php endif; ?>
                    <li id="user-menu"><a href="<?php echo e(route('user.profile', ['id' => Auth::id()])); ?>"><?php echo e(trans('file.User Profile')); ?></a></li>
                    <?php if($create_sms_permission_active): ?>
                    <li id="create-sms-menu"><a href="<?php echo e(route('setting.createSms')); ?>"><?php echo e(trans('file.Create SMS')); ?></a></li>
                    <?php endif; ?>
                    <?php if($backup_database_permission_active): ?>
                    <li><a href="<?php echo e(route('setting.backup')); ?>"><?php echo e(trans('file.Backup Database')); ?></a></li>
                    <?php endif; ?>
                    <!-- <?php if($general_setting_permission_active): ?>
                    <li id="general-setting-menu"><a href="<?php echo e(route('setting.general')); ?>"><?php echo e(trans('file.General Setting')); ?></a></li>
                    <?php endif; ?> -->
                    <!-- <?php if($mail_setting_permission_active): ?>
                    <li id="mail-setting-menu"><a href="<?php echo e(route('setting.mail')); ?>"><?php echo e(trans('file.Mail Setting')); ?></a></li>
                    <?php endif; ?>
                    <?php if($reward_point_setting_permission_active): ?>
                    <li id="reward-point-setting-menu"><a href="<?php echo e(route('setting.rewardPoint')); ?>"><?php echo e(trans('file.Reward Point Setting')); ?></a></li>
                    <?php endif; ?>
                    <?php if($sms_setting_permission_active): ?>
                    <li id="sms-setting-menu"><a href="<?php echo e(route('setting.sms')); ?>"><?php echo e(trans('file.SMS Setting')); ?></a></li>
                    <?php endif; ?>
                    <?php if($pos_setting_permission_active): ?>
                    <li id="pos-setting-menu"><a href="<?php echo e(route('setting.pos')); ?>">POS <?php echo e(trans('file.settings')); ?></a></li>
                    <?php endif; ?>
                    <?php if($hrm_setting_permission_active): ?>
                    <li id="hrm-setting-menu"><a href="<?php echo e(route('setting.hrm')); ?>"> <?php echo e(trans('file.HRM Setting')); ?></a></li>
                    <?php endif; ?> -->
                </ul>
            </li>
            <?php if(Auth::user()->role_id != 5): ?>
            <li><a target="_blank" href="<?php echo e(url('/documentation')); ?>"> <i class="dripicons-information"></i><span><?php echo e(trans('file.Documentation')); ?></span></a></li>
            <?php endif; ?>
        </ul><?php /**PATH C:\laragon\www\salepro\resources\views/backend/layout/sidebar.blade.php ENDPATH**/ ?>