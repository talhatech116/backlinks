@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h4 class="header text-black">1. Enter the URL</h4>
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
        <form id="urlForm" class="col-md-10" onsubmit="return goToNextStep(2)">
            <div class="bg-info p-2 text-center rounded text-light">Important: We do not accept link farms, review farms, websites with duplicate or low-quality content.</div>
            <div class="mt-3">
                <label for="websiteUrl" class="form-label">URL of your website <span class="text-success">*</span></label>
                <input type="url" class="form-control" id="websiteUrl" placeholder="https://www.publisuites.com">
            </div>
            <div class="text-end mt-2">
                <button type="submit" class="btn btn-danger">Next <i class="ri-arrow-right-line fw-bold"></i></button>
            </div>
        </form>
        <div id="dataStep" class="col-md-10 d-none">
            <!-- Second step content with dropdowns -->
            <h4 class="header text-black">2. Complete the data</h4>
            {{-- Dropdowns --}}
            <form id="dataForm" onsubmit="return goToNextStep(3)">
                <!-- Add your four dropdowns here -->
                <!-- Example: -->
                <h5>Select your website categories (maximum 3)</h5>
                  <div class="row">
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">Your main audience is from (country): *</label>
                          <select class="form-select" id="dropdown1">
                              <option value="option1">Option 1</option>
                              <option value="option2">Option 2</option>
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">How many images per post *</label>
                          <select class="form-select" id="dropdown1">
                              <option value="option1">1</option>
                              <option value="option2">2</option>
                              <option value="option2">3</option>
                              <option value="option2">4</option>
                              <option value="option2">5</option>
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">Maximum amount of links per post *</label>
                          <select class="form-select" id="dropdown1">
                              <option value="option1">1</option>
                              <option value="option2">2</option>
                              <option value="option2">3</option>
                              <option value="option2">4</option>
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">Type of links admitted *</label>
                          <select class="form-select" id="dropdown1">
                              <option value="option1">Follow</option>
                              <option value="option2">No Follow</option>
                              <option value="option2">Sponsored</option>
                              <option value="option2">4</option>
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">Select your website categories (maximum 3) *</label>
                          <select class="form-select" id="dropdown1">
                              <option value="option1">Activism and NGOs</option>
                              <option value="option2">Animals</option>
                              <option value="option1">Beauty</option>
                              <option value="option2">Celebrities</option>
                              <option value="option1">Cinema and TV</option>
                              <option value="option2">Computer and Programming</option>
                              <option value="option1">Construction and Renovations</option>
                              <option value="option2">Cooking, Recipes and Gastronomy</option>
                              <option value="option1">Curiosities</option>
                              <option value="option2">Dating</option>
                              <option value="option1">Decoration and DIY</option>
                              <option value="option2">Economy</option>
                              <option value="option1">Education and Formation</option>
                              <option value="option2">Entrepreneurs and SME</option>
                              <option value="option1">Erotic and Sex</option>
                              <option value="option2">Esoteric and Paranormal</option>
                              <option value="option1">Fashion and Accessories</option>
                              <option value="option2">Gambling, Casino and Sweepstakes</option>
                              <option value="option1">Games</option>
                              <option value="option2">Health</option>
                              <option value="option1">House and Garden</option>
                              <option value="option2">Humorous</option>
                              <option value="option1">Insurances</option>
                              <option value="option2">Legal</option>
                              <option value="option1">Leisure</option>
                              <option value="option2">Lifestyle</option>
                              <option value="option1">Literature and Culture</option>
                              <option value="option2">Marketing, SEO and Social Networks</option>
                              <option value="option1">Miscellaneous</option>
                              <option value="option2">Mobile Phones and Apps</option>
                              <option value="option1">Motor, Cars and Motorbikes</option>
                              <option value="option2">Music and Radio</option>
                              <option value="option1">Nature and Ecology</option>
                              <option value="option2">News</option>
                              <option value="option1">Nutrition</option>
                              <option value="option2">Parenting and Children</option>
                              <option value="option1">Photography and Design</option>
                              <option value="option2">Politics</option>
                              <option value="option1">Porn / XXX</option>
                              <option value="option2">Psychology and Coaching</option>
                              <option value="option1">Religion</option>
                              <option value="option2">Sports</option>
                              <option value="option1">Technology</option>
                              <option value="option2">Travels and Tourism</option>
                              <option value="option1">Weddings and Couples</option>
  
                              <!-- Add more options if needed -->
                          </select>
                      </div>
  
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">Delicated topics you do not accept</label>
                          <select class="form-select" id="dropdown1">
                              <option value="option1">Casino</option>
                              <option value="option2">CBD</option>
                              <option value="option1">Crypto</option>
                              <option value="option2">Dating</option>
                              <option value="option1">Drug</option>
                              <option value="option2">Escorts</option>
                              <option value="option1">Gambling</option>
                              <option value="option2">Growshop</option>
                              <option value="option1">Curiosities</option>
                              <option value="option2">Dating</option>
                              <option value="option1">Decoration and DIY</option>
                              <option value="option2">Economy</option>
                              <option value="option1">Education and Formation</option>
                              <option value="option2">Entrepreneurs and SME</option>
                              <option value="option1">Erotic and Sex</option>
  
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                  </div>
                <div class="text-end mt-2">
                    <button type="submit" class="btn btn-danger">Next <i class="ri-arrow-right-line fw-bold"></i></button>
                </div>
            </form>
        </div>
        <div id="verifyStep" class="col-md-10 d-none">
            <!-- Third step content with input fields -->
            <h4 class="header text-black">3. Verify your website</h4>
            <form id="verifyForm" onsubmit="return goToNextStep(4)">
                <!-- Input fields -->
                <div class="mt-3">
                    <label for="verificationCode" class="form-label">Verification Code</label>
                    <input type="text" class="form-control" id="verificationCode" placeholder="Enter verification code">
                </div>
                <div class="text-end mt-2">
                    <button type="submit" class="btn btn-danger">Next <i class="ri-arrow-right-line fw-bold"></i></button>
                </div>
            </form>
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
        function goToNextStep(nextStep) {
            if (nextStep === 2) {
                // Hide URL form
                document.getElementById('urlForm').classList.add('d-none');
                // Show data step
                document.getElementById('dataStep').classList.remove('d-none');
                // Update progress bar
                document.querySelectorAll('.progress-step')[1].classList.add('progress-step-active');
            } else if (nextStep === 3) {
                // Hide data step
                document.getElementById('dataStep').classList.add('d-none');
                // Show verify step
                document.getElementById('verifyStep').classList.remove('d-none');
                // Update progress bar
                document.querySelectorAll('.progress-step')[2].classList.add('progress-step-active');
            } else if (nextStep === 4) {
                // Hide verify step
                document.getElementById('verifyStep').classList.add('d-none');
                // Show finish step
                document.getElementById('finishStep').classList.remove('d-none');
                // Update progress bar
                document.querySelectorAll('.progress-step')[3].classList.add('progress-step-active');
            }
            return false; // Prevent form submission
        }
    </script>
@endsection



@section('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

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
