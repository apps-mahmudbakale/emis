@extends('layouts.auth')
@section('content')
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">

                        <!--begin::Form-->
                        <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                            action="{{ route('login') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <img style="width: 40%;" src="{{asset('agile_logo.png')}}" alt="">
                                <!--end::Title-->

                                <!--begin::Subtitle-->
<!--                                <div class="text-gray-500 fw-semibold fs-6">-->
<!--                                    Your Social Campaigns-->
<!--                                </div>-->
                                <!--end::Subtitle--->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group--->
                            <div class="fv-row mb-8 fv-plugins-icon-container">
                                <!--begin::Email-->
                                <input type="text" placeholder="Email" name="email" autocomplete="off"
                                    class="form-control bg-transparent">
                                <!--end::Email-->
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>

                            <!--end::Input group--->
                            <div class="fv-row mb-3 fv-plugins-icon-container">
                                <!--begin::Password-->
                                <input type="password" placeholder="Password" name="password" autocomplete="off"
                                    class="form-control bg-transparent">
                                <!--end::Password-->
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group--->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>

                                <!--begin::Link-->
                                <a href="" class="link-primary">
                                    Forgot Password ?
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">
                                    Sign In
                                </button>
                            </div>
                            <!--end::Submit button-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Body-->

            <!--begin::Aside-->
            <div id="background" class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url({{ asset('Kano-City-Walls.png') }})">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <!--begin::Logo-->
                    <a href="" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="/metronic8/demo8/assets/media/logos/custom-1.png" class="h-60px h-lg-75px">
                    </a>
                    <!--end::Logo-->

                    <!--begin::Image-->
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                        src="/metronic8/demo8/assets/media/misc/auth-screens.png" alt="">
                    <!--end::Image-->

                    <!--begin::Title-->
                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                        Fast, Efficient and Productive
                    </h1>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="d-none d-lg-block text-white fs-base text-center">
                        In this kind of post, <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the
                            blogger</a>

                        introduces a person they’ve interviewed <br> and provides some background information about

                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>
                        and their <br> work following this is a transcript of the interview.
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const images = [
                "{{ asset('Kano-City-Walls.png') }}",
                "{{ asset('B332874_The-old-and-famous-city-of-Kano-in-Nigeria.jpg') }}",
                "{{ asset('1637686071731.jpg') }}",
                "{{ asset('emirs-palace.jpeg') }}",
            ];
            let currentIndex = 0;
            const backgroundElement = document.getElementById('background');
            const changeInterval = 5000; // Change image every 5 seconds

            function changeBackgroundImage() {
                currentIndex = (currentIndex + 1) % images.length;
                backgroundElement.style.backgroundImage = `url(${images[currentIndex]})`;
            }

            setInterval(changeBackgroundImage, changeInterval);
        });
    </script>
@endsection
