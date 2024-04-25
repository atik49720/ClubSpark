@include('/../include/header')
{{$result['clubAlias']}}
<title>{{ $result['name'] }} - ClubSpark</title>
<section class="section">
    <div class="row" id="table-head">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title" style="text-align:center;">{{ $result['name'] }}</h1>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Intro</h4>
                </div>
                <div class="card-body">
                    {{ $result['intro'] }}
                    <br><br>
                    <div class="buttons">
                        <a href="{{asset('club-forum').'/'.$result['alias']}}" class="btn icon icon-left btn-primary"><i class="bi bi-question-circle"></i> Forum</a>
                        <a href="#" class="btn icon icon-left btn-primary"><i class="bi bi-person-circle"></i> {{ $result['dept'] }}</a>
                        <a href="#" class="btn icon icon-left btn-primary"><i class="bi bi-house-fill"></i> Room: 501</a>
                        <a href="{{ $result['fbPageURL'] }}" target="_blank" class="btn icon icon-left btn-primary"><i class="bi bi-facebook"></i> FB Page</a>
                        <a href="{{ $result['fbGroupURL'] }}" target="_blank" class="btn icon icon-left btn-primary"><i class="bi bi-facebook"></i> FB Group</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <img src="{{ asset($result['mainImage'])}}" width="100%">
        </div>
    </div>
</section>
<br><br>
<section>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Objective</h4>
        </div>
        <div class="card-body">
            {{ $result['objective'] }}
        </div>
    </div>
</section>
<br>
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Our Achievements</h5>
                </div>
                <div class="card-body">
                    <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100 active" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100" src="https://images.unsplash.com/photo-1632951634308-d7889939c125?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100" src="https://images.unsplash.com/photo-1632949107130-fc0d4f747b26?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3OHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                            </a>
                        </div>
                    </div>

                    <div class="row mt-2 mt-md-4 gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100 active" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100" src="https://images.unsplash.com/photo-1632951634308-d7889939c125?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100" src="https://images.unsplash.com/photo-1632949107130-fc0d4f747b26?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3OHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryModalTitle">Our Gallery Example</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body">

                <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="3" aria-label="Slide 4" class="active" aria-current="true"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1632951634308-d7889939c125?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1632949107130-fc0d4f747b26?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3OHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Gallerycarousel" role="button" type="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#Gallerycarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@include('/../include/footer')

