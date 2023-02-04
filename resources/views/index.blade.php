@extends('layouts.app')

@section('content')

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">No Save Wa</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="wrapper img" style="background-image: url(images/img.jpg);">
					<div class="row">
						<div class="col-md-9 col-lg-7">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4">Send A Message</h3>
								<div id="form-message-warning" class="mb-4"></div>
								<div id="form-message-success" class="mb-4">
									Your message was sent, thank you!
								</div>
								<form action="{{ route('send') }}" method="POST" id="contactForm" name="contactForm"
									class="contactForm">
									@csrf
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="phone">Phone Number</label>
												<input type="tel" class="form-control" name="phone" id="phone" placeholder="+6281233333333"
													required>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="text">Message</label>
												<input class="form-control" name="message" type="text" required>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" class="btn btn-primary" value="Send Message">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 bg-gray">
					<p class="text-center">Made with &#10085; by <a href="https://github.com/doBoi">doBoi</a>
					<p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
