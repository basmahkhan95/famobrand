<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ @$Title.' - '.config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/app.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/app-assets/vendors/css/forms/selects/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">

    {{--Different CSS--}}
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/sweetalert.css')}}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet"
          type="text/css"/>

    <style>

        .famo-ellipsis {
            white-space: nowrap;
            width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
        }


    </style>

    @yield('css')

</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click"
      data-menu="vertical-menu" data-col="2-columns">

@include('admin.inc.nav')
@include('admin.inc.sidebar')

@yield('content')

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="{{ asset('admin/app-assets/vendors/js/extensions/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/app-assets/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/app-assets/js/scripts/modal/components-modal.js') }}" type="text/javascript"></script>
<script src="{{asset('admin/app-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
<script src="https://dev61.onlinetestingserver.com:6010/socket.io/socket.io.js"></script>
<script type="text/javascript">

    function toTimestamp(strDate) {
        let datum = Date.parse(strDate);
        return datum / 1000;
    }

    function getUnreadChatMessagesCount(){
        $.ajax({
            url: 'https://dev28.onlinetestingserver.com/soachatcentralizedWeb/api/user/get-unread-messages-count/3e509ed778094424bebf8fc540f6e72a/{{'admin-'.Auth::id()}}',
            success: function(response){
                if(response.data)
                    $('.famo-message-icon').text(response.data);
            }
        })
    }

    $.validate({
        modules: 'location, date, security, file',
        form: '#famo-change-password-form, #famo-form-add-testimonial, #famo-form-edit-testimonial'
    });

    if ($('#famo-input-package-description').length) {
        ClassicEditor
            .create(document.querySelector('#famo-input-package-description'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                heading: {
                    options: [
                        {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
                        {model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1'},
                        {model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2'}
                    ]
                }
            })
            .catch(error => {
                console.log(error);
            });
    }

    $('.famo-input-mask-cvv').mask('000');
    $('.famo-input-mask-phone-us').mask('(000) 000-0000');
    $('.famo-input-mask-credit-card-expiry-date').mask('00/0000');
    $('.famo-input-mask-credit-card-number').mask('0000-0000-0000-0000');

    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        setInterval(function(){
            getUnreadChatMessagesCount();
        }, 5000);

        $(".dataTables_filter input").attr("placeholder", "Search");

        var FilterIndex = 1;

        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                let min = $('#fromSelector').val() != '' ? toTimestamp($('#fromSelector').val()) : null;
                let max = $('#toSelector').val() != '' ? toTimestamp($('#toSelector').val()) : null;
                let startDate = moment(data[FilterIndex], 'MM/DD/YYYY').format('MM/DD/YYYY');
                startDate = toTimestamp(startDate);
                if (min == null && max == null) return true;
                if (min == null && startDate <= max) return true;
                if (max == null && startDate >= min) return true;
                if (startDate <= max && startDate >= min) return true;
                return false;
            }
        );

        $('#fromSelector').datepicker({
            uiLibrary: 'bootstrap4',
            onSelect: function () {
                table.draw();
            },
            changeMonth: true,
            changeYear: true
        });

        $('#toSelector').datepicker({
            uiLibrary: 'bootstrap4',
            onSelect: function () {
                table.draw();
            },
            changeMonth: true,
            changeYear: true
        });

        // Event listener to the two range filtering inputs to redraw on input
        $('#fromSelector, #toSelector').change(function () {
            FilterIndex = $('#fromSelector').attr('data-index')
            $('.zero-configuration').DataTable().draw();
        });

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

        $('#famo-form-add-testimonial').submit(function (e) {

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
                    $('.famo-ajax-flash-message').show();
                    $('.famo-ajax-flash-message').append("<div class='alert " + response.class + "'>" + response.message + "</div>");
                    if (response.status) {
                        location.href = response.redirect
                    }
                }

            });
        });

        $('#famo-form-edit-testimonial').submit(function (e) {

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
                    $('.famo-ajax-flash-message').show();
                    $('.famo-ajax-flash-message').append("<div class='alert " + response.class + "'>" + response.message + "</div>");
                    if (response.status) {
                        location.href = response.redirect
                    }
                }

            });
        });

        $(document).on('click', '.famo-btn-view-testimonial', function () {

            let element = $(this)
            $('.famo-input-client-name').val(element.attr('data-clientName'))
            $('.famo-input-testimonial').val(element.attr('data-testimonial'))
            $('#famo-modal-view-testimonial').modal('show')
        })

        $(document).on('click', '.famo-btn-edit-testimonial', function () {
            let element = $(this)
            $('.famo-input-id').val(element.attr('data-id'))
            $('.famo-input-client-name').val(element.attr('data-clientName'))
            $('.famo-input-testimonial').val(element.attr('data-testimonial'))
            $('#famo-modal-edit-testimonial').modal('show')
        })

        $(document).on('click', '.famo-swal-delete', function () {

            let element = $(this);
            let route = element.attr('data-route')

            swal({
                title: "Warning",
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
                        data: "",
                        type: 'POST',
                        success: function (response) {
                            if (response.status == true) {
                                swal("Success", response.message, "success");
                                setTimeout(function () {
                                    if (response.redirect !== undefined) {
                                        location.href = response.redirect;
                                    } else {
                                        location.reload();
                                    }
                                }, 2000)
                            }
                        },
                    });
                }
            });

        });

        const socket = io('https://dev61.onlinetestingserver.com:6010');
        const adminNotificationChannel = "{{ 'famo_brands_database_admin_notification.'.auth()->id() }}";

        socket.emit('subscribe', {
            channel: adminNotificationChannel
        }).on('App\\Events\\AdminNotificationEvent', function (channel, data) {
            $('.famo-div-notif').html(data.html)
        });

        $(document).on('click','.famo-bell-icon',function (e) {
            e.preventDefault()
            $.ajax({
                url: "{{ route('admin.notification.update') }}",
                method: 'post',
                success: function (response) {
                    $('.famo-notif-count').hide()
                }
            });
        });

    });

    window.addEventListener("message", function(event) {
        if(event.data == 'reloadnoticount'){
            setTimeout(function(){
                getUnreadChatMessagesCount();
            },1000);
        }
    });

</script>

@yield('js')

</body>
</html>
