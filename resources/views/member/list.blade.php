@include('/../include/header')
<title>Member List - ClubSpark</title>
<section class="section">
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Member List</h4>
                    <div class="me-1 mb-1 d-inline-block">
                        <!-- Button trigger for Extra Large  modal -->
                        <button type="button" class="btn btn-sm btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#xlarge">
                            Create
                        </button>

                        <!--Extra Large Modal -->
                        <form method="POST" action="./club-create" enctype="multipart/form-data">
                            @csrf
                            <div class="modal fade text-left w-100" id="xlarge" tabindex="-1" aria-labelledby="myModalLabel16" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel16">Create Club</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" id="first-name-column" class="form-control" placeholder="Name" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="alias">Alias</label>
                                                        <input type="text" id="alias" class="form-control" placeholder="Alias" name="alias" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="dept">Department</label>
                                                        <input type="text" id="dept" class="form-control" placeholder="Department" name="dept" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="room">Room No</label>
                                                        <input type="number" id="room" class="form-control" name="room" placeholder="Room No" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fbPageURL">FB Page URL (optional)</label>
                                                        <input type="text" id="fbPageURL" class="form-control" name="fbPageURL" placeholder="FB Page URL">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fbGroupURL">FB Group URL (optional)</label>
                                                        <input type="text" id="fbGroupURL" class="form-control" name="fbGroupURL" placeholder="FB Group URL">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="mainImage">Main Image</label>
                                                        <input type="file" id="mainImage" class="form-control" name="mainImage" accept="image/png, image/jpeg" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="achievements">Achievements (optional)</label>
                                                        <input type="file" id="achievements" class="form-control" name="achievements[]" accept="image/png, image/jpeg" multiple>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="committee">Committee</label>
                                                        <input id="committee" class="form-control" name="committee" placeholder="Committee" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="intro">Intro</label>
                                                        <textarea id="intro" class="form-control" name="intro" placeholder="Intro" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="objective">Objective</label>
                                                        <textarea id="objective" class="form-control" name="objective" placeholder="Objective" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="submit" class="btn btn-primary ms-1">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Create</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- table head dark -->
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-dark">
                        <tr>
                            <th>SL</th>
                            <th>Email</th>
                            <th>Student ID</th>
                            <th>Mobile</th>
                            <th>Batch</th>
                            <th>Dept</th>
                            <th>Approved?</th>
                            <th>Approved At</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $result['email'] }}</td>
                                <td>{{ $result['studentId'] }}</td>
                                <td>{{ $result['mobile'] }}</td>
                                <td>{{ $result['batch'] }}</td>
                                <td>{{ $result['dept'] }}</td>
                                <td>
                                    @if($result['isApproved'])
                                        Yes
                                    @else
                                        No
                                    @endif
                                </td>
                                <td>{{ $result['approvedAt'] }}</td>
                                <td>
                                    @if($result['memberType'] == 2)
                                        <button class="btn btn-primary">Super Admin</button>
                                    @else
                                        @if($result['isApproved'])
                                            <form method="POST" action="./member-unapprove">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$result['id']}}">
                                                <button class="btn btn-danger" type="submit">Unapprove</button>
                                            </form>
                                        @else
                                            <form method="POST" action="./member-approve">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$result['id']}}">
                                                <button class="btn btn-primary" type="submit">Approve</button>
                                            </form>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    <form method="POST" action="./member-delete">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$result['id']}}">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


@include('/../include/footer')
