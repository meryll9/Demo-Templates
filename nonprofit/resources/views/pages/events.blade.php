@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-0">

            <div class="section m-0 p-0 row align-items-stretch clearfix" style="background-color: rgba(198,192,156, 0.15);">
                <div class="col-lg-4 dark d-flex flex-column align-items-center center justify-content-center"
                    style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url({{asset('/nonprofit/demos/nonprofit/images/others/event.jpg')}}) center center repeat; background-size: cover; min-height: 300px;">
                    <h2 class="display-4 px-4 fw-bold mb-4 d-block">Events Overview</h2>
                </div>
                <div class="col-lg-8 col-padding">
                    <div class="events-calendar">
                        <div class="events-calendar-header clearfix">
                            <div
                                class="calendar-month-year d-flex text-start justify-content-between align-items-center w-100">
                                <div>
                                    <span id="calendar-month" class="calendar-month text-dark"></span>
                                    <span id="calendar-year" class="calendar-year text-dark"></span>
                                </div>
                                <nav>
                                    <span id="calendar-prev" class="calendar-prev bg-color"><i
                                            class="icon-chevron-left text-dark"></i></span>
                                    <span id="calendar-next" class="calendar-next bg-color"><i
                                            class="icon-chevron-right text-dark"></i></span>
                                    <span id="calendar-current" class="calendar-current bg-color"
                                        title="Got to current date"><i class="icon-reload text-dark"></i></span>
                                </nav>
                            </div>
                        </div>
                        <div id="calendar" class="fc-calendar-container"></div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
