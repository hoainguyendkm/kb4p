@extends('public.master.layouts')
@section('content')
<div class="section-heading">
	<h5>Contact Info</h5>
</div>
<div class="contact-information mb-30">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id scelerisque eleifend. Nunc vestibulum cursus quam at scelerisque. Aliquam quis varius orci, vel tincidunt est. Proin ac tincidunti, atmots interdum erat. Maecenas neque lorem, aliquet in tempus non, efficitur ac neque.</p>

	<!-- Single Contact Info -->
	<div class="single-contact-info d-flex align-items-center">
		<div class="icon mr-15">
			<i class="fa fa-map-marker" aria-hidden="true"></i>
		</div>
		<div class="text">
			<p>Our Office:</p>
			<h6>5520 Quebec Place, Brooklyn, NY , USA 10000</h6>
		</div>
	</div>

	<!-- Single Contact Info -->
	<div class="single-contact-info d-flex align-items-center">
		<div class="icon mr-15">
			<i class="fa fa-envelope" aria-hidden="true"></i>
		</div>
		<div class="text">
			<p>Email:</p>
			<h6>infodeercreative@gmail.com</h6>
		</div>
	</div>

	<!-- Single Contact Info -->
	<div class="single-contact-info d-flex align-items-center">
		<div class="icon mr-15">
			<i class="fa fa-phone" aria-hidden="true"></i>
		</div>
		<div class="text">
			<p>Phone:</p>
			<h6>(+88) 012-3455-0028</h6>
		</div>
	</div>
</div>
<div class="section-heading">
	<h5>GET IN TOUCH</h5>
</div>
<div class="contact-form-area">
	<form action="#" method="post">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<input type="text" class="form-control" id="name" placeholder="Name">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="E-mail">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
				</div>
			</div>
			<div class="col-12">
				<button class="btn mag-btn mt-30" type="submit">Send</button>
			</div>
		</div>
	</form>
</div>
@endsection