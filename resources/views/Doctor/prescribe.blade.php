@extends('Doctor.master')
@section('content')
    @include('flashalert::alert')
    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Doctor | Prescribe</h1>
                    </div>

                </div>
            </section>

            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row margin-top-30">
                            <div class="col-lg-8 col-md-12">
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">New Prescription</h5>
                                    </div>
                                    <div class="panel-body">

                                        <form role="form" name="adddoc" method="POST" action="{{url('new-prescription')}}" onSubmit="return valid();">
                                            {{csrf_field()}}


                                            <input type="hidden" value="{{Auth::user()->id}}"  name="doctor">
                                            <input type="hidden" value="{{$data->user}}" name="patient">

                                            <div class="form-group">
                                                <label for="Patientname">
                                                    Patient Name
                                                </label>
                                                <input type="text" name="name" class="form-control" value="{{$data->name}}"  autocomplete="off" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="Patientname">
                                                    Patient Surname
                                                </label>
                                                <input type="text" name="surname" class="form-control" value="{{$data->surname}}"  autocomplete="off" disabled="disabled">
                                            </div>

                                            <div class="form-group">
                                                <label for="PatientSpecialization">
                                                    Gender
                                                </label>
                                                <input type="text" name="surname" class="form-control" value="{{$data->gender}}"  autocomplete="off" disabled="disabled">
                                            </div>


                                            <div class="form-group">
                                                <label for="PatientSpecialization">
                                                    Address
                                                </label>
                                                <input type="text" name="surname" class="form-control" value="{{$data->address}}"  autocomplete="off" disabled="disabled">
                                            </div>


                                            <div class="form-group">
                                                <label for="PatientSpecialization">
                                                    Pharmacy Name
                                                </label>
                                                <select name="pharmacist" class="form-control" >
                                                    <option value="">Select Pharmacy</option>
                                                    @foreach($p As $value)
                                                    <option value="{{$value->user}}">
                                                        {{$value->pharmacyName}}
                                                    </option>
                                                        @endforeach
                                                    @if ($errors->has('pharmacist'))
                                                        <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('pharmacist') }}</strong>
                                    </span>
                                                    @endif
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="address">
                                                   Drug Name
                                                </label>
                                                <input type="text" name="drug" class="form-control" value="{{old('drug')}}"  autocomplete="off" placeholder="Enter Drug Name">
                                                @if ($errors->has('drug'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('drug') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="address">
                                                    Dosage
                                                </label>
                                                <input type="text" name="dosage" class="form-control" value="{{old('dosage')}}"  autocomplete="off" placeholder="Enter Dosage">
                                                @if ($errors->has('dosage'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('dosage') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                                <button type="submit" class="btn btn-o btn-primary">
                                                    Submit
                                                </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop