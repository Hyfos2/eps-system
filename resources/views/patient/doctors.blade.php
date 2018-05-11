@extends('patient.master')
@section('content')
    <div class="main-content" >
        <div class="wrap-content container" id="container">

            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Patient</h1>
                    </div>

                </div>
            </section>

            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="over-title margin-bottom-15">Doctors Available</h5>
                        <p style="color:red;"></p>

                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th class="hidden-xs">Doctor Name</th>
                                {{--<th>Prescription Details</th>--}}
                                <th>Specialisation</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Consultation Fee</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>

                                    <td class="center">{{$item->id}}</td>
                                    <td class="hidden-xs">{{$item->name}} {{$item->surname}}</td>
                                    <td>{{$item->specialisation}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->consultation}}</td>
                                    {{--<td>{{$item->cellphone}}</td>--}}
                                    <td >
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="{{url('appointment/'.$item->user.'/'.$item->address)}}" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove">Set Appointment</a>
                                        </div>
                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                            <div class="btn-group" dropdown is-open="status.isopen">
                                                <button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
                                                    <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                                    <li>
                                                        <a href="#">
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Share
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Remove
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div></td>

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