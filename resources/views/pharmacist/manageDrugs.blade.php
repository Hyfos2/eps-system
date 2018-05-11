@extends('pharmacist.master')
@section('content')

    <div class="main-content" >
        <div class="wrap-content container" id="container">

            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Pharmacist | Manage Drugs</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Pharmacist</span>
                        </li>
                        <li class="active">
                            <span>Manage Drugs</span>
                        </li>
                    </ol>
                </div>
            </section>

            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="over-title margin-bottom-15">Manage Drugs</h5>
                        <p style="color:red;"></p>
                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Illness</th>
                                <th class="hidden-xs">Signs and Symptoms</th>
                                <th>Treatment</th>
                                <th>Dose </th>
                                <th>Frequency Daily</th>
                                <th>Creation Date</th>
                                <th>Action</th>

                            </tr>

                            </thead>
                            <tbody>

                            @foreach($allDrugs as $item)
                            <tr>

                                <td class="center">{{$item->id}}</td>
                                <td class="hidden-xs">{{$item->illness}}</td>
                                <td>{{$item->sns}}</td>
                                <td>{{$item->treatment}}</td>
                                <td>{{$item->dose}}</td>
                                <td>{{$item->fd}}</td>
                                <td>{{$item->created_at}}</td>
                                <td >
                                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                                        <a href="{{url('delete-drug/'.$item->id)}}" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
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