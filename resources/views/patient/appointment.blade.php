@extends('patient.master')
@section('content')
    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Set Appointment</h1>
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
                                        <h5 class="panel-title">New Appointment</h5>
                                    </div>
                                    <div class="panel-body">

                                        <form role="form" name="adddoc" method="POST" action="{{url('new-appointment')}}" onSubmit="return valid();">
                                            {{csrf_field()}}


                                            <input type="hidden" value="{{$user}}"  name="doctor">


                                            <div class="form-group">
                                                <label for="Patientname">
                                                    Symptoms
                                                </label>
                                                <input type="text" name="symptoms" class="form-control" value="{{old('symptoms')}}"  autocomplete="off" placeholder="Enter Symptoms">
                                                @if ($errors->has('symptoms'))
                                                    <span class="help-block" style="color:red; margin-bottom: 10px;">
                                        <strong>{{ $errors->first('symptoms') }}</strong>
                                    </span>
                                                @endif
                                            </div>



                                            <div class="form-group">
                                                <label for="Patientname">
                                                    Select Date
                                                </label>

                                                <input type="text" name="date"  id="dateId" class="form-control" value="{{old('date')}}"  autocomplete="off" placeholder="Enter date">
                                                @if ($errors->has('date'))
                                                    <span class="help-block" style="color:red; margin-bottom: 10px;">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                                @endif
                                            </div>



                                            <div class="form-group">
                                                <label for="Patientname">
                                                Select Time
                                                </label>
                                                <input type="text" name="time"  id="timeId" class="form-control" value="{{old('time')}}"  autocomplete="off" placeholder="Enter time">
                                                @if ($errors->has('time'))
                                                    <span class="help-block" style="color:red; margin-bottom: 10px;">
                                        <strong>{{ $errors->first('time') }}</strong>
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
@section('footer')
    <script>
        $('#timeId').timepicker({
            timeFormat: 'h:mm p',
            interval: 60,
            minTime: '10',
            maxTime: '6:00pm',
            defaultTime: '11',
            startTime: '10:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    </script>
@stop