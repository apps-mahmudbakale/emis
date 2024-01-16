@extends('layouts.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Users</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('app.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Students</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"><a href="{{ route('app.students.index') }}"
                                class="text-muted text-hover-primary">Users</a></li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Create Student</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Student</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('app.students.store') }}" method="POST">
                        @csrf
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                    id="First Name">
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Place of Birth</label>
                                <input type="text" name="place_of_birth" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" id="" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Class</label>
                                <select name="class" id="" class="form-control">
                                    <option>JSS1</option>
                                    <option>JSS2</option>
                                    <option>JSS3</option>
                                    <option>SS1</option>
                                    <option>SS2</option>
                                    <option>SS3</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Nationality</label>
                                <input type="text" name="nationality" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>LGA</label>
                                <select name="lga_id" id="lga" class="form-control">
                                    <option value="">Select LGA..</option>
                                    @foreach ($lgas as $lga)
                                        <option value="{{ $lga->id }}">{{ $lga->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>School</label>
                                <select name="school_id" id="school" class="form-control">
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Special Needs</label>
                                <select name="special_needs" id="" class="form-control">
                                        <option value="learningDisabilities">Learning Disabilities</option>
                                        <option value="adhd">Attention-Deficit/Hyperactivity Disorder (ADHD)</option>
                                        <option value="autismSpectrum">Autism Spectrum Disorder (ASD)</option>
                                        <option value="intellectualDisabilities">Intellectual Disabilities</option>
                                        <option value="physicalDisabilities">Physical Disabilities</option>
                                        <option value="speechLanguageDisorders">Speech and Language Disorders</option>
                                        <option value="sensoryProcessingDisorders">Sensory Processing Disorders</option>
                                        <option value="medicalConditions">Medical Conditions</option>
                                        <option value="behavioralEmotionalDisorders">Behavioral or Emotional Disorders</option>
                                        <option value="communicationNeeds">Communication Needs</option>
                                        <option value="assistiveTechnology">Assistive Technology Requirements</option>
                                        <option value="socialEmotionalSupport">Social and Emotional Support</option>
                                        <option value="iep504Plan">Individualized Education Program (IEP) or 504 Plan</option>
                                        <option value="none">None</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Attendance Percentage</label>
                                <input type="number" name="attendance_percentage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Performance Percentage</label>
                                <input type="number" name="performance_percentage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Home Address</label>
                                <textarea name="home_address" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Guardian Name</label>
                                <input type="text" name="guardian_name" class="form-control" placeholder="Name"
                                    id="First Name">
                            </div>
                            <div class="form-group">
                                <label>Guardian Phone</label>
                                <input type="text" name="guardian_phone" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <script>
        var lga = document.getElementById("lga");
        var school = document.getElementById("school");
        let Url = '{{ url('/api/') }}';

        school.length = 0;

        let defaultOption = document.createElement('option');
        defaultOption.text = 'Choose School';

        school.add(defaultOption);
        school.selectedIndex = 0;

        lga.addEventListener("change", function() {
            // alert(state.value);

            fetch(Url + '/schools/findByLga/' + lga.value)
                .then((res) => res.json())
                .then((data) => {
                    console.log(data)
                    document.getElementById("school").innerHTML = "";
                    let option;
                    data.forEach(element => {
                        option = document.createElement('option');
                        option.text = element.name;
                        option.value = element.id;
                        school.add(option);
                        console.log(element.name);
                    });

                });
        })
    </script>
@endsection
