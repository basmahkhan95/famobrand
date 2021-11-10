<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/charts/morris.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/charts/chart.min.js')); ?>"></script>
    <script>
            var ctx = $("#famo-column-chart");
            var chartOptions = {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: 'rgb(0, 255, 0)',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                responsiveAnimationDuration: 500,
                legend: {
                    position: 'top',
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false,
                        },
                        scaleLabel: {
                            display: true,
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false,
                        },
                        scaleLabel: {
                            display: true,
                        }
                    }]
                },
                title: {
                    display: true,

                }
            };

            $.LoadingOverlay("show");
            $.ajax({
                url: "<?php echo e(route('admin.chart.index')); ?>",
                method: 'get',
                data: "",
                success: function (response) {
                    $.LoadingOverlay("hide");

                    let chartData = {
                        labels: response.months,
                        datasets: [{
                            label: "Earnings",
                            data: response.sum,
                            backgroundColor: "#00bcff",
                            hoverBackgroundColor: "#666666",
                            borderColor: "transparent"
                        }, {
                            label: "Subscriptions",
                            data: response.count,
                            backgroundColor: "#0b2469",
                            hoverBackgroundColor: "#333333",
                            borderColor: "transparent"
                        }]
                    };

                    let config = {
                        type: 'bar',
                        options: chartOptions,
                        data: chartData
                    };

                    let lineChart = new Chart(ctx, config);
                }

            });

            $(document).on('change', '#famo-change-chart-year', function () {

                let year = $(this).val()

                $("#famo-column-chart").empty();

                $.LoadingOverlay("show");

                $.ajax({
                    url: "<?php echo e(url('admin/chart')); ?>" + "?year=" + year,
                    method: "GET",
                    success: function (response) {
                        $.LoadingOverlay("hide");
                        $.LoadingOverlay("hide");

                        let chartData = {
                            labels: response.months,
                            datasets: [{
                                label: "Earnings",
                                data: response.sum,
                                backgroundColor: "#00bcff",
                                hoverBackgroundColor: "#666666",
                                borderColor: "transparent"
                            }, {
                                label: "Subscriptions",
                                data: response.count,
                                backgroundColor: "#0b2469",
                                hoverBackgroundColor: "#333333",
                                borderColor: "transparent"
                            }]
                        };

                        let config = {
                            type: 'bar',
                            options: chartOptions,
                            data: chartData
                        };

                        let lineChart = new Chart(ctx, config);
                    }
                });
            });

    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="app-content content view user">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-12">
                            <div class="card rounded pad-20">
                                <div class="card-content collapse show">
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1 class="pull-left">Dashboard</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2 cat-cards">
                                            <div class="col-xl-12 col-12">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6 col-12 ">
                                                        <div class="card rounded card-lb">
                                                            <div class="card-content">
                                                                <div class="card-body cleartfix">
                                                                    <div class="media">
                                                                        <div class="media-body align-self-center">
                                                                            <p class="m-0">Registered
                                                                                Users<br><span><?php echo e(@$TotalUser); ?></span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="align-self-center">
                                                                            <i class="fa fa-users"
                                                                               aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-12 ">
                                                        <div class="card rounded card-db">
                                                            <div class="card-content">
                                                                <div class="card-body cleartfix">
                                                                    <div class="media">
                                                                        <div class="media-body align-self-center">
                                                                            <p class="m-0">Total Domain
                                                                                Searches<br><span><?php echo e($TotalDomainSearch); ?></span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="align-self-center">
                                                                            <i class="fa fa-globe"
                                                                               aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Basic Column Chart -->
                                        <div class="row mt-3 mb-3">
                                            <div class="col-12">
                                                <h2>Revenue generated per month</h2>
                                                <div class="col-md-3 col-12">
                                                    <label>Selected Year:</label>
                                                    <select id="famo-change-chart-year">
                                                        <option value="<?php echo e(date("Y")); ?>"><?php echo e(date("Y")); ?></option>
                                                        <option
                                                            value="<?php echo e(date("Y",strtotime("-1 year"))); ?>"><?php echo e(date("Y",strtotime("-1 year"))); ?></option>
                                                        <option
                                                            value="<?php echo e(date("Y",strtotime("-2 year"))); ?>"><?php echo e(date("Y",strtotime("-2 year"))); ?></option>
                                                        <option
                                                            value="<?php echo e(date("Y",strtotime("-3 year"))); ?>"><?php echo e(date("Y",strtotime("-3 year"))); ?></option>
                                                        <option
                                                            value="<?php echo e(date("Y",strtotime("-4 year"))); ?>"><?php echo e(date("Y",strtotime("-4 year"))); ?></option>
                                                    </select>
                                                </div>
                                                <div class="media home-chart align-items-center">
                                                    <h5 class="text-center">Earnings</h5>
                                                    <div class="media-body">
                                                        <div class="height-400">
                                                            <canvas id="famo-column-chart"></canvas>
                                                        </div>
                                                        <h5 class="text-center">Months</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'Dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/home/index.blade.php ENDPATH**/ ?>