@extends('layout.default')

@section('content')

    <!-- Form -->
    <form action="{{ route('jobs.create.step.one.post') }}"
        class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8" method="POST">
        @csrf
        <div class="account-area">
            <div class="multiStep-wrapper multiStep-top-border multiStep-bottom-border">
                <div class="multiStep-wrapper-flex">
                    @include('jobs.left-side-bar')
                    <!-- Experience Start -->
                    <div class="multiStep-wrapper-contents active">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="section-tittle-one mb-25">
                                        <h3 class="title font-size-25 heading-color-two"> Expertise
                                        </h3>
                                        <p>Please provide details about your professional expertise
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="label-title">Linkedin Profile URL</label>
                                <div class="input-form">
                                    <input name="url" type="url" placeholder="i.e https://www.linkedin.com/jhon">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <label class="label-title">Role </label>
                                <div class="input-form">
                                    <select class="form-control" name="role">
                                    <option value="">Select Role</option>
                                        <option>Audit Controller </option>
                                        <option>CFA</option>
                                        <option>Tax Controller </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="label-title">Total years of work experience <a href="#"
                                        data-toggle="tooltip"
                                        title="Please tell us how many years of experience do you have in the finance industry"><i
                                            class="fa fa-info-circle"></i></a></label>
                                <div class="input-form">
                                    <select class="form-control" name="years">
                                        <option value="">Select years</option>
                                        <option id="1" name="1 year" value="1">1 year</option>
                                        <option id="2" name="2 years" value="2">2 years</option>
                                        <option id="3" name="3 years" value="3">3 years</option>
                                        <option id="4" name="4 years" value="4">4 years</option>
                                        <option id="5" name="5 years" value="5">5 years</option>
                                        <option id="6" name="6 years" value="6">6 years</option>
                                        <option id="7" name="7 years" value="7">7 years</option>
                                        <option id="8" name="8 years" value="8">8 years</option>
                                        <option id="9" name="9 years" value="9">9 years</option>
                                        <option id="10" name="10 years" value="10">10 years</option>
                                        <option id="11" name="11 years" value="11">11 years</option>
                                        <option id="12" name="12 years" value="12">12 years</option>
                                        <option id="13" name="13 years" value="13">13 years</option>
                                        <option id="14" name="14 years" value="14">14 years</option>
                                        <option id="15" name="15+ years" value="15">15+ years
                                        </option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">

                                <label class="label-title">Primary Skill</label>
                                <div class="input-form">
                                    <select class="form-control" name="primary_skill">
                                        <option value="">Select Primary Skill</option>
                                        <option>Finance</option>
                                        <option>Marketing</option>
                                        <option>Banking</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <br>
                                <label class="label-title">Years of experience with primary skill <a href="#"
                                        data-toggle="tooltip" title="Hooray!"><i class="fa fa-info-circle"></i></a>
                                </label>
                                <div class="input-form">
                                    <select class="form-control" name="years_of_experience">
                                        <option value="">Select years</option>
                                        <option id="1" name="1 year" value="1">1 year</option>
                                        <option id="2" name="2 years" value="2">2 years</option>
                                        <option id="3" name="3 years" value="3">3 years</option>
                                        <option id="4" name="4 years" value="4">4 years</option>
                                        <option id="5" name="5 years" value="5">5 years</option>
                                        <option id="6" name="6 years" value="6">6 years</option>
                                        <option id="7" name="7 years" value="7">7 years</option>
                                        <option id="8" name="8 years" value="8">8 years</option>
                                        <option id="9" name="9 years" value="9">9 years</option>
                                        <option id="10" name="10 years" value="10">10 years</option>
                                        <option id="11" name="11 years" value="11">11 years</option>
                                        <option id="12" name="12 years" value="12">12 years</option>
                                        <option id="13" name="13 years" value="13">13 years</option>
                                        <option id="14" name="14 years" value="14">14 years</option>
                                        <option id="15" name="15+ years" value="15">15+ years
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <br>
                                <label class="label-title">English proficiency</label>
                                <div class="input-form">
                                    <select class="form-control" name="english_proficiency">

                                        <option value="">Select your english level
                                        </option>
                                        <option id="BEGINNER" name="Beginner A1/A2" order="1" value="BEGINNER">
                                            Beginner A1/A2</option>
                                        <option id="INTERMEDIATE" name="Intermediate B1/B2" order="2"
                                            value="INTERMEDIATE">Intermediate B1/B2
                                        </option>
                                        <option id="ADVANCED" name="Advanced C1/C2" order="3" value="ADVANCED">
                                            Advanced C1/C2</option>
                                        <option id="NATIVE" name="Native" order="4" value="NATIVE">
                                            Native</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="multiStep-footer">
                <div class="multiStep-footer-flex">
                    <div class="multiStep-footer-left">
                    </div>
                    <div class="multiStep-footer-right">
                        <button type="submit" class="multiStep-footer-next next">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /Form -->

@endsection
