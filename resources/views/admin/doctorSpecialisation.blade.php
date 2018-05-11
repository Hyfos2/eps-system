@extends('admin.master')
@section('content')
    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Admin | Add Doctor Specialization</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Admin</span>
                        </li>
                        <li class="active">
                            <span>Add Doctor Specialization</span>
                        </li>
                    </ol>
                </div>
            </section>
            <!-- end: PAGE TITLE -->
            <!-- start: BASIC EXAMPLE -->
            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row margin-top-30">
                            <div class="col-lg-6 col-md-12">
                                <div class="panel panel-white" >
                                    <div class="panel-heading" style="margin-bottom: 5px; margin-height:8px; margin-left:-10px;">Add Specialisation
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" method="POST"  role="form" name="dcotorspcl"  action ="{{url('addSpecialisation')}}"  id="Login">
                                            {{ csrf_field()}}
                                            <div class="form-group">
                                                <label>Doctor Specialization
                                                </label>
                                                <input type="text" name="specialisation" class="form-control" value="{{old('specialisation')}}"  placeholder="Enter Doctor Specialization" autocomplete="off">
                                                @if ($errors->has('specialisation'))
                                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('specialisation') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-o btn-primary">
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

                <div class="row">
                    <div class="col-md-12">
                        <h5 class="over-title margin-bottom-15">Manage Doctor Specialization</h5>

                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Specialization</th>
                                <th class="hidden-xs">Creation Date</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)

                            <tr>
                                <td class="center">{{$item->id}}</td>
                                <td class="hidden-xs">{{$item->specialisation}}</td>
                                <td>{{$item->created_at}}</td>
                                <td >
                                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                                        <a href="{{url('delete-specialisation/'.$item->id)}}" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
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