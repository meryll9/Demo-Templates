@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="bg-color py-6 page-title-center text-center">
        <div class="container">
            <h2 class="h2" style="font-weight: 800">Jump In Content When Using Include-Header Class</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="alt-color" href="#">Forum</a></li>
                <li class="breadcrumb-item"><a class="alt-color" href="#">Canvas</a></li>
                <li class="breadcrumb-item text-black-50 active" aria-current="page">Jump In Content When Using
                    Include-Header Class</li>
            </ol>
        </div>
    </section>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container mw-md">

                <div class="topic-post">
                    <div class="row g-0 justify-content-between align-items-center border-top border-bottom py-3 mb-4">
                        <div class="col-9">
                            <div class="d-flex align-items-center">
                                <img src="{{asset('forum/demos/articles/images/authors/2.jpg')}}" alt="Author" class="rounded-circle me-2"
                                    width="50" height="50">
                                <div>
                                    <h5 class="mb-0 h6 fw-semibold"><a class="text-dark" href="#">Gordon Norman</a>
                                    </h5>
                                    <small class="text-muted mb-0 fw-normal">August 15, 2020, 7:54 AM</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <a href="#" id="editlink" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="icon-line-ellipsis icon-2x alt-color"></i></a>
                            <div class="dropdown-menu dropdown-menu-links rounded shadow-sm dropdown-menu-end py-0 m-0"
                                aria-labelledby="editlink">
                                <a class="dropdown-item rounded-top" href="#"><i class="icon-line-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-circle-cross me-2"></i>Close</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-arrow-up me-2"></i>Stick On Top</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-git-merge me-2"></i>Merge</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-trash-2 me-2"></i>Trash</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-alert-triangle me-2"></i>Spam</a>
                                <a class="dropdown-item" href="#message-reply" data-scrollto="#message-reply"><i
                                        class="icon-line-corner-up-left me-2"></i>Reply</a>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>


                    <p>Hi,<br><br>
                        First of all, great template, I was working on a new site with version 5.9 when version 6 came out
                        so I’m starting again with version 6.<br><br>
                        I have 2 things so far that I would like to see if there is a solution for this:<br></p>
                    <ol class="ms-3">
                        <li class="mb-4">If you are trying to build a page that has a transparent header (similar
                            to this one <a href="http://themes.semicolonweb.com/html/canvas/index-fullscreen-image.html"
                                rel="nofollow"><u>http://themes.semicolonweb.com/html/canvas/index-fullscreen-image.html</u></a>
                            ) and you add the include-header class on the hero image / slider section, then once the page
                            has loaded and the “header-wrap-clone” element is added the whole graphic jump down, what is not
                            very nice. Is there any way that I can do to fix this? You can see the jump on your demo page <a
                                href="http://themes.semicolonweb.com/html/canvas/index-fullscreen-image.html"
                                rel="nofollow"><u>http://themes.semicolonweb.com/html/canvas/index-fullscreen-image.html</u></a>
                        </li>
                        <li>I like the sticky-footer option where the footer is static in the background and the content
                            slide off it, the only problem I have is that, if there is not enough content on the page the
                            footer is not sticking to the bottom of the page as in 5.9, the footer is riding up the page.
                            (see image) is there anything that I can do to make the footer always stick to the bottom of the
                            page?</li>
                    </ol>
                    <p>Thanks <strong>Rob</strong>.</p>

                    <div class="col-1 pb-3 px-0">
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-4">
                            <a href="{{asset('forum/images/portfolio/full/9-1.jpg')}}" data-lightbox="image">
                                <img src="{{asset('forum/images/portfolio/4/9-1.jpg')}}" alt="Image" class="mb-1 rounded-1">
                            </a>
                            <div class="d-flex align-items-center justify-content-between px-2">
                                <h5 class="mb-0">Index.html</h5>
                                <a href="#"><i class="icon-line-trash-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="topic-post reply mt-5 p-4 p-md-5 border-top border-width-5 border-color">
                    <div class="row justify-content-between align-items-center mb-4">
                        <div class="col-9">
                            <h2 class="mb-0 fw-bold"><i class="icon-line-check text-success"></i> Reply</h2>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="badge bg-success text-white p-2">Solved</a>
                        </div>
                    </div>
                    <div
                        class="row g-0 justify-content-between align-items-center border-top border-bottom border-color py-3 mb-4">
                        <div class="col-9">
                            <div class="d-flex align-items-center">
                                <img src="{{asset('forum/demos/forum/images/user.png')}}" alt="Author" class="rounded-circle me-2" width="50"
                                    height="50">
                                <div>
                                    <h5 class="mb-0 h6 fw-semibold align-middle"><a class="text-dark"
                                            href="#">SemiColonWeb</a><span
                                            class="badge bg-info text-white p-1 ms-1">Team</span></h5>
                                    <small class="text-muted mb-0 fw-normal">August 11, 2020, 12:03 PM</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <a href="#" id="editlink2" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="icon-line-ellipsis icon-2x alt-color"></i></a>
                            <div class="dropdown-menu dropdown-menu-links rounded shadow-sm dropdown-menu-end py-0 m-0"
                                aria-labelledby="editlink2">
                                <a class="dropdown-item rounded-top" href="#"><i class="icon-line-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-circle-cross me-2"></i>Close</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-arrow-up me-2"></i>Stick On Top</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-git-merge me-2"></i>Merge</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-trash-2 me-2"></i>Trash</a>
                                <a class="dropdown-item" href="#"><i class="icon-line-alert-triangle me-2"></i>Spam</a>
                                <a class="dropdown-item" href="#message-reply" data-scrollto="#message-reply"><i
                                        class="icon-line-corner-up-left me-2"></i>Reply</a>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <p>Hello,</p>
                    <p>Thank You so much for the Kind Words! <img draggable="false" class="emoji" alt="🙂"
                            src="https://s.w.org/images/core/emoji/11/svg/1f642.svg" width="14"></p>
                    <ol class="ms-3">
                        <li>
                            <p>You can see this Jump due to the Page Transitions being disabled by default in the Latest
                                Version of Canvas. If you enable it again: <a class="text-dark fw-semibold"
                                    href="http://docs.semicolonweb.com/docs/getting-started/page-transition/"
                                    rel="nofollow"><u>http://docs.semicolonweb.com/docs/getting-started/page-transition/</u></a>,
                                this will be hidden. As the Headers in Canvas 6 is Flexible and does not use any Fixed
                                Heights, we have to calculate the Heights for the Header using JS and it is being applied
                                while the Page is being Loaded. We will try to continue finding ways to make it more elegant
                                in the Future Versions. So, simply adding the <code>.page-transition</code> Class to the
                                <strong>&lt;body&gt;</strong> tag should fix this.</p>
                        </li>
                        <li>
                            <p>We have removed the JS Code that used to calculate this in the Latest Version to minimize JS
                                Usage. Consider using a Minimum Height for the <code>#content</code> DIV by simply adding
                                the <code>.min-vh-75</code> Class to it. This will add a minimum height of
                                <strong>75%</strong> Viewport Height to the <code>#content</code> Area which would make the
                                Footer sticky at the bottom always and will also be reliable on CSS which would be way
                                faster and easier on the browsers too. If this would not be an optimal solution for you,
                                please let us know.</p>
                        </li>
                    </ol>
                    <p>Hope this Helps!</p>
                    <p>Let us know if we can help you with anything else or if you find any further issues.</p>

                    <div class="col-1 pb-3 px-0">
                        <hr>
                    </div>

                    <span class="fw-semibold">
                        Thanks & Regards,<br>
                        SemiColonWeb Team.
                    </span>
                </div>

                <div id="message-reply" class="topic-form mt-5">
                    <h3 class="h2 fw-bolder mb-4">Reply to the Message</h3>
                    <form class="row" action="#" method="post" enctype="multipart/form-data">
                        <div class="col-12 form-group mb-4">
                            <textarea name="post-message" id="post-message" class="form-control" cols="30"
                                rows="10"></textarea>
                        </div>
                        <div class="clear"></div>
                        <div class="col-6 form-group">
                            <small class="text-muted">Maximum file size allowed is 2048 KB.</small>
                            <div class="form-file">
                                <input type="file" class="form-control" id="file-input">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-12 form-group mb-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label nott ls0 mb-0 fw-semibold" for="inlineCheckbox1">Set as a
                                    Private Reply</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-12 form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label nott ls0 mb-0 fw-semibold" for="inlineCheckbox2">Email me
                                    when Someone Replies</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="submit"
                                class="button button-large bg-alt py-2 rounded-1 fw-medium nott ls0 ms-0">Submit
                                Now</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- #content end -->
@endsection
