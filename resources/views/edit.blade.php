@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Contact Edit</h4>
            </div>
       </div>
   </div>

    <div class="row">
        <div class="col-12">
           <form method="post" action="{{route('contact.update',$contact->id)}}" enctype="multipart/form-data">
           @method('PUT')
            {{ csrf_field() }}
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="box-body">
                    <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>First Name</label>
                                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{$contact->firstname}}" required placeholder="First Name">
                                    @if($errors->first('firstname'))
                                    <div class="alert-danger">{{$errors->first('firstname')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Last Name</label>
                                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{$contact->lastname}}" required placeholder="Last Name">
                                    @if($errors->first('lastname'))
                                    <div class="alert-danger">{{$errors->first('lastname')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{$contact->email}}" required placeholder="Email">
                                    @if($errors->first('email'))
                                    <div class="alert-danger">{{$errors->first('email')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Contact Mobile</label>
                                    <input id="contact_mobile" type="text" class="form-control" name="contact_mobile" value="{{$contact->contact_mobile}}" required placeholder="Mobile">
                                    @if($errors->first('contact_mobile'))
                                    <div class="alert-danger">{{$errors->first('contact_mobile')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Contact Phone</label>
                                    <input id="contact_phone" type="text" class="form-control" name="contact_phone" value="{{$contact->contact_phone}}" required placeholder="Phone">
                                    @if($errors->first('contact_phone'))
                                    <div class="alert-danger">{{$errors->first('contact_phone')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Date of birth</label>
                                    <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{$contact->date_of_birth}}" required>
                                    @if($errors->first('date_of_birth'))
                                    <div class="alert-danger">{{$errors->first('date_of_birth')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Gender</label><br>
                                <input type="radio" name="gender" value="1" {{ $contact->gender == '1' ? 'checked' : '' }}>Male
                                <input type="radio" name="gender" value="0" {{ $contact->gender == '0' ? 'checked' : '' }}>Female
                                    @if($errors->first('gender'))
                                    <div class="alert-danger">{{$errors->first('gender')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Hobbies</label><br>
                                <input type="checkbox" name="hobbies[]" value="Listening Music"{{ in_array('Listening Music', $hobbies) ? 'checked' : '' }}>Listening Music
                                <input type="checkbox" name="hobbies[]" value="Social media"{{ in_array('Social media', $hobbies) ? 'checked' : '' }}>Social media
                                <input type="checkbox" name="hobbies[]" value="Books"{{ in_array('Books', $hobbies) ? 'checked' : '' }}>Books
                                <input type="checkbox" name="hobbies[]" value="Movies"{{ in_array('Movies', $hobbies) ? 'checked' : '' }}>Movies
                                <input type="checkbox" name="hobbies[]" value="Sports"{{ in_array('Sports', $hobbies) ? 'checked' : '' }}>Sports
                                    @if($errors->first('hobbies'))
                                    <div class="alert-danger">{{$errors->first('hobbies')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Street</label>
                                    <input id="street" type="text" class="form-control" name="street" value="{{$contact->street}}" required placeholder="Street">
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
                                      <option value="Chennai"{{ $contact->city =='Chennai' ? 'selected' : '' }}>Chennai</option>
                                      <option value="Vellore"{{ $contact->city =='Vellore' ? 'selected' : '' }}>Vellore</option>
                                      <option value="TVM"{{ $contact->city =='TVM' ? 'selected' : '' }}>TVM</option>
                                      <option value="Bangalore"{{ $contact->city =='Bangalore' ? 'selected' : '' }}>Bangalore</option>
                                      <option value="Hydrabad"{{ $contact->city =='Hydrabad' ? 'selected' : '' }}>Hydrabad</option>
                                    </select>
                                @if($errors->first('city'))
                                <div class="alert-danger">{{$errors->first('city')}}</div>
                                @endif
                                </div>
                                </div>
                                </div>


                                <br>                                <div class="">
                            <button type="submit" class="btn btn-success btn-lg  text-white">Update</button>
                            <a href="{{route('contact.index')}}" class="btn btn-lg btn-danger float-right">Cancel</a>
                        </div>   
                    </div>
                </div> 
            </div>
            </form>
        </div>
    </div><!-- end row-->
</div> <!-- container-fluid -->

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'ckeditor' );
</script>
@endsection