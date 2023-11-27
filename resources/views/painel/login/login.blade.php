@include('../layouts.header')

<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <!--end::Page bg image-->
    <!--begin::Authentication - Sign-in -->

    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center">
        <!--begin::Wrapper-->
        <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
            <!--begin::Content-->
            <div class="w-md-400px">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="post" action="#">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-dark fw-bolder mb-3">Acesso</h1>
                        <!--end::Title-->
                        <!--begin::Subtitle-->
                        <div class="text-gray-500 fw-semibold fs-6">Acesse os seus titulos</div>
                        <!--end::Subtitle=-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Login options-->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Email-->
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-3">
                        <!--begin::Password-->
                        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Password-->
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Acessar</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Submit button-->
                    <!--begin::Sign up-->

                    @if(isset($erro) )
                    <div class="alert alert-danger" role="alert">
                        {{ $erro }}
                    </div>
                    @endif

                    <div class="text-gray-500 text-center fw-semibold fs-6">Não é membro?
                        <a href="../../demo1/dist/authentication/layouts/overlay/sign-up.html" class="link-primary">Cadastre-se</a>
                    </div>
                    <!--end::Sign up-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Body-->

    <!--end::Authentication - Sign-in-->
</div>


@include('../layouts.footer')