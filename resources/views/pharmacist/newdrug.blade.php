@extends('pharmacist.master')
@section('content')
    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Pharmacist | Add Drug</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Pharmacist</span>
                        </li>
                        <li class="active">
                            <span>Add Drug</span>
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
                                        <h5 class="panel-title">Add Drug</h5>
                                    </div>
                                    <div class="panel-body">

                                        <form role="form" name="adddoc" method="POST"  action="{{url('addDrug')}}" onSubmit="return valid();">

                                            {{csrf_field()}}
                                            <input type="hidden"  name="pharmacist" value="{{Auth::user()->id}}">
                                            <div class="form-group">
                                                <label for="doctorname">Illness
                                                </label>
                                                <input type="text" name="illness" class="form-control"  name="{{old('illness')}}" placeholder="Enter Illness Name" autocomplete="off">
                                                @if ($errors->has('illness'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('illness') }}</strong>
                                    </span>
                                                @endif
                                            </div>


                                            <div class="form-group">
                                                <label for="address">
                                                   Signs and Symptoms
                                                </label>
                                                <textarea name="sns" class="form-control"  name="{{old('sns')}}" placeholder="Enter Signs and Symptoms" autocomplete="off"></textarea>
                                                @if ($errors->has('sns'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('sns') }}</strong>
                                    </span>
                                                @endif

                                            </div>
                                            <div class="form-group">
                                                <label for="fess">
                                                  Treatment
                                                </label>
                                                <textarea name="treatment" class="form-control"   name="{{old('treatment')}}" placeholder="Enter Treatment" autocomplete="off"></textarea>
                                                @if ($errors->has('treatment'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('treatment') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Dose
                                                </label>
                                                <input type="text" name="dose" class="form-control"  name="{{old('dose')}}" placeholder="Enter Dose" autocomplete="off">
                                                @if ($errors->has('dose'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('dose') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                  Frequency Daily
                                                </label>
                                                <input type="text" name="fd" class="form-control" name="{{old('fd')}}"  placeholder="Enter Frequency Daily" autocomplete="off">
                                                @if ($errors->has('fd'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('fd') }}</strong>
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