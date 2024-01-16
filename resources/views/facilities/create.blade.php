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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Facilities</h1>
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
                    <li class="breadcrumb-item text-muted">Facilities</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted"><a href="{{ route('app.users.index') }}" class="text-muted text-hover-primary">Users</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Add Facility</li>
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
                    <h3 class="card-title">Add Facility</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('app.facilities.store')}}" method="POST">
                    @csrf
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label>LGA</label>
                            <select name="lga_id" id="lga" class="form-control">
                                @foreach ($lgas as $lga)
                                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>School</label>
                            <select name="school_id" id="school" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label>How many classrooms does this school have?</label>
                           <input type="number" name="num_of_classroom" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Does any class meet outside due of lack of classrooms? If Yes, How many? If No, write 0. </label>
                           <input type="number" name="unavailable_classroom" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Are there any classrooms with more than one grade combined? If Yes, How many? If No, write 0.  </label>
                           <input type="number" name="combined_classroom" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Does this school have electricity?</label>
                            <select name="electricity"  class="form-control">
                                <option>--Select Answer--</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>School Ammenities</label>
                            <select id="select-facility-1" name="school_amenities" multiple placeholder="Select structure ..." autocomplete="off" class="form-control" multiple>
                                <option value="1">Chairs and desks for all students</option>
                                <option value="2"> Blackboard in every classroom</option>
                                <option value="3">Computer that students use</option>
                                <option value="4">Fans in all classrooms</option>
                                <option value="4">Fan in principals office</option>
                                <option value="5">Playground</option>
                                <option value="6">Kitchen</option>
                                <option value="7">A Cook</option>
                                <option value="8"> Separate office for principal/headteacher</option>
                            </select>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <label>Does the school have any extra-curricular activities</label>
                            <select id="select-facility-1" name="extra_curricular_activities" multiple placeholder="Select structure ..." autocomplete="off" class="form-control" multiple>
                                <option value="1">Chairs and desks for all students</option>
                                <option value="2"> Blackboard in every classroom</option>
                                <option value="3">Computer that students use</option>
                                <option value="4">Fans in all classrooms</option>
                                <option value="4">Fan in principals office</option>
                                <option value="5">Playground</option>
                                <option value="6">Kitchen</option>
                                <option value="7">A Cook</option>
                                <option value="8"> Separate office for principal/headteacher</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>What is the school's main source of drinking water?</label>
                            <select name="water" id="school_category" class="form-control">
                                <option>--Select Answer--</option>
                                <option>Tap Water</option>
                                <option>Hand Pump </option>
                                <option>Open Well</option>
                                <option>Tanker Truck</option>
                                <option>River, Stream, Canal</option>
                                <option>Rain Water</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Does the school have any toilet facility for Boys and Girls?</label>
                            <select name="toilet" id="school_category" class="form-control">
                                <option>--Select Answer--</option>
                                <option>Yes, They share same toilet</option>
                                <option>Yes, They have seperate toilet</option>
                                <option>No, They don't have toilets</option>
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
