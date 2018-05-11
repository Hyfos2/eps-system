@extends('pharmacist.master')
@section('content')

    <div class="main-content" >
        <div class="wrap-content container" id="container">

            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Pharmacist | New Prescriptions </h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Pharmacist</span>
                        </li>
                        <li class="active">
                            <span>New Prescriptions</span>
                        </li>
                    </ol>
                </div>
            </section>

            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="over-title margin-bottom-15">New Prescriptions</h5>
                        <p style="color:red;"></p>
                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>illness</th>
                                <th class="hidden-xs">Treatment</th>
                                <th>Creation Date </th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop