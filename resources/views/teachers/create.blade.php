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
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Teachers</h1>
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
                        <li class="breadcrumb-item text-muted">Teacher Management</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"><a href="{{ route('app.teachers.index') }}"
                                class="text-muted text-hover-primary">Teachers</a></li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Create Teacher</li>
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
                        <h3 class="card-title">Create Teacher</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('app.teachers.store') }}" method="POST">
                        @csrf
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Name"
                                    id="First Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Name"
                                    id="Last Name">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" id="" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            @role('super-admin|admin')
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
                            @else
                                <input type="hidden" name="lga_id" value="{{auth()->school->lga_id}}" id="">
                                <input type="hidden" name="school_id" value="{{ auth()->user()->school->id }}">
                            @endrole
                            <div class="form-group">
                                <label>Age Range</label>
                                <select name="age_range" id="age_range" class="form-control">
                                    <option value="">Select Age Range</option>
                                    <option value="Under 25">Under 25</option>
                                    <option value="25-29">25-29</option>
                                    <option value="30-39">30-39</option>
                                    <option value="40-49">40-49</option>
                                    <option value="50-59">50-59</option>
                                    <option value="60+">60+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Employement Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Select status...</option>
                                    <option value="Fulltime">Fulltime</option>
                                    <option value="Part-time">Part-time</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Qualification</label>
                                <select name="education" id="education" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Below NCE">Below NCE</option>
                                    <option value="NCE">NCE</option>
                                    <option value="Bachelor degree">Bachelor degree</option>
                                    <option value="Masters degree">Masters degree</option>
                                    <option value="Above Masters">Above Masters</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Professional Certification</label>
                                <select name="certification" id="certification" class="form-control">
                                    <option value="">Select</option>
                                    <option value="TCRN">TCRN</option>
                                    <option value="COREN">COREN</option>
                                    <option value="National Certificate Of Education">National Certificate Of
                                        Education</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Teaching Subject</label>
                                <select name="subject" id="subject" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Arabic Language">Arabic Language</option>
                                    <option value="Basic Science">Basic Science</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="English">English</option>
                                    <option value="Mathematics">Mathematics</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Teaching Experience</label>
                                <select name="experience_school" class="form-control">
                                    <option value="">Select</option>
                                    <option value="This is my first year">This is my first year</option>
                                    <option value="1-2 years">1-2 years</option>
                                    <option value="3-5 years">3-5 years</option>
                                    <option value="6-10 years">6-10 years</option>
                                    <option value="11-15 years">11-15 years</option>
                                    <option value="16-20 years">16-20 years</option>
                                    <option value="More than 20 years">More than 20 years</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Area of Core Competencies</label>
                                <select name="competency" id="competency" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Good at Lesson Plan Design">Good at Lesson Plan Design
                                    </option>
                                    <option value="Able to Use Varied TEACHING Strategies">Able to Use Varied
                                        TEACHING Strategies</option>
                                    <option value="Able to Assess">Able to Assess</option>
                                    <option value="Able to Identify Student Needs">Able to Identify Student
                                        Needs</option>
                                    <option value="Maintaining a Professional Appearance">Maintaining a
                                        Professional Appearance</option>
                                    <option value="Demonstrating a Commitment to the Profession">Demonstrating a
                                        Commitment to the Profession</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ICT proficiency level</label>
                                <select name="ict_level" id="ict_level" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Spreadsheet skills (Microsoft Excel)</option>
                                    <option value="Advance">Advance</option>
                                </select>
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
