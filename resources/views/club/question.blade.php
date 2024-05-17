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
                            <a href="{{ asset('club-forum/'.$clubAlias) }}">
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
                                <div class="email-action">
                                    <!-- action left start here -->
                                    <div class="action-left d-flex align-items-center">
                                        <!-- select All checkbox -->
                                        <div class="checkbox checkbox-shadow checkbox-sm selectAll me-3">
                                            <input type="checkbox" id="checkboxsmall" class="form-check-input">
                                            <label for="checkboxsmall"></label>
                                        </div>
                                        <!-- delete unread dropdown -->
                                        <ul class="list-inline m-0 d-flex">
                                            <li class="list-inline-item mail-delete">
                                                <button type="button" class="btn btn-icon action-icon" data-toggle="tooltip">
                                                <span class="fonticon-wrap">
                                                    <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                        <use xlink:href="assets/static/images/bootstrap-icons.svg#trash"></use>
                                                    </svg>
                                                </span>
                                                </button>
                                            </li>
                                            <li class="list-inline-item mail-unread">
                                                <button type="button" class="btn btn-icon action-icon">
                                                    <span class="fonticon-wrap d-inline">
                                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                            <use xlink:href="assets/static/images/bootstrap-icons.svg#envelope"></use>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button type="button" class="dropdown-toggle btn btn-icon action-icon" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fonticon-wrap">
                                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                            <use xlink:href="assets/static/images/bootstrap-icons.svg#folder"></use>
                                                        </svg>
                                                    </span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                        <a class="dropdown-item" href="#"><i class="bi bi-edit"></i>
                                                            Draft</a>
                                                        <a class="dropdown-item" href="#"><i class="bi bi-info-circle"></i>Spam</a>
                                                        <a class="dropdown-item" href="#"><i class="bi bi-trash"></i>Trash</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-icon dropdown-toggle action-icon" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fonticon-wrap">

                                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                            <use xlink:href="assets/static/images/bootstrap-icons.svg#tag"></use>
                                                        </svg>
                                                    </span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-success bullet-sm"></span>
                                                            <span>Product</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-primary bullet-sm"></span>
                                                            <span>Work</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-warning bullet-sm"></span>
                                                            <span>Misc</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-danger bullet-sm"></span>
                                                            <span>Family</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-info bullet-sm"></span>
                                                            <span> Design</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- action left end here -->

                                    <!-- action right start here -->
                                    <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                        <div class="sidebar-toggle d-block d-lg-none">
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-list fs-5"></i>
                                            </button>
                                        </div>
                                        <!-- search bar  -->
                                        <div class="email-fixed-search flex-grow-1">
                                            <div class="form-group position-relative  mb-0 has-icon-left">
                                                <input type="text" class="form-control" placeholder="Search email..">
                                                <div class="form-control-icon">
                                                    <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                        <use xlink:href="assets/static/images/bootstrap-icons.svg#search"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- pagination and page count -->
                                        <button class="btn btn-icon email-pagination-prev action-button d-none d-sm-block">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use xlink:href="assets/static/images/bootstrap-icons.svg#chevron-left"></use>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon email-pagination-prev action-button d-none d-sm-block">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use xlink:href="assets/static/images/bootstrap-icons.svg#chevron-left"></use>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon email-pagination-prev action-button d-none d-sm-block">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use xlink:href="assets/static/images/bootstrap-icons.svg#chevron-left"></use>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon email-pagination-next action-button d-none d-sm-block">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use xlink:href="assets/static/images/bootstrap-icons.svg#chevron-right"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- / action right -->

                                <!-- email user list start -->
                                <div class="email-user-list ps ps--active-y">
                                    <div class="row">
                                        <div class="col-md-12" style="padding: 0; height: 0;">
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
                                                    @if(isset($question['questionAttachment']))
                                                        <img id="myImg" src="{{asset($question['questionAttachment'])}}" alt="{{$question['questionTitle']}}" style="width:100%;max-width:400px">
                                                    @endif
                                                </div>
                                                <div class="card-body pt-7 bg-grey">
                                                    <div class="chat-content">
                                                        @foreach($replies as $reply)
                                                            @if(auth()->user()->id != $reply['userId'])
                                                            <div class="chat chat-left">
                                                                <div class="chat-body">
                                                                    <div class="chat-message">
                                                                        <p>{{$reply['questionDetails']}}</p>
                                                                        @if($reply['questionAttachment'])
                                                                            <img id="myImg" src="{{asset($reply['questionAttachment'])}}" alt="{{$reply['questionTitle']}}" style="width:100%;max-width:400px">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @else
                                                            <div class="chat">
                                                                <div class="chat-body">
                                                                    <div class="chat-message">
                                                                        <p>{{$reply['questionDetails']}}</p>
                                                                        @if($reply['questionAttachment'])
                                                                            <img id="myImg" src="{{asset($reply['questionAttachment'])}}" alt="{{$reply['questionTitle']}}" style="width:100%;max-width:400px">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                        <!-- The Modal -->
                                                        <div id="myModal" class="modal">
                                                            <span class="close">&times;</span>
                                                            <img class="modal-content" id="img01">
                                                            <div id="caption"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <form method="POST" action="./create-reply" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="message-form d-flex flex-direction-column align-items-center">
                                                            <div class="form-group">
                                                                <label for="questionAttachment">
                                                                    <i class="bi bi-paperclip"></i>
                                                                    <input type="file" id="questionAttachment" style="display: none" class="form-control" name="questionAttachment" accept="image/png, image/jpeg">
                                                                </label>
                                                            </div>
                                                            <div class="d-flex flex-grow-1 ms-4">
                                                                <input type="text" name="questionDetails" class="form-control" placeholder="Type your message.." required>
                                                            </div>&nbsp;&nbsp;
                                                            <input type="hidden" name="parentQuestionId" value="{{ $question['id'] }}">
                                                            <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
                                                            <button class="btn btn-outline-info" type="submit">Reply</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; height: auto; right: 0px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: auto;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Email list Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('/../include/footer')
