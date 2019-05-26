@extends('partials.app')

@section('content')

	<style type="text/css">
		img {
		    max-width: 80%;
		    max-height: 80%;

		}

		.center {
			padding-bottom: 3rem;
		    text-align: center;
		    vertical-align: middle;
			margin: 10px auto;
		}
	</style>


	<!--Main Layout-->
	<main style="padding-top:4rem; padding-bottom:4rem;">

		<div class="container">
            <section class="section about mt-5 pb-3 wow fadeIn" data-wow-delay="0.2s">

                <h3 class="mb-2 dark-grey-text font-weight-bold wow fadeIn text-center" data-wow-delay="0.2s"
                    style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                    HOW IT WORKS	
                </h3>

                <hr class="w-25 mb-0">

                    <p class="feature-title title font-weight-light dark-grey-text spacing mt-4">
                        <ul style="font-size:20px;">
                        	<li> You upload an image.  </li>
                        	<li> Your request is sent to our servers with GPUs courtesy NVIDIA. </li>
                        	<li> Our servers run our deep-learning based algorithm. </li>
                        	<li> Results and updates are shown in real-time. </li>
                        </ul>
                    </p>
                <hr>

            </section>

            <div class="center">
        		<img src='{{url('storage/images/example2.png')}}' alt="">
    		</div>


        	<form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
  		
  		</div>

        


	</main>
	<!--Main Layout-->

  		
@endsection