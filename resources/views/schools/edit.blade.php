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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Schools</h1>
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
                    <li class="breadcrumb-item text-muted">Data Collection</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted"><a href="{{ route('app.schools.index') }}" class="text-muted text-hover-primary">Schools</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Update School</li>
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
                    <h3 class="card-title">Update School</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('app.schools.update', $school->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label>School Name</label>
                            <input type="text" name="name" value="{{old('name', isset($school) ?  $school->name : 'N/A')}}" class="form-control" placeholder="Name" id="First Name">
                        </div>
                        <div class="form-group">
                            <label>School Code</label>
                            <input type="text" name="code" value="{{old('code', isset($school) ?  $school->code : 'N/A')}}" class="form-control" placeholder="Code" id="Last Name">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                                <select name="location" id="" class="form-control">
                                    <option selected>{{$school->location}}</option>
                                    <option>Rural</option>
                                    <option>Urban</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Type of School</label>
                            <select name="type_school" id="" class="form-control">
                                <option selected>{{$school->type_school}}</option>
                                <option>Regular</option>
                                <option>Islamiyya Integrated</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Education Level</label>
                            <select name="education_level" id="" class="form-control">
                                <option selected>{{$school->education_level}}</option>
                                <option>Primary School</option>
                                <option>Primary & Junior Secondary School</option>
                                <option>Junior Secondary School Only</option>
                                <option>Senior & Junior Secondary School</option>
                                <option>Senior Secondary School Only</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>School Gender</label>
                            <select name="gender" id="school_gender" class="form-control">
                                <option selected>{{$school->gender}}</option>
                                <option>Boys</option>
                                <option>Girls</option>
                                <option>Co-exist</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>School Agency</label>
                            <select name="agency" id="school_agency" class="form-control">
                                <option selected>{{$school->agency}}</option>
                                <option>SUBEB</option>
                                <option>KSSMB</option>
                                <option>STSB</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>LGA</label>
                            <select name="lga_id" id="" class="form-control">
                                @foreach ($lgas as $lga)
                                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No of Students</label>
                            <input type="number" value="{{old('no_of_students', isset($school) ? $school->no_of_students : '0')}}" name="no_of_students"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No of Staff</label>
                            <input type="number" value="{{old('no_of_staff', isset($school) ? $school->no_of_staff : '0')}}" name="no_of_staff"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No of Boys</label>
                            <input type="number" value="{{old('no_of_boys', isset($school) ? $school->no_of_boys : '0')}}" name="no_of_boys"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No of Girls</label>
                            <input type="number" value="{{old('no_of_girls', isset($school) ? $school->no_of_girls : '0')}}" name="no_of_girls"  class="form-control">
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
@endsection
