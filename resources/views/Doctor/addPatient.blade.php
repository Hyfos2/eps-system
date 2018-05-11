@extends('Doctor.master')
@section('content')
    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Admin | Add Patient</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Admin</span>
                        </li>
                        <li class="active">
                            <span>Add Patient</span>
                        </li>
                    </ol>
                </div>
            </section>

            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row margin-top-30">
                            <div class="col-lg-8 col-md-12">
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Add Patient</h5>
                                    </div>
                                    <div class="panel-body">

                                        <form role="form" name="adddoc" method="POST" action="{{route('register')}}" onSubmit="return valid();">
                                            {{csrf_field()}}

                                            <input type="hidden" value="3"  name="userType">
                                            <input type="hidden" value="{{Auth::user()->id}}"  name="doctor">
                                            <input type="hidden" value="2" name="role_id">

                                            <div class="form-group">
                                                <label for="Patientname">
                                                    Patient Name
                                                </label>
                                                <input type="text" name="name" class="form-control" value="{{old('name')}}"  autocomplete="off" placeholder="Enter Patient Name">
                                                @if ($errors->has('name'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="Patientname">
                                                    Patient Surname
                                                </label>
                                                <input type="text" name="surname" class="form-control" value="{{old('surname')}}"  autocomplete="off" placeholder="Enter Patient Surname">
                                                @if ($errors->has('surname'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="PatientSpecialization">
                                                    Gender
                                                </label>
                                                <select name="gender" class="form-control">
                                                    <option value="">Select Gender</option>

                                                    <option value="male">
                                                                    Male
                                                    </option>
                                                    <option value="female">
                                                           Female
                                                    </option>
                                                    @if ($errors->has('gender'))
                                                        <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                                    @endif
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    National ID
                                                </label>
                                                <input type="text" name="nationalId" class="form-control" value="{{old('nationalId')}}"  autocomplete="off"  placeholder="Enter Identification">
                                                @if ($errors->has('nationalId'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('nationalId') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Date of Birth
                                                </label>
                                                <input type="date" name="dob" class="form-control" value="{{old('dob')}}"  autocomplete="off"  placeholder="Enter Date of Birth">
                                                @if ($errors->has('email'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="fess">
                                                    Cellphone
                                                </label>
                                                <input type="text" name="cellphone" class="form-control" value="{{old('cellphone')}}"  autocomplete="off"  placeholder="Enter cellphone">
                                                @if ($errors->has('cellphone'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Patient Email
                                                </label>
                                                <input type="email" name="email" class="form-control" value="{{old('email')}}"  autocomplete="off"  placeholder="Enter Pharmacist Email">
                                                @if ($errors->has('email'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Patient Home
                                                </label>
                                                <input type="text" name="address" class="form-control" value="{{old('address')}}"  autocomplete="off"  placeholder="Enter Home address">
                                                @if ($errors->has('address'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Current Medication
                                                </label>
                                                <input type="text" name="currentMedication" class="form-control" value="{{old('currentMedication')}}"   autocomplete="off" placeholder="Enter Medication">
                                                @if ($errors->has('currentMedication'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('currentMedication') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Allergies
                                                </label>
                                                <input type="text" name="allergies" class="form-control" value="{{old('allergies')}}"  autocomplete="off"  placeholder="Enter Allergies">
                                                @if ($errors->has('allergies'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('allergies') }}</strong>
                                    </span>
                                                @endif
                                            </div>


                                            <div class="form-group">

                                            <div class="form-group">
                                                <label for="fess">
                                                    Present Complaint
                                                </label>
                                                <input type="text" name="presentComplaint" class="form-control" value="{{old('presentComplaint')}}"  autocomplete="off"  placeholder="Enter Present complaint">
                                                @if ($errors->has('presentComplaint'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('presentComplaint') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="fess">
                                                    Inheritable Disease
                                                </label>
                                                <input type="text" name="inheritableDisease" class="form-control" value="{{old('inheritableDisease')}}"  autocomplete="off"  placeholder="Enter Inheritable Disease">
                                                @if ($errors->has('inheritableDisease'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('inheritableDisease') }}</strong>
                                    </span>
                                                @endif
                                            </div>


                                            <div class="form-group">
                                                <label for="fess">
                                                    Associated Symptoms
                                                </label>
                                                <input type="text" name="associatedSymptoms" class="form-control" value="{{old('associatedSymptoms')}}"  autocomplete="off"  placeholder="Enter Associated Symptoms ">
                                                @if ($errors->has('associatedSymptoms'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('associatedSymptoms') }}</strong>
                                    </span>
                                                @endif
                                            </div>


                                            <div class="form-group">
                                                <label for="fess">
                                                    Time Course
                                                </label>
                                                <input type="text" name="timeCourse" class="form-control" value="{{old('timeCourse')}}"  autocomplete="off"  placeholder="Enter Time course">
                                                @if ($errors->has('timeCourse'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('timeCourse') }}</strong>
                                    </span>
                                                @endif
                                            </div>


                                            <div class="form-group">
                                                <label for="fess">
                                                    Relieving Factors
                                                </label>
                                                <input type="text" name="relievingFactors" class="form-control" value="{{old('relievingFactors')}}"  autocomplete="off"  placeholder="Enter relieving factors">
                                                @if ($errors->has('relievingFactors'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('relievingFactors') }}</strong>
                                    </span>
                                                @endif
                                            </div>


                                            <div class="form-group">
                                                <label for="fess">
                                                    Severity
                                                </label>
                                                <input type="text" name="severity" class="form-control" value="{{old('severity')}}"  autocomplete="off"  placeholder="Enter severity">
                                                @if ($errors->has('severity'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('severity') }}</strong>
                                    </span>
                                                @endif
                                            </div>


                                            <div class="form-group">
                                                <label for="fess">
                                                    Smoking History
                                                </label>
                                                <input type="text" name="smokingHistory" class="form-control" value="{{old('smokingHistory')}}"  autocomplete="off"  placeholder="Enter smoking">
                                                @if ($errors->has('smokingHistory'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('smokingHistory') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="fess">
                                                    Alcohol History
                                                </label>
                                                <input type="text" name="alcoholHistory" class="form-control" value="{{old('alcoholHistory')}}"  autocomplete="off"  placeholder="Enter Alcohol History">
                                                @if ($errors->has('alcoholHistory'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('alcoholHistory') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="fess">
                                                    Recreational Drug
                                                </label>
                                                <input type="text" name="recreationalDrug" class="form-control" value="{{old('recreationalDrug')}}"  autocomplete="off"  placeholder="Enter Recreational Drug">
                                                @if ($errors->has('recreationalDrug'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('recreationalDrug') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="fess">
                                                    Occupation
                                                </label>
                                                <input type="text" name="occupation" class="form-control" value="{{old('occupation')}}"  autocomplete="off"  placeholder="Enter Occupation">
                                                @if ($errors->has('occupation'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('occupation') }}</strong>
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