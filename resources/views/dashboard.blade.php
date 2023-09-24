@extends('layouts.app')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="background-image: url('{{asset('Picture 1.png')}}');background-size: cover;">
        <!--begin::Toolbar-->
        <div class="toolbar bg-transparent pt-6 mb-5" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex flex-column align-items-start me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 flex-column mb-0">Dashboard
                        {{-- <!--begin::Description-->
                        <span class="text-muted fs-7 fw-bold mt-2">You have 7
                            <span class="text-primary fw-bolder">Active Projects</span></span> --}}
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                {{-- <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Secondary button-->
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-white btn-active-white btn-active-color-primary"
                        data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Friend</a>
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_new_target">New Project</a>
                    <!--end::Primary button-->
                </div> --}}
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="" class="container">
                <!--begin::Row-->
                <div class="row">
                     <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                        <!--begin::Card widget 16-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10"
                            style="background-color: #080655;background-image:url('{{asset('media/svg/shapes/wave-bg-dark.svg')}}'); background-size: cover;">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2" style="height:230px;">Data Analysis & Reporting</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-50 pt-1 fw-bold fs-6">Data Analysis & Reporting</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    
                                   
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 16-->
                    </div>
                    <!--end::Col-->

                     <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                        <!--begin::Card widget 16-->
                        <a href=""><div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10"
                            style="background-color: #f27635;background-image:url('{{asset('media/svg/shapes/wave-bg-dark.svg')}}'); background-size: cover;">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2" style="height:230px;">Data Collection & Management</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-50 pt-1 fw-bold fs-6">Data Collection & Management</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    
                                   
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div></a>
                        <!--end::Card widget 16-->
                    </div>
                    <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                        <!--begin::Card widget 16-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10"
                            style="background-color: #009ff7;background-image:url('{{asset('media/svg/shapes/wave-bg-dark.svg')}}'); background-size: cover;">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2" style="height:230px;">Monitoring and Evaluation</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-50 pt-1 fw-bold fs-6">Monitoring and Evaluation</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    
                                   
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 16-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                     <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                        <!--begin::Card widget 16-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10"
                            style="background-color: #080655;background-image:url('{{asset('media/svg/shapes/wave-bg-dark.svg')}}'); background-size: cover;">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2" style="height:230px;">Resource Planing</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-50 pt-1 fw-bold fs-6">Resource Planing</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    
                                   
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 16-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                     <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                        <!--begin::Card widget 16-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10"
                            style="background-color: #50cd89;background-image:url('{{asset('media/svg/shapes/wave-bg-dark.svg')}}'); background-size: cover;">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2" style="height:230px; font-size: 31px !important;">Communication & collaboration</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-50 pt-1 fw-bold fs-6">Communication & collaboration</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    
                                   
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 16-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                     <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                        <!--begin::Card widget 16-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10"
                            style="background-color: #f27635;background-image:url('{{asset('media/svg/shapes/wave-bg-dark.svg')}}'); background-size: cover;">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2" style="height:230px;">Integration with Other System</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-50 pt-1 fw-bold fs-6">Integration with Other System</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    
                                   
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 16-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
