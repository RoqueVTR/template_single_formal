<section id="contact" class="wrapper view">
    <div class="page-wrapper">
        <div class="container">
            <div class="col-md-12">
                <h1 class="card-header page-header wow fadeInDown">Contact Us</h1>
                <div class="row">
			    	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s">
						<div class="card-block">
						    <!--Body-->
						    <form method="POST" id="form-contact" action="{{ url('/') }}" role="form" class="mdb-color-text">
							    {{ csrf_field() }}
							    <div class="md-form">
								    @include('common.error')
									@include('common.notification')
								</div>
							    <div class="md-form">
							        <i class="fa fa-user prefix"></i>
							        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required>
							        <label for="name">Name</label>
							    </div>
							    <div class="md-form">
							        <i class="fa fa-envelope prefix"></i>
							        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required>
							        <label for="email">Email</label>
							    </div>
							    <div class="md-form">
							        <i class="fa fa-tag prefix"></i>
							        <input type="text" id="subject" class="form-control" name="subject" value="{{ old('subject') }}" required>
							        <label for="subject">Subject</label>
							    </div>
							    <div class="md-form">
							        <i class="fa fa-pencil prefix"></i>
							        <textarea type="text" id="message" class="form-control md-textarea" name="message" required>{{ old('message') }}</textarea>
							        <label for="message">Message</label>
							    </div>

							    <div class="text-center">
							        <button class="btn btn-primary btn-lg" type="submit" id="submit">Submit</button>

							        <div class="call">
							            <br>
							            <p>Or would you prefer to call?
							                <br>
							                <span><i class="fa fa-mobile"></i> +63 XXX XXX XXXX (Globe)</span><br>
							                <span><i class="fa fa-phone"></i> +632 XXX XXXX (Landline)</span>
							            </p>
							        </div>
							    </div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" style="padding-top: 20px; margin-bottom: 20px;">
						<div class="overlay hm-white-slight z-depth-2">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9276.860704390007!2d121.0524370720818!3d14.650469672380712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b70cd4472de5%3A0xaf168c459d09d89c!2sU.P.+Village%2C+Diliman%2C+Quezon+City%2C+Metro+Manila!5e0!3m2!1sen!2sph!4v1492962949566" id="map" frameborder="0" allowfullscreen></iframe>
						</div>	
					</div>
				</div>
            </div>
        </div>
    </div>
</section>