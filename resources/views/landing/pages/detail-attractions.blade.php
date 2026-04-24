@extends('landing.master')
@section('content')

<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
					data-wow-offset="0">
					<h1>Single Property</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END SECTION TOP -->

	<!-- START SINGLE PROPERTY DETAILS -->
	<section class="property_single_details section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="property_single_details_slide">
						<img src="{{asset('storage/images/' . $attraction->image)}}" class="img-fluid" alt="About-Slide">
					</div>
					<div class="property_single_details_price">
						<h1>{{ $attraction->name }}</h1>
						<h4>${{$attraction->price_range }}</h4>
						<ul>
							<li><i class="fa fa-check"></i> 4 bed rooms</li>
							<li><i class="fa fa-check"></i> 1 garage</li>
							<li><i class="fa fa-check"></i> 960 sq ft</li>
						</ul>
					</div>
					<div class="property_single_details_description">
						<h4>Property description</h4>
						<p>{{ $attraction->description }}</p>
					</div>
					<div class="property_info">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="single_property_list">
									<h4>Amenities</h4>
									<ul class="single_property_list_mr">
										<li><i class="fa fa-check"></i> Video</li>
										<li><i class="fa fa-check"></i> Hairdryer</li>
										<li><i class="fa fa-check"></i> Cot</li>
										<li><i class="fa fa-check"></i> Dishwasher</li>
										<li><i class="fa fa-check"></i> Parquet</li>
										<li><i class="fa fa-check"></i> Iron</li>
									</ul>
									<ul class="single_property_list_mr">
										<li><i class="fa fa-check"></i> Air conditioning</li>
										<li><i class="fa fa-check"></i> Cable TV</li>
										<li><i class="fa fa-check"></i> Grill</li>
										<li><i class="fa fa-check"></i> Juicer</li>
										<li><i class="fa fa-check"></i> Use of pool</li>
										<li><i class="fa fa-check"></i> Toaster</li>
									</ul>
									<ul>
										<li><i class="fa fa-check"></i> Video</li>
										<li><i class="fa fa-check"></i> Hairdryer</li>
										<li><i class="fa fa-check"></i> Cot</li>
										<li><i class="fa fa-check"></i> Dishwasher</li>
										<li><i class="fa fa-check"></i> Parquet</li>
										<li><i class="fa fa-check"></i> Iron</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="property_map">
						<h4>on map</h4>
						<div class="map-pro">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.957183635167!2d-74.00402768559431!3d40.71895904512855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a1316e7a7%3A0x47bb20eb6074b3f0!2sNew%20Work%20City%20-%20(CLOSED)!5e0!3m2!1sbn!2sbd!4v1600305497356!5m2!1sbn!2sbd"
								style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
					<div class="single_similar_property">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single_property">
									<img src="{{asset('storage/landing/asset/img/property/1.jpg')}}" class="img-fluid" alt="" />
									<div class="single_property_description text-center">
										<span><i class="fa fa-object-group"></i> 900 sq ft</span>
										<span><i class="fa fa-bed"></i> 4 Badrooms</span>
										<span><i class="fa fa-star-o"></i> 2 Baths</span>
									</div>
									<div class="single_property_content">
										<h4><a href="#">2045 B Street</a></h4>
										<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical.
										</p>

									</div>
									<div class="single_property_price">
										High Meadow Lane Mount Pleasant <span>$ 170,000</span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--- END SINGLE PROPERTY -->
							</div><!--- END COL -->
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single_property">
									<img src="{{asset('storage/landing/asset/img/property/2.jpg')}}" class="img-fluid" alt="" />
									<div class="single_property_description text-center">
										<span><i class="fa fa-object-group"></i> 900 sq ft</span>
										<span><i class="fa fa-bed"></i> 4 Badrooms</span>
										<span><i class="fa fa-star-o"></i> 2 Baths</span>
									</div>
									<div class="single_property_content">
										<h4><a href="#">Lynn Ogden Lane</a></h4>
										<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical.
										</p>

									</div>
									<div class="single_property_price">
										High Meadow Lane Mount Pleasant <span>$ 170,000</span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--- END SINGLE PROPERTY -->
							</div><!--- END COL -->
						</div>
					</div>
				</div><!--- END COL -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="single_property_form">
						<h4>Review The attraction</h4>
						<form class="form" name="enq" method="post" action="{{ route('landing.attraction.reviews.store') }}" onsubmit="return validation();">
							@csrf
							<div class="row">
								<div class="form-group col-md-12">
									<input type="hidden" name="reviewable_id" value="{{$attraction->id}}">
							<input type="hidden" name="reviewable_type" value="{{ get_class($attraction) }}">
									<input type="text" name="reviewer_name" class="form-control" id="first-name"
										placeholder="Name" required="required">
									@error('reviewer_name')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group col-md-12">
									<select name="rating" id="rating" class="form-control" required>
										<option value="">Rating</option>
										<option value="5">⭐⭐⭐⭐⭐</option>
										<option value="4">⭐⭐⭐⭐</option>
										<option value="3">⭐⭐⭐</option>
										<option value="2">⭐⭐</option>
										<option value="1">⭐</option>
									</select>
									@error('rating')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>

								<div class="form-group col-md-12 mbnone">
									<textarea rows="6" name="comment" class="form-control" id="comment" placeholder="Your Message" required="required"></textarea>
									@error('comment')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="col-md-12">
									<div class="actions">
										<input type="submit" value="Send message" name="submit" id="submitButton"
											class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
									</div>
								</div>
							</div>
						</form>
					</div>
					
					<div class="single_property_form_agent">
						<div class="single_property_form_agent_profile">
							<img src="{{asset('storage/landing/asset/img/team/team-1.jpg')}}" class="img-fluid" alt="" />
							<h4><i class="fa fa-phone"></i> +88 123 123 123</h4>
							<h4><a href="#">info@example.com</a></h4>
						</div>
						<div class="single_property_form_agent_profile">
							<img src="{{asset('storage/landing/asset/img/team/team-2.jpg')}}" class="img-fluid" alt="" />
							<h4><i class="fa fa-phone"></i> +88 123 123 123</h4>
							<h4><a href="#">info@example.com</a></h4>
							
						</div>
					</div>
					<div class="property_reviews mt-5">
    <h4 class="mb-4">Visitor Reviews</h4>

    @forelse($reviews as $review)
        <div class="review-card mb-3 p-4 rounded shadow-sm bg-white">

            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="reviewer-name">
                    <strong>{{ $review->reviewer_name }}</strong>
                </div>

                <div class="review-rating text-warning">
                    {!! str_repeat('★', $review->rating) !!}
                    {!! str_repeat('☆', 5 - $review->rating) !!}
                </div>
            </div>

            <p class="mb-1 text-muted" style="font-size: 14px;">
                {{ $review->comment }}
            </p>

            <small class="text-secondary">
                        {{ $review->created_at->diffForHumans() }}
                    </small>

        </div>
    @empty
        <div class="text-center text-muted p-4 border rounded">
            Belum ada review untuk attraction ini.
        </div>
    @endforelse
</div>
				</div><!--- END COL -->
			</div>
		</div>
	</section>
	<!-- START SINGLE PROPERTY DETAILS -->
@endsection