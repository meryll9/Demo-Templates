@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-dark page-title-parallax page-title-center"
        style="background: linear-gradient(to bottom, rgba(6, 54, 57,.9), rgba(6, 54, 57,.9)), url({{asset('/nonprofit/demos/nonprofit/images/cause/grid/1.jpg')}}) no-repeat center center; background-size: cover; padding: 120px 0;">

        <div class="container clearfix">
            <h1 class="mb-3">Clean Water for All</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Causes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clean Water for All</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="container">
                <div class="row gutter-40 col-mb-80">
                    <!-- Post Content
          ============================================= -->
                    <div class="postcontent col-lg-9">

                        <div class="single-post mb-0">

                            <!-- Single Post
            ============================================= -->
                            <div class="entry clearfix">

                                <!-- Entry Image
             ============================================= -->
                                <div class="entry-image mb-0">
                                    <a href="#"><img src="{{asset('nonprofit/demos/nonprofit/images/cause/grid/1.jpg')}}" alt="Blog Single"></a>
                                </div><!-- .entry-image end -->

                                <div class="card bg-color-light rounded-0 my-4">
                                    <div class="card-body py-4 px-5">
                                        <div class="d-flex justify-content-between">
                                            <div class="counter counter-inherit d-flex justify-content-between">
                                                <strong class="me-1 ls0">Donated:</strong> $<span data-from="0"
                                                    data-to="115700" data-refresh-interval="10" data-speed="1100"
                                                    data-comma="true"></span>
                                            </div>
                                            <span><strong>Target:</strong> $210,000</span>
                                        </div>
                                        <ul class="skills pt-3 mb-2">
                                            <li data-percent="81">
                                                <div class="progress">
                                                    <div class="progress-percent">
                                                        <div class="counter counter-inherit counter-instant"><span
                                                                data-from="0" data-to="81" data-refresh-interval="30"
                                                                data-speed="1100"></span>%</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Entry Content
             ============================================= -->
                                <div class="entry-content mt-0">

                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus,
                                        porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et.</p>

                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit
                                            tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere
                                        velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                        Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida
                                        at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

                                    <p><img src="{{asset('nonprofit/demos/nonprofit/images/cause/grid/3.jpg')}}" alt="Image" class="alignright"
                                            width="360">Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                        Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida
                                        at eget metus.</p>

                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus,
                                        porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et.</p>

                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus
                                        porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras
                                        justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
                                        felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum
                                        id ligula porta felis euismod semper.</p>
                                    <!-- Post Single - Content End -->

                                    <div class="clear"></div>

                                    <!-- Post Single - Share
              ============================================= -->
                                    <div class="si-share  d-flex justify-content-between align-items-center">
                                        <span>Share this Post:</span>
                                        <div>
                                            <a href="#" class="social-icon si-borderless si-facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-pinterest">
                                                <i class="icon-pinterest"></i>
                                                <i class="icon-pinterest"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-gplus">
                                                <i class="icon-gplus"></i>
                                                <i class="icon-gplus"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-rss">
                                                <i class="icon-rss"></i>
                                                <i class="icon-rss"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-email3">
                                                <i class="icon-email3"></i>
                                                <i class="icon-email3"></i>
                                            </a>
                                        </div>
                                    </div><!-- Post Single - Share End -->

                                </div>

                            </div>

                            <!-- Comments
            ============================================= -->
                            <div id="comments" class="clearfix border-0">

                                <h3 id="comments-title"><span>3</span> Comments</h3>

                                <!-- Comments List
             ============================================= -->
                                <ol class="commentlist clearfix">

                                    <li class="comment even thread-even depth-1" id="li-comment-1">

                                        <div id="comment-1" class="comment-wrap clearfix">

                                            <div class="comment-meta">

                                                <div class="comment-author vcard">

                                                    <span class="comment-avatar clearfix">
                                                        <img alt='Image'
                                                            src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                            class='avatar avatar-60 photo avatar-default' height='60'
                                                            width='60' /></span>

                                                </div>

                                            </div>

                                            <div class="comment-content clearfix">

                                                <div class="comment-author">John Doe<span><a href="#"
                                                            title="Permalink to this comment">April 24, 2012 at 10:46
                                                            am</a></span></div>

                                                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id
                                                    dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                                    venenatis dapibus posuere velit aliquet.</p>

                                                <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                            </div>

                                            <div class="clear"></div>

                                        </div>


                                        <ul class='children'>

                                            <li class="comment byuser comment-author-_smcl_admin odd alt depth-2"
                                                id="li-comment-3">

                                                <div id="comment-3" class="comment-wrap clearfix">

                                                    <div class="comment-meta">

                                                        <div class="comment-author vcard">

                                                            <span class="comment-avatar clearfix">
                                                                <img alt='Image'
                                                                    src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G'
                                                                    class='avatar avatar-40 photo' height='40'
                                                                    width='40' /></span>

                                                        </div>

                                                    </div>

                                                    <div class="comment-content clearfix">

                                                        <div class="comment-author"><a href='#' rel='external nofollow'
                                                                class='url'>SemiColon</a><span><a href="#"
                                                                    title="Permalink to this comment">April 25, 2012 at 1:03
                                                                    am</a></span></div>

                                                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                        <a class='comment-reply-link' href='#'><i
                                                                class="icon-reply"></i></a>

                                                    </div>

                                                    <div class="clear"></div>

                                                </div>

                                            </li>

                                        </ul>

                                    </li>

                                    <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                                        id="li-comment-2">

                                        <div id="comment-2" class="comment-wrap clearfix">

                                            <div class="comment-meta">

                                                <div class="comment-author vcard">

                                                    <span class="comment-avatar clearfix">
                                                        <img alt='Image'
                                                            src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G'
                                                            class='avatar avatar-60 photo' height='60' width='60' /></span>

                                                </div>

                                            </div>

                                            <div class="comment-content clearfix">

                                                <div class="comment-author"><a
                                                        href='https://themeforest.net/user/semicolonweb'
                                                        rel='external nofollow' class='url'>SemiColon</a><span><a href="#"
                                                            title="Permalink to this comment">April 25, 2012 at 1:03
                                                            am</a></span></div>

                                                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                                <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    </li>

                                </ol><!-- .commentlist end -->

                                <div class="clear"></div>

                                <!-- Comment Form
             ============================================= -->
                                <div id="respond">

                                    <h3>Leave a <span>Comment</span></h3>

                                    <form class="row" action="#" method="post" id="commentform">
                                        <div class="col-md-4 form-group">
                                            <label for="author">Name</label>
                                            <input type="text" name="author" id="author" value="" size="22" tabindex="1"
                                                class="form-control" />
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email" value="" size="22" tabindex="2"
                                                class="form-control" />
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="url">Website</label>
                                            <input type="text" name="url" id="url" value="" size="22" tabindex="3"
                                                class="form-control" />
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-12 form-group">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" id="comment" cols="58" rows="7" tabindex="4"
                                                class="form-control"></textarea>
                                        </div>

                                        <div class="col-12 form-group">
                                            <button name="submit" type="submit" id="submit-button" tabindex="5"
                                                value="Submit"
                                                class="button button-rounded button-border nott ls0 fw-normal border-color m-0">Submit
                                                Comment</button>
                                        </div>
                                    </form>

                                </div><!-- #respond end -->

                            </div><!-- #comments end -->

                        </div>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
          ============================================= -->
                    <div class="sidebar col-lg-3">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget widget-twitter-feed clearfix">

                                <h4>Twitter Feed</h4>
                                <ul class="iconlist twitter-feed" data-username="envato" data-count="2">
                                    <li></li>
                                </ul>

                                <a href="#" class="btn btn-secondary btn-sm float-end">Follow Us on Twitter</a>

                            </div>

                            <div class="widget clearfix">

                                <div class="tabs mb-0 clearfix" id="sidebar-tabs">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1">Popular</a></li>
                                        <li><a href="#tabs-2">Recent</a></li>
                                        <li><a href="#tabs-3"><i class="icon-comments-alt me-0"></i></a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                            <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/magazine/small/3.jpg')}}" alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li><i class="icon-comments-alt"></i> 35 Comments</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/magazine/small/2.jpg')}}" alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li><i class="icon-comments-alt"></i> 24 Comments</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/magazine/small/1.jpg')}}" alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li><i class="icon-comments-alt"></i> 19 Comments</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">
                                            <div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/magazine/small/1.jpg')}}" alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li>10th July 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/magazine/small/2.jpg')}}" alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li>10th July 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/magazine/small/3.jpg')}}" alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li>10th July 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-3">
                                            <div class="posts-sm row col-mb-30" id="recent-comments-list-sidebar">
                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/icons/avatar.jpg')}}" alt="User Avatar"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <strong>John Doe:</strong> Veritatis recusandae sunt repellat
                                                            distinctio...
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/icons/avatar.jpg')}}" alt="User Avatar"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <strong>Mary Jane:</strong> Possimus libero, earum officia
                                                            architecto maiores....
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('nonprofit/images/icons/avatar.jpg')}}" alt="User Avatar"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <strong>Site Admin:</strong> Deleniti magni labore laboriosam
                                                            odio...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div id="s-icons" class="widget clearfix">

                                <h4 class="highlight-me">Connect Socially</h4>

                                <a href="#" class="social-icon si-colored si-facebook" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-twitter" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-github" title="Github">
                                    <i class="icon-github"></i>
                                    <i class="icon-github"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-pinterest" title="Pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-forrst" title="Forrst">
                                    <i class="icon-forrst"></i>
                                    <i class="icon-forrst"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-linkedin" title="LinkedIn">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-gplus" title="Google Plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-instagram" title="Instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-flickr" title="Flickr">
                                    <i class="icon-flickr"></i>
                                    <i class="icon-flickr"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-skype" title="Skype">
                                    <i class="icon-skype"></i>
                                    <i class="icon-skype"></i>
                                </a>

                            </div>

                            <div class="widget clearfix">

                                <h4>Tag Cloud</h4>
                                <div class="tagcloud">
                                    <a href="#">general</a>
                                    <a href="#">videos</a>
                                    <a href="#">music</a>
                                    <a href="#">media</a>
                                    <a href="#">photography</a>
                                    <a href="#">parallax</a>
                                    <a href="#">ecommerce</a>
                                    <a href="#">terms</a>
                                    <a href="#">coupons</a>
                                    <a href="#">modern</a>
                                </div>

                            </div>

                        </div>
                    </div><!-- .sidebar end -->
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
