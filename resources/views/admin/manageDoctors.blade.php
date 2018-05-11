@extends('admin.master')
@section('content')
<div class="main-content" >
    <div class="wrap-content container" id="container">

        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Admin | Manage Doctors</h1>
                </div>
                <ol class="breadcrumb">
                    <li>
                        <span>Admin</span>
                    </li>
                    <li class="active">
                        <span>Manage Doctors</span>
                    </li>
                </ol>
            </div>
        </section>

        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="over-title margin-bottom-15">Manage Doctors</h5>
                    <p style="color:red;"></p>
                    <table class="table table-hover" id="sample-table-1">
                        <thead>
                        <tr>
                            <th class="center">#</th>
                            <th class="hidden-xs">Doctor Name</th>
                            <th>Specialization</th>
                            <th>Address</th>
                            <th>Consultation</th>
                            <th>Cellphone</th>
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
                                <td>{{$item->consultation}}</td>
                                <td>{{$item->cellphone}}</td>
                                <td >
                                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                                        <a href="{{url('delete-doctor/'.$item->user)}}" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
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