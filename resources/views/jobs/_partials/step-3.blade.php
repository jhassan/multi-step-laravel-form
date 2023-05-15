<div class="multiStep-wrapper-contents" id="form-step-3">
    <!-- Form -->
    <div class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8">
        <div class="row">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-tittle-one mb-25">
                        <h3 class="title font-size-25 heading-color-two"> Relocation </h3>
                        <p>Please share details about your relocation plans</p>
                    </div>
                </div>
            </div>
            <!-- Check Box -->
            <div class="row mb-30" id="yyy">
                <h6 style="margin-bottom:1%;">Would you like to relocate ?</h6>
                <div class="col-lg-12 col-sm-12">
                    <div class="check-wrap style-eight mb-10">
                        <input id="8" type="radio" name="like_to_relocate" checked="radio" value="Yes, I am interested to relocate">
                        <label for="8">Yes, I am interested to relocate</label>
                    </div>
                    <div class="check-wrap style-eight mb-10">
                        <input id="9" type="radio" name="like_to_relocate" value="No, but would consider remote & onsite opportunities in my Residence country">
                        <label for="9">No, but would consider remote & onsite opportunities in my Residence country</label>
                    </div>
                </div>
                <h6 style="margin-bottom:1%;margin-top:3%;">Please choose the countries , you would like to relocate <span id="error_relocate_countries" style="display: none; color: red; font-weight: bold;" class="red">(Required!)</span> </h6>
                <div class="col-lg-4 col-sm-12">
                    <div class="check-wrap style-eight mb-10">
                        <input id="relocate_countries_10" type="checkbox" name="relocate_countries[]" class="check_id" value="United States" onclick="checkTotalCheckedBoxes()" checked>
                        <label for="relocate_countries_10">United States</label>
                    </div>
                    <div class="check-wrap style-eight mb-10">
                        <input id="relocate_countries_11" type="checkbox" name="relocate_countries[]" class="check_id" value="United Arab Emirates" onclick="checkTotalCheckedBoxes()">
                        <label for="relocate_countries_11">United Arab Emirates</label>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="check-wrap style-eight mb-10">
                        <input id="relocate_countries_12" type="checkbox" name="relocate_countries[]" class="check_id" value="United Kingdom" onclick="checkTotalCheckedBoxes()">
                        <label for="relocate_countries_12">United Kingdom</label>
                    </div>
                    <div class="check-wrap style-eight mb-10">
                        <input id="relocate_countries_13" type="checkbox" name="relocate_countries[]" class="check_id" value="Germany" onclick="checkTotalCheckedBoxes()">
                        <label for="relocate_countries_13">Germany</label>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="check-wrap style-eight mb-10">
                        <input id="relocate_countries_14" type="checkbox" name="relocate_countries[]" class="check_id" value="Canada" onclick="checkTotalCheckedBoxes()">
                        <label for="relocate_countries_14">Canada</label>
                    </div>
                    <div class="check-wrap style-eight mb-10">
                        <input id="relocate_countries_15" type="checkbox" name="relocate_countries[]" class="check_id" value="China" onclick="checkTotalCheckedBoxes()">
                        <label for="relocate_countries_15">China</label>
                    </div>
                </div>
                <div style="margin-top:5%;"></div>
                <div class="col-lg-6 col-md-12">
                    <label class="label-title">Country of Residence</label>
                    <div class="input-form">
                        <select class="form-control" name="country_of_residence">
                            <option value="">Country of Residence</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->nicename}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="label-title">Country of Citizenship</label>
                    <div class="input-form">
                        <select class="form-control" name="country_of_citizenship">
                        <option value="">Country of Citizenship</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->nicename}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Form -->
</div>