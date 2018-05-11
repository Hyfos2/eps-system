@extends('admin.master')
@section('content')
<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Add Doctor</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Doctor</span>
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
													<h5 class="panel-title">Add Doctor</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="POST" action="{{route('register')}}" id="DocReg">
														{{csrf_field()}}

														<input type="hidden" value="2"  name="userType">
														<input type="hidden" value="2" name="role_id">

														<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
							<select name="specialisation" class="form-control"  data-validation="required">
																<option value="">Select Specialization</option>
																@foreach($data as $item)
									<option value="{{$item->id}}" @if(old('specialisation') == $item->id) {{ 'selected' }} @endif>{{ $item->specialisation }}</option>
								                 	{{--<option value=" {{(old('specialisation') == $item->specialisation?'selected':'')}} " >{{$item->specialisation}}</option>--}}
									             {{--<option value="" @if (old('specialisation') == $item->specialisation) selected="selected" @endif>{{$item->specialisation}}</option>--}}
									@endforeach
															</select>
														</div>

<div class="form-group">
	<label for="doctorname">
																 Doctor Name
	</label>
					<input type="text" name="name" class="form-control"  autocomplete="off" placeholder="Enter Doctor Name" value="{{old('name')}}"  data-validation="required"  data-validation-length="max20">
								@if ($errors->has('name'))
									<span class="help-block" style="color:red;">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif

														</div>
														<div class="form-group">
															<label for="doctorname">
																Doctor Surname
															</label>
															<input type="text" name="surname" class="form-control" value="{{old('surname')}}"  data-validation="required" autocomplete="off" placeholder="Enter Doctor Surname">
															@if ($errors->has('surname'))
																<span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
															@endif
														</div>

														<div class="form-group">
															<label for="DoctorSpecialization">
																Gender
															</label>
															<select name="gender" class="form-control" data-validation="required">
																<option value="">Select Gender</option>

																<option value="Male" @if (old('gender') == 'Male') selected="selected" @endif>Male</option>
																<option value="Female" @if (old('gender') == 'Female') selected="selected" @endif>Female</option>

															</select>
															@if ($errors->has('gender'))
																<span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
															@endif
														</div>


<div class="form-group">
	<label for="address">
																 Doctor Clinic Address
															</label>
					<textarea name="address" class="form-control"   data-validation="required" placeholder="Enter Doctor Clinic Address">{{old('address')}}</textarea>
														</div>
<div class="form-group">
															<label for="fess">
																 Doctor Consultancy Fees
															</label>
					<input type="text" name="consultation" class="form-control" value="{{old('consultation')}}" data-validation="required|number"  autocomplete="off"  placeholder="Enter Doctor Consultancy Fees">
														</div>
	
<div class="form-group">
									<label for="fess">
																 Doctor Cellphone Number
															</label>
					<input type="text" name="cellphone" class="form-control" value="{{old('cellphone')}}"  data-validation="required|number" autocomplete="off" placeholder="Enter Doctor Contact no">
	@if ($errors->has('cellphone'))
		<span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
	@endif
														</div>

<div class="form-group">
									<label for="fess">
																 Doctor Email
															</label>
															<input type="email" name="email" class="form-control" value="{{old('email')}}"  data-validation="required|email" autocomplete="off"  placeholder="Enter Doctor Email">
	@if ($errors->has('email'))
		<span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
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