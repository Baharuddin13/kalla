<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogi - Admin and Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- DataTable -->
    <link rel="stylesheet" href="vendors/dataTable/datatables.min.css" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="vendors/prism/prism.css" type="text/css">

<!-- App css -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.min.css" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->

<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href=index.html>
                        <img class="logo" src="assets/media/image/logo.png" alt="logo">
                    </a>
                </div>
            </div>

            <div class="header-body">
                <div class="header-body-left">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-3">
                            <div class="header-search-form">
                                <form>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn">
                                                <i data-feather="search"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search" id="search">
                                        <div class="input-group-append">
                                            <button class="btn header-search-close-btn">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="header-body-right">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                <figure class="avatar avatar-sm">
                                    <img src="assets/media/image/user/man_avatar3.jpg"
                                         class="rounded-circle"
                                         alt="avatar">
                                </figure>
                                <span class="ml-2 d-sm-inline d-none">Bony Gidden</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="text-center py-4">
                                    <figure class="avatar avatar-lg mb-3 border-0">
                                        <img src="assets/media/image/user/man_avatar3.jpg"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="text-center">Bony Gidden</h5>
                                    <div class="mb-3 small text-center text-muted">@bonygidden</div>
                                    <a href="#" class="btn btn-outline-light btn-rounded">Manage Your Account</a>
                                </div>
                                <div class="list-group">
                                    <a href="profile.html" class="list-group-item">View Profile</a>
                                    <a href="http://bifor.laborasyon.com/login" class="list-group-item text-danger"
                                       data-sidebar-target="#settings">Sign Out!</a>
                                </div>
                                <div class="p-4">
                                    <div class="mb-4">
                                        <h6 class="d-flex justify-content-between">
                                            Storage
                                            <span>%25</span>
                                        </h6>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 40%;"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <hr class="mb-3">
                                    <p class="small mb-0">
                                        <a href="#">Privacy policy</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-header">
                <span>Navigation</span>
                <a href="#">
                    <i class="ti-close"></i>
                </a>
            </div>
            <div class="navigation-menu-body">
                <ul>
                    <li>
                        <a  class="active" href=index.html>
                    <span class="nav-link-icon">
                        <i data-feather="pie-chart"></i>
                    </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">
                
                <div class="page-header">
                    <div class="row justify-content-between mx-2">
                        <div>
                        <h3>Datatable</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="mr-1">
                            <button type="button" class="btn btn-primary" onclick="formTambah()" data-bs-toggle="modal">Tambah</button>
                        </div>
                        <select class="form-control" aria-label="Default select example" id="filterRole">
                            <option value="">All</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                          </select>
                    </div>
                    </div>
                </div>

               

                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="dataUser"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- ./ Content -->

            <!-- Modal -->
            <div class="modal" tabindex="-1" role="dialog" id="modalForm">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalTitle"></h5>
                      <button type="button" class="close" onclick="closeModal()" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form id="formModal">
                            <input type="hidden" name="id" id="id">
                            <div class="mb-3">
                              <label for="formUsername" class="form-label">Username</label>
                              <input type="text" name="username" class="form-control" id="formUsername" aria-describedby="usernameHelp">
                            </div>
                            <div class="mb-3">
                              <label for="formPassword" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="formPassword">
                            </div>
                            <div class="mb-3">
                                <label for="selectRole" class="form-label">Role</label>
                                <select class="form-control" name="role" id="formRole">
                                    <option value="">Pilih Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                          </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" onclick="closeModal()" class="btn btn-secondary">Close</button>
                      <button type="button" onclick="tambahUser()" id="btnTambah" class="btn btn-primary">Save</button>
                      <button type="button" onclick="updateUser()" id="btnUpdate" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </div>
              </div>
            

            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2020 Gogi - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
       
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="vendors/bundle.js"></script>

    <!-- DataTable -->
    <script src="vendors/dataTable/datatables.min.js"></script>
    <script src="assets/js/examples/datatable.js"></script>

    <!-- Prism -->
    <script src="vendors/prism/prism.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.min.js"></script>
<script>
    let search = '';
    let filterRole = '';

    showData(search, filterRole);

        function showData(search, filterRole){
            $.ajax({
                url:'controllers/show.php',
                method:'GET',
                data:{
                    search:search,
                    filter:filterRole
                }
            }).then(function (x){
                console.log(x);
                $('#dataUser').html(x);
            })
        }

        function hapus(id){
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete This User!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url:'controllers/hapus.php',
                        method:'GET',
                        data:{id:id}
                    }).then(function (x){
                        x = JSON.parse(x);
                        if(x.status == "success"){
                            iziToast.success({
                                title: 'Success',
                                message: x.data,
                                position: 'topRight'
                            });
                            showData('','');
                        }else{
                            iziToast.error({
                                title: 'Error',
                                message: 'Data Not Deleted',
                                position: 'topRight'
                            });
                        }
                    })
                }
            })   
        }

        function formTambah(){  
            $('#modalForm').show();       
            $('#modalTitle').html('Tambah Data');
            $('#btnUpdate').hide();
            $('#btnTambah').show();
        }

        function closeModal(){
            $('#modalForm').hide();
        }

        function tambahUser(){
            $.ajax({
                url:'controllers/tambah.php',
                method:'POST',
                data: $('#formModal').serialize()
            }).then(function (x){
                x = JSON.parse(x);
                if(x.status == "success"){
                    iziToast.success({
                        title: 'Success',
                        message: 'Data Added',
                        position: 'topRight'
                    });
                    showData('','');
                    closeModal();
                    $('#formModal')[0].reset();
                }else{
                    iziToast.error({
                        title: 'Error',
                        message: 'Data Not Added',
                        position: 'topRight'
                    });
                }
            })
        }

        function updateUser(){
            $.ajax({
                url:'controllers/update.php',
                method:'POST',
                data: $('#formModal').serialize()
            }).then(function (x){
                x = JSON.parse(x);
                if(x.status == "success"){
                    iziToast.success({
                        title: 'Success',
                        message: 'Data Updated',
                        position: 'topRight'
                    });
                    showData('', '');
                    closeModal();
                    $('#formModal')[0].reset();
                }else{
                    iziToast.error({
                        title: 'Error',
                        message: 'Data Not Updated',
                        position: 'topRight'
                    });
                }
            })
        }

        function update(id){
            $('#modalForm').show();
            $('#modalTitle').html('Update Data');
            $('#btnTambah').hide();
            $('#btnUpdate').show();
            $.ajax({
                url:'controllers/get.php?id='+id,
                method:'GET',
            }).then(function (x){
                x = JSON.parse(x);
                $('#id').val(x.data[0].id);
                $('#formUsername').val(x.data[0].username);
                $('#formPassword').val(x.data[0].password);
                $('#formRole').val(x.data[0].role).trigger('change');
            })
        }

       
        $('#search').keyup(()=>{
        
            search = $('#search').val();
            showData(search, filterRole);
        })

        $('#filterRole').change(()=>{
            filter = $('#filterRole').val();
            showData('', filter)
        })
</script>
</body>
</html>
