@extends('layouts.master')

@section('content')
            <div class="container-fluid">
                @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Contact</h4>
                                    

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                        <form method="post" class="user" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                <div class="card m-b-20">
                                    <div class="card-body">

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>First Name</label>
                                    <input id="firstname" type="text" max="30" class="form-control" name="firstname" value="" required placeholder="First Name">
                                    @if($errors->first('firstname'))
                                    <div class="alert-danger">{{$errors->first('firstname')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Last Name</label>
                                    <input id="lastname" type="text" max="30" class="form-control" name="lastname" value="" required placeholder="Last Name">
                                    @if($errors->first('lastname'))
                                    <div class="alert-danger">{{$errors->first('lastname')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required placeholder="Email">
                                    @if($errors->first('email'))
                                    <div class="alert-danger">{{$errors->first('email')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Contact Mobile</label>
                                    <input id="contact_mobile" type="text" min="10" max="16" class="form-control" name="contact_mobile" value="" required placeholder="Mobile">
                                    @if($errors->first('contact_mobile'))
                                    <div class="alert-danger">{{$errors->first('contact_mobile')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Contact Phone</label>
                                    <input id="contact_phone" type="text"  min="10" max="16" class="form-control" name="contact_phone" value="" required placeholder="Phone">
                                    @if($errors->first('contact_phone'))
                                    <div class="alert-danger">{{$errors->first('contact_phone')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Date of birth</label>
                                    <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="" required>
                                    @if($errors->first('date_of_birth'))
                                    <div class="alert-danger">{{$errors->first('date_of_birth')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Gender</label><br>
                                <input type="radio" name="gender" value="1" >Male
                                <input type="radio" name="gender" value="0" >Female
                                    @if($errors->first('gender'))
                                    <div class="alert-danger">{{$errors->first('gender')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Hobbies</label><br>
                                <input type="checkbox" name="hobbies[]" value="Listening Music">Listening Music
                                <input type="checkbox" name="hobbies[]" value="Social media">Social media
                                <input type="checkbox" name="hobbies[]" value="Books">Books
                                <input type="checkbox" name="hobbies[]" value="Movies">Movies
                                <input type="checkbox" name="hobbies[]" value="Sports">Sports
                                    @if($errors->first('hobbies'))
                                    <div class="alert-danger">{{$errors->first('hobbies')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Street</label>
                                    <input id="street" type="text" class="form-control" name="street" value="" required placeholder="Street">
                                    @if($errors->first('street'))
                                    <div class="alert-danger">{{$errors->first('street')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>City</label>
                                    <select required class="form-control" name="city">
                                      <option value="">Select City</option>
                                      <option value="Chennai">Chennai</option>
                                      <option value="Vellore">Vellore</option>
                                      <option value="TVM">TVM</option>
                                      <option value="Bangalore">Bangalore</option>
                                      <option value="Hydrabad">Hydrabad</option>
                                    </select>
                                @if($errors->first('city'))
                                <div class="alert-danger">{{$errors->first('city')}}</div>
                                @endif
                                </div>
                                </div>
                                
                                </div>
                                <br>
                                <div class="">
                    <button type="submit" class="btn btn-success btn-lg  text-white">Create</button>
                    <a href="{{route('contact.index')}}">
                    <button type="button" class="btn btn-danger btn-lg float-right text-white ">Close</button></a>
                          </div>






                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

        </form>
                    </div> <!-- container-fluid -->

@endsection
