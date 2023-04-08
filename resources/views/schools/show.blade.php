@extends('layouts.app')

@section('content')
<style>
    table {
  font-family: Verdana;
  font-size: 14px;
  border-collapse: collapse;
  width: 600px;
}

td, th {
  padding: 10px;
  text-align: left;
  margin: 0;
}

tbody tr:nth-child(2n){
  background-color: #eee;
}

th {
  position: sticky;
  top: 0;
  background-color: #333 !important;
  color: white !important;
}
</style>
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
                    <li class="breadcrumb-item text-muted"><a href="{{ route('app.schools.index') }}" class="text-muted text-hover-primary">Schools</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">School Info</li>
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
                    <h3 class="card-title">{{ ucfirst($school->name) }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>School Name</th>
                            <td>{{ $school->name }}</td>
                            <th>State</th>
                            <td>{{ $school->state->name }}</td>
                            <th>LGA</th>
                            <td>{{ $school->lga->name }}</td>
                        </tr>
                        <tr>
                            <th>School Code</th>
                            <td>{{ $school->code }}</td>
                            <th>School Location</th>
                            <td>{{ $school->location }}</td>
                            <th>No of  Staff</th>
                            <td>{{ $school->no_of_staff }}</td>
                        </tr>
                        <tr>
                            <th>No of Students</th>
                            <td>{{ $school->no_of_students }}</td>
                            <th>Boys Students</th>
                            <td>{{ $school->no_of_boys }}</td>
                            <th>Girls Students</th>
                            <td>{{ $school->no_of_girls }}</td>
                        </tr>
                        <tr>
                            <th>School Type</th>
                            <td>{{ $school->type }}</td>
                            <th>School Category</th>
                            <td>{{ $school->category }}</td>
                            <th>School Agency</th>
                            <td>{{ $school->agency }}</td>
                        </tr>
                        <tr>
                            <th>School Gender</th>
                            <td>{{ $school->gender }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection