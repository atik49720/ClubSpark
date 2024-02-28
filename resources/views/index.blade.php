@include('include/header')
<title>ClubSpark - Igniting Campus Engagement and Activity</title>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Home</h3><br>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">ClubSpark</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Home</li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic card section start test-->
        <section id="content-types">
            <div class="row">
                @foreach($results as $result)
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="{{$result->mainImage}}" alt="Card image cap"
                                style="height: 20rem" />
                            <div class="card-body">
                                <h4 class="card-title">{{$result->name}}</h4>
                                <p class="card-text">
                                    {{$result->dept}}
                                </p>
                                <p class="card-text">
                                    {{$result->intro}}
                                </p>
                                <button class="btn btn-primary block"><a style="color: white;" href="./club-profile/{{$result->alias}}">Show Profile</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    <!-- Basic Card types section end -->
    @include('include/footer')

