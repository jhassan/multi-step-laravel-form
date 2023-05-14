<!-- Experience Start -->
<div class="multiStep-wrapper-contents active" id="form-step-1">
    <!-- Form -->
    <div class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8">
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
                    <span class="d-none error_url"></span>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <label class="label-title">Role </label>
                <div class="input-form">
                    <select class="form-control" name="role">
                        <option value="">Select Role</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                    <span class="d-none error_role"></span>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <label class="label-title">
                    Total years of work experience
                    <a href="#" data-toggle="tooltip" title="Please tell us how many years of experience do you have in the finance industry">
                        <i class="fa fa-info-circle"></i>
                    </a>
                </label>
                <div class="input-form">
                    <select class="form-control" name="years">
                        <option value="">Select years</option>
                        @foreach($work_experience as $experience)
                            <option value="{{$experience->id}}">{{$experience->name}}</option>
                        @endforeach    
                    </select>
                    <span class="d-none error_years"></span>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">

                <label class="label-title">Primary Skill</label>
                <div class="input-form">
                    <select class="form-control" name="primary_skill">
                        <option value="">Select Primary Skill</option>
                        @foreach($primary_skills as $skill)
                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                        @endforeach
                    </select>
                    <span class="d-none error_primary_skill"></span>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <br>
                <label class="label-title">
                    Years of experience with primary skill
                    <a href="#" data-toggle="tooltip" title="Hooray!">
                        <i class="fa fa-info-circle"></i>
                    </a>
                </label>

                <div class="input-form">
                    <select class="form-control" name="years_of_experience">
                        <option value="">Select years</option>
                        @foreach($years_experience_skills as $skill)
                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                        @endforeach
                    </select>
                    <span class="d-none error_years_of_experience"></span>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <br>
                <label class="label-title">English proficiency</label>
                <div class="input-form">
                    <select class="form-control" name="english_proficiency">

                        <option value="">Select your english level</option>
                        @foreach($english_proficiency as $proficiency)
                            <option value="{{$proficiency->id}}">{{$proficiency->name}}</option>
                        @endforeach
                    </select>
                    <span class="d-none error_english_proficiency"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Form -->
</div>
<!-- multiStep Experience Ends -->