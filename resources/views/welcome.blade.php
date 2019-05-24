
@extends('partials.app')

@section('content')
    <main>

        <div style="padding-top:4rem;" class="container">
            <div class="row">
              <div class="col-md-12">
                <h5> Historically, building a system that can answer natural language questions about any image has been considered a very ambitious goal. Imagine a system that, 
                  given the image below, could answer questions: Questions can be arbitrary and they encompass many sub-problems in computer vision 
                </h5>
                <p>
                  <ul style="font-size:17px;">
                    <li> Object recognition - What is in the image?  </li>
                    <li> Object detection - Are there any cats in the image?  </li>
                    <li> Attribute classifcation - What color is the cat?  </li> 
                    <li> Scene classifcation - Is it sunny?  </li> 
                    <li> Counting - How many cats are in the image?  </li>
                  </ul>
                </p>
              </div>
            </div>
        </div>

        <div class="container">
            <section class="section about mt-5 mb-5 pb-3 wow fadeIn" data-wow-delay="0.2s">

                <h3 class="mb-2 dark-grey-text font-weight-bold wow fadeIn text-center" data-wow-delay="0.2s"
                    style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                    INTRODUCTION
                </h3>

                <hr class="w-25 mb-0">

                <div class="row">
                    <!-- Description -->
                    <p class="feature-title title font-weight-light dark-grey-text spacing mt-4 text-center">
                        <strong style="font-size:19px;">
                            Many more complex questions can be asked, such as questions
                            about the spatial relationships among objects (What is between the cat and the sofa?) and
                            common sense reasoning questions (Why is the the girl crying?). A robust VQA system
                            must be capable of solving a wide range of classical computer vision tasks as well as needing
                            the ability to reason about images.
                            There are many potential applications for VQA. The most immediate is as an aid to blind
                            and visually impaired individuals, enabling them to get information about images both on
                            the web and in the real world.
                        </strong>
                    </p>
                </div>
                <!-- Grid column -->

                <hr>
            </section>
            <div style="height: 50vh;">
                <img src='{{url('storage/images/workflow.png')}}' alt="">
            </div>
            <section class="mt-3 mb-2 pt-5 pb-2 container">
                <h5 class="dark-grey-text font-weight-normal description wow fadeIn" data-wow-delay="0.4s">
                    The overarching goal of VQA is to extract question-relevant semantic information from the
                    images, which ranges from the detection of minute details to the inference of abstract scene
                    While many computer vision problems involve extracting information from the images, they are limited in scope and generality compared to VQA.
                    <br>
                    <br>
                </h5>

                <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                    <!-- Grid column -->
                    <div class="col-md-12 mb-2 text-center">

                        <!--Panel-->
                        <div class="text-left">
                            <p class="feature-title title font-weight-bold dark-grey-text text-uppercase spacing mt-4 ">
                                <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                                Algorithms for VQA
                            </p>
                            <p class="grey-text font-weight-bold mx-2 ml-4">
                                Steps :
                                <ul>
                                    <li>extracting image features (image featurization) </li>
                                    <li>extracting question features (question featurization),</li>
                                    <li> an algorithm that combines these features to produce an answer. image features, most algorithms use CNNs that are pre-trained on ImageNet</li>
                                </ul>

                                Combining the image and question features using simple mechanisms, e.g., concatenation,
                                elementwise multiplication, or elementwise addition, and then giving them to
                                a linear classifer or a neural network

                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /Grid column -->
                </div>
        
                <div class="row wow fadeIn" data-wow-delay="0.4s"
                        style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                    <!-- Grid column -->
                    <div class="col-md-12 mb-2 text-center">

                        <!--Panel-->
                        <div class="text-left">
                            <p class="feature-title title font-weight-normal dark-grey-text text-uppercase spacing mt-4 ">
                                <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                                <strong> Combining the features</strong>
                            </p>
                            <p class="grey-text font-weight-bold mx-2 ml-4">
                                A variety of feature extraction methods and algorithms for combining these features have been proposed
                                <ul>
                                    <li>Combining the image and question features using bilinear pooling or related schemes 
                                    in a neural network framework
                                    </li>
                                    <li>Having a classifer that uses the question features to compute spatial attention maps
                                    for the visual features or that adaptively scales local features based on their relative
                                    importance</li>
                                    <li> Using Bayesian models that exploit the underlying relationships between question
                                    image-answer feature distributions</li>
                                    <li> Using the question to break the VQA task into a series of sub-problems </li>
                                </ul>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /Grid column -->
                </div>
        
                <div class="row wow fadeIn" data-wow-delay="0.4s"
                        style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                    <!-- Grid column -->
                    <div class="col-md-12 mb-2 text-center">

                        <!--Panel-->
                        <div class="text-left">
                            <p class="feature-title title font-weight-normal dark-grey-text text-uppercase spacing mt-4 ">
                                <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                                <strong>LSTM</strong>
                            </p>
                            <p class="grey-text font-weight-bold mx-2 ml-4">
                                LSTM is used to produce multi-word answer one word at a time. However, the answer produced is still limited to words seen during training.
                                VQA as a ranking problem, where a system is trained to produced a score for each possible multiple-choice answer, question,
                                and image trio, and then it selects the highest scoring answer choice.</p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /Grid column -->
                </div>
        
                <div class="row wow fadeIn" data-wow-delay="0.4s"
                        style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                    <!-- Grid column -->
                    <div class="col-md-12 mb-2 text-center">

                        <!--Panel-->
                        <div class="text-left">
                            <p class="feature-title title font-weight-normal dark-grey-text text-uppercase spacing mt-4 ">
                                <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                                <strong>Datasets for VQA</strong>
                            </p>
                            <p class="grey-text font-weight-bold mx-2 ml-4">
                                Beginning in 2014, Five major datasets for VQA have been publicly released. These datasets
                                enable VQA systems to be trained and evaluated. As of this article, the main datasets
                                for VQA are DAQUAR, COCO-QA , The VQA Dataset , FM-IQA , Visual7W, and Visual Genome.
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /Grid column -->
                </div>
        
            </section>
        </div>
    </main>
@endsection