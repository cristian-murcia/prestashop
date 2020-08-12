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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {if $banners != null}
        <div class="container container-obj">
            <div id="myCarousel" class="carousel slide slide-obj" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    {foreach $banners key=b item=banner}
                        <li data-target="#myCarousel" data-slide-to="{$b}" class="{if $b == 0}active{/if}"></li>
                        {/foreach}
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    {foreach $banners key=b item=banner}
                        <div class="item {if $b == 0}active{/if}">
                            <img id="img-obj" src="{$banner.image}" alt="{$banner.label}">

                            <div class="carousel-caption">
                                <h3 id="title-obj">{$banner.title}</h3>
                                <p  id="description-obj">{$banner.description}</p>
                                <a  id="url-obj" href="{$banner.url}" >¡A por ello tio!</a>
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
    {/if}
</body>
