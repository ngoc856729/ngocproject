@extends('layout.view_dashboard')
@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <h1 class="h3 mb-2 mb-sm-0">Created users</h1>
        </div>
    </div>
    <div id="tableExample3"
        data-list='{"valueNames":["id","Username","Email","Numberphone","Rolename","Status","Created at","Updated at","Options"],"page":5,"pagination":true,"filter":{"key":"Status"}}'>
        <div class="row g-0">
            <div class="col-auto col-sm-6 mb-3">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2 mb-2" role="group" aria-label="First group">
                        <button style="height:34px" class="btn btn-falcon-danger btn-sm ms-2 me-2" type="button"
                            data-bs-toggle="modal" data-bs-target="#insert-modal"><i class="fa-solid fa-plus"></i> Thêm
                            user</button>
                    </div>
                    <div class="btn-group mr-2 mb-2" role="group" aria-label="First group">
                        <form>
                            <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                    type="search" placeholder="Search..." aria-label="search" />
                                <div class="input-group-text bg-transparent"><span
                                        class="fa fa-search fs--1 text-600"></span></div>
                            </div>
                        </form>
                    </div>
                    <div class="btn-group mr-2 mb-2" role="group" aria-label="First group">

                        <div class="modal fade" id="insert-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                <div class="modal-content position-relative">
                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                                            <h5 class="mb-1" id="modalExampleDemoLabel">Thêm tài khoản</h5>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <form>
                                                <div class="mb-3">
                                                    <label class="col-form-label" for="recipient-name">Tên tài
                                                        khoản:</label>
                                                    <input class="form-control" id="nameaccount" type="text" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label" for="message-text">Địa chỉ email:</label>
                                                    <input class="form-control" id="emailaccount" type="text" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label" for="message-text">Số điện thoại:</label>
                                                    <input class="form-control" id="numberphoneaccount" type="text" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label" for="message-text">Mật khẩu:</label>
                                                    <input class="form-control" id="password" type="password"
                                                        id="passaccount" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label" for="message-text">Loại tài khoản:</label>
                                                    <select style="height: 50px" id="roles_account"
                                                        class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">

                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button id="submitinsert" class="btn btn-primary" type="button">Thêm tài
                                            khoản</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                            <div class="modal-content position-relative">
                                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                                        <h5 class="mb-1" id="modalExampleDemoLabel">Update tài khoản</h5>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <form>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Tên tài
                                                    khoản:</label>
                                                <input class="form-control" id="nameaccountUp" type="text" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="message-text">Địa chỉ email:</label>
                                                <input class="form-control" id="emailaccountUp" type="text" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="message-text">Số điện thoại:</label>
                                                <input class="form-control" id="numberphoneaccountUp" type="text" />
                                            </div>


                                            <div class="mb-3">
                                                <label class="col-form-label" for="message-text">Tình trạng tài
                                                    khoản:</label>
                                                <select name="status" class="form-select" id="statusselect">
                                                    <option value="1">
                                                        Blocked</option>
                                                    <option value="0">
                                                        Active</option>
                                                </select>
                                            </div>


                                            <div class="mb-3">
                                                <label class="col-form-label" for="message-text">Loại tài khoản:</label>
                                                <select id="roles_accountUp" class="form-select mb-3"
                                                    aria-label=" example">
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-bs-dismiss="modal">Close</button>
                                    <button id="submitUpdate" class="btn btn-primary" type="button">Update tài
                                        khoản</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table table-bordered table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                        <tr>
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort" data-sort="id">id</th>
                                    <th class="sort" data-sort="Username">Username</th>
                                    <th class="sort" data-sort="Email">Email</th>
                                    <th class="sort" data-sort="Rolename">Rolename</th>
                                    <th class="sort" data-sort="Numberphone">Numberphone</th>
                                    <th class="sort" data-sort="Status">Status</th>
                                    
                                    <th class="sort" data-sort="Options">Options</th>
                                </tr>
                            </thead>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($data_users as $key => $item)
                            <tr>
                                <td class="id">{{ ++$key }}</td>
                                <td class="Username" id="name{{ $item->id }}">{{ $item->name }}</td>
                                <td class="Email" id="Email{{ $item->id }}">{{ $item->email }}</td>
                                <td class="Rolename">{{ $item->rolename }}</td>
                                <td class="Numberphone" id="Numberphone{{ $item->id }}">{{ $item->phone }}</td>
                                @if ($item->status == 0)
                                    <td id="Status{{ $item->id }}" value="0"
                                        class="align-middle text-end fs-0 white-space-nowrap payment"><span
                                            class="badge badge rounded-pill badge-subtle-secondary"
                                            style="background-color: red">Blocked<span class="ms-1 fas fa-ban"
                                                data-fa-transform="shrink-2"></span></span></td>
                                @endif
                                @if ($item->status == 1)
                                    <td id="Status{{ $item->id }}" value="1"
                                        class="align-middle text-end fs-0 white-space-nowrap payment"><span
                                            class="badge badge rounded-pill badge-subtle-success"
                                            style="background-color: green">Success<span class="ms-1 fas fa-check"
                                                data-fa-transform="shrink-2"></span></span></td>
                                @endif
                                
                                <td class="Options">

                                    <div style="display: flex" class="btn-toolbar" role="toolbar"
                                        aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <button style="with:30px;height:30px" id={{ $item->id }}
                                                onClick="delete_user({{ $item->id }})"
                                                class="me-4 btn btn-outline-danger btn-sm"><i
                                                    class="fa-solid fa-trash"></i></button>
                                            <button style="with:30px;height:30px" id={{ $item->id }}
                                                class="me-4 btn btn-outline-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#update-modal"
                                                onClick="selectupdate({{ $item->id }})"><i
                                                    class="fa-solid fa-wrench"></i></button>
                                        </div>


                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tr>


                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1"
                    type="button" title="Previous" data-list-pagination="prev"><span
                        class="fas fa-chevron-left"></span></button>
                <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                    title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        $(document).ready(function() {
            insert_users();
        });
        k=localStorage.getItem('token')
        $.ajax({
            type: "get",
            url: "/selectuser",
            data: {
                'token':k
            },
            dataType: "JSON",
            success: function(response) {
                console.log(response);
                var data = response.data
                string1 = ``
                for (let index = 0; index < data.length; index++) {
                    string2 = `<option value="` + response.id[index] + `">` + response.data[index] + `</option>`
                    string1 = string1 + string2
                }
                console.log(string1);
                $("#roles_account").html(string1)
            }
        });

        function insert_users() {
            $("#submitinsert").click(function(e) {
                e.preventDefault();
                var name = $("#nameaccount").val();
                var email = $("#emailaccount").val();
                var phone = $("#numberphoneaccount").val();
                var password = $("#password").val();
                console.log(name);
                console.log(email);
                var id_role = $("#roles_account").find(":selected").val();
                if (name == "" || email == "" || phone == "" || password == "") {
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
                        type: "post",
                        url: "/insertuser",
                        data: {
                            "name": name,
                            "email": email,
                            "phone": phone,
                            "status": 0,
                            "password": password,
                            "id_roles": id_role,
                            'token':k
                        },
                        dataType: "JSON",
                        success: function(response) {
                            console.log(response);
                            if (response.check == false) {
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
                                    message: respons.msg
                                })
                            } else {
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
                                    message: 'Thêm thành công'
                                })
                                window.location.reload()
                            }

                        }
                    });
                }

            });
        }


        function delete_user(id) {
            k=localStorage.getItem('token')
            $.ajax({
                type: "delete",
                url: "/deleteuser",
                data: {
                    "id": id,
                    'token':k
                },
                dataType: "JSON",
                success: function(response) {
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
                        message: 'Xóa thành công'
                    })
                    window.location.reload()
                }
            });
        }

        function selectupdate(id) {
            var email = $("#Email" + id).text();
            var name = $("#name" + id).text();
            var phone = $("#Numberphone" + id).text();
            var rolename = $("#Rolename" + id).text();
            var status = $("#Status" + id).attr("value");
            var k = localStorage.getItem("token")
            $.ajax({
                type: "get",
                url: "/selectuser",
                data: {
                    'token':k
                },
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    var data = response.data
                    string1 = ``
                    for (let index = 0; index < data.length; index++) {
                        string2 = `<option value="` + response.id[index] + `">` + response.data[index] +
                            `</option>`
                        string1 = string1 + string2
                    }
                    console.log(string1);
                    $("#roles_accountUp").html(string1)
                }
            });
            $("#nameaccountUp").val(name);
            $("#emailaccountUp").val(email);
            $("#numberphoneaccountUp").val(phone);
            $("#submitUpdate").attr("name", id);
        }


        $("#submitUpdate").click(function(e) {
            e.preventDefault();
            var name = $("#nameaccountUp").val();
            var email = $("#emailaccountUp").val();
            var phone = $("#numberphoneaccountUp").val();
            var id_roles = $("#roles_accountUp").find(":selected").val();;
            var status = $("#statusselect").find(":selected").val();
            console.log(name);
            if (name == "" || email == "" || phone == "" || id_roles == "" || status == "") {
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
                    type: "put",
                    url: "/updateuser",
                    data: {
                        'name': name,
                        'email': email,
                        'phone': phone,
                        'id_roles': id_roles,
                        'status': status,
                        'token':k
                    },
                    dataType: "JSON",
                    success: function(response) {
                        if (response.check == false) {
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
                                message: response.msg
                            })
                        } else {
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
                                message: 'Update thành công'
                            })
                            window.location.reload();
                        }

                    }
                });
            }

        });
    </script>
@endsection
