{*
{foreach from=$banners item=banner}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="{$banner.id_GradiAdsense}" class="active"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block" src="{$base_dir}{$banner.image}" alt="First slide">
</div>

</script>*}


<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                {foreach from=$banners item=banner}
                    <li data-target="#myCarousel" data-slide-to="{$banner.id_GradiAdsense}" class="active"></li>
                    {/foreach}
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                {foreach from=$banners item=banner}
                    <div class="item active">
                        
                        <img src="{$banner.image}" alt="Los Angeles" style="width:100%; height: 100%;">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>LA is always so much fun!</p>
                        </div>
                    </div>
                {/foreach}
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>
