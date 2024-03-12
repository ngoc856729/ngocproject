@extends('layout.view_dashboard')
@section('content')
    <!-- Title -->
    <div class="row">
        <div class="col-12 mb-3">
            <h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
        </div>
    </div>

    <!-- Counter boxes START -->
    <div class="row g-4 mb-4">
        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-warning bg-opacity-15 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1958"
                            data-purecounter-delay="200" data-purecounter-duration="0">{{ $count_users }}</h2>
                        <span class="mb-0 h6 fw-light">Numbers of users</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class='bx bx-user'></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-purple bg-opacity-10 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1600"
                            data-purecounter-delay="200" data-purecounter-duration="0">{{ $count_course }}</h2>
                        <span class="mb-0 h6 fw-light">Numbers of Course</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-purple text-white mb-0"><i class='bx bx-book-bookmark'></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-primary bg-opacity-10 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1235"
                            data-purecounter-delay="200" data-purecounter-duration="0">{{ $datastudent }}</h2>
                        <span class="mb-0 h6 fw-light">Numbers of Students</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i
                            class="fas fa-user-graduate fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-success bg-opacity-10 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <div class="d-flex">
                            <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="845"
                                data-purecounter-delay="200" data-purecounter-duration="0">{{ $count_class }}</h2>

                        </div>
                        <span class="mb-0 h6 fw-light">Numbers of Class</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-success text-white mb-0"><i
                            class="fa-solid fa-graduation-cap"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter boxes END -->

    <div class="row g-4 mb-4">
        <div id="tableExample3"
            data-list='{"valueNames":["id","name","created at","updated at","option"],"page":5,"pagination":true}'>
            <div class="row justify-content-end g-0">

                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2 mb-2" role="group" aria-label="First group">
                        <button class="btn btn-falcon-danger btn-sm ms-2 me-2" type="button" data-bs-toggle="modal"
                            data-bs-target="#error-modal"><i class="fa-solid fa-plus"></i> Thêm role user</button>
                    </div>
                    <div class="btn-group mb-2 mr-2" role="group" aria-label="Second group">
                        <form>
                            <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                    type="search" placeholder="Search..." aria-label="search" />
                                <div class="input-group-text bg-transparent"><span
                                        class="fa fa-search fs-10 text-600"></span></div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                            <div class="modal-content position-relative">
                                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
                                        <h5 class="mb-1" id="modalExampleDemoLabel"><i
                                                class="fa-solid fa-ruler me-2"></i>Thêm role users</h5>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <form>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Name:</label>
                                                <input class="form-control" id="namerole" type="text" />
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="button" id="insertrole">Thêm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <h4 class="mb-4">Role User</h4>
            <div class="table-responsive scrollbar">
                <table class="table table-bordered table-striped fs-10 mb-0">
                    <thead class="bg-200">
                        <tr>
                            <th class="text-900 sort" data-sort="id">id</th>
                            <th class="text-900 sort" data-sort="name">name</th>
                            <th class="text-900 sort" data-sort="created at">created at</th>
                            <th class="text-900 sort" data-sort="updated at">updated at</th>
                            <th class="text-900 sort" data-sort="option">Options</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($dataroles as $key => $item)
                            <tr>
                                <td class="id">{{ ++$key }}</td>
                                <td class="name" id="name{{ $item->id }}">{{ $item->name }}</td>
                                <td class="created at">{{ $item->created_at }}</td>
                                <td class="updated at">{{ $item->updated_at }}</td>
                                <td class="option">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-2 mb-2" role="group" aria-label="First group">
                                            <button id={{ $item->id }} onClick="delete_role({{ $item->id }})"
                                                class="me-4 btn btn-outline-danger btn-sm"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </div>
                                        <div class="btn-group mb-2 mr-2" role="group" aria-label="Second group">
                                            <button id={{ $item->id }} class="me-4 btn btn-outline-warning btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#error-modal2"
                                                onClick="selectupdate({{ $item->id }})"><i
                                                    class="fa-solid fa-wrench"></i></button>
                                            </div>
                                    </div>
                                </td>
                                        </div>
        </div>
        </td>
        </tr>
        @endforeach
        <div class="modal fade" id="error-modal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                <div class="modal-content position-relative">
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
                            <h5 class="mb-1" id="modalExampleDemoLabel"><i class="fa-solid fa-ruler me-2"></i>Update
                                role users</h5>
                        </div>
                        <div class="p-4 pb-0">
                            <form>
                                <div class="mb-3">
                                    <label class="col-form-label" for="recipient-name">Name:</label>
                                    <input class="form-control" id="nameupdaterole" type="text" />
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" onclick="updateRole()" id="updatetrole">Save update
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button"
            title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
        <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
            title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        $(document).ready(function(e) {
            addrole();
            delete_role();
            selectupdate();
            updateRole();
            
        });

        var sleepSetTimeout_ctrl;

        

        function addrole() {
            $("#insertrole").click(function(e) {
                e.preventDefault();
                var role = $("#namerole").val().trim();
                if (role == "") {
                    const notyf = new Notyf({
                        duration: 1000,
                        position: {
                            x: 'right',
                            y: 'top',
                        },
                        types: [{
                            type: 'warning',
                            background: 'blue',
                            duration: 2000,
                            dismissible: true
                        }]
                    });
                    notyf.open({
                        type: 'warning',
                        message: 'Vui lòng điền đầy đủ thông tin'
                    })
                } else {
                    k=localStorage.getItem('token')
                    $.ajax({
                        type: "get",
                        url: "/createdroleuser",
                        data: {
                            'rolename': role,
                            'token':k
                        },
                        dataType: "JSON",
                        success: function(response) {
                            console.log(response);

                            const notyf = new Notyf({
                                duration: 1000,
                                position: {
                                    x: 'right',
                                    y: 'top',
                                },
                                types: [{
                                    type: 'success',
                                    background: 'blue',
                                    duration: 2000,
                                    dismissible: true
                                }]
                            });
                            notyf.open({
                                type: 'success',
                                message: 'Tạo thành công'
                            })
                            window.location.reload();
                        }
                    });
                }
            })
        }

        function delete_role(id) {
            
            console.log(id);
            k=localStorage.getItem('token')
            $.ajax({
                
                type: "delete",
                url: "/removeroleuser",
                data: {
                    "id": id,
                    'token':k
                },
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    const notyf = new Notyf({
                        duration: 1000,
                        position: {
                            x: 'right',
                            y: 'top',
                        },
                        types: [{
                            type: 'success',
                            background: 'indianred',
                            duration: 2000,
                            dismissible: true
                        }]
                    });

                    notyf.open({
                        type: 'success',
                        message: '<b style="color:black">Xóa Thành công</b>'
                    })

                    window.location.reload();

                }
            });
        }

        function selectupdate(id) {
            k=localStorage.getItem('token')
            console.log($("#name" + id).text());
            $("#nameupdaterole").val($("#name" + id).text());
            $("#updatetrole").attr("name", id);
        }

        function updateRole() {
            k=localStorage.getItem('token')
            $("#updatetrole").click(function(e) {
                e.preventDefault();
                console.log($("#updatetrole").attr("name"));
                console.log($("#nameupdaterole").val());
                var rolenamecheck = $("#nameupdaterole").val();
                if (rolenamecheck == "") {
                    const notyf = new Notyf({
                        duration: 1000,
                        position: {
                            x: 'right',
                            y: 'top',
                        },
                        types: [{
                            type: 'warning',
                            background: 'indianred',
                            duration: 2000,
                            dismissible: true
                        }]
                    });

                    notyf.open({
                        type: 'warning',
                        message: '<b style="color:black">Vui lòng điền đầy đủ thông tin</b>'
                    })

                } else {
                    k=localStorage.getItem('token')
                    $.ajax({
                        type: "put",
                        url: "/updateroleuser",
                        data: {
                            "id": $("#updatetrole").attr("name"),
                            "rolename": rolenamecheck,
                            'token':k
                        },
                        dataType: "JSON",
                        success: function(response) {
                            console.log(response);
                            const notyf = new Notyf({
                                duration: 1000,
                                position: {
                                    x: 'right',
                                    y: 'top',
                                },
                                types: [{
                                    type: 'success',
                                    background: 'indianred',
                                    duration: 2000,
                                    dismissible: true
                                }]
                            });

                            notyf.open({
                                type: 'success',
                                message: '<b style="color:black">Update Thành công</b>'
                            })
                            window.location.reload();
                        }
                    });
                }

            });
        }
    </script>

    <!-- Page content END -->
@endsection
