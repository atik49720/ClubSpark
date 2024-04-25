@include('../../../include/header')
<title>{{ Str::upper($clubAlias) }} Club Forum - ClubSpark</title>

<div class="page-heading email-application overflow-hidden">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ Str::upper($clubAlias) }} Club Forum</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('/')}}">ClubSpark</a></li>
                        <li class="breadcrumb-item" aria-current="page">Club Forum</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ Str::upper($clubAlias) }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar d-flex">
                    <!-- sidebar close icon -->
                    <span class="sidebar-close-icon">
                    <i class="bi bi-x"></i>
                </span>
                    <!-- sidebar close icon -->
                    <div class="email-app-menu">
                        <div class="form-group form-group-compose">
                            <!-- compose button  -->
                            <a href="{{ url()->previous() }}">
                                <button type="button" class="btn btn-primary btn-block my-4 compose-btn">
                                    <i class="bi bi-skip-backward-fill"></i>
                                    Back To Club Forum
                                </button>
                            </a>
                        </div>
                        <div class="sidebar-menu-list ps">
                            <!-- sidebar menu  -->
                            <!-- sidebar menu  end-->

                            <!-- sidebar label start -->
                            <label class="sidebar-label">Switch Another Club</label>
                            <div class="list-group list-group-labels">
                                @foreach($clubList as $club)
                                    @if($club['alias'] != $clubAlias)
                                        <a href="{{asset('club-forum').'/'.$club['alias']}}" class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ Str::upper($club['alias']) }}
                                            <span class="bullet bullet-success bullet-sm"></span>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <!-- sidebar label end -->
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User new mail right area -->
                <!--/ User Chat profile right area -->
            </div>
        </div>
        <div class="content-right">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- email app overlay -->
                    <div class="app-content-overlay"></div>
                    <div class="email-app-area">
                        <!-- Email list Area -->
                        <div class="email-app-list-wrapper">
                            <div class="email-app-list">
                                <!-- / action right -->

                                <!-- email user list start -->
                                <section class="section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="media d-flex align-items-center">
                                                        <div class="avatar me-3">
                                                            <img src="{{asset('public/assets/compiled/png/avatar.png')}}" alt="" srcset="">
                                                            <span class="avatar-status bg-success"></span>
                                                        </div>
                                                        <div class="name flex-grow-1">
                                                            <h4 class="mb-0">{{ $question['questionTitle'] }}</h4>
                                                            <p class="mb-0">{{ $question['questionDetails'] }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-4 bg-grey">
                                                    <div class="chat-content">
                                                        @foreach($replies as $reply)
                                                            
                                                            <div class="chat chat-left">
                                                                <div class="chat-body">
                                                                    <div class="chat-message">I'm looking for the best admin dashboard template</div>
                                                                </div>
                                                            </div>
                                                            <div class="chat">
                                                                <div class="chat-body">
                                                                    <div class="chat-message">I recommend you to use Mazer Dashboard</div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="message-form d-flex flex-direction-column align-items-center">
                                                        <a href="http://" class="black"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></a>
                                                        <div class="d-flex flex-grow-1 ms-4">
                                                            <input type="text" class="form-control" placeholder="Type your message..">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!--/ Email list Area -->

                        <!-- Detailed Email View -->
                        <div class="email-app-details">
                            <!-- email detail view header -->
                            <div class="email-detail-header">
                                <div class="email-header-left d-flex align-items-center mb-1">
                                <span class="go-back me-3">
                                    <span class="fonticon-wrap d-inline">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                </span>
                                    <h5 class="email-detail-title font-weight-normal mb-0">
                                        Advertising Internet Online
                                        <span class="badge bg-light-danger badge-pill ms-1">PRODUCT</span>
                                    </h5>
                                </div>
                                <div class="email-header-right mb-1 ms-2 pl-1">
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <button class="btn btn-icon action-icon">
                                            <span class="fonticon-wrap">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-icon action-icon">
                                            <span class="fonticon-wrap">
                                                <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                    <use xlink:href="assets/static/images/bootstrap-icons.svg#envelope"></use>
                                                </svg>
                                            </span>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fonticon-wrap">
                                                    <i class="fas fa-folder"></i>
                                                </span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-menu">
                                                    <a class="dropdown-item" href="#"><i class="bi bi-edit"></i>
                                                        Draft</a>
                                                    <a class="dropdown-item" href="#"><i class="bi bi-info-circle"></i>
                                                        Spam</a>
                                                    <a class="dropdown-item" href="#"><i class="bi bi-trash"></i>
                                                        Trash</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fonticon-wrap">
                                                    <i class="fas fa-tag"></i>
                                                </span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-tag">
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-success bullet-sm"></span>
                                                        Product
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-primary bullet-sm"></span>
                                                        Work
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-warning bullet-sm"></span>
                                                        Misc
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-danger bullet-sm"></span>
                                                        Family
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-info bullet-sm"></span>
                                                        Design
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="no-of-list d-none d-sm-block ms-1">1-10 of 653</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-icon email-pagination-prev action-icon">
                                                <i class="bi bi-chevron-left"></i>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-icon email-pagination-next action-icon">
                                                <i class="bi bi-chevron-right"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- email detail view header end-->
                            <div class="email-scroll-area ps ps--active-y">
                                <!-- email details  -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="collapsible email-detail-head">
                                            <div class="card collapse-header" role="tablist">
                                                <div id="headingCollapse5" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                    <div class="collapse-title media">
                                                        <div class="pr-1">
                                                            <div class="avatar me-3">
                                                                <img src="./assets/compiled/jpg/8.jpg" alt="avtar img holder" width="30" height="30">
                                                            </div>
                                                        </div>
                                                        <div class="media-body mt-25">
                                                            <span class="text-primary">Elnora Reese</span>
                                                            <span class="d-sm-inline d-none">
                                                            &lt;elnora@gmail.com&gt;</span>
                                                            <small class="text-muted d-block">to Lois Jimenez</small>
                                                        </div>
                                                    </div>
                                                    <div class="information d-sm-flex d-none align-items-center">
                                                        <small class="text-muted me-3">15 Jul 2019, 10:30</small>
                                                        <span class="favorite">
                                                        <i class="bi bi-star me-3"></i>
                                                    </span>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" id="fisrt-open-submenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-dots-vertical-rounded me-0"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="fisrt-open-submenu">
                                                                <a href="#" class="dropdown-item mail-reply">
                                                                    <i class="bi bi-share"></i>
                                                                    Reply
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="bi bi-redo"></i>
                                                                    Forward
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="bi bi-info-circle"></i>
                                                                    Report Spam
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse5" role="tabpanel" aria-labelledby="headingCollapse5" class="collapse">
                                                    <div class="card-content">
                                                        <div class="card-body py-1">
                                                            <p class="text-bold-500">Greetings!</p>
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of
                                                                type and scrambled it to make a type specimen book.
                                                            </p>
                                                            <p>
                                                                It has survived not only five centuries, but also the
                                                                leap into electronic typesetting, remaining
                                                                essentially unchanged.
                                                            </p>
                                                            <p class="mb-0">Sincerely yours,</p>
                                                            <p class="text-bold-500">Envato Design Team</p>
                                                        </div>
                                                        <div class="card-footer pt-0 border-top">
                                                            <label class="sidebar-label">Attached Files</label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="cursor-pointer pb-25">
                                                                    <img src="../../../app-assets/static/images/icon/psd.png" alt="psd.png" height="30">
                                                                    <small class="text-muted ms-1 attchement-text">uikit-design.psd</small>
                                                                </li>
                                                                <li class="cursor-pointer">
                                                                    <img src="../../../app-assets/static/images/icon/sketch.png" alt="sketch.png" height="30">
                                                                    <small class="text-muted ms-1 attchement-text">uikit-design.sketch</small>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card collapse-header" role="tablist">
                                                <div id="headingCollapse6" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                    <div class="collapse-title media">
                                                        <div class="pr-1">
                                                            <div class="avatar me-3">
                                                                <img src="assets/static/images/faces/19.jpg" alt="avtar img holder" width="30" height="30">
                                                            </div>
                                                        </div>
                                                        <div class="media-body mt-25">
                                                            <span class="text-primary">Lois Jimenez </span>
                                                            <span class="d-sm-inline d-none">
                                                            &lt;lois_jim@gmail.com&gt;</span>
                                                            <small class="text-muted d-block">to Elnora Reese</small>
                                                        </div>
                                                    </div>
                                                    <div class="information d-sm-flex d-none align-items-center">
                                                        <i class="bi bi-paperclip me-3"></i>
                                                        <small class="text-muted me-3">10 Jul 2019, 10:30</small>
                                                        <span class="favorite">
                                                        <i class="bi bi-star me-3"></i>
                                                    </span>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" id="second-open-submenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-dots-vertical-rounded me-0"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                                                                <a href="#" class="dropdown-item mail-reply">
                                                                    <i class="bi bi-share"></i>
                                                                    Reply
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="bi bi-redo"></i>
                                                                    Forward
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="bi bi-info-circle"></i>
                                                                    Report Spam
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse6" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse">
                                                    <div class="card-content">
                                                        <div class="card-body py-1">
                                                            <p class="text-bold-500">Greetings!</p>
                                                            <p>
                                                                Successful businesses have many things in common, today
                                                                we’ll look at the big ‘R’of recognition
                                                                and how a digital advertising network may help.
                                                                Recognition can be illustrated by two individuals
                                                                entering a crowded room at a party. Both walk to the far
                                                                side of the room, one of them slips
                                                                through the crowd easily and unnoticed as they reach the
                                                                far side.
                                                            </p>
                                                            <p>
                                                                Gummies sweet tart marzipan lemon drops donut pie.
                                                                Chocolate cake gingerbread jujubes gingerbread
                                                                chocolate cake tart bear claw apple pie jelly-o.
                                                                Gummies biscuit brownie marshmallow oat cake tootsie
                                                                roll bear claw topping. Oat cake sesame snaps
                                                                icing cupcake wafer tiramisu jelly-o sugar plum carrot
                                                                cake
                                                            </p>
                                                            <p class="mb-0">Sincerely yours,</p>
                                                            <p class="text-bold-500">Envato Design Team</p>
                                                        </div>
                                                        <div class="card-footer pt-0 border-top">
                                                            <label class="sidebar-label">Attached Files</label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="cursor-pointer pb-25">
                                                                    <img src="../../../app-assets/static/images/icon/psd.png" alt="psd.png" height="30">
                                                                    <small class="text-muted ms-1 attchement-text">uikit-design.psd</small>
                                                                </li>
                                                                <li class="cursor-pointer">
                                                                    <img src="../../../app-assets/static/images/icon/sketch.png" alt="sketch.png" height="30">
                                                                    <small class="text-muted ms-1 attchement-text">uikit-design.sketch</small>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card collapse-header open" role="tablist">
                                                <div id="headingCollapse7" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                    <div class="collapse-title media">
                                                        <div class="pr-1">
                                                            <div class="avatar me-3">
                                                                <img src="./assets/compiled/jpg/8.jpg" alt="avtar img holder" width="30" height="30">
                                                            </div>
                                                        </div>
                                                        <div class="media-body mt-25">
                                                            <span class="text-primary">Elnora Reese</span>
                                                            <span class="d-sm-inline d-none">&lt;elnora@gmail.com&gt;</span>
                                                            <small class="text-muted d-block">to Lois Jimenez</small>
                                                        </div>
                                                    </div>
                                                    <div class="information d-sm-flex d-none align-items-center">
                                                        <small class="text-muted me-3">05 Jul 2019, 10:30</small>
                                                        <span class="favorite text-warning">
                                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                            <use xlink:href="assets/static/images/bootstrap-icons.svg#star-fill"></use>
                                                        </svg>
                                                    </span>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" id="third-open-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-dots-vertical-rounded me-0"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                                                                <a href="#" class="dropdown-item mail-reply">
                                                                    <i class="bi bi-share"></i>
                                                                    Reply
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="bi bi-redo"></i>
                                                                    Forward
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="bi bi-info-circle"></i>
                                                                    Report Spam
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse7" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse show">
                                                    <div class="card-content">
                                                        <div class="card-body py-1">
                                                            <p class="text-bold-500">Greetings!</p>
                                                            <p>
                                                                It is a long established fact that a reader will be
                                                                distracted by the readable content of a page
                                                                when looking at its layout.The point of using Lorem
                                                                Ipsum is that it has a more-or-less normal
                                                                distribution of letters, as opposed to using 'Content
                                                                here, content here',making it look like
                                                                readable English.
                                                            </p>
                                                            <p>
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered
                                                                alteration in some form, by injected humour, or
                                                                randomised words which don't look even slightly
                                                                believable.
                                                            </p>
                                                            <p class="mb-0">Sincerely yours,</p>
                                                            <p class="text-bold-500">Envato Design Team</p>
                                                        </div>
                                                        <div class="card-footer pt-0 border-top">
                                                            <label class="sidebar-label">Attached Files</label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="cursor-pointer pb-25">
                                                                    <img src="../../../app-assets/static/images/icon/psd.png" alt="psd.png" height="30">
                                                                    <small class="text-muted ms-1 attchement-text">uikit-design.psd</small>
                                                                </li>
                                                                <li class="cursor-pointer">
                                                                    <img src="../../../app-assets/static/images/icon/sketch.png" alt="sketch.png" height="30">
                                                                    <small class="text-muted ms-1 attchement-text">uikit-design.sketch</small>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- email details  end-->
                                <div class="row px-2 mb-4">
                                    <!-- quill editor for reply message -->
                                    <div class="col-12 px-0">
                                        <div class="card shadow-none border rounded">
                                            <div class="card-body quill-wrapper">
                                                <span>Reply to Lois Jimenez</span>
                                                <div class="snow-container" id="detail-view-quill">
                                                    <div class="detail-view-editor ql-container ql-snow">
                                                        <div class="ql-editor ql-blank" data-gramm="false" data-placeholder="Type something....." contenteditable="true">
                                                            <p><br></p>
                                                        </div>
                                                        <div class="ql-clipboard" tabindex="-1" contenteditable="true">
                                                        </div>
                                                        <div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="detail-quill-toolbar ql-toolbar ql-snow">
                                                        <span class="ql-formats me-3">
                                                            <button class="ql-bold" type="button"><svg viewBox="0 0 18 18">
                                                                    <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                                    </path>
                                                                    <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                                    </path>
                                                                </svg></button>
                                                            <button class="ql-italic" type="button"><svg viewBox="0 0 18 18">
                                                                    <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                                    <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                                                    <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                                                </svg></button>
                                                            <button class="ql-underline" type="button"><svg viewBox="0 0 18 18">
                                                                    <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                                    </path>
                                                                    <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                                                                </svg></button>
                                                            <button class="ql-link" type="button"><svg viewBox="0 0 18 18">
                                                                    <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                                                    <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z">
                                                                    </path>
                                                                    <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z">
                                                                    </path>
                                                                </svg></button>
                                                            <button class="ql-image" type="button"><svg viewBox="0 0 18 18">
                                                                    <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                                                    <circle class="ql-fill" cx="6" cy="7" r="1">
                                                                    </circle>
                                                                    <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12">
                                                                    </polyline>
                                                                </svg></button>
                                                        </span>
                                                        </div>
                                                        <button class="btn btn-primary send-btn">
                                                            <i class="bi bi-send me-3"></i>
                                                            <span class="d-none d-sm-inline"> Send</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 736px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 626px;"></div>
                                </div>
                            </div>
                        </div>
                        <!--/ Detailed Email View -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('/../include/footer')
