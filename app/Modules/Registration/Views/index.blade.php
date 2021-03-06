<!DOCTYPE html>
<html>
    <head>
        <title>Register to Teachat</title>
        <meta name="robots" content="index, follow">
        <meta name="description" content="Register here for Teacghat! You can register here and choose if you are a Parent or a Teacher."/>
        @include('includes.header')

        <script type="text/javascript">
            $(document).ready(function() {
                $(".button-collapse").sideNav();
                $(".dropdown-button").dropdown({
                    hover: false,
                    inDuration: 150,
                    belowOrigin: true, // Displays dropdown below the button
                });
                $('.parallax').parallax();
            });
            $(document).ready(function() {
                $('select').material_select();
                $("select[required]").css({display: "inline", height: 0, padding: 0, width: 0});
            });
        </script>
    </head>

    <body class="">
        <main class="register_page">

            @include('includes.nav-index')

            <div class="container top-margin">
                <div class="row">
                    <div class="col s12 push-m2 m10 push-l2 l8">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="{{asset('images/login.jpg')}}">
                                <span class="card-title">Register</span>
                            </div>
                            <div class="card-content black-text blue-grey lighten-5">
                                <div class="row">
                                    <form class="col s12" id="registration_form">
                                        <div class="row">
                                            <div class="input-field col l6 m6 s12">
                                                <select class="icons" required="required" aria-required="true" name="type">
                                                    <option value="" disabled selected>Register as ... </option>
                                                    <option value="teacher" data-icon="{{asset('images/img_teacher.png')}}" class="left circle">Teacher</option>
                                                    <option value="parent" data-icon="{{asset('images/img_parent.png')}}" class="left circle">Parent</option>
                                                </select>
                                                <label>Choose type</label>
                                            </div>
                                            <div class="input-field col l6 m6 s12">
                                                <select required="" aria-required="true" name="gender">
                                                    <option value="" disabled selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="input-field col l4 m4 s12">
                                                <input id="f_name" type="text" class="validate" required="" aria-required="true" name="first_name">
                                                <label for="f_name">First Name</label>
                                            </div>
                                            <div class="input-field col l4 m4 s12">
                                                <input id="m_name" type="text" class="validate" required="" aria-required="true" name="middle_name">
                                                <label for="m_name">Middle Name</label>
                                            </div>
                                            <div class="input-field col l4 m4 s12">
                                                <input id="l_name" type="text" class="validate" required="" aria-required="true" name="last_name">
                                                <label for="l_name">Last Name</label>
                                            </div>
                                            <div class="input-field col s12 m12">
                                                <input type="text" id="address_one" name="address_one" class="validate" required="" aria-required="true">
                                                <label for="address_one">Address 1</label>
                                            </div>

                                            <div class="input-field col s12 m12">
                                                <input type="text" id="address_two" name="address_two" class="validate">
                                                <label for="address_two">Address 2 (Optional)</label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <select class="icons" required="required" aria-required="true" name="state_id">
                                                    <option value="" disabled selected>Select State</option>
                                                    @foreach($state_us as $su)
                                                        <option value="{{$su['id']}}">{{$su['state_name']}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Choose State</label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input id="zip_code" type="text" class="validate" name="zip_code">
                                                <label for="zip_code">Zip Code</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m6">
                                                <select required="required" aria-required="true" id="reg_select_country" name="city">
                                                  <option value="" disabled selected>Select City</option>
                                                  <option value="Cresskill">Cresskill</option>
                                                  <option value="Dumont">Dumont</option>
                                                </select>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <select required="" aria-required="true" id="reg_select_school" name="school_id">
                                                  <option value="" disabled selected>Select School</option>
                                                  @foreach($schools as $s)
                                                    <option value="{{$s['id']}}">{{$s['school_name']}}</option>
                                                  @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m6">
                                                <input id="contact_mobile" type="text" class="validate" required="" aria-required="true" name="contact_mobile">
                                                <label for="contact_mobile">Contact Mobile</label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input id="contact_home" type="text" class="validate"  name="contact_home">
                                                <label for="contact_home">Contact Home</label>
                                            </div>
                                            <div class="input-field col s12 m12">
                                                <input id="contact_work" type="text" class="validate" name="contact_work">
                                                <label for="contact_work">Contact Work</label>
                                            </div>
                                            <div class="input-field col s12 m12">
                                                <input id="email" type="email" class="validate" required="" aria-required="true" name="user_email">
                                                <label for="email" data-error="wrong" data-success="right">Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m6">
                                                <input id="password" type="password" required="" aria-required="true" name="password">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input id="confirm_password" type="password" required="" aria-required="true" name="password_confirm">
                                                <label for="confirm_password">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m3">
                                                <input type="checkbox" class="filled-in" id="terms" required="required" aria-required="true">
                                                <label for="terms">I Agree</label>
                                            </div>
                                            <div class="input-field col s12 m9">
                                                Do you agree to the Teachat <a href="/terms-of-use">Terms and Conditions</a> set out by this site, including our Cookie Use?
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m5 l4">
                                                <button class="btn waves-effect btn-large btn-block waves-light" type="submit">Register
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div>
                                           <!--  <div class="input-field col s12 m5 l4">
                                                <a href="/" class="btn waves-effect btn-large btn-block waves-light red hide cancel">Close</a>
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
<script type="text/javascript" src="{{asset('/functions_js/registration.js')}}"></script>
