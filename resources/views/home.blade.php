@include('includes.head')

<body>

@include('includes.header')
<!------ Include the above in your HEAD tag ---------->

<div class="container ">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="col-md-12 emp-profile">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img
                        src="{{asset('storage')}}/{{Auth::user()->avatar}}"
                        alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        {{Auth::user()->name}}
                    </h5>
                    <h6>
                        @if (Auth::check())
                            Online
                        @endif
                    </h6>
                    @if (!Auth::check() || !Auth::user()->hasRole('admin'))

                        <p class="proile-rating">Default User</p>
                    @else
                        <p class="proile-rating">Administrator</p>

                    @endif
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">About</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{Auth::user()->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                @if (!Auth::check() || !Auth::user()->hasRole('admin'))

                                    <p>Default User</p>
                                @else
                                    <p>Administrator</p>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@include('includes.footer')

