@extends('layouts.app')
@section('content')
@section('css')
<link href="{{ asset('assets/css/skins/square/grey.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/wizard.css') }}" rel="stylesheet">
    <style>
        #admission_bg {
            background: url(https://www.pixelstalk.net/wp-content/uploads/2016/11/Education-Wallpapers-HD-Free-Download.jpg) center center no-repeat fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
          }

    </style>
@endsection
<body id="admission_bg">
	<div id="form_container" class="clearfix">
		<figure>
			<a href="/"><img src="{{ asset('assets/img/logo.png') }}" width="149" height="42" data-retina="true" alt=""></a>
		</figure>
		<div id="wizard_container">
			<div id="top-wizard">
				<div id="progressbar"></div>
			</div>
			<!-- /top-wizard -->
			<form name="example-1" id="wrapped" method="POST">
				<input id="website" name="website" type="text" value="">
				<!-- Leave for security protection, read docs for details -->
				<div id="middle-wizard">
					<div class="step">
						<div id="intro">
							<figure><img src="{{ asset('assets/img/wizard_intro_icon.svg') }}" alt=""></figure>
							<h1>Admission Apply</h1>
							<p>Exerci tibique eum cu, paulo appellantur et mei, ea partem urbanitas vim. His ei iusto nonumes atomorum. Mentitum pericula in nec. In eos habemus tibique. </p>
							<p><strong>Mel erant legere iuvaret ea. At eum doctus voluptatibus, has id veritus constituam.</strong></p>
						</div>
					</div>

					<div class="step">
						<h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
						<div class="form-group">
							<input type="text" name="firstname" class="form-control required" placeholder="First name">
						</div>
						<div class="form-group">
							<input type="text" name="lastname" class="form-control required" placeholder="Last name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control required" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" name="telephone" class="form-control" placeholder="Your Telephone">
						</div>
						<div class="form-group">
							<input type="text" name="age" class="form-control" placeholder="Age">
						</div>
						<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="education_apply" id="education_apply">
									<option value="" selected="">Select your education level</option>
									<option value="Less than high school">Less than high school</option>
									<option value="High school diploma or equivalent">High school diploma or equivalent</option>
									<option value="Some college no degree">Some college, no degree</option>
									<option value="Bachelor degree">Bachelor’s degree</option>
									<option value="Doctoral or professional degree">Doctoral or professional degree</option>
								</select>
							</div>
						</div>
						<div class="form-group radio_input">
							<label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
							<label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
						</div>
					</div>
					<!-- /step-->

					<div class="step">
						<h3 class="main_question"><strong>2/3</strong>Please fill your address</h3>
						<div class="form-group">
							<input type="text" name="address" class="form-control required" placeholder="Address">
						</div>
						<div class="form-group">
							<input type="text" name="city" class="form-control required" placeholder="City">
						</div>
						<div class="form-group">
							<input type="text" name="zip_code" class="form-control required" placeholder="Zip code">
						</div>
						<div class="form-group">
							<div class="styled-select">
								<select class="required" name="country">
									<option value="" selected>Select your country</option>
									<option value="Europe">Europe</option>
									<option value="Asia">Asia</option>
									<option value="North America">North America</option>
									<option value="South America">South America</option>
								</select>
							</div>
						</div>
					</div>
					<!-- /step-->

					<div class="submit step">
						<h3 class="main_question"><strong>3/3</strong>Your preferences</h3>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Management" name="preferences[]" class="icheck">Management adn Business</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Art" name="preferences[]" class="icheck">Art: Impressionist</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Litteratture" name="preferences[]" class="icheck">Litteratture: Poetry</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Math" name="preferences[]" class="icheck">Math: 12 Principles</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Architecture" name="preferences[]" class="icheck">Architecture</label>
						</div>
						<div class="form-group add_top_30">
							<textarea name="additional_message" class="form-control required" style="height:120px;" placeholder="Hello world....write your messagere here!"></textarea>
						</div>
						<div class="form-group terms">
							<input name="terms" type="checkbox" class="icheck required" value="yes">
							<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
						</div>
					</div>
					<!-- /step-->
				</div>
				<!-- /middle-wizard -->
				<div id="bottom-wizard">
					<button type="button" name="backward" class="backward">Backward </button>
					<button type="button" name="forward" class="forward">Forward</button>
					<button type="submit" name="process" class="submit">Submit</button>
				</div>
				<!-- /bottom-wizard -->
			</form>
		</div>
		<!-- /Wizard container -->
	</div>
	<!-- /Form_container -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/jquery-ui-1.8.22.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.wizard.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
	<script src="{{ asset('assets/js/admission_func.js') }}"></script>
<script>
    $(document).ready( function(){
        $(".register-form").hide();
        $(".header").remove();
         $("footer").remove();
    })
</script>
@endsection
