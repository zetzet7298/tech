<x-auth-layout>

    <!--begin::Signin Form-->
    <form method="POST" action="{{route('confirm_2fa')}}" class="form w-100" novalidate="novalidate"
        id="kt_sign_in_form">
        @csrf

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">
                {{ __('Đăng nhập vào hệ thống') }}
            </h1>
           
        </div>
        

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Mã otp từ google authenticator') }}</label>
                <!--end::Label-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Input-->
            <input class="form-control mycustom" type="text" name="otp" autocomplete="off"
                required />
            <input class="form-control mycustom" type="hidden" name="email" autocomplete="off"
            value="{{$user->email}}" required autofocus />
            <input class="form-control mycustom" type="hidden" name="password" autocomplete="off"
            value="{{$password}}" required autofocus />
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                @include('partials.general._button-indicator', ['label' => __('Đăng nhập')])
            </button>
            <!--end::Submit button-->

            {{-- <!--begin::Separator-->
            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
            <!--end::Separator-->

            <!--begin::Google link-->
            <a href="{{ url('/auth/redirect/google') }}?redirect_uri={{ url()->previous() }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'svg/brand-logos/google-icon.svg') }}" class="h-20px me-3"/>
                {{ __('Continue with Google') }}
            </a>
            <!--end::Google link-->

            <!--begin::Facebook link-->
            <a href="{{ url('/auth/redirect/facebook') }}?redirect_uri={{ url()->previous() }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3"/>
                {{ __('Continue with Facebook') }}
            </a>
            <!--end::Facebook link--> --}}
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Signin Form-->

</x-auth-layout>
<script>
    /*
    "use strict";

    // Class definition
    var KTSigninGeneral = function() {
        // Elements
        var form;
        var submitButton;
        var validator;
    
        // Handle form
        var handleForm = function(e) {
            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            validator = FormValidation.formValidation(
                form,
                {
                    fields: {					
                        'email': {
                            validators: {
                                notEmpty: {
                                    message: 'Email address is required'
                                },
                                emailAddress: {
                                    message: 'The value is not a valid email address'
                                }
                            }
                        },
                        'password': {
                            validators: {
                                notEmpty: {
                                    message: 'The password is required'
                                }
                            }
                        } 
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row'
                        })
                    }
                }
            );		
    
            // Handle form submit
            submitButton.addEventListener('click', function (e) {
                // Prevent button default action
                e.preventDefault();
    
                // Validate form
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');
    
                        // Disable button to avoid multiple click 
                        submitButton.disabled = true;
                        
    
                        // Simulate ajax request
                        setTimeout(function() {
                            // Hide loading indication
                            submitButton.removeAttribute('data-kt-indicator');
    
                            // Enable button
                            submitButton.disabled = false;
    
                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "You have successfully logged in!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) { 
                                    form.querySelector('[name="email"]').value= "";
                                    form.querySelector('[name="password"]').value= "";  
                                    console.log(form)
                                    form.submit(); // submit form
                                }
                            });
                        }, 2000);   						
                    } else {
                        // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            });
        }
    
        // Public functions
        return {
            // Initialization
            init: function() {
                form = document.querySelector('#kt_sign_in_form');
                submitButton = document.querySelector('#kt_sign_in_submit');
                
                handleForm();
            }
        };
    }();
    
    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTSigninGeneral.init();
    });
    */
</script>
