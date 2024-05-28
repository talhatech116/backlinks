@extends('layouts.master')
@section('css')
    <link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('build/libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet"
        href="{{ URL::asset('build/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="container">
            <a class="btn btn-dark btn-md float-end mb-3" href="{{ url('/') }}"><i
                    class="ri-arrow-left-line fw-bold"></i> Back</a>
            <h4 class="text-black fs-5 fs-md-4 fs-lg-3">
                Buy sponsored post on
                <a class="text-black" href="https://www.eleconfidencialdigital.com/"
                    target="_blank">https://www.eleconfidencialdigital.com/</a>
            </h4>

            <h6 class="p-2 fw-bolder text-dark">Information not included in the details will not be taken into account by
                the
                editor in making the post or subsequent modifications.</h6>
        </div>
    </div>

    <div class="modal-content border-dotted border-1 row mx-auto p-2" >
        <form action="{{ url('/jobupload') }}" method="GET">
            <div class="row">
                <div class="col-md-4 mb-3 p-2">
                    <label class="text-dark fw-bold" for="employee">Post title (specify or suggest one) <i
                            class="ri-information-fill fs-5"></i>
                    </label>
                    <input type="text" placeholder="" class="form-control" id="employee" name="employee">
                </div>
                <div class="col-md-4 mb-3 p-2">
                    <label class="text-dark fw-bold" for="start_date">Minimum number of words <i
                            class="ri-information-fill fs-5"></i><span class="text-danger">*</span> </label>

                    <select class="form-select form-select-md  mb-3" aria-label=".form-select-md example">
                        <option selected>Select an option</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3 p-2">
                    <label class="text-dark fw-bold">Project</label>
                    <br>
                    <span>You have not created any project yet</span>
                    <br>
                    <p style="white-space: nowrap;  font-size:12px;" class="text-danger">Create your project now to
                        associate
                        your purchasings.</p>
                </div>


                <div class="container row">
                    <label>
                        <span class="fw-bold">Links</span> for the post
                        <span style="color: silver;">(this medium accepts up to 4 links per post, complete at least one)</span>
                        <span class="text-danger"> *</span>
                    </label>

                    <div class="col-md-3">
                        <input type="text" placeholder="Kewword 1" class="form-control col-md-4" id="employee"
                            name="employee">
                    </div>
                    <div class="col-md-3">
                        <input type="text" placeholder="URL 1" class="form-control col-md-4" id="employee"
                            name="employee">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-md" aria-label=".form-select-md example">
                            <option selected>Link type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-md" aria-label=".form-select-md example">
                            <option selected>Vitaminate link</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-3 mt-2">
                        <input type="text" placeholder="Kewword 2" class="form-control col-md-4" id="employee"
                            name="employee">
                    </div>
                    <div class="col-md-3 mt-2">
                        <input type="text" placeholder="URL 2" class="form-control col-md-4" id="employee"
                            name="employee">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-md   mt-2" aria-label=".form-select-md example">
                            <option selected>Link type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-md   mt-2" aria-label=".form-select-md example">
                            <option selected>Vitaminate link</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                    <div class="col-md-3 mt-2">
                        <input type="text " placeholder="Kewword 3" class="form-control col-md-4" id="employee"
                            name="employee">
                    </div>
                    <div class="col-md-3 mt-2">
                        <input type="text" placeholder="URL 3" class="form-control col-md-4" id="employee"
                            name="employee">
                    </div>
                    <div class="col-md-3 ">
                        <select class="form-select form-select-md   mt-2" aria-label=".form-select-md example">
                            <option selected>Link type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-md   mt-2" aria-label=".form-select-md example">
                            <option selected>Vitaminate link</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                    <div class="col-md-3 mt-2">
                        <input type="text" placeholder="Kewword 4" class="form-control col-md-4" id="employee"
                            name="employee">
                    </div>
                    <div class="col-md-3 mt-2">
                        <input type="text" placeholder="URL 4" class="form-control col-md-4" id="employee"
                            name="employee">
                    </div>
                    <div class="col-md-3 ">
                        <select class="form-select form-select-md   mt-2" aria-label=".form-select-md example">
                            <option selected>Link type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-md   mt-2" aria-label=".form-select-md example">
                            <option selected>Vitaminate link</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3 p-2 ">
                        <label class="form-label fw-bold ">Details of the order <span class="text-danger">
                                *</span></label>
                        <div id="ckeditor-classic">
                            <p>It will be as simple as occidental in fact, it will be Occidental. To an English person, it
                                will seem like simplified English</p>
                        </div>
                    </div>

                    <div class="mb-3 p-2 ">
                        <label class="form-label fw-bold ">Image or images to be included (maximum of 2 )<span
                                class="text-danger"> *</span>
                        </label>
                        <div class="input-group">

                            <input type="file" class="filepond filepond-input-multiple form-control" multiple
                                name="filepond" data-allow-reorder="true" data-max-file-size="150kb"
                                data-max-files="2"id="inputGroupFile03" aria-describedby="inputGroupFileAddon03"
                                aria-label="Upload" accept=".jpg, .png, .gif" required>
                            <button style="border: silver 1px solid;" class="btn " type="button"
                                id="inputGroupFileAddon03">Browse</button>
                        </div>
                    </div>


                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="exampleFormControlTextarea5" class="form-label fw-bolder">Avoid following
                                terms</label>
                            <textarea class="form-control" placeholder="Let the publisher know if you don't want a topic to appear on the post"
                                id="exampleFormControlTextarea5" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="exampleFormControlTextarea5" class="form-label fw-bolder">Information
                                source</label>
                            <textarea class="form-control"
                                placeholder="You can suggest the publisher articles with useful information to write the post or add as an information source"
                                id="exampleFormControlTextarea5" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="mt-2">
                            <label for="exampleFormControlTextarea5" class="form-label fw-bolder">Do you want your post to
                                be published on the social media of the web?</label>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="d-flex ">
                                    <div class="flex-shrink-0 avatar-xs align-self-center ">
                                        <div class="avatar-title bg-light rounded-circle fs-22 text-dark">
                                            <i class="ri-facebook-circle-fill"></i>
                                        </div>
                                    </div>

                                    <p class="mt-3">eleconfidencialdigital.ecd</p>

                                </div>
                            </div>
                            <div class="col-6 col-md-4 ">
                                <div class="d-flex ">
                                    <div class="flex-shrink-0 avatar-xs align-self-center">
                                        <div class="avatar-title bg-light rounded-circle fs-22 text-dark ms-5">
                                            <i class="ri-twitter-fill"></i>
                                        </div>
                                    </div>

                                    <p class="mt-3 ms-5">ecd_</p>

                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="d-flex ">
                                    <div class="flex-shrink-0 avatar-xs align-self-center ">
                                        <div class="avatar-title bg-light rounded-circle fs-22 text-dark">
                                            <i class="ri-linkedin-box-fill"></i>
                                        </div>
                                    </div>
                                    <p class="mt-3">eleconfidencial</p>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <select class="form-select form-select-md   mt-2" aria-label=".form-select-md example">
                                    <option selected>Nothing selected</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>



                        </div>
                    </div>


                </div>
            <button type="button" class="btn btn-danger btn-block d-block d-md-inline-block w-auto w-md-100 mx-auto my-4">
                    <div class="d-flex justify-content-center align-items-center">
                      <i class="ri-shopping-cart-2-line align-bottom"></i>
                      <span class="ml-2">Add to cart (&pound;100)</span>
                    </div>
                  </button>

        </form>
    </div>
@endsection


@section('script')
    <script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/project-create.init.js') }}"></script>
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}">
    </script>
    <script
        src="{{ URL::asset('build/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}">
    </script>
    <script
        src="{{ URL::asset('build/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}">
    </script>
    <script src="{{ URL::asset('build/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/form-file-upload.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
