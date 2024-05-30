@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <a class="btn btn-dark btn-sm p-2 float-end" href="{{ url('/myproject') }}">
                <i class="ri-close-fill fw-bold"></i> Cancel
            </a>
            <br>
            <br>
            <br>
            
        </div>
        <div class="col-md-2 d-none d-md-block">
            <div class="progressbar">
                <div class="progress" style="width: 33%;"></div>
                <div class="progress-step progress-step-active" data-title="Enter the Url"></div>
                <div class="progress-step" data-title="Complete the data"></div>
                <div class="progress-step" data-title="Verify your website"></div>
                <div class="progress-step" data-title="Finished"></div>
            </div>
        </div>
        <form action="{{ route('website.store') }}" method="POST">
        @csrf
        <div id="step1" class="step col-md-10">
            <h4 class="header text-black">1. Enter the URL</h4>
            <div class="bg-info p-2 text-center rounded text-light">Important: We do not accept link farms, review farms, websites with duplicate or low-quality content.</div>
            <div class="mt-3">
                <label for="websiteUrl" class="form-label">URL of your website <span class="text-success">*</span></label>
                <input type="url" class="form-control" name="url" id="websiteUrl" placeholder="https://www.example.com">
                <div id="loadingCircle" style="display: none; margin-top: 20px; margin-left: 20px;">
                    Verifying.... <i class="fas fa-circle-notch fa-spin"></i> <!-- Font Awesome spinner icon -->
                </div>
            </div>
            <div class="text-end mt-2">
                <button type="button" onclick="validateUrlAndProceed()" class="btn btn-danger">Next <i class="ri-arrow-right-line fw-bold"></i></button>
                
            </div>
        </div>
        <div id="dataStep" class="col-md-10 ">
            <!-- Second step content with dropdowns -->
            
            {{-- Dropdowns --}}
            <div id="step2" class="step" style="display: none;">
                <h4 class="header text-black">2. Complete the data</h4>
                <!-- Add your four dropdowns here -->
                <!-- Example: -->
                <h5>Select your website categories (maximum 3)</h5>
                  <div class="row">
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">Your main audience is from (country): *</label>
                          <select  id="dropdown1" name="country" class="form-control">
                            <option value="Afghanistan">Afghanistan</option>
                            
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                      </div>
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">How many images per post *</label>
                          <select class="form-select mt-3" name="image_per_post" id="dropdown1">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">Maximum amount of links per post *</label>
                          <select class="form-select" name="maximum_links" id="dropdown1">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">Type of links admitted *</label>
                          <select class="form-select mt-3" name="type_of_links[]" id="dropdown1">
                              <option value="Follow">Follow</option>
                              <option value="No Follow">No Follow</option>
                              <option value="Sponsored">Sponsored</option>
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                      <div class="col-lg-3 mt-3" >
                          <label for="dropdown1" class="form-label">Select your website categories (maximum 3) *</label>
                          <select class="form-select" name="web_categories[]" id="dropdown1" multiple>
                            <option value="Activism and NGOs">General</option>
                              <option value="Activism and NGOs">Activism and NGOs</option>
                              <option value="Animals">Animals</option>
                              <option value="Beauty">Beauty</option>
                              <option value="Celebrities">Celebrities</option>
                              <option value="Cinema and TV">Cinema and TV</option>
                              <option value="Computer and Programming">Computer and Programming</option>
                              <option value="Construction and Renovations">Construction and Renovations</option>
                              <option value="Cooking, Recipes and Gastronomy">Cooking, Recipes and Gastronomy</option>
                              <option value="Curiosities">Curiosities</option>
                              <option value="Dating">Dating</option>
                              <option value="Decoration and DIY">Decoration and DIY</option>
                              <option value="Economy">Economy</option>
                              <option value="Education and Formation">Education and Formation</option>
                              <option value="Entrepreneurs and SME">Entrepreneurs and SME</option>
                              <option value="Erotic and Sex">Erotic and Sex</option>
                              <option value="Esoteric and Paranormal">Esoteric and Paranormal</option>
                              <option value="Fashion and Accessories">Fashion and Accessories</option>
                              <option value="Gambling, Casino and Sweepstakes">Gambling, Casino and Sweepstakes</option>
                              <option value="Games">Games</option>
                              <option value="Health">Health</option>
                              <option value="House and Garden">House and Garden</option>
                              <option value="Humorous">Humorous</option>
                            <option value="Insurances">Insurances</option>
                            <option value="Legal">Legal</option>
                            <option value="Leisure">Leisure</option>
                            <option value="Lifestyle">Lifestyle</option>
                            <option value="Literature and Culture">Literature and Culture</option>
                            <option value="Marketing, SEO and Social Networks">Marketing, SEO and Social Networks</option>
                            <option value="Miscellaneous">Miscellaneous</option>
                            <option value="Mobile Phones and Apps">Mobile Phones and Apps</option>
                            <option value="Motor, Cars and Motorbikes">Motor, Cars and Motorbikes</option>
                            <option value="Music and Radio">Music and Radio</option>
                            <option value="Nature and Ecology">Nature and Ecology</option>
                            <option value="News">News</option>
                            <option value="Nutrition">Nutrition</option>
                            <option value="Parenting and Children">Parenting and Children</option>
                            <option value="Photography and Design">Photography and Design</option>
                            <option value="Politics">Politics</option>
                            <option value="Porn / XXX">Porn / XXX</option>
                            <option value="Psychology and Coaching">Psychology and Coaching</option>
                            <option value="Religion">Religion</option>
                            <option value="Sports">Sports</option>
                            <option value="Technology">Technology</option>
                            <option value="Travels and Tourism">Travels and Tourism</option>
                            <option value="Weddings and Couples">Weddings and Couples</option>
  
                              <!-- Add more options if needed -->
                          </select>
                      </div>
  
                      <div class="col-lg-3 mt-3">
                          <label for="dropdown1" class="form-label">Delicated topics you do not accept</label>
                          <select class="form-select" name="delicated_topics[]" id="dropdown1" multiple>
                            <option value="Casino">Casino</option>
                            <option value="CBD">CBD</option>
                            <option value="Crypto">Crypto</option>
                            <option value="Dating">Dating</option>
                            <option value="Drug">Drug</option>
                            <option value="Escorts">Escorts</option>
                            <option value="Gambling">Gambling</option>
                            <option value="Growshop">Growshop</option>
                            <option value="Curiosities">Curiosities</option>
                            <option value="Dating">Dating</option>
                            <option value="Decoration and DIY">Decoration and DIY</option>
                            <option value="Economy">Economy</option>
                            <option value="Education and Formation">Education and Formation</option>
                            <option value="Entrepreneurs and SME">Entrepreneurs and SME</option>
                            <option value="Erotic and Sex">Erotic and Sex</option>
  
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                        <div class="col-lg-3 mt-3">
                        <label for="dropdown1" class="form-label">Sponsorship notification</label>
                            <select class="form-select mt-3" name="sponsor" id="dropdown1">
                                <option value="Always">Always</option>
                                <option value="Ony if its noticed">Ony if its noticed</option>
                                <!-- Add more options if needed -->
                            </select>
                        </div>
                  </div>
                  
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="p-14"><strong>Normal price</strong></p>
                                <div class="alert alert-light-blue text-center">
                                    This is amount that <ins>we will pay you</ins> for every sponsored post of <strong>500 palabras</strong> you write. The amount is the suggested according to your SEO metrics, but you can change this number and modify it once per month.                                </div>

                                <div class="input-group mb-3">

                                    <input type="number" min="1" name="normal_price" step="0.5" class="form-control" >
                                    <span class="input-group-text">€</span>
                                </div>

                                <div id="topicpriceblock">
                                    <hr>
                                    <p class="p-14"><strong>Delicated topics price (optional )</strong></p>
                                    <div class="alert alert-light-blue text-center">
                                        Establish the price you want to earn if you accept post about delicated topics and this is higher than the normal price previously indicated. <br> The delicated topics included in this price are: <span id="topicspricelist">Casino, CBD, Crypto, Dating, Drug, Escorts, Gambling, Growshop, Medication, Politics, Promotional articles, Religion, Sexshop, Sexuality, Tarot and Esotericism</span>
                                    </div>
                                    <div class="input-group mb-3">

                                        <input type="number" name="topic_price" min="1" name="delicated_price" step="0.5" class="form-control" value="">
                                        <span class="input-group-text">€</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-12 mt-3">
                        <h4 class="green">Extras (optional)</h4>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <p class="p-16">Add more words</p>
                                        <div class="alert alert-dashed text-center p-14">
                                            Posts must be a minimum of 500 words.<br> Set the price for expanding to 800, 1,000 and 1,200 total words or leave it blank if you prefer not to expand at all.                                        </div>

                                        <div class="form-row">
                                            <label class="col-lg-6 text-left col-form-label p-14">+300 words (800 total)</label>
                                            <div class="input-group col-lg-6 ">
                                                <div class="input-group-prepend prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">+</span>
                                                </div>
                                                <input type="number" name="eight_hundred" class="form-control input-sm">
                                                <div class="input-group-append  prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">€</span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-row mt-2">
                                            <label class="col-lg-6 text-left col-form-label p-14">+500 words (1.000 total)</label>
                                            <div class="input-group col-lg-6 ">
                                                <div class="input-group-prepend prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">+</span>
                                                </div>
                                                <input type="number" name="one_thousand" class="form-control input-sm">
                                                <div class="input-group-append  prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">€</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-row mt-2">
                                            <label class="col-lg-6 text-left col-form-label p-14">+700 words (1.200 total)</label>
                                            <div class="input-group col-lg-6 ">
                                                <div class="input-group-prepend prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">+</span>
                                                </div>
                                                <input type="number" name="twelve_hundred" class="form-control input-sm">
                                                <div class="input-group-append  prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">€</span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <p class="p-16">Diffusion in social networks </p>
                                        <div class="alert alert-dashed text-center  p-14 mt-3">
                                            Add your social networks and generate extra income by sharing sponsored posts there.<br>Introduce also the price for spreading the post on all your networks.                                        </div>
                                        <div class="form-row mt-2">
                                            <label class="col-lg-6 text-left col-form-label p-14" style="margin-top: -10px;"><i class="fab fa-facebook"></i> https://www.facebook.com/</label>
                                            <div class="input-group col-lg-6 ">
                                                <input type="text" name="facebook" class="form-control  input-sm" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-lg-6 text-left col-form-label p-14"><i class="fab fa-twitter"></i> https://twitter.com/</label>
                                            <div class="input-group col-lg-6 ">
                                                <input type="text" name="twitter" class="form-control  input-sm" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <label class="col-lg-6 text-left col-form-label p-14"><i class="fab fa-linkedin"></i> https://www.linkedin.com/</label>
                                            <div class="input-group col-lg-6 ">
                                                <input type="text" name="linkedin" class="form-control  input-sm" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <label class="col-lg-6 text-left col-form-label p-14">Price per diffusion</label>
                                            <div class="input-group col-lg-6 ">
                                                <div class="input-group-prepend prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">+</span>
                                                </div>
                                                <input type="number" name="price_per_diffusion" class="form-control  input-sm">
                                                <div class="input-group-append prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">€</span>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <div class="text-end mt-2">
                    <button type="btn" onclick="goToNextStep(3)" class="btn btn-danger">Next <i class="ri-arrow-right-line fw-bold"></i></button>
                </div>
                <button type="submit">Submit</button>
            </div>
        </div>
        
        </form>
        <div id="verifyStep" class="col-md-10">
            <!-- Third step content with input fields -->
            
            <div id="step3" class="step" style="display: none;">
                <h4 class="header text-black">3. Verify your website</h4>
                <div class="wrap animatedP fadeInUpP">
                    <section>
                       
                        
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-md-4">
                                <div class="mt-2 card text-center cardverify">
                                    <div class="card-body" style="margin-bottom: -17px;">
                                        <img src="https://static.publisuites.com/img/publishers/verify_website_code.png" class="mt-4">
                                        <h3 class="p-18 strong-totalblack">Code</h3>
                                        <p class="p-14">Add this code between the <i>head</i> tags of your website:</p>
                                        <div class="input-group mb-3" style="osition: relative;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -ms-flex-wrap: wrap;
                                            flex-wrap: wrap;
                                            -ms-flex-align: stretch;
                                            align-items: stretch;
                                            width: 100%;">
                                            <p class="form-control p-12" id="metaverify" style="height: auto;">&lt; &gt;</p>
                                            <div class="input-group-append">
                                                <span class="input-group-text btn-lightgreen" onclick="copylink('metaverify');"><i class="far fa-copy icon-btn"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-md-4">
                                <div class="mt-2 card text-center cardverify">
                                    <div class="card-body">
                                        <img src="https://static.publisuites.com/img/publishers/verify_website_file.png" class="mt-4">
                                        <h3 class="p-18 strong-totalblack">Server</h3>
                                        <p class="p-14">Download the file and upload it to the root folder of your website</p>
                                        <p>
                                            <a href="https://www.publisuites.com/publishers/websites/download-verify/aHR0cDovL2NvbnRyYWN0b3JzaW51YWUuY29t/" class="btn btn-purple" style="background-color: #6f42c1; color: #fff; display: inline-block; padding: 10px 20px; text-align: center; text-decoration: none; border: none; border-radius: 5px;">
                                                <i class="fa fa-download"></i> Download file
                                            </a>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-md-4">
                                <div class="mt-2 card text-center cardverify">
                                    <div class="card-body">
                                        <img src="https://static.publisuites.com/img/publishers/verify_website_analytics.png" class="mt-4">
                                        <h3 class="p-18 strong-totalblack">Analytics</h3>
                                        <p class="p-14">Link your Analitycs account and verify your website</p>
                                        <p><a href="https://www.publisuites.com/publishers/websites/verify-analytics/88319/" class="btn btn-warning"><i class="fab fa-google"></i> Connect</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12 mt-3 text-center">
                                <p class="p-14">Click on “Verify now” if you have done any of the three options to validate your account.</p>
                                <a href="https://www.publisuites.com/publishers/websites/verify/88319/?confirm=true" class="btn p-v-xl btn-lightgreen" style="background-color: #28a745; color: #fff; display: inline-block; padding: 10px 20px; text-align: center; text-decoration: none; border: none; border-radius: 5px;">
                                    <i class="fa fa-check"></i> Verify now
                                </a>
                                <a href="https://www.publisuites.com/publishers/websites/" class="btn btn-outline p-v-xl btn-default" style="background-color: #fff; color: #000; display: inline-block; padding: 10px 20px; text-align: center; text-decoration: none; border: 2px solid #000; border-radius: 5px;">
                                    Verify later
                                </a>
                                <br>
                                
                                <p class="p-14 mt-2">If you have any questions follow <a href="https://www.publisuites.com/blog/guia-editores-verifica-web-ganar-dinero/" target="_blank">this guide</a> where we explain step by step how to verify your website. <br> If you still cannot do it send us an email to <a href="mailto:soporte@publisuites.com"> and we will be pleased to help you.</a>.</p>
                            </div>
                        </div>
                    </section>
                </div>
                
            </div>
        </div>
        <div id="finishStep" class="col-md-10 d-none">
            <!-- Fourth step content with input fields -->
            <h4 class="header text-black">4. Finished</h4>
            <form id="finishForm">
                <!-- Input fields -->
                <div class="mt-3">
                    <label for="comments" class="form-label">Comments</label>
                    <textarea class="form-control" id="comments" rows="3" placeholder="Add any additional comments here"></textarea>
                </div>
                <div class="text-end mt-2">
                    <button type="submit" class="btn btn-danger">Finish</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        let currentStep = 1;
    
        function goToNextStep(nextStep) {
            document.getElementById('step' + currentStep).style.display = 'none'; // Hide current step
            document.getElementById('step' + nextStep).style.display = 'block'; // Show next step
            currentStep = nextStep; // Update current step
        }
    </script>
@endsection



@section('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
<script>
    function validateUrlAndProceed() {
        var urlInput = document.getElementById('websiteUrl').value;
        if (urlInput.startsWith("https://")) {
            // Show loading circle
            document.getElementById('loadingCircle').style.display = "inline-block";
            // Proceed to next step after some delay (for demonstration purposes)
            setTimeout(function() {
                document.getElementById('step2').style.display = "block";
                document.getElementById('step1').style.display = "none";
                // Hide loading circle
                document.getElementById('loadingCircle').style.display = "none";
            }, 2000); // Change the delay as needed
        } else {
            alert("URL must start with 'https://'!");
        }
    }
</script>

<style>
    /* Progressbar */
    .progressbar {
        position: fixed;
        display: flex;
        flex-direction: column;
        counter-reset: step;
        margin: 2rem 0 4rem;
        width: 80px;
        /* Set width as needed */
    }

    .progressbar::before,
    .progress {
        content: "";
        position: absolute;
        left: 15%;
        top: 0;
        transform: translateX(-50%);
        width: 3px;
        height: 100%;
        background-color: #dcdcdc;
        z-index: -1;
    }

    .progress {
        background-color: var(--primary-color);
        height: 0%;
        transition: height 0.3s;
    }

    .progress-step {
        width: 1.5rem;
        height: 1.5rem;
        background-color: #dcdcdc;
        border-radius: 50%;
        margin-bottom: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        color: white;
    }

    .progress-step::before {
        counter-increment: step;
        content: counter(step);
    }

    .progress-step::after {
        content: attr(data-title);
        position: absolute;
        left: calc(100% + 0.5rem);
        /* Position text to the right */
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        color: #000000;
        font-weight: 500;
        white-space: nowrap;
    }

    .progress-step-active {
        background-color: rgb(61, 191, 126);
        color: #f3f3f3;
    }

    .btn-danger {
        border: none !important;
        background-color: rgb(61, 191, 126) !important;
    }
</style>
