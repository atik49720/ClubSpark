@include('include/header')

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Card</h3>
                <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content
                    container with multiple variants and options.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Card</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
            
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-bottom img-fluid" src="{{'public/assets/compiled/jpg/building.jpg'}}"
                            alt="Card image cap" style="height: 20rem; object-fit: cover;">
                        <div class="card-body">
                            <h4 class="card-title">Social Media</h4>
                            <p class="card-text">
                                Candy Cupcake sugar plum oat cake wafer marzipan jujubes.
                                Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut pastry gummies
                                tiramisu
                                chocolate bar muffin.
                            </p>
                            <a href="#" class="card-link"><small>Read 12 Comments</small></a>
                        </div>
                        <div class="btn-group align-items-center mx-2 px-1">
                            <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                <i
                                    class="bi bi-heart d-flex align-items-center justify-content-center text-secondary"></i>
                            </button>
                            <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                <i
                                    class="bi bi-chat d-flex align-items-center justify-content-center text-secondary"></i>
                            </button>
                            <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                <i
                                    class="bi bi-bookmark d-flex align-items-center justify-content-center text-secondary"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="{{'public/assets/compiled/jpg/origami.jpg'}}" alt="Card image cap"
                            style="height: 20rem" />
                        <div class="card-body">
                            <h4 class="card-title">Top Image Cap</h4>
                            <p class="card-text">
                                Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                                pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate
                                bar
                                chocolate tart dragée.
                            </p>
                            <p class="card-text">
                                Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.
                            </p>
                            <button class="btn btn-primary block">Update now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Bottom Image Cap</h4>
                            <p class="card-text">
                                Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                                pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate
                                bar
                                chocolate tart dragée.
                            </p>
                            <p class="card-text">
                                Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar
                                muffin.
                            </p>
                            <small class="text-muted">Last updated 3 mins ago.</small>
                        </div>
                        <img class="card-img-bottom img-fluid" src="{{'public/assets/compiled/jpg/water.jpg'}}"
                            alt="Card image cap" style="height: 20rem; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Card types section end -->