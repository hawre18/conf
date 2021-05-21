<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Amazing Slider</title>

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

</head>
<body>
<div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 56px;">
    <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
        <ul class="amazingslider-slides" style="display:none;">
            @foreach($newses=App\Models\News::with('photo')->get() as $news)
                <li><img src="{{$news->photo->path}}" />
                </li>
            @endforeach
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            @foreach($newses  as $news)
                <li><img src="{{$news->photo[0]->path}}"  /></li>
            @endforeach
            <</ul>
    </div>
</div>
</body>
</html>
