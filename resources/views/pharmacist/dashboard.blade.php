@extends('pharmacist.master')
@section('content')
    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Pharmacist | Dashboard</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Pharmacist</span>
                        </li>
                        <li class="active">
                            <span>Dashboard</span>
                        </li>
                    </ol>
                </div>
            </section>
            <!-- end: PAGE TITLE -->
            <!-- start: BASIC EXAMPLE -->
            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body">
                                <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                                <h2 class="StepTitle">Manage Drug Database</h2>

                                <p class="links cl-effect-1">
                                    <a href="{{url('manage-drug')}}">
                                        total drugs
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body">
                                <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                                <h2 class="StepTitle">New Prescriptions</h2>

                                <p class="cl-effect-1">
                                    <a href="{{url('new-prescriptions')}}">
                                        total prescriptions
                                    </a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <!-- end: SELECT BOXES -->

        </div>
    </div>
@stop