@extends('admin.master')
@section('content')
    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Admin | Add Pharmacist</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Admin</span>
                        </li>
                        <li class="active">
                            <span>Add Pharmacist</span>
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
                                        <h5 class="panel-title">Add Pharmacist</h5>
                                    </div>
                                    <div class="panel-body">

                                        <form role="form" name="adddoc" method="POST" action="{{route('register')}}">
                                            {{csrf_field()}}

                                            <input type="hidden" value="4"  name="userType">
                                            <input type="hidden" value="2" name="role_id">


                                            <div class="form-group">
                                                <label for="Pharmacistname">
                                                    Pharmacist Name
                                                </label>
                                                <input type="text" name="name" class="form-control"  value="{{old('name')}}"  autocomplete="off" placeholder="Enter Pharmacist Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="Pharmacistname">
                                                    Pharmacist Surname
                                                </label>
                                                <input type="text" name="surname" class="form-control" value="{{old('surname')}}"  autocomplete="off" placeholder="Enter Pharmacist Surname">
                                            </div>

                                            <div class="form-group">
                                                <label for="PharmacistSpecialization">
                                                    Gender
                                                </label>
                                                <select name="gender" class="form-control" required="required">
                                                    <option value="">Select Gender</option>

                                                    <option value="male">
                                                        Male
                                                    </option>
                                                    <option value="female">
                                                        Female

                                                    </option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label for="address">
                                                    Pharmacist  Address
                                                </label>
                                                <textarea name="address" class="form-control" value="{{old('address')}}"   placeholder="Enter Pharmacist Clinic Address"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Pharmacist Contact no
                                                </label>
                                                <input type="text" name="cellphone" class="form-control" value="{{old('cellphone')}}"   autocomplete="off" placeholder="Enter Pharmacist Contact no">
                                                @if ($errors->has('cellphone'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Pharmacist Email
                                                </label>
                                                <input type="email" name="email" class="form-control" value="{{old('email')}}"  autocomplete="off"  placeholder="Enter Pharmacist Email">
                                                @if ($errors->has('email'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>


                                            <button type="submit"  class="btn btn-o btn-primary">
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