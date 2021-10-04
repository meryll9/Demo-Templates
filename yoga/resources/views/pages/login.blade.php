@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="container pt-4 pb-5">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 col-md-6 mb-5 mb-md-0">
                        <div class="feature-box fbox-plain bottommargin-sm">
                            <div class="fbox-icon">
                                <i class="icon-line-circle-check text-primary"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="fw-normal nott">Classes Every Week.</h3>
                                <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
                                    Background.</p>
                            </div>
                        </div>

                        <div class="feature-box fbox-plain bottommargin-sm">
                            <div class="fbox-icon">
                                <i class="icon-line-circle-check text-warning"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="fw-normal nott">10+ Years Experienced.</h3>
                                <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
                                    Background.</p>
                            </div>
                        </div>

                        <div class="feature-box fbox-plain bottommargin-sm">
                            <div class="fbox-icon">
                                <i class="icon-line-circle-check text-info"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="fw-normal nott">2100+ Members Active.</h3>
                                <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
                                    Background.</p>
                            </div>
                        </div>

                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <i class="icon-line-circle-check text-danger"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="fw-normal nott">Well Trained Teachers.</h3>
                                <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
                                    Background.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="card pricing border-0 shadow bg-color dark">
                            <div class="card-body rounded pb-0 px-4 px-lg-5 pt-4 pt-lg-5">
                                <div class="d-block d-lg-flex flex-row justify-content-lg-between align-items-lg-center">
                                    <h3 class="h6 fw-bolder mb-2 mb-lg-0 text-white">Don't have an account?</h3>
                                    <a href="#"
                                        class="button button-small button-light button-white button-rounded m-0">Register
                                        Now</a>
                                </div>
                                <div class="line line-sm"></div>
                                <h3 class="h5 fw-bolder mb-3 text-white">Sign In</h3>
                                <p class="text-smaller mb-0" style="line-height: 1.5;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Unde, vel odio non dicta.</p>
                                <form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">
                                    <div class="col-12 form-group">
                                        <label class="nott ls0 font-body mb-1 fw-normal"
                                            for="login-form-username">Username:</label>
                                        <input type="text" id="login-form-username"
                                            class="form-control fw-semibold not-dark" placeholder="Username">
                                    </div>
                                    <div class="clear"></div>
                                    <div class="col-12 form-group">
                                        <label class="nott ls0 font-body mb-1 fw-normal"
                                            for="login-form-password">Password:</label>
                                        <div class="input-group">
                                            <input id="login-form-password" type="password"
                                                class="form-control fw-semibold not-dark" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label nott ls0 mb-0 fw-semibold"
                                                for="inlineCheckbox2">Remember me</label>
                                        </div>
                                        <a href="#" class="text-smaller fw-medium text-light"><u>Forgot Password?</u></a>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button
                                            class="btn btn rounded bg-dark text-white text-uppercase fw-semibold ls1 py-2 px-5"
                                            id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

@endsection
