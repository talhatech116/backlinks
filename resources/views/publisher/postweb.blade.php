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
        <form id="urlForm" class="col-md-10" onsubmit="return goToNextStep(2)">
            <h4 class="header text-black">1. Enter the URL</h4>
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
                          <select  id="dropdown1" name="country" class="form-control">
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                      </div>
                      <div class="col-lg-3">
                          <label for="dropdown1" class="form-label">How many images per post *</label>
                          <select class="form-select mt-3" id="dropdown1">
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
                          <select class="form-select mt-3" id="dropdown1">
                              <option value="option1">Follow</option>
                              <option value="option2">No Follow</option>
                              <option value="option2">Sponsored</option>
                              <!-- Add more options if needed -->
                          </select>
                      </div>
                      <div class="col-lg-3 mt-3" >
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
  
                      <div class="col-lg-3 mt-3">
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
                        <div class="col-lg-3 mt-3">
                        <label for="dropdown1" class="form-label">Sponsorship notification</label>
                            <select class="form-select mt-3" id="dropdown1">
                                <option value="option1">Always</option>
                                <option value="option2">Ony if its noticed</option>
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

                                    <input type="number" name="price" min="1" step="0.5" class="form-control" value="5" required="">
                                    <span class="input-group-text">€</span>
                                </div>

                                <div id="topicpriceblock">
                                    <hr>
                                    <p class="p-14"><strong>Delicated topics price (optional )</strong></p>
                                    <div class="alert alert-light-blue text-center">
                                        Establish the price you want to earn if you accept post about delicated topics and this is higher than the normal price previously indicated. <br> The delicated topics included in this price are: <span id="topicspricelist">Casino, CBD, Crypto, Dating, Drug, Escorts, Gambling, Growshop, Medication, Politics, Promotional articles, Religion, Sexshop, Sexuality, Tarot and Esotericism</span>
                                    </div>
                                    <div class="input-group mb-3">

                                        <input type="number" name="topic_price" min="1" step="0.5" class="form-control" value="">
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
                                                <input type="number" class="form-control input-sm" name="800_words">
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
                                                <input type="number" class="form-control input-sm" name="1000_words">
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
                                                <input type="number" class="form-control input-sm" name="1200_words">
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
                                                <input type="text" class="form-control  input-sm" placeholder="" name="facebook">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-lg-6 text-left col-form-label p-14"><i class="fab fa-twitter"></i> https://twitter.com/</label>
                                            <div class="input-group col-lg-6 ">
                                                <input type="text" class="form-control  input-sm" placeholder="" name="twitter">
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <label class="col-lg-6 text-left col-form-label p-14"><i class="fab fa-linkedin"></i> https://www.linkedin.com/</label>
                                            <div class="input-group col-lg-6 ">
                                                <input type="text" class="form-control  input-sm" placeholder="" name="linkedin">
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <label class="col-lg-6 text-left col-form-label p-14">Price per diffusion</label>
                                            <div class="input-group col-lg-6 ">
                                                <div class="input-group-prepend prepend-append-sm">
                                                    <span class="input-group-text" id="basic-addon2">+</span>
                                                </div>
                                                <input type="number" class="form-control  input-sm" name="social_price">
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
                    <button type="submit" class="btn btn-danger">Next <i class="ri-arrow-right-line fw-bold"></i></button>
                </div>
            </form>
        </div>
        
        <div id="verifyStep" class="col-md-10 d-none">
            <!-- Third step content with input fields -->
            <h4 class="header text-black">3. Verify your website</h4>
            <form id="verifyForm" onsubmit="return goToNextStep(4)">
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
