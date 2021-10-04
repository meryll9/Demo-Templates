@extends('layout.main')
@section('content')
<!-- Slider
  ============================================= -->
<section id="slider" class="slider-element revslider-wrap h-auto">

    <div class="rev_slider_wrapper"
        style="width: 100%;margin: 0 auto; background:#000;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_slider_19_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-48" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('news/demos/news/images/carousel/thumbs/1.jpg') }}" data-rotate="0"
                    data-saveperformance="off" data-title="How to Travel around Europe" data-param1="Travel"
                    data-param2="Oct 24, 2021" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('news/include/rs-plugin/demos/assets/images/dummy.png') }}" alt="Image"
                        data-lazyload="{{ asset('news/demos/news/images/carousel/1.jpg') }}"
                        data-bgposition="center center" data-kenburns="on" data-duration="30000"
                        data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0"
                        data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0"
                        data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-gradientstyle" id="slide-48-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                        data-width="full" data-height="['200','200','200','250']" data-whitespace="nowrap"
                        data-type="shape" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5;"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption entry-categories bg-travel clearfix tp-resizeme" id="slide-48-layer-3"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['175','165','160','175']"
                        data-fontsize="10" data-width="auto" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="z-index: 6; text-shadow: none;border-radius: 2px; left: auto; bottom:auto; letter-spacing: 1px">
                        <a href="#">Travel</a></div>

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption font-primary tp-resizeme" href="#" target="_self" id="slide-48-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['125','120','130','118']"
                        data-fontsize="['40','35','25','25']" data-lineheight="['40','35','25','24']"
                        data-width="['580','480','340','260']" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 580px; max-width: 580px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 600; color: rgba(255,255,255,1);text-decoration: none;">{{ env('APP_TAGLINE') }}</a>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" id="slide-48-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['65','65','48','48']" data-width="['580','480','340','260']"
                        data-fontsize="['18','18','16','14']" data-lineheight="['26','24','24','20']" data-height="none"
                        data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #DDD; font-family: 'Roboto', sans-serif;">
                        The only way to make sense out of change is to plunge into it, move with it, and join the dance.
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-48-layer-6" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','20','20']" data-fontsize="14" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="min-width: 306px; max-width: 306px;z-index: 6; text-shadow: none; color: #DDD !important; font-size: 20px; line-height: 20px; font-weight: 600; font-family: 'Roboto', sans-serif;">
                        John Doe - <i class="icon-time" style="position: relative; top: 1px;"></i> Oct 24,2021</div>

                </li>
                <!-- SLIDE  -->
                <li data-index="rs-49" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('news/demos/news/images/carousel/thumbs/2.jpg') }}" data-rotate="0"
                    data-saveperformance="off" data-title="The sky was cloudless" data-param1="Market"
                    data-param2="Sep 12, 2021" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('news/include/rs-plugin/demos/assets/images/dummy.png') }}" alt="Image"
                        data-lazyload="{{ asset('news/demos/news/images/carousel/2.jpg') }}"
                        data-bgposition="center center" data-kenburns="on" data-duration="30000"
                        data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0"
                        data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0"
                        data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-gradientstyle"
                        id="slide-49-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['0','0','0','0']" data-width="full" data-height="['200','200','200','250']"
                        data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 9;"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption bg-market entry-categories clearfix tp-resizeme" id="slide-49-layer-3"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['175','165','160','175']"
                        data-fontsize="10" data-width="auto" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="z-index: 6; text-shadow: none;border-radius: 2px; left: auto; bottom:auto; letter-spacing: 1px">
                        <a href="#">Market</a></div>

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption font-primary  tp-resizeme" href="#" target="_self" id="slide-49-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['125','120','130','118']"
                        data-fontsize="['40','35','25','25']" data-lineheight="['40','35','25','24']"
                        data-width="['580','480','340','260']" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 580px; max-width: 580px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 600; color: rgba(255,255,255,1);text-decoration: none;">The
                        sky was cloudless</a>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" id="slide-49-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['65','65','48','48']" data-width="['580','480','340','260']"
                        data-fontsize="['18','18','16','14']" data-lineheight="['26','24','24','20']" data-height="none"
                        data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #DDD; font-family: 'Roboto', sans-serif;">
                        The only way to make sense out of change is to plunge into it, move with it, and join the dance.
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-49-layer-6" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','20','20']" data-fontsize="14" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="min-width: 306px; max-width: 306px;z-index: 6; text-shadow: none; color: #DDD !important; font-size: 20px; line-height: 20px; font-weight: 600; font-family: 'Roboto', sans-serif;">
                        Justin Case - <i class="icon-time" style="position: relative; top: 1px;"></i> Sep 12,2021
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-50" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('news/demos/news/images/carousel/thumbs/3.jpg') }}" data-rotate="0"
                    data-saveperformance="off" data-title="The History Of Fashion" data-param1="Fashion"
                    data-param2="Sep 03, 2021" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('news/include/rs-plugin/demos/assets/images/dummy.png') }}" alt="Image"
                        data-lazyload="{{ asset('news/demos/news/images/carousel/3.jpg') }}"
                        data-bgposition="center center" data-kenburns="on" data-duration="30000"
                        data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0"
                        data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0"
                        data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-gradientstyle"
                        id="slide-50-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['0','0','0','0']" data-width="full" data-height="['200','200','200','250']"
                        data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 13;"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption bg-fashion entry-categories clearfix tp-resizeme" id="slide-50-layer-3"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['175','165','160','175']"
                        data-fontsize="10" data-width="auto" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="z-index: 6; text-shadow: none;border-radius: 2px; left: auto; bottom:auto; letter-spacing: 1px">
                        <a href="#">Fashion</a></div>

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption  font-primary tp-resizeme" href="#" target="_self" id="slide-50-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['125','120','130','118']"
                        data-fontsize="['40','35','25','25']" data-lineheight="['40','35','25','24']"
                        data-width="['580','480','340','260']" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 580px; max-width: 580px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 600; color: rgba(255,255,255,1);text-decoration: none;">The
                        History Of Fashion</a>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" id="slide-50-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['65','65','48','48']" data-width="['580','480','340','260']"
                        data-fontsize="['18','18','16','14']" data-lineheight="['26','24','24','20']" data-height="none"
                        data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #DDD; font-family: 'Roboto', sans-serif;">
                        The only way to make sense out of change is to plunge into it, move with it, and join the dance.
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-50-layer-6" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','20','20']" data-fontsize="14" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="min-width: 306px; max-width: 306px;z-index: 6; text-shadow: none; color: #DDD !important; font-size: 20px; line-height: 20px; font-weight: 600; font-family: 'Roboto', sans-serif;">
                        Bailey Wonger - <i class="icon-time" style="position: relative; top: 1px;"></i> Sep 03,2021
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-51" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('news/demos/news/images/carousel/thumbs/4.jpg') }}" data-rotate="0"
                    data-saveperformance="off" data-title="Things That Make You Love" data-param1="Lifestyle"
                    data-param2="Jul 30, 2021" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('news/include/rs-plugin/demos/assets/images/dummy.png') }}" alt="Image"
                        data-lazyload="{{ asset('news/demos/news/images/carousel/4.jpg') }}"
                        data-bgposition="center center" data-kenburns="on" data-duration="30000"
                        data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0"
                        data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0"
                        data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-gradientstyle"
                        id="slide-51-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['0','0','0','0']" data-width="full" data-height="['200','200','200','250']"
                        data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 17;"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption bg-home entry-categories clearfix tp-resizeme" id="slide-51-layer-3"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['175','165','160','175']"
                        data-fontsize="10" data-width="auto" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="z-index: 6; text-shadow: none;border-radius: 2px; left: auto; bottom:auto; letter-spacing: 1px">
                        <a href="#">Lifestyle</a></div>

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption font-primary  tp-resizeme" href="#" target="_self" id="slide-51-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['125','120','130','118']"
                        data-fontsize="['40','35','25','25']" data-lineheight="['40','35','25','24']"
                        data-width="['580','480','340','260']" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 580px; max-width: 580px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 600; color: rgba(255,255,255,1);text-decoration: none;">Things
                        That Make You Love</a>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" id="slide-51-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['65','65','48','48']" data-width="['580','480','340','260']"
                        data-fontsize="['18','18','16','14']" data-lineheight="['26','24','24','20']" data-height="none"
                        data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #DDD; font-family: 'Roboto', sans-serif;">
                        The only way to make sense out of change is to plunge into it, move with it, and join the dance.
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-51-layer-6" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','20','20']" data-fontsize="14" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="min-width: 306px; max-width: 306px;z-index: 6; text-shadow: none; color: #DDD !important; font-size: 20px; line-height: 20px; font-weight: 600; font-family: 'Roboto', sans-serif;">
                        Guy Mann - <i class="icon-time" style="position: relative; top: 1px;"></i> Jul 30,2021
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-52" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('news/demos/news/images/carousel/thumbs/5.jpg') }}" data-rotate="0"
                    data-saveperformance="off" data-title="Real Madrid vs Chelsea Highlights"
                    data-param1="YouTube Video" data-param2="Apr 04, 2021" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('news/include/rs-plugin/demos/assets/images/dummy.png') }}" alt="Image"
                        data-lazyload="{{ asset('news/demos/news/images/carousel/5.jpg') }}"
                        data-bgposition="center center" data-bgfit="cover" class="rev-slidebg" data-no-retina>

                    <!-- LAYERS -->
                    <!-- BACKGROUND VIDEO LAYER -->
                    <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute"
                        data-videowidth="100%" data-videoheight="580" data-ytid="KXRdpLPaGKA"
                        data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&wmode=opaque&showinfo=0&rel=0;;origin=http://localhost;"
                        data-videorate="1" data-nextslideatend="true" data-videopreload="auto"
                        data-videoloop="loopandnoslidestop" data-forceCover="1" data-aspectratio="16:9"
                        data-autoplay="true" data-autoplayonlyfirsttime="false"></div>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-gradientstyle"
                        id="slide-52-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['0','0','0','0']" data-width="full" data-height="['200','200','200','250']"
                        data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 21;"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption bg-sports entry-categories clearfix tp-resizeme" id="slide-52-layer-3"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['175','165','195','180']"
                        data-fontsize="10" data-width="auto" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="z-index: 6; text-shadow: none;border-radius: 2px; left: auto; bottom:auto; letter-spacing: 1px">
                        <a href="#">Sports</a></div>

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption  font-primary tp-resizeme" href="#" target="_self" id="slide-52-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['125','120','130','118']"
                        data-fontsize="['40','35','25','25']" data-lineheight="['40','40','28','26']"
                        data-width="['800','680','340','260']" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 580px; max-width: 580px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 600; color: rgba(255,255,255,1);text-decoration: none;">Real
                        Madrid vs Chelsea Highlights</a>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" id="slide-52-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['65','65','48','48']" data-width="['580','480','340','260']"
                        data-fontsize="['18','18','16','14']" data-lineheight="['26','24','24','20']" data-height="none"
                        data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #DDD; font-family: 'Roboto', sans-serif;">
                        The only way to make sense out of change is to plunge into it, move with it, and join the dance.
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-52-layer-6" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','20','20']" data-fontsize="14" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="min-width: 306px; max-width: 306px;z-index: 6; text-shadow: none; color: #DDD !important; font-size: 20px; line-height: 20px; font-weight: 600; font-family: 'Roboto', sans-serif;">
                        Hugh Saturation - <i class="icon-time" style="position: relative; top: 1px;"></i> Apr
                        04,2021</div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-53" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('news/demos/news/images/carousel/thumbs/6.jpg') }}" data-rotate="0"
                    data-saveperformance="off" data-title="How To Have A Fantastic Tech" data-param1="Tech"
                    data-param2="Mar 11, 2021" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('news/include/rs-plugin/demos/assets/images/dummy.png') }}" alt="Image"
                        data-lazyload="{{ asset('news/demos/news/images/carousel/6.jpg') }}"
                        data-bgposition="center center" data-kenburns="on" data-duration="30000"
                        data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0"
                        data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0"
                        data-offsetend="0 0" class="rev-slidebg" data-no-retina>

                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-gradientstyle"
                        id="slide-53-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['0','0','0','0']" data-width="full" data-height="['200','200','200','250']"
                        data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 25;"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption bg-tech entry-categories clearfix tp-resizeme" id="slide-53-layer-3"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['175','165','195','180']"
                        data-fontsize="10" data-width="auto" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="z-index: 6; text-shadow: none;border-radius: 2px; left: auto; bottom:auto; letter-spacing: 1px">
                        <a href="#">Tech</a></div>

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption font-primary  tp-resizeme" href="#" target="_self" id="slide-53-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['40','40','30','20']"
                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['125','120','130','118']"
                        data-fontsize="['40','35','25','25']" data-lineheight="['40','40','28','26']"
                        data-width="['800','680','340','260']" data-height="none" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 580px; max-width: 580px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 600; color: rgba(255,255,255,1);text-decoration: none;">How
                        To Have A Fantastic Tech</a>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" id="slide-53-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['65','65','48','48']" data-width="['580','480','340','260']"
                        data-fontsize="['18','18','16','14']" data-lineheight="['26','24','24','20']" data-height="none"
                        data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #DDD; font-family: 'Roboto', sans-serif;">
                        The only way to make sense out of change is to plunge into it, move with it, and join the dance.
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme" id="slide-53-layer-6" data-x="['left','left','left','left']"
                        data-hoffset="['40','40','30','20']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','20','20']" data-fontsize="14" data-whitespace="normal"
                        data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="on"
                        data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        style="min-width: 306px; max-width: 306px;z-index: 6; text-shadow: none; color: #DDD !important; font-size: 20px; line-height: 20px; font-weight: 600; font-family: 'Roboto', sans-serif;">
                        Gordon Norman - <i class="icon-time" style="position: relative; top: 1px;"></i> Mar 11,
                        2021</div>
                </li>
            </ul>
            <div class="tp-bannertimer" style="height: 8px; background: rgba(255,255,255,0.25);"></div>
        </div><!-- END REVOLUTION SLIDER -->
    </div><!-- END REVOLUTION SLIDER WRAPPER -->

</section>

<!-- Content
  ============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row clearfix">

                <!-- Posts Area
      ============================================= -->
                <div class="col-lg-8">

                    <!-- Tab Menu
       ============================================= -->
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <h4 class="mb-0 pe-2 ls1 text-uppercase fw-bold">Latest News By Categories</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarToggler1" aria-controls="navbarToggler1" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="icon-line-menu"></i>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarToggler1">
                            <div></div>
                            <ul class="nav nav-sm navbar-nav me-md-auto me-lg-0 mt-2 mt-lg-0 align-self-end"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link bg-color-travel active" id="nav-outdoor-tab" data-bs-toggle="tab"
                                        href="#nav-outdoor" role="tab" aria-selected="true">Travel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-color-food" id="nav-food-tab" data-bs-toggle="tab"
                                        href="#nav-food" role="tab" aria-selected="false">Food</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-color-sports" id="nav-travel-tab" data-bs-toggle="tab"
                                        href="#nav-outdoor" role="tab" aria-selected="false">Sports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-color-fashion" id="nav-fashion-tab" data-bs-toggle="tab"
                                        href="#nav-fashion" role="tab" aria-selected="false">Fashion</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="line line-xs line-dark"></div>

                    <!-- Tab Content
       ============================================= -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- Tab Content 1
        ============================================= -->
                        <div class="tab-pane fade show active" id="nav-outdoor" role="tabpanel"
                            aria-labelledby="nav-outdoor-tab">
                            <div class="row col-mb-30 mb-0">
                                <div class="col-lg-6">
                                    <!-- Post Article -->
                                    <div class="posts-md">
                                        <div class="entry">
                                            <div class="entry-image">
                                                <a href="demo-news-single.html"><img
                                                        src="{{ asset('news/demos/news/images/posts/travel/3.jpg') }}"
                                                        alt="Image 3"></a>
                                                <div class="entry-categories"><a href="demo-news-category.html"
                                                        class="bg-travel">Travel</a></div>
                                            </div>
                                            <div class="entry-title nott">
                                                <h3 class="mb-2"><a href="demo-news-single.html">How I
                                                        Improved My Travel In One Easy Lesson</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>by</span> <a href="#">John Doe</a></li>
                                                    <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content clearfix">
                                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem
                                                    pariatur quibusdam veritatis quisquam laboriosam esse beatae hic
                                                    perferendis. Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="posts-sm row col-mb-30">
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/travel/small/1.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="demo-news-single.html">Rules not to Follow about
                                                                Travel</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/travel/small/2.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="demo-news-single.html">Can You Pass The Travel
                                                                Test?</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/travel/small/4.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="demo-news-single.html">Cheaper/Faster Travel than
                                                                You Ever Imagined</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/fashion/small/2.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="demo-news-single.html">Believe In Your Travel
                                                                Skills But Never Stop Improving</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/market/small/3.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="demo-news-single.html">Why Most People Will Never
                                                                Be Great At Travel</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Tab Content 2
        ============================================= -->
                        <div class="tab-pane fade" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">
                            <div class="row col-mb-30 mb-0">
                                <div class="col-lg-6">
                                    <!-- Post Article -->
                                    <div class="posts-md">
                                        <div class="entry">
                                            <div class="entry-image">
                                                <a href="demo-news-single.html"><img
                                                        src="{{ asset('news/demos/news/images/posts/food/1.jpg') }}"
                                                        alt="Image 3"></a>
                                                <div class="entry-categories "><a href="#"
                                                        class="bg-food">Food</a></div>
                                            </div>
                                            <div class="entry-title nott">
                                                <h3 class="mb-2"><a href="demo-news-single.html">The Secret
                                                        To Food eat lunch Is Revealed</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>by</span> <a href="#">John Doe</a></li>
                                                    <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content font-secondary clearfix">
                                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem
                                                    pariatur quibusdam veritatis quisquam laboriosam esse beatae hic
                                                    perferendis. Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <!-- Post Article -->
                                    <div class="posts-sm row col-mb-30">
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/food/small/2.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a href="demo-news-single.html">How
                                                                To Turn Food eat lunch Into Success</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Article -->
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/food/small/3.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a
                                                                href="demo-news-single.html">MIT's new robot glove can
                                                                give you extra fingers.</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Article -->
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/food/small/4.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a href="demo-news-single.html">Use
                                                                Food to make Someone fall in Love With You</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Article -->
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/lifestyle/small/1.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a href="demo-news-single.html">3
                                                                Ways To Have (A) More Appealing food</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Article -->
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/lifestyle/small/2.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a
                                                                href="demo-news-single.html">Lifestyle Your Way to
                                                                Success</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Tab Content 3
        ============================================= -->
                        <div class="tab-pane fade" id="nav-fashion" role="tabpanel" aria-labelledby="nav-fashion-tab">
                            <div class="row col-mb-30 mb-0">
                                <div class="col-lg-6">
                                    <!-- Post Article -->
                                    <div class="posts-md">
                                        <div class="entry">
                                            <div class="entry-image">
                                                <a href="demo-news-single.html"><img
                                                        src="{{ asset('news/demos/news/images/posts/fashion/1.jpg') }}"
                                                        alt="Image 3"></a>
                                                <div class="entry-categories"><a href="demo-news-category.html"
                                                        class="bg-fashion">Fashion</a></div>
                                            </div>
                                            <div class="entry-title nott">
                                                <h3 class="mb-2"><a href="demo-news-single.html">The Biggest
                                                        Lie In Fashion</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>by</span> <a href="#">John Doe</a></li>
                                                    <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content clearfix">
                                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem
                                                    pariatur quibusdam veritatis quisquam laboriosam esse beatae hic
                                                    perferendis. Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <!-- Post Article -->
                                    <div class="posts-sm row col-mb-30">
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center no-gutter">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/fashion/small/2.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a href="demo-news-single.html">Top
                                                                10 Tips To Grow Your Fashion</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Article -->
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center no-gutter">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/fashion/small/3.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a href="demo-news-single.html">4
                                                                Ways You Can Grow Your Creativity Using Fashion</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Article -->
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center no-gutter">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/fashion/small/4.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a href="demo-news-single.html">5
                                                                Best Ways To Sell Fashion</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Article -->
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center no-gutter">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/lifestyle/small/2.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a href="demo-news-single.html">What
                                                                Make Fashion Don't Want You To Know</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Article -->
                                        <div class="entry col-12">
                                            <div class="grid-inner row align-items-center no-gutter">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="demo-news-single.html"><img
                                                                src="{{ asset('news/demos/news/images/posts/lifestyle/small/3.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4 class="fw-semibold"><a href="demo-news-single.html">Best
                                                                Fashion Android/iPhone Apps</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                                            <li><i class="icon-time"></i><a href="#">11 Mar
                                                                    2021</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div><!-- Tab End -->

                    <!-- Ad
       ============================================= -->
                    <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"><img
                            src="{{ asset('news/demos/news/images/ad/728x90.jpg') }}" width="728" alt="Ad"
                            class="aligncenter mb-5"></a>

                    <!-- Articles
       ============================================= -->
                    <div class="row col-mb-50 mb-0">

                        <div class="col-md-6 mt-4">
                            <!-- Post Article -->
                            <div class="posts-md">
                                <div class="entry">
                                    <div class="entry-image">
                                        <a href="demo-news-single.html"><img
                                                src="{{ asset('news/demos/news/images/posts/lifestyle/1.jpg') }}"
                                                alt="Image 3"></a>
                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                class="bg-lifestyle">lifestyle</a></div>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3 class="mb-2"><a href="demo-news-single.html">Death, lifestyle And
                                                Taxes</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content clearfix">
                                        <p class="mb-0">Pellentesque hic illo beatae rhoncus sint, quis,
                                            fugiat imperdiet unde architecto magna dui hymenaeos autem lorem eligendi,
                                            quae! Orci commodo, aute reiciendis, scelerisque inceptos, quibusdam iste
                                            debitis? Venenatis. Alias porta?</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-4">
                            <!-- Post Article -->
                            <div class="posts-md">
                                <div class="entry">
                                    <div class="entry-image">
                                        <a href="demo-news-single.html"><img
                                                src="{{ asset('news/demos/news/images/posts/fashion/1.jpg') }}"
                                                alt="Image"></a>
                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                class="bg-fashion">Fashion</a></div>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3 class="mb-2"><a href="demo-news-single.html">The Ultimate Guide
                                                To Fashion</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p class="mb-0">Tempus nullam sed ullam doloremque unde habitasse
                                            auctor tortor. Cursus, culpa numquam ut esse, harum alias? Lorem. Mattis
                                            eum, placeat eius turpis quam dapibus, eius quia atque tristique nostrud
                                            reiciendis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="posts-sm row col-mb-30">
                        <div class="entry col-md-6">
                            <!-- Post Article -->
                            <div class="grid-inner row align-items-center no-gutter">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="demo-news-single.html"><img
                                                src="{{ asset('news/demos/news/images/posts/market/small/1.jpg') }}"
                                                alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4 class="fw-medium"><a href="demo-news-single.html">How To Save Money
                                                with market?</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-md-6">
                            <!-- Post Article -->
                            <div class="grid-inner row align-items-center no-gutter">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="demo-news-single.html"><img
                                                src="{{ asset('news/demos/news/images/posts/market/small/2.jpg') }}"
                                                alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4 class="fw-medium"><a href="demo-news-single.html">Now You Can Have
                                                Your market Done Safely</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-md-6">
                            <!-- Post Article -->
                            <div class="grid-inner row align-items-center no-gutter">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="demo-news-single.html"><img
                                                src="{{ asset('news/demos/news/images/posts/sports/small/1.jpg') }}"
                                                alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4 class="fw-medium"><a href="demo-news-single.html">Understanding the
                                                Iberostar hotel rebanding</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-md-6">
                            <!-- Post Article -->
                            <div class="grid-inner row align-items-center no-gutter">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="demo-news-single.html"><img
                                                src="{{ asset('news/demos/news/images/posts/sports/small/2.jpg') }}"
                                                alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4 class="fw-medium"><a href="demo-news-single.html">4 new cruise ships
                                                for Carnival in 2021</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top Sidebar Area
      ============================================= -->
                <div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
                    <div class="sticky-sidebar">
                        <!-- Sidebar Widget 1
        ============================================= -->
                        <div class="widget clearfix">
                            <h4 class="mb-2 ls1 text-uppercase fw-bold">Connect with Us</h4>
                            <div class="line line-xs line-market"></div>
                            <div class="row center mt-4 clearfix">
                                <div class="col-3">
                                    <a href="https://facebook.com/semicolonweb" target="_blank"
                                        class="social-icon si-dark float-none m-auto si-colored si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <div class="counter mt-2 counter-inherit">
                                        <span class="fw-semibold" data-from="1000" data-to="58742"
                                            data-refresh-interval="100" data-speed="3000" data-comma="true"></span>
                                    </div>
                                    <small class="text-muted font-secondary">Likes</small>
                                </div>
                                <div class="col-3">
                                    <a href="https://twitter.com/__semicolon" target="_blank"
                                        class="social-icon si-dark float-none m-auto si-colored si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <div class="counter mt-2 counter-inherit">
                                        <span class="fw-semibold" data-from="500" data-to="9654"
                                            data-refresh-interval="50" data-speed="2500" data-comma="true"></span>
                                    </div>
                                    <small class="text-muted font-secondary">Followers</small>
                                </div>
                                <div class="col-3">
                                    <a href="https://instagram.com/semicolonweb" target="_blank"
                                        class="social-icon si-dark float-none m-auto si-colored si-instagram">
                                        <i class="icon-instagram"></i>
                                        <i class="icon-instagram"></i>
                                    </a>
                                    <div class="counter mt-2 counter-inherit">
                                        <span class="fw-semibold" data-from="200" data-to="15475"
                                            data-refresh-interval="150" data-speed="3500" data-comma="true"></span>
                                    </div>
                                    <small class="text-muted font-secondary">Followers</small>
                                </div>
                                <div class="col-3">
                                    <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"
                                        target="_blank"
                                        class="social-icon si-dark float-none m-auto si-colored si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <div class="counter mt-2 counter-inherit">
                                        <span class="fw-semibold" data-from="400" data-to="3244"
                                            data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                    </div>
                                    <small class="text-muted font-secondary">Subscriber</small>
                                </div>
                                <div class="col-3 mt-3">
                                    <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"
                                        target="_blank"
                                        class="social-icon si-dark float-none m-auto si-colored si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <div class="counter mt-2 counter-inherit">
                                        <span class="fw-semibold" data-from="400" data-to="2322"
                                            data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                    </div>
                                    <small class="text-muted font-secondary">Followers</small>
                                </div>
                                <div class="col-3 mt-3">
                                    <a href="https://www.youtube.com/semicolonweb" target="_blank"
                                        class="social-icon si-dark float-none m-auto si-colored si-youtube">
                                        <i class="icon-youtube"></i>
                                        <i class="icon-youtube"></i>
                                    </a>
                                    <div class="counter mt-2 counter-inherit">
                                        <span class="fw-semibold" data-from="400" data-to="4211"
                                            data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                    </div>
                                    <small class="text-muted font-secondary">Subscriber</small>
                                </div>
                                <div class="col-3 mt-3">
                                    <a href="https://themeforest.net/user/semiColonWeb/follow" target="_blank"
                                        class="social-icon si-dark float-none m-auto si-colored si-spotify">
                                        <i><img src="{{ asset('news/demos/news/images/envato.svg') }}" width="20"
                                                height="20" alt="Image" style="margin-bottom: 3px"></i>
                                        <i><img src="{{ asset('news/demos/news/images/envato.svg') }}" width="20"
                                                height="20" alt="Image" style="margin-bottom: 3px"></i>
                                    </a>
                                    <div class="counter mt-2 counter-inherit">
                                        <span class="fw-semibold" data-from="400" data-to="6742"
                                            data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                    </div>
                                    <small class="text-muted font-secondary">Followers</small>
                                </div>
                                <div class="col-3 mt-3">
                                    <a href="https://www.youtube.com/semicolonweb" target="_blank"
                                        class="social-icon si-dark float-none m-auto si-colored si-vimeo">
                                        <i class="icon-vimeo"></i>
                                        <i class="icon-vimeo"></i>
                                    </a>
                                    <div class="counter mt-2 counter-inherit">
                                        <span class="fw-semibold" data-from="400" data-to="8532"
                                            data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                    </div>
                                    <small class="text-muted font-secondary">Followers</small>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Widget 2
        ============================================= -->
                        <div class="widget clearfix">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-signin">
                                        <div class="center">
                                            <i class="icon-line-mail text-muted mb-3"
                                                style="font-size: 48px;line-height: 1"></i>
                                            <h3 class="h3 mb-3 fw-normal font-primary">Subscribe to Our Newsletter</h3>
                                            <p class="font-secondary mb-3">Lorem ipsum dolor sit adipisicing elit.</p>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="email" id="inputEmail" class="form-control" required>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <button class="btn btn-lg bg-color text-white w-100 text-uppercase ls1"
                                            type="submit">Sign in</button>
                                        <div class="center"><small class="mt-5 text-muted fst-italic">We also
                                                Hate Spam</small></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Widget 3
        ============================================= -->
                        <div class="widget clearfix">
                            <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"><img
                                    src="{{ asset('news/demos/news/images/ad/336x280.jpg') }}" alt="Ad"
                                    class="img-responsive aligncenter"></a>
                        </div>
                    </div>
                </div> <!-- Sidebar End -->
            </div>
        </div> <!-- Container End -->

        <!-- Fullwidth Carousel
    ============================================= -->
        <div class="section bg-transparent m-0">
            <div class="container clearfix">
                <h4 class="mb-3 ls1 text-uppercase fw-bold">Popular News</h4>
                <!-- Owl Carousel
      ============================================= -->
                <div id="oc-news" class="owl-carousel fixed-nav top-nav carousel-widget posts-md customjs">
                    <!-- Post Article -->
                    <div class="entry mb-0"
                        style="background: url({{ asset('/news/demos/news/images/posts/fashion/1.jpg') }}) center center; background-size: cover; height: 400px;">
                        <div class="bg-overlay">
                            <div
                                class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                <div class="position-relative w-100">
                                    <div class="entry-categories"><a href="demo-news-category.html"
                                            class="bg-fashion">Fashion</a></div>
                                    <div class="entry-title nott">
                                        <h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Ultimate
                                                Guide To Fashion</a></h3>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                    <ul class="entry-icons d-none d-sm-block">
                                        <li><a href="#" class="icon-bookmark-empty"></a></li>
                                        <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                        <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post Article -->
                    <div class="entry mb-0"
                        style="background: url({{ asset('/news/demos/news/images/posts/sports/1.jpg') }}) center center; background-size: cover; height: 400px;">
                        <div class="bg-overlay">
                            <div
                                class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                <div class="position-relative w-100">
                                    <div class="entry-categories"><a href="demo-news-category.html"
                                            class="bg-sports">Sports</a></div>
                                    <div class="entry-title nott">
                                        <h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Sports
                                                Strategies For Beginners</a></h3>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                    <ul class="entry-icons d-none d-sm-block">
                                        <li><a href="#" class="icon-bookmark-empty"></a></li>
                                        <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                        <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post Article -->
                    <div class="entry mb-0"
                        style="background: url({{ asset('/news/demos/news/images/posts/food/1.jpg') }}) center center; background-size: cover; height: 400px;">
                        <div class="bg-overlay">
                            <div
                                class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                <div class="position-relative w-100">
                                    <div class="entry-categories"><a href="demo-news-category.html"
                                            class="bg-food">Food</a></div>
                                    <div class="entry-title nott">
                                        <h3 class="fw-semibold mb-2"><a href="#" class="text-light">2 Things You
                                                Must Know About you Cafe</a></h3>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                    <ul class="entry-icons d-none d-sm-block">
                                        <li><a href="#" class="icon-bookmark-empty"></a></li>
                                        <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                        <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post Article -->
                    <div class="entry mb-0"
                        style="background: url('demos/news/images/posts/fashion/2.jpg')}}) center center; background-size: cover; height: 400px;">
                        <div class="bg-overlay">
                            <div
                                class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                <div class="position-relative w-100">
                                    <div class="entry-categories"><a href="demo-news-category.html"
                                            class="bg-fashion">Fashion</a></div>
                                    <div class="entry-title nott">
                                        <h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Truth
                                                About Fashion In 3 Minutes</a></h3>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                    <ul class="entry-icons d-none d-sm-block">
                                        <li><a href="#" class="icon-bookmark-empty"></a></li>
                                        <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                        <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post Article -->
                    <div class="entry mb-0"
                        style="background: url({{ asset('/news/demos/news/images/posts/market/1.jpg') }}) center center; background-size: cover; height: 400px;">
                        <div class="bg-overlay">
                            <div
                                class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                <div class="position-relative w-100">
                                    <div class="entry-categories"><a href="demo-news-category.html"
                                            class="bg-market">Market</a></div>
                                    <div class="entry-title nott">
                                        <h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Hidden
                                                Mystery Behind market</a></h3>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li><span>by</span> <a href="#">John Doe</a></li>
                                            <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                        </ul>
                                    </div>
                                    <ul class="entry-icons d-none d-sm-block">
                                        <li><a href="#" class="icon-bookmark-empty"></a></li>
                                        <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                        <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- Carousel End -->
            </div>
        </div> <!-- Container End -->

        <div class="container clearfix">

            <div class="row clearfix">
                <!-- Second Posts Area
      ============================================= -->
                <div class="col-lg-8">
                    <!-- Gallery Slider
       ============================================= -->
                    <div class="clearfix">
                        <h4 class="mb-2 ls1 text-uppercase fw-bold">Featured News - Gallery</h4>
                        <div class="line line-xs line-market"></div>
                        <!-- Flex Thumbs Slider
        ============================================= -->
                        <div class="fslider flex-thumb-grid grid-8 mt-4" data-pagi="false" data-speed="650"
                            data-pause="3500" data-animation="fade" data-arrows="true" data-thumbs="true">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"
                                        data-thumb="{{ asset('news/demos/news/images/posts/travel/thumbs/1.jpg') }}">
                                        <!-- Post Article -->
                                        <div class="entry mb-0">
                                            <img src="{{ asset('news/demos/news/images/posts/travel/1.jpg') }}"
                                                alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                                    <div class="position-relative w-100">
                                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                                class="bg-travel">Travel</a></div>
                                                        <div class="entry-title nott">
                                                            <h3 class="fw-semibold mb-2 ls0"><a href="#"
                                                                    class="text-light">Open The Gates For Travel By
                                                                    Using These 3 Tips</a></h3>
                                                        </div>
                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                                <li><i class="icon-time"></i><a href="#">11 Mar
                                                                        2021</a></li>
                                                            </ul>
                                                        </div>
                                                        <ul class="entry-icons d-none d-sm-block">
                                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                                            <li><a href="#"
                                                                    class="icon-heart-empty"><span>18</span></a></li>
                                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide"
                                        data-thumb="{{ asset('news/demos/news/images/posts/food/thumbs/2.jpg') }}">
                                        <!-- Post Article -->
                                        <div class="entry mb-0">
                                            <img src="{{ asset('news/demos/news/images/posts/food/2.jpg') }}"
                                                alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                                    <div class="position-relative w-100">
                                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                                class="bg-food">Food</a></div>
                                                        <div class="entry-title nott">
                                                            <h3 class="fw-semibold mb-2 ls0"><a href="#"
                                                                    class="text-light">The Biggest Lie In food</a>
                                                            </h3>
                                                        </div>
                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                                <li><i class="icon-time"></i><a href="#">11 Mar
                                                                        2021</a></li>
                                                            </ul>
                                                        </div>
                                                        <ul class="entry-icons d-none d-sm-block">
                                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                                            <li><a href="#"
                                                                    class="icon-heart-empty"><span>18</span></a></li>
                                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide"
                                        data-thumb="{{ asset('news/demos/news/images/posts/market/thumbs/3.jpg') }}">
                                        <!-- Post Article -->
                                        <div class="entry mb-0">
                                            <img src="{{ asset('news/demos/news/images/posts/market/3.jpg') }}"
                                                alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                                    <div class="position-relative w-100">
                                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                                class="bg-market">Market</a></div>
                                                        <div class="entry-title nott">
                                                            <h3 class="fw-semibold mb-2 ls0"><a href="#"
                                                                    class="text-light">How To Turn Your business
                                                                    From Zero To Hero</a></h3>
                                                        </div>
                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                                <li><i class="icon-time"></i><a href="#">11 Mar
                                                                        2021</a></li>
                                                            </ul>
                                                        </div>
                                                        <ul class="entry-icons d-none d-sm-block">
                                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                                            <li><a href="#"
                                                                    class="icon-heart-empty"><span>18</span></a></li>
                                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide"
                                        data-thumb="{{ asset('news/demos/news/images/posts/sports/thumbs/4.jpg') }}">
                                        <!-- Post Article -->
                                        <div class="entry mb-0">
                                            <img src="{{ asset('news/demos/news/images/posts/sports/4.jpg') }}"
                                                alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                                    <div class="position-relative w-100">
                                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                                class="bg-sports">Sports</a></div>
                                                        <div class="entry-title nott">
                                                            <h3 class="fw-semibold mb-2 ls0"><a href="#"
                                                                    class="text-light">The Shutdown That Ended
                                                                    Before</a></h3>
                                                        </div>
                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                                <li><i class="icon-time"></i><a href="#">11 Mar
                                                                        2021</a></li>
                                                            </ul>
                                                        </div>
                                                        <ul class="entry-icons d-none d-sm-block">
                                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                                            <li><a href="#"
                                                                    class="icon-heart-empty"><span>18</span></a></li>
                                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide"
                                        data-thumb="{{ asset('news/demos/news/images/posts/lifestyle/thumbs/2.jpg') }}">
                                        <!-- Post Article -->
                                        <div class="entry mb-0">
                                            <img src="{{ asset('news/demos/news/images/posts/lifestyle/2.jpg') }}"
                                                alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                                    <div class="position-relative w-100">
                                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                                class="bg-lifestyle">lifestyle</a></div>
                                                        <div class="entry-title nott">
                                                            <h3 class="fw-semibold mb-2 ls0"><a href="#"
                                                                    class="text-light">Death, lifestyle And
                                                                    Taxes</a></h3>
                                                        </div>
                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                                <li><i class="icon-time"></i><a href="#">11 Mar
                                                                        2021</a></li>
                                                            </ul>
                                                        </div>
                                                        <ul class="entry-icons d-none d-sm-block">
                                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                                            <li><a href="#"
                                                                    class="icon-heart-empty"><span>18</span></a></li>
                                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide"
                                        data-thumb="{{ asset('news/demos/news/images/posts/fashion/thumbs/4.jpg') }}">
                                        <!-- Post Article -->
                                        <div class="entry mb-0">
                                            <img src="{{ asset('news/demos/news/images/posts/fashion/4.jpg') }}"
                                                alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                                    <div class="position-relative w-100">
                                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                                class="bg-fashion">Fashion</a></div>
                                                        <div class="entry-title nott">
                                                            <h3 class="fw-semibold mb-2 ls0"><a href="#"
                                                                    class="text-light">The Shutdown That Ended
                                                                    Before</a></h3>
                                                        </div>
                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                                <li><i class="icon-time"></i><a href="#">11 Mar
                                                                        2021</a></li>
                                                            </ul>
                                                        </div>
                                                        <ul class="entry-icons d-none d-sm-block">
                                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                                            <li><a href="#"
                                                                    class="icon-heart-empty"><span>18</span></a></li>
                                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide"
                                        data-thumb="{{ asset('news/demos/news/images/posts/travel/thumbs/3.jpg') }}">
                                        <!-- Post Article -->
                                        <div class="entry mb-0">
                                            <img src="{{ asset('news/demos/news/images/posts/travel/3.jpg') }}"
                                                alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                                    <div class="position-relative w-100">
                                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                                class="bg-travel">Travel</a></div>
                                                        <div class="entry-title nott">
                                                            <h3 class="fw-semibold mb-2 ls0"><a href="#"
                                                                    class="text-light">5 Things To Do Immediately
                                                                    About Travel</a></h3>
                                                        </div>
                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                                <li><i class="icon-time"></i><a href="#">11 Mar
                                                                        2021</a></li>
                                                            </ul>
                                                        </div>
                                                        <ul class="entry-icons d-none d-sm-block">
                                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                                            <li><a href="#"
                                                                    class="icon-heart-empty"><span>18</span></a></li>
                                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide"
                                        data-thumb="{{ asset('news/demos/news/images/posts/travel/thumbs/4.jpg') }}">
                                        <!-- Post Article -->
                                        <div class="entry mb-0">
                                            <img src="{{ asset('news/demos/news/images/posts/travel/4.jpg') }}"
                                                alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                                    <div class="position-relative w-100">
                                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                                class="bg-travel">Travel</a></div>
                                                        <div class="entry-title nott">
                                                            <h3 class="fw-semibold mb-2 ls0"><a href="#"
                                                                    class="text-light">Learn Exactly How We Made
                                                                    Travel</a></h3>
                                                        </div>
                                                        <div class="entry-meta no-separator">
                                                            <ul>
                                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                                <li><i class="icon-time"></i><a href="#">11 Mar
                                                                        2021</a></li>
                                                            </ul>
                                                        </div>
                                                        <ul class="entry-icons d-none d-sm-block">
                                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                                            <li><a href="#"
                                                                    class="icon-heart-empty"><span>18</span></a></li>
                                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Flex Slider End -->
                    </div>

                    <div class="mt-5">
                        <!-- Trending Areas
        ============================================= -->
                        <h4 class="mb-2 ls1 text-uppercase fw-bold">Trending Articles</h4>
                        <div class="line line-xs line-sports"></div>

                        <div class="row col-mb-50 mb-0">
                            <div class="entry col-12 mb-0">
                                <div class="grid-inner row">
                                    <div class="col-md-5">
                                        <div class="entry-image mb-0">
                                            <a href="demo-news-single.html"><img
                                                    src="{{ asset('news/demos/news/images/posts/sports/2.jpg') }}"
                                                    alt="Image"></a>
                                            <div class="entry-categories"><a href="demo-news-category.html"
                                                    class="bg-sports">sports</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="entry-title title-sm mt-3 mt-md-0">
                                            <h3 class="mb-2"><a href="demo-news-single.html">Papers: Real
                                                    Madrid plot Pogba bid</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-line-clock"></i>11 Mar 2021</li>
                                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content mt-3">
                                            <p class="mb-0">Asperiores, tenetur, blanditiis, quaerat odit ex
                                                exercitationem pariatur quibusdam veritatis quisquam laboriosam esse
                                                beatae hic perferendis. Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Beatae, repudiandae. Beatae hic perferendis. Lorem
                                                ipsum dolor sit amet, consectetur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12 mb-0">
                                <div class="grid-inner row">
                                    <div class="col-md-5">
                                        <div class="entry-image mb-0">
                                            <iframe src="https://player.vimeo.com/video/168920644" width="640"
                                                height="360" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="entry-title title-sm mt-3 mt-md-0">
                                            <h3 class="mb-2"><a href="demo-news-single.html">Toyotas next
                                                    minivan will let you shout at your kids without turning around</a>
                                            </h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-line-clock"></i>11 Mar 2021</li>
                                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content mt-3">
                                            <p class="mb-0">Asperiores, tenetur, blanditiis, quaerat odit ex
                                                exercitationem pariatur quibusdam veritatis quisquam laboriosam esse
                                                beatae hic perferendis. Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Beatae, repudiandae.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12 mb-0">
                                <div class="grid-inner row">
                                    <div class="col-md-5">
                                        <div class="entry-image mb-0 clearfix">
                                            <div class="portfolio-single-image masonry-thumbs grid-container grid-4"
                                                data-big="3" data-lightbox="gallery">
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/travel/2.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/travel/thumbs/2.jpg') }}"
                                                        alt="Image"></a>
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/sports/1.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/sports/thumbs/1.jpg') }}"
                                                        alt="Image"></a>
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/fashion/4.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/fashion/thumbs/4.jpg') }}"
                                                        alt="Image"></a>
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/sports/2.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/sports/thumbs/2.jpg') }}"
                                                        alt="Image"></a>
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/market/1.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/market/thumbs/1.jpg') }}"
                                                        alt="Image"></a>
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/food/1.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/food/thumbs/1.jpg') }}"
                                                        alt="Image"></a>
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/market/2.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/market/thumbs/2.jpg') }}"
                                                        alt="Image"></a>
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/food/3.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/food/thumbs/3.jpg') }}"
                                                        alt="Image"></a>
                                                <a class="grid-item"
                                                    href="{{ asset('news/demos/news/images/posts/market/3.jpg') }}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{ asset('news/demos/news/images/posts/market/thumbs/3.jpg') }}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="entry-title title-sm mt-3 mt-md-0">
                                            <h3 class="mb-2"><a href="demo-news-single.html">Toyotas next
                                                    minivan will let you shout at your kids without turning around</a>
                                            </h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-line-clock"></i>11 Mar 2021</li>
                                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content mt-3">
                                            <p class="mb-0">Asperiores, tenetur, blanditiis, quaerat odit ex
                                                exercitationem pariatur quibusdam veritatis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12 mb-0">
                                <div class="grid-inner row">
                                    <div class="col-md-5">
                                        <div class="entry-image mb-0">
                                            <div class="fslider" data-arrows="false" data-speed="400"
                                                data-pause="4000">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="demo-news-single.html"><img
                                                                    src="{{ asset('news/demos/news/images/posts/food/4.jpg') }}"
                                                                    alt="Image 1"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="demo-news-single.html"><img
                                                                    src="{{ asset('news/demos/news/images/posts/fashion/4.jpg') }}"
                                                                    alt="Image 2"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="demo-news-single.html"><img
                                                                    src="{{ asset('news/demos/news/images/posts/travel/3.jpg') }}"
                                                                    alt="Image 2"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="entry-title title-sm mt-3 mt-md-0">
                                            <h3 class="mb-2"><a href="demo-news-single.html">Toyotas next
                                                    minivan will let you shout at your kids without turning around</a>
                                            </h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-line-clock"></i>11 Mar 2021</li>
                                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content mt-3">
                                            <p class="mb-0">Asperiores, tenetur, blanditiis, quaerat odit ex
                                                exercitationem pariatur quibusdam veritatis quisquam laboriosam esse
                                                beatae hic perferendis. Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Beatae, repudiandae.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Area
        ============================================= -->
                        <div class="row col-mb-50 infinity-wrapper">
                            <!-- Movie Reviews
         ============================================= -->
                            <div class="col-md-6">
                                <div class="card border">
                                    <div class="card-header p-3 ps-4 bg-transparent">
                                        <h4 class="ls1 mb-0 text-uppercase fw-bold" style="font-size: 110%;">Recently
                                            Movies</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="scroll-wrap" style="height: 400px;">
                                            <div class="scroll">

                                                <div class="posts-sm row col-mb-30">
                                                    <div class="entry col-12">
                                                        <div class="grid-inner row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="#"><img
                                                                            src="{{ asset('news/images/magazine/small/movie/3.jpg') }}"
                                                                            alt="Image"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4><a href="demo-news-single.html">The Purge:
                                                                            Anarchy</a></h4>
                                                                </div>
                                                                <div class="entry-meta no-separator">
                                                                    <ul>
                                                                        <li class="text-dark"><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star-half-full"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i></li>
                                                                        <li><i class="icon-heart3 text-warning"></i>
                                                                            54%</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="grid-inner row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="#"><img
                                                                            src="{{ asset('news/images/magazine/small/movie/4.jpg') }}"
                                                                            alt="Image"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4><a href="demo-news-single.html">Planes: Fire And
                                                                            Rescue</a></h4>
                                                                </div>
                                                                <div class="entry-meta no-separator">
                                                                    <ul>
                                                                        <li class="text-dark"><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i></li>
                                                                        <li><i class="icon-heart3 text-warning"></i>
                                                                            45%</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="grid-inner row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="#"><img
                                                                            src="{{ asset('news/images/magazine/small/movie/5.jpg') }}"
                                                                            alt="Image"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4><a href="demo-news-single.html">Sex Tape</a>
                                                                    </h4>
                                                                </div>
                                                                <div class="entry-meta no-separator">
                                                                    <ul>
                                                                        <li class="text-dark"><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star-half-full"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i></li>
                                                                        <li><i class="icon-heart3 text-default"></i>
                                                                            20%</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="grid-inner row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="#"><img
                                                                            src="{{ asset('news/images/magazine/small/movie/6.jpg') }}"
                                                                            alt="Image"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4><a href="demo-news-single.html">Transformers:
                                                                            Age of Extinction</a></h4>
                                                                </div>
                                                                <div class="entry-meta no-separator">
                                                                    <ul>
                                                                        <li class="text-dark"><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i></li>
                                                                        <li><i class="icon-heart3 text-default"></i>
                                                                            17%</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="grid-inner row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="#"><img
                                                                            src="{{ asset('news/images/magazine/small/movie/7.jpg') }}"
                                                                            alt="Image"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4><a href="demo-news-single.html">How to Train
                                                                            Your Dragon 2</a></h4>
                                                                </div>
                                                                <div class="entry-meta no-separator">
                                                                    <ul>
                                                                        <li class="text-dark"><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star-empty"></i></li>
                                                                        <li><i class="icon-heart3 text-danger"></i> 90%
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="grid-inner row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="#"><img
                                                                            src="{{ asset('news/images/magazine/small/movie/3.jpg') }}"
                                                                            alt="Image"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4><a href="demo-news-single.html">The Purge:
                                                                            Anarchy</a></h4>
                                                                </div>
                                                                <div class="entry-meta no-separator">
                                                                    <ul>
                                                                        <li class="text-dark"><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star-half-full"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i></li>
                                                                        <li><i class="icon-heart3 text-warning"></i>
                                                                            54%</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="grid-inner row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="#"><img
                                                                            src="{{ asset('news/images/magazine/small/movie/4.jpg') }}"
                                                                            alt="Image"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4><a href="demo-news-single.html">Planes: Fire And
                                                                            Rescue</a></h4>
                                                                </div>
                                                                <div class="entry-meta no-separator">
                                                                    <ul>
                                                                        <li class="text-dark"><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i></li>
                                                                        <li><i class="icon-heart3 text-warning"></i>
                                                                            45%</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="grid-inner row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="#"><img
                                                                            src="{{ asset('news/images/magazine/small/movie/5.jpg') }}"
                                                                            alt="Image"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4><a href="demo-news-single.html">Sex Tape</a>
                                                                    </h4>
                                                                </div>
                                                                <div class="entry-meta no-separator">
                                                                    <ul>
                                                                        <li class="text-dark"><i
                                                                                class="icon-star3"></i><i
                                                                                class="icon-star-half-full"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i><i
                                                                                class="icon-star-empty"></i></li>
                                                                        <li><i class="icon-heart3 text-default"></i>
                                                                            20%</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="card-footer ls1 text-uppercase fw-bold text-white w-100 border-top-0 bg-sports text-center">Show
                                        all</a>
                                </div>
                            </div>

                            <!-- Opinion Polls
         ============================================= -->
                            <div class="col-md-6">
                                <div class="card border">
                                    <div class="card-header p-3 ps-4 bg-transparent">
                                        <h4 class="ls1 mb-0 text-uppercase fw-bold" style="font-size: 110%;">Opinion
                                            Polls</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="scroll-wrap" style="height: 400px;">
                                            <div class="scroll">

                                                <div class="posts-sm row col-mb-30">
                                                    <div class="entry col-12">
                                                        <div class="entry-title">
                                                            <h4><a href="demo-news-single.html">Who do you think is
                                                                    responsible for shooting down Malaysia Airlines
                                                                    flight MH17?</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><span class="text-success">Ukraine:</span> 77%
                                                                </li>
                                                                <li><span class="text-danger">Rebels:</span> 23%
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="entry-title">
                                                            <h4><a href="demo-news-single.html">Maradona says Messi
                                                                    didn't deserve Golden Ball?</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-thumbs-up text-success"></i> 54%
                                                                </li>
                                                                <li><i class="icon-thumbs-down text-danger"></i> 46%
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="entry-title">
                                                            <h4><a href="demo-news-single.html">Palestinian president
                                                                    says Israel is carrying out a genocide in Gaza?</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-thumbs-up text-success"></i> 80%
                                                                </li>
                                                                <li><i class="icon-thumbs-down text-danger"></i> 20%
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="entry-title">
                                                            <h4><a href="demo-news-single.html">Can Brazil progress in
                                                                    the World Cup without Neymar?</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-thumbs-up text-success"></i> 55%
                                                                </li>
                                                                <li><i class="icon-thumbs-down text-danger"></i> 45%
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="entry-title">
                                                            <h4><a href="demo-news-single.html">Maradona says Messi
                                                                    didn't deserve Golden Ball?</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-thumbs-up text-success"></i> 54%
                                                                </li>
                                                                <li><i class="icon-thumbs-down text-danger"></i> 46%
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="entry-title">
                                                            <h4><a href="demo-news-single.html">Palestinian president
                                                                    says Israel is carrying out a genocide in Gaza?</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-thumbs-up text-success"></i> 80%
                                                                </li>
                                                                <li><i class="icon-thumbs-down text-danger"></i> 20%
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="entry col-12">
                                                        <div class="entry-title">
                                                            <h4><a href="demo-news-single.html">Can Brazil progress in
                                                                    the World Cup without Neymar?</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-thumbs-up text-success"></i> 55%
                                                                </li>
                                                                <li><i class="icon-thumbs-down text-danger"></i> 45%
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="card-footer ls1 text-uppercase fw-bold text-white w-100 bg-market border-top-0 text-center">Show
                                        all</a>
                                </div>
                            </div>

                            <!-- Infinity Scroll
         ============================================= -->
                            <div class="col-md-6">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="demo-news-single.html"><img
                                                    src="{{ asset('news/demos/news/images/posts/lifestyle/4.jpg') }}"
                                                    alt="Image 3"></a>
                                            <div class="entry-categories"><a href="demo-news-category.html"
                                                    class="bg-lifestyle">lifestyle</a></div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="demo-news-single.html">6 lessons my
                                                    mother taught me that nobody else could have</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Pellentesque hic illo beatae rhoncus sint, quis,
                                                fugiat imperdiet unde architecto magna dui hymenaeos autem lorem
                                                eligendi, quae! Orci commodo, aute reiciendis, scelerisque inceptos,
                                                quibusdam iste debitis? Venenatis. Alias porta?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="demo-news-single.html"><img
                                                    src="{{ asset('news/demos/news/images/posts/travel/4.jpg') }}"
                                                    alt="Image"></a>
                                            <div class="entry-categories"><a href="demo-news-category.html"
                                                    class="bg-travel">Travel</a></div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="demo-news-single.html">How To Make More
                                                    Travel By Doing Less</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Tempus nullam sed ullam doloremque unde habitasse
                                                auctor tortor. Cursus, culpa numquam ut esse, harum alias? Lorem. Mattis
                                                eum, placeat eius turpis quam dapibus, eius quia atque tristique nostrud
                                                reiciendis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Infinity Scroll Loader
        ============================================= -->
                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <div class="page-load-status hovering-load-status">
                                    <div class="css3-spinner infinite-scroll-request">
                                        <div class="css3-spinner-ball-pulse-sync">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Infinity Scroll Button
          ============================================= -->
                                <a href="demo-news-2.html"
                                    class="mt-4 button button-dark bg-dark button-rounded ls1 text-uppercase load-next-portfolio">Load
                                    more...</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Second Sidebar
      ============================================= -->
                <div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
                    <div class="sticky-sidebar">

                        <!-- Sidebar Widget 1
        ============================================= -->
                        <div class="widget widget_links clearfix">
                            <h4 class="mb-2 ls1 text-uppercase fw-bold">Popular Categories</h4>
                            <div class="line line-xs line-sports"></div>
                            <ul>
                                <li class="d-flex align-items-center"><a href="demo-news-category.html"
                                        class="flex-fill">World</a><span
                                        class="badge text-light bg-sports">14</span></li>
                                <li class="d-flex align-items-center"><a href="demo-news-category.html"
                                        class="flex-fill">Technology</a><span
                                        class="badge text-light bg-travel">21</span></li>
                                <li class="d-flex align-items-center"><a href="demo-news-category.html"
                                        class="flex-fill">Entertainment</a><span
                                        class="badge text-light bg-info">32</span></li>
                                <li class="d-flex align-items-center"><a href="demo-news-category.html"
                                        class="flex-fill">Sports</a><span
                                        class="badge text-light bg-fashion">52</span></li>
                                <li class="d-flex align-items-center"><a href="demo-news-category.html"
                                        class="flex-fill">Media</a><span
                                        class="badge text-light bg-success">14</span></li>
                                <li class="d-flex align-items-center"><a href="demo-news-category.html"
                                        class="flex-fill">Politics</a><span
                                        class="badge text-light bg-travel">91</span></li>
                                <li class="d-flex align-items-center"><a href="demo-news-category.html"
                                        class="flex-fill">Business</a><span
                                        class="badge text-light bg-market">32</span></li>
                            </ul>
                        </div>

                        <!-- Sidebar Widget 2
        ============================================= -->
                        <div class="widget clearfix">
                            <h4 class="mb-2 ls1 text-uppercase fw-bold">Recent Posts</h4>
                            <div class="line line-xs line-home"></div>

                            <div class="posts-sm row col-mb-30">
                                <div class="entry col-12">
                                    <div class="grid-inner row align-items-center g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="demo-news-single.html"><img
                                                        src="{{ asset('news/demos/news/images/posts/fashion/small/2.jpg') }}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4 class="fw-semibold"><a href="demo-news-single.html">UK
                                                        government weighs Tesla's Model.</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>by</span> <a href="#">John Doe</a></li>
                                                    <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Article -->
                                <div class="entry col-12">
                                    <div class="grid-inner row align-items-center g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="demo-news-single.html"><img
                                                        src="{{ asset('news/demos/news/images/posts/travel/small/3.jpg') }}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4 class="fw-semibold"><a href="demo-news-single.html">MIT's new
                                                        robot glove can give you extra fingers.</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>by</span> <a href="#">John Doe</a></li>
                                                    <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Article -->
                                <div class="entry col-12">
                                    <div class="grid-inner row align-items-center g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="demo-news-single.html"><img
                                                        src="{{ asset('news/demos/news/images/posts/sports/small/1.jpg') }}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4 class="fw-semibold"><a href="demo-news-single.html">You can now
                                                        listen to headphones through your hoodie.</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>by</span> <a href="#">John Doe</a></li>
                                                    <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Article -->
                                <div class="entry col-12">
                                    <div class="grid-inner row align-items-center g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="demo-news-single.html"><img
                                                        src="{{ asset('news/demos/news/images/posts/fashion/small/4.jpg') }}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4 class="fw-semibold"><a href="demo-news-single.html">How would
                                                        you change Kobo's Aura HD e-reader?</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>by</span> <a href="#">John Doe</a></li>
                                                    <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Sidebar Widget 3
        ============================================= -->
                        <div class="widget clearfix">
                            <h4 class="mb-2 ls1 text-uppercase fw-bold">Recent Trailers</h4>
                            <div class="line line-xs line-travel"></div>

                            <div class="owl-carousel fixed-nav carousel-widget posts-md" data-margin="0"
                                data-nav="true" data-pagi="false" data-items="1">

                                <!-- Post Article -->
                                <div class="entry">
                                    <div class="entry-image mb-3">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/6ZfuNTqbHE8"
                                            allowfullscreen style="border: 0;"></iframe>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3 class="mb-0"><a href="#">Avengers: Infinity War</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">Marvel Entertainment</a></li>
                                            <li><i class="icon-time"></i><a href="#">Feb 4, 2021</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-inline mt-2 mb-0">
                                        <li>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Post Article -->
                                <div class="entry">
                                    <div class="entry-image mb-3">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/PfBVIHgQbYk"
                                            allowfullscreen style="border: 0;"></iframe>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3 class="mb-0"><a href="#">X-Men: Apocalypse | Official Trailer</a>
                                        </h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">20th Century Fox</a></li>
                                            <li><i class="icon-time"></i><a href="#">Mar 17, 2021</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-inline mt-2 mb-0">
                                        <li>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Post Article -->
                                <div class="entry">
                                    <div class="entry-image mb-3">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ue80QwXMRHg"
                                            allowfullscreen style="border: 0;"></iframe>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3 class="mb-0"><a href="#">"Thor: Ragnarok" Official Trailer</a>
                                        </h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">Marvel Entertainment</a></li>
                                            <li><i class="icon-time"></i><a href="#">Jul 22, 2021</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-inline mt-2 mb-0">
                                        <li>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Sidebar Widget 4
        ============================================= -->
                        <div id="instagram" class="widget clearfix">
                            <h4 class="mb-2 ls1 text-uppercase fw-bold">Instagram Feeds</h4>
                            <div class="line line-xs line-home"></div>

                            <div id="instagram-photos"
                                class="instagram-photos masonry-thumbs grid-container mt-2 grid-3"
                                data-user="blog.canvastemplate" data-count="9"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section><!-- #content end -->
@endsection
