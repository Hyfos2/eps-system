@extends('Doctor.master')
@section('content')
    <div class="main-content" >
        <div class="wrap-content container" id="container">

            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Doctor | Manage Patient</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Doctor</span>
                        </li>
                        <li class="active">
                            <span>Manage Patient</span>
                        </li>
                    </ol>
                </div>
            </section>

            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="over-title margin-bottom-15">Manage Patient</h5>
                        <p style="color:red;"></p>

                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th class="hidden-xs">Patient Name</th>
                                {{--<th>Prescription Details</th>--}}
                                <th>Current Medication</th>
                                <th>Last Consultation Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>

                                    <td class="center">{{$item->id}}</td>
                                    <td class="hidden-xs">{{$item->name}} {{$item->surname}}</td>
                                    <td>{{$item->currentMedication}}</td>
                                    <td>{{$item->created_at}}</td>
                                    {{--<td>{{$item->cellphone}}</td>--}}
                                    <td >
                                        <div class="visible-md visible-lg hidden-sm hidden-xs" style=":left;">
                                            <a href="{{url('manage-patient/'.$item->user)}}" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                            <a href="{{url('prescribe/'.$item->user)}}" onClick="return confirm('Prescribing a Patient')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove">PRESCRIBE</a>
                                        </div>

                                      </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop