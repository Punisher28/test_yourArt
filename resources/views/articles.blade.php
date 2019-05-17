@include('includes.head')

<body>

@include('includes.header')
<div class="container" style="">
    <div class="row">
        <div class="col-6 d-flex flex-wrap justify-content-between">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ціна
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Автор
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Тип
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Розмір
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex flex-wrap justify-content-end">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Товар з довільною ціною</label>
            </div>
        </div>


    </div>
    <hr>
    <div class="row d-flex justify-content-center">@foreach($articles as $article)
        <div class="col-md-4 card-deck">
                <div class="card mb-4 box-shadow ">
                    <img class="card-img-top"
                         src="{{$article->Image}}"
                         data-holder-rendered="true">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->Name}}</h5>
                        <p class="card-text">{{str_limit($article->Description, $limit = 150, $end = '...')}}</p>

                    </div>
                    <div class="card-footer text-center">
                        <small class="text-muted">{{$article->Author}}</small>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">

                                <a href="{{url('article',$article->id)}}" class="btn btn-outline-secondary">Детальніше</a>

                            <strong class="text-muted">Ціна: {{$article->Price}} $</strong>
                        </div>
                    </div>
                </div>



        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center ">
        {{ $articles->links() }}
    </div>


</div>
@include('includes.footer')

</body>
</html>
