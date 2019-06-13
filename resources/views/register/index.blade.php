@extends('layout.app')

@section('content')
    <div class="row">
        
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <!-- <input type="submit" name="" value="Login"/><br/> -->
            <a href="{{ route('register.login') }}" class="btn btn-primary"> Login </a>
            <a class="btn btn-primary" href="{{ route('register.showusers') }}">All Users</a>
        </div>

        <div class="col-md-9 register-right">
            <form action="{{ route('register.insert') }}" method="post">
                @csrf
               
            <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                </li>
            </ul> -->

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Register Here</h3>
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">
                            <strong>Success: {{ Session::get('success_msg') }}</strong> 
                        </div>
                    @endif
                    <div class="row register-form">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username *" value="" />
                            </div>
                            
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span> 
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="date" name="dob" class="form-control" placeholder="Date of Birth *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="conf_password" class="form-control"  placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="mobile" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <!-- <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                            </div> -->

                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>

                    </div>

                </div>

                <!-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as a Hirer</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                </div> -->


            </div>

            </form>

        </div>
    </div>
@endsection