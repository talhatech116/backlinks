@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <!-- This column will hold the Step 1 content -->
            <h4 class="header text-black">Step 1</h4>
            <a class="btn btn-dark float-end" href="{{ url('/myproject') }}"><i class="ri-close-fill fw-bold"></i> Cancel</a>
            <h6 class="p-2">Please complete the data. Fields marked with <span class="text-danger">*</span> are required.
            </h6>
        </div>

        <div class="col-md-2 d-none d-md-block">
            <!-- This column will hold the progress bar -->
            <div class="progressbar">
                <div class="progress" style="width: 33%;"></div>
                <div class="progress-step progress-step-active" data-title="Fill in your project data"></div>
                <div class="progress-step" data-title="Add competitors"></div>
                <div class="progress-step" data-title="Add keywords"></div>
            </div>
        </div>


        <form action="" class="col-md-10">
            <div class="mb-3">
                <label for="projectName" class="form-label">Project name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="projectName"
                    placeholder="For example: Client name or website title">
            </div>
            <div class="mb-3">
                <label for="websiteUrl" class="form-label">URL of website <span class="text-danger">*</span></label>
                <input type="url" class="form-control" id="websiteUrl" placeholder="https://www.publisuites.com">
            </div>

            <label for="choices-multiple-remove-button" class="form-label text-muted mr-2">Project categories <span
                    class="text-danger">*</span> </label>
            <div style="position: relative; ">
                <select class="form-control custom-select" id="choices-multiple-remove-button" data-choices
                    data-choices-removeItem name="choices-multiple-remove-button" multiple>
                    <option value="" disabled>Select one or more options</option>
                    <option value="Choice 1">Choice 1</option>
                    <option value="Choice 2">Choice 2</option>
                    <option value="Choice 3">Choice 3</option>
                    <option value="Choice 4">Choice 4</option>
                </select>
                <i class="ri-arrow-down-s-fill"
                    style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);"></i>
            </div>

            <label for="choices-multiple-remove-button" class="form-label text-muted mr-2">Language(s) of your project <span
                    class="text-danger">*</span> </label>
            <div style="position: relative; ">
                <select class="form-control custom-select" id="choices-multiple-remove-button" data-choices
                    data-choices-removeItem name="choices-multiple-remove-button" multiple>
                    <option value="" disabled>Select one or more options</option>
                    <option value="Choice 1">Choice 1</option>
                    <option value="Choice 2">Choice 2</option>
                    <option value="Choice 3">Choice 3</option>
                    <option value="Choice 4">Choice 4</option>
                </select>
                <i class="ri-arrow-down-s-fill"
                    style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);"></i>
            </div>

            <label for="choices-multiple-remove-button" class="form-label text-muted mr-2">Country or countries of your
                project <span class="text-danger">*</span> </label>
            <div style="position: relative; ">
                <select class="form-control custom-select" id="choices-multiple-remove-button" data-choices
                    data-choices-removeItem name="choices-multiple-remove-button" multiple>
                    <option value="" disabled>Select one or more options</option>
                    <option value="Choice 1">Choice 1</option>
                    <option value="Choice 2">Choice 2</option>
                    <option value="Choice 3">Choice 3</option>
                    <option value="Choice 4">Choice 4</option>
                </select>
                <i class="ri-arrow-down-s-fill"
                    style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);"></i>
            </div>

            <label for="choices-multiple-remove-button" class="form-label text-muted mr-2">objectives of your project <span
                    class="text-danger">*</span> </label>
            <div style="position: relative; ">
                <select class="form-control custom-select" id="choices-multiple-remove-button" data-choices
                    data-choices-removeItem name="choices-multiple-remove-button" multiple>
                    <option value="" disabled>Select one or more options</option>
                    <option value="Choice 1">Choice 1</option>
                    <option value="Choice 2">Choice 2</option>
                    <option value="Choice 3">Choice 3</option>
                    <option value="Choice 4">Choice 4</option>
                </select>
                <i class="ri-arrow-down-s-fill"
                    style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);"></i>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-danger">Next <i class="ri-arrow-right-line fw-bold"></i> </button>
            </div>
        </form>
    </div>
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
        /* Adjust the font size as needed */
        color: #000000;
        font-weight: 500;
        white-space: nowrap;
        /* Prevent text from wrapping */
    }

    .progress-step-active {
        background-color: orangered;
        color: #f3f3f3;
    }
</style>
