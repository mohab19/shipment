@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/media.css') }}">
@endpush
@section('content')
<!--sart login-->
<section class="login-table">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-4" >
                <div class="best-price text-center">
                    <i class="fas fa-dollar-sign fa-2x"></i>
                    <h4 class="mt-5">BEST PRICES</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form ">
                    <div class="form-group">
                        <label for="inputName"></label>
                        <input type="text" placeholder="Enter Name" id="inputName" class="form-control d-block">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail"></label>
                        <input type="email" placeholder="Enter Email" id="inputEmail" class="form-control d-block">
                   </div>
                   <input type="submit" class="btn w-50  button-login" value="LOGIN">
                   <input type="submit" class="btn w-50  button-login my-4" value="REGISTER">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="call-us text-center">
                    <i class="fas fa-phone fa-2x"></i>
                    <h4 class="mt-5">24/7 SUPPORT</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum  odio minima tempora animi iure.</p>
                </div>
           </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    var amount_setting = 0;
    $.ajax({
        type: 'GET',
        url: 'get_settings',
        success: function(response) {
            amount_setting = response['value'];
        }
    });
    var actionStatus;
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: amount_setting,
                        currency: 'SAR'
                    }
                }]
            });
        },
        onInit:  function(data, actions) {
            actions.disable();
            actionStatus = actions;
        },
        onClick :  function(){
            if($("#name").val() != "" && $("#email").val() != "" && $("#password").val() != "" && $("#password_confirmation").val() != "") {
                actionStatus.enable();
            } else {
                actionStatus.disable();
                alert("يرجى التأكد من جميع الحقول!");
            }
        },
        onCancel: function(data,actions) {
            alert("لم يتم التسجيل بسبب إلغاء عملية الدفع");
        },
        onError: function(data,actions) {
            alert("حدث خطأ ما، الرجاء المحاولة في وقت آخــر");
        },
        onApprove: function(data, actions) {
            var token                 = $("meta[name='csrf-token']").attr("content");
            var lang                  = $("meta[name='locale']").attr("content");
            var name                  = $("#name").val();
            var email                 = $("#email").val();
            var password              = $("#password").val();
            var password_confirmation = $("#password_confirmation").val();
            $.ajax({
                type: "POST",
                url: "register",
                data: {
                    _token               : token,
                    name                 : name,
                    email                : email,
                    password             : password,
                    password_confirmation: password_confirmation
                },
                success: function(response) {
                    window.location.href = "/";
                },
                error: function(response) {
                    console.log(response);
                    $('#notification').removeClass('alert-success');
                    $('#notification').addClass('alert-danger');
                    var html = '';
                    $.each(response.responseJSON.errors, function(key, value) {
                        html += '<li>'+value+'</li>';
                    });
                    $('#notification ul').html(html);
                    $('#notification').show(300);
                }
            });
        }
    }).render('#paypal-button-container');
</script>
@endpush
