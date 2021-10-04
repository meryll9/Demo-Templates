@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="bg-color border-bottom-0">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{asset('forum/demos/forum/images/user.png')}}" alt="Author"
                    class="rounded-circle me-3 border border-width-3 border-white" width="120" height="120">
                <div>
                    <h2 class="h1 border-bottom border-dark border-width-4" style="font-weight: 800">SemiColonWeb</h2>
                    <p class="mb-0">Forum Role: <strong>Keymaster</strong></p>
                </div>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="alt-color" href="#">Forum</a></li>
                <li class="breadcrumb-item text-black-50 active" aria-current="page">SemiColonWeb</li>
            </ol>
        </div>
    </section>

    <!-- Page Sub Menu
      ============================================= -->
    <div id="page-menu" class="no-sticky">
        <div id="page-menu-wrap" class="bg-alt">
            <div class="container">
                <div class="page-menu-row">

                    <nav class="page-menu-nav">
                        <ul class="page-menu-container">
                            <li class="page-menu-item current"><a href="#">
                                    <div>Profile</div>
                                </a></li>
                            <li class="page-menu-item"><a href="#">
                                    <div>Topics Started</div>
                                </a></li>
                            <li class="page-menu-item"><a href="#">
                                    <div>Replies Created</div>
                                </a></li>
                            <li class="page-menu-item"><a href="demo-forum-edit.html">
                                    <div>Edit</div>
                                </a></li>
                        </ul>
                    </nav>

                    <div id="page-menu-trigger"><i class="icon-reorder"></i></div>

                </div>
            </div>
        </div>
    </div><!-- #page-menu end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container mw-md">

                <h3 class="h1 fw-bolder mb-4">Profile</h3>

                <div class="row col-mb-30 gutter-50">
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="py-2 text-larger">Forum Role: <strong>Keymaster</strong></li>
                            <li class="py-2 text-larger">Topics Started: <strong>1</strong></li>
                            <li class="py-2 text-larger">Replies Created: <strong>6876</strong></li>
                            <li class="py-2 text-larger">Email: <strong>noreply@semicolonweb.com</strong></li>
                            <li class="py-2 text-larger">Support: <strong class="text-success">Active</strong></li>
                            <li class="py-2 text-larger">Licenses: <strong>1</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Your Purchased Licence:</p>
                        <div class="card border-color p-4">
                            <h4 class="mb-1 fw-bolder"><a href="#">Canvas | The Multi-Purpose HTML5 Template</a></h4>
                            <p class="mb-1">Support Left: <strong class="text-success">33 Days</strong></p>
                            <p class="mb-0">Bought On: <strong>2020-03-24T17:29:47+11:00</strong></p>
                        </div>
                        <a href="#"
                            class="button button-large bg-color button-light text-dark py-2 rounded-1 fw-medium nott ls0 ms-0 mt-3">Purchase
                            a another License</a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #content end -->
@endsection
