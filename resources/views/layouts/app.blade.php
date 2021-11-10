<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ @$Title.' - '.config('app.name') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/hover.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/datatables.min.css') }}">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/sweetalert.css')}}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

@yield('content')

@include('inc.footer')

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="{{ asset('admin/app-assets/vendors/js/extensions/moment.min.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
<script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user/js/wow.min.js') }}"></script>
<script src="{{ asset('user/js/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('user/js/datatable-basic.js') }}" type="text/javascript"></script>
<script src="{{asset('admin/app-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.validate({
        modules: 'location, date, security, file',
        form: '#famo-change-password-form'
    });

    $('.famo-input-mask-cvv').mask('000');
    $('.famo-input-mask-phone-us').mask('(000) 000-0000');
    $('.famo-input-mask-credit-card-expiry-date').mask('00/0000');
    $('.famo-input-mask-credit-card-number').mask('0000-0000-0000-0000');

    new WOW().init();

    var mm = jQuery('#ban-slider').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 3000,
        responsiveClass: true,
        dots: false,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1050: {
                items: 1
            }
        }
    });
</script>
<script type="text/javascript">
    var mm = jQuery('#testi').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        responsiveClass: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1050: {
                items: 2
            }
        }
    });
    $('.mmnext').click(function () {
        mm.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.mmprev').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        mm.trigger('prev.owl.carousel', [300]);
    })
</script>
<script type="text/javascript">
    if ($(window).width() <= 1199) {
        $(".wow").removeClass("wow");
    }
</script>
<script>
    $('#cont').on('click', function () {
        $('#exampleModalCenter').modal('hide');
        $('#exampleModal').modal('show');
    });
    $('#cont2').on('click', function () {
        $('#exampleModal').modal('hide');
        $('#exampleModal1').modal('show');
    });
    $('#cont3').on('click', function () {
        $('#exampleModal1').modal('hide');
        $('#exampleModal2').modal('show');
    });
</script>

<script>
    $(document).ready(function(){
        $('.famo-btn-order-now').click(function(){
            $('#famo-input-package-id').val($(this).data('package-id'))
            $('#famo-package-name').text($(this).data('package-name'))
            $('#famo-package-amount').text($(this).data('package-amount'))
            $('#famo-payment-modal').modal('show')
        })
        $('#famo-payment-form').submit(function(e){
            e.preventDefault();

            let form = $(this);
            let route = form.attr('action')

            swal({
                title: "Payment Confirmation",
                text: "Are you sure?",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "No",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: true,
                    },
                    confirm: {
                        text: "Yes",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: false
                    }
                }
            }).then(isConfirm => {
                if (isConfirm) {
                    $.ajax({
                        url: route,
                        dataType: 'JSON',
                        cache: false,
                        data: form.serialize(),
                        type: 'post',
                        success: function (response) {
                            if (response.status == true) {
                                swal("Success", response.message, "success");
                                form[0].reset()
                                $('#famo-payment-modal').modal('hide')
                            }else{
                                swal("Failed", response.message, "error");
                            }
                        },
                    });
                }
            });

        })

        $('#famo-change-password-form').submit(function (e) {

            e.preventDefault();

            let form = $(this)
            let formData = form.serialize();
            let formAction = form.attr('action')

            $.LoadingOverlay("show");

            $.ajax({
                url: formAction,
                method: 'post',
                data: formData,
                success: function (response) {
                    $.LoadingOverlay("hide");
                    $('.famo-ajax-flash-message').html('');
                    form[0].reset();
                    if (response.message) {
                        $.each(response.message, function (key, value) {
                            $('.famo-ajax-flash-message').show();
                            $('.famo-ajax-flash-message').append("<div class='alert " + response.class + "'>" + value + "</div>");
                            if (response.status) {
                                $.when($('.famo-ajax-flash-message').delay(5000).fadeOut(400)).done(function () {
                                    $('#famo-modal-change-password').modal('hide')
                                });
                            }
                        });
                    }
                }

            });
        });
    })
</script>

@yield('js')

</body>
</html>
