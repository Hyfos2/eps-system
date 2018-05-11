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
									
													<form role="form" name="adddoc" method="POST" action="{{route('register')}}" onSubmit="return valid();">
														{{csrf_field()}}

														<input type="hidden" value="2"  name="userType">
														<input type="hidden" value="2" name="role_id">

														<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
							<select name="specialisation" class="form-control" required="required">
																<option value="">Select Specialization</option>
																@foreach($data as $item)
																<option value="{{$item->id}}">
																	{{$item->specialisation}}
																</option>
																	@endforeach
															</select>
														</div>

<div class="form-group">
	<label for="doctorname">
																 Doctor Name
	</label>
					<input type="text" name="name" class="form-control"  autocomplete="off" placeholder="Enter Doctor Name">
														</div>
														<div class="form-group">
															<label for="doctorname">
																Doctor Surname
															</label>
															<input type="text" name="surname" class="form-control" value="{{old('name')}}"  autocomplete="off" placeholder="Enter Doctor Surname">
														</div>

														<div class="form-group">
															<label for="DoctorSpecialization">
																Gender
															</label>
															<select name="gender" class="form-control" required="required">
																<option value="">Select Gender</option>

																<option value="male">
																	Male
																</option>
																<option value="female">
																	Female

																</option>
															</select>
														</div>


<div class="form-group">
	<label for="address">
																 Doctor Clinic Address
															</label>
					<textarea name="address" class="form-control" value="{{old('address')}}"   placeholder="Enter Doctor Clinic Address"></textarea>
														</div>
<div class="form-group">
															<label for="fess">
																 Doctor Consultancy Fees
															</label>
					<input type="text" name="consultation" class="form-control" value="{{old('consultation')}}"  autocomplete="off"  placeholder="Enter Doctor Consultancy Fees">
														</div>
	
<div class="form-group">
									<label for="fess">
																 Doctor Cellphone Number
															</label>
					<input type="text" name="cellphone" class="form-control" value="{{old('cellphone')}}"   autocomplete="off" placeholder="Enter Doctor Contact no">
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
															<input type="email" name="email" class="form-control" value="{{old('email')}}"  autocomplete="off"  placeholder="Enter Doctor Email">
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