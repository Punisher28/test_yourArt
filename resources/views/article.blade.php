@include('includes.head')

<body>

@include('includes.header')
<div class="container">
    <div class="row d-flex flex-wrap">

        <div class="col-md-6 rounded" style="">
            <img class="card-img-top"
                 src="{{url($articles->Image)}}"
                 data-holder-rendered="true"></div>
        <div class="col-md-6 ">
            <div class="row justify-content-center">
                <h2>{{$articles->Name}}</h2>
                <p class="p-3 ">
                    {{$articles->Description}}
                </p>
            </div>
            <div class="row text-center">
                <div class="col-md"><strong class="text-muted">Ціна: {{$articles->Price}}</strong></div>
                <div class="col-md">
                    <button type="button" class="btn btn-secondary ">Купити</button>
                </div>
            </div>
        </div>


    </div>
    <div class="row blog">
        <div class="col-md-12">
            <hr>
            <h2>Популярні товари</h2>
            <br>
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                </div>
                <!--.carousel-inner-->
            </div>
        </div>


    </div>

    <br>
</div>

@include('includes.footer')


