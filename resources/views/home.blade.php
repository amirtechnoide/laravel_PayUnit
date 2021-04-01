@extends ('layouts.app')

 @section('content')
    <!-- <div class="flex justify-center pt-2">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            home
        </div>
    </div> -->





    <div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(https://images.unsplash.com/photo-1548102245-c79dbcfa9f92?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTl8fHBvb3IlMjBjaGlsZHJlbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
				<div class="desc animate-box">
					<h2><strong>Help </strong>people <strong>Poor Children</strong></h2>
					<span><a  target="_blank" class="fh5co-site-name">By Amirtechnology</a></span>

                    <span>
                    <a href="{{route('posts')}}">
                        <button type="submit" class="btn btn-primary btn-lg"  >Donate Now

                        </button>
                    </a>
                    </span>
				</div>
			</div>

		</div>
		<!-- end:header-top -->
		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-profile-male"></i>
							</span>
							<div class="feature-copy">
								<h3>Become a volunteer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-happy"></i>
							</span>
							<div class="feature-copy">
								<h3>Happy Giving</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Donation</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Giving is Virtue.</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12 text-center animate-box">
						<p><img src="https://images.unsplash.com/photo-1594617939933-6be096aee818?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTl8fHBvb3IlMjBjaGlsZHJlbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="https://images.unsplash.com/photo-1547496614-54ff387d650a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fHBvb3IlMjBjaGlsZHJlbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="https://images.unsplash.com/photo-1541704199033-f10724b07aef?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjh8fHBvb3IlMjBjaGlsZHJlbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Love</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Compassion</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Charity</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>


			</div>
		</div>

@endsection

