@extends('layout.main')

@section('content')
<!-- Page Title
  ============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark page-title-center include-header include-topbar"
    style="no-repeat center center / cover; padding: 140px 0; background-image: url({{ asset('/realestate/demos/real-estate/images/builders/page-title.jpg')}} "
    data-center="background-position: 0px 50%;" data-top-bottom="background-position:0px 0%;">

    <div class="container clearfix">
        <h1>Builders</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Real Estate</a></li>
            <li class="breadcrumb-item active">Builders</li>
        </ol>
    </div>

    <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
        <div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
    </div>

</section><!-- #page-title end -->

<!-- Content
  ============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="heading-block border-0 mw-100">
                <h2 class="mb-4">Our Trustable Builders</h2>
                <p class="lead">Rerum morbi wisi purus illum, dolor consectetuer nulla, iusto eveniet? Fuga
                    rem inventore scelerisque, wisi, hac illo wisi iste platea natus ante anim augue convallis. Lacinia
                    laoreet mus quisque repellat.</p>
            </div>
            <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/1.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/2.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/3.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/4.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/1.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/2.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/3.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/4.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/1.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/2.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/3.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/4.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/2.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/1.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/2.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/3.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/4.png')}}" alt="Clients"></a></li>
                <li class="grid-item" style="padding: 20px;"><a href="#" class="op-09"><img
                            src="{{ asset('realestate/demos/real-estate/images/builders/1.png')}}" alt="Clients"></a></li>
            </ul>
        </div>
    </div><!-- .content-wrap end -->
</section><!-- #content end -->
@endsection
