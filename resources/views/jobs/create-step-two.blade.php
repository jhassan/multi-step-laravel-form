@extends('layout.default')

@section('content')

    <!-- Form -->
    <form action="{{ route('jobs.create.step.two.post') }}"
        class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8" method="POST">
        @csrf
        <div class="account-area">
            <div class="multiStep-wrapper multiStep-top-border multiStep-bottom-border">
                <div class="multiStep-wrapper-flex">
                    @include('jobs.left-side-bar')
                    <!-- multiStep Job Prefrences Start -->
                    <div class="multiStep-wrapper-contents">
                            <div class="row">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="section-tittle-one mb-25">
                                            <h3 class="title font-size-25 heading-color-two"> Job
                                                Prefrences
                                            </h3>
                                            <p> Let us better understand your expectation in terms of
                                                your job</p>
                                        </div>
                                    </div>
                                </div>


                                <h5 style="margin-bottom:1%;">Which type of job do you prefer ?</h5>
                                <div class="row mb-30">
                                    <div class="col-lg-12 col-sm-12">

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="15" type="radio" name="job_type" checked="radio">
                                            <label for="15">Remote</label>
                                        </div>

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="16" type="radio" name="job_type">
                                            <label for="16">On-site</label>
                                        </div>

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="10" type="radio" name="job_type">
                                            <label for="10">Hybrid (Flexible to Remote or
                                                on-site)</label>
                                        </div>
                                    </div>

                                    <h5 style="margin-top:4%;margin-bottom:1%;">Are you actively looking
                                        for a remote
                                        job?</h5>

                                    <div class="col-lg-12 col-sm-12">

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="15" type="radio" name="job_type" checked="radio">
                                            <label for="15">I am actively
                                                looking for a new
                                                job.
                                            </label>
                                        </div>

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="16" type="radio" name="job_type">
                                            <label for="16">I am not actively looking for a new
                                                job, but open to good offers &
                                                opportunities.</label>
                                        </div>

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="10" type="radio" name="job_type">
                                            <label for="10">I am not looking for a new job at
                                                the moment.</label>
                                        </div>
                                    </div>

                                    <h5 style="margin-top:4%;margin-bottom:1%;">Are you interested in
                                        full-time work (8hrs/day, 40hrs/week)? </h5>

                                    <div class="col-lg-12 col-sm-12">

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="15" type="radio" name="job_type" checked="radio">
                                            <label for="15">Yes
                                            </label>
                                        </div>

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="16" type="radio" name="job_type">
                                            <label for="16">No, only part-time.</label>
                                        </div>

                                        <div class="check-wrap style-eight mb-10">
                                            <input id="10" type="radio" name="job_type">
                                            <label for="10">I can start part-time immediately and then
                                                switch to full-time within a month.</label>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
            <div class="multiStep-footer">
                <div class="multiStep-footer-flex">
                    <div class="multiStep-footer-left">
                    </div>
                    <div class="multiStep-footer-right">
                        <a href="{{ route('jobs.create.step.two') }}" class="multiStep-footer-back previous" style="margin-right:20px;"> Back </a>
                        <button type="submit" class="multiStep-footer-next next">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /Form -->

@endsection
