@extends('layouts.app')

@section('content')
<main>
    <!-- Form with multiStep S t a r t-->
    <section class="form-with-multistep section-padding section-bg-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="jobForm" action="{{ route('jobs.store') }}" method="post">
                        @csrf
                        <div class="account-area">
                            <div class="multiStep-wrapper multiStep-top-border multiStep-bottom-border">
                                <div class="multiStep-wrapper-flex">
                                    <!-- multiStep -->
                                    @include('jobs._partials.sidebar')

                                    <!-- multiStep -->
                                    @include('jobs._partials.step-1')

                                    <!-- multiStep -->
                                    @include('jobs._partials.step-2')

                                    <!-- multiStep -->
                                    @include('jobs._partials.step-3')

                                    <!-- multiStep -->
                                    @include('jobs._partials.step-4')

                                    <!-- multiStep -->
                                    @include('jobs._partials.step-5')

                                    <!-- multiStep -->
                                    @include('jobs._partials.step-6')
                                </div>
                            </div>
                            <div class="multiStep-footer">
                                <div class="multiStep-footer-flex">
                                    <div class="multiStep-footer-left">
                                    </div>
                                    <div class="multiStep-footer-right">

                                        <button type="button" class="multiStep-footer-back previous"
                                            id="prevBtn" style="margin-right:20px;" onclick="nextPrev(-1)"> Back </button>

                                        <button type="button" class="multiStep-footer-next next" id="nextBtn" onclick="nextPrev(1)">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px; display: none;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </section>
    <!-- Eorm-with-multiStep End -->
</main>
@endsection