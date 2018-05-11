@extends('admin.master')
@section('content')

    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Admin  | Pharmacist Session Logs</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Admin </span>
                        </li>
                        <li class="active">
                            <span>Pharmacist Session Logs</span>
                        </li>
                    </ol>
                </div>
            </section>

            <div class="container-fluid container-fullw bg-white">


                <div class="row">
                    <div class="col-md-12">

                        <p style="color:red;">
                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th class="hidden-xs">User id</th>
                                <th>Username</th>
                                <th>User IP</th>
                                <th>Login time</th>
                                <th>Logout Time </th>
                                <th> Status </th>


                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td class="center"></td>
                                <td class="hidden-xs">></td>
                                <td class="hidden-xs"></td>
                                <td></td>
                                <td></td>
                                <td>>
                                </td>

                                <td>


                                </td>

                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

@stop