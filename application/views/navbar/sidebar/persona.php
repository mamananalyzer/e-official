<!-- <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Layout Default</h3>
                <p class="text-subtitle text-muted">The default layout.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layout Default</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Default Layout</h4>
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, commodi? Ullam quaerat similique iusto
                temporibus, vero aliquam praesentium, odit deserunt eaque nihil saepe hic deleniti? Placeat delectus
                quibusdam ratione ullam!
            </div>
        </div>
    </section>
</div> -->

<div class="row">
    <div class="col-12">
        <section class="section">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card-header">
                            <h5 class="card-title">
                                Member of Teams
                            </h5>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- button trigger for  Vertically Centered modal -->
                                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter">
                                        Add Member
                                    </button>
                                    <!-- Vertically Centered modal Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Persona
                                                    </h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <section>
                                                        <div class="col-md-12 col-12">
                                                            <div class="card">
                                                                <!-- <div class="card-header">
                                                                    <h4 class="card-title">Add Persona</h4>
                                                                </div> -->
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <form onsubmit="generate(); class="form form-horizontal" method="post" action="<?= base_url('persona/register'); ?>" enctype="multipart/form-data">
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-5">
                                                                                        <label for="first-name-horizontal-icon">Name</label>
                                                                                    </div>
                                                                                    <div class="col-md-7">
                                                                                        <div class="form-group has-icon-left">
                                                                                            <div class="position-relative">
                                                                                                <input type="text" class="form-control" name="name" placeholder="Name"
                                                                                                    id="first-name-horizontal-icon">
                                                                                                <div class="form-control-icon">
                                                                                                    <i class="bi bi-person"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-5">
                                                                                        <label for="email-horizontal-icon">Email</label>
                                                                                    </div>
                                                                                    <div class="col-md-7">
                                                                                        <div class="form-group has-icon-left">
                                                                                            <div class="position-relative">
                                                                                                <input type="email" class="form-control" name="email" placeholder="Email"
                                                                                                    id="email-horizontal-icon">
                                                                                                <div class="form-control-icon">
                                                                                                    <i class="bi bi-envelope"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-5">
                                                                                        <label for="password-horizontal-icon">Password</label>
                                                                                    </div>
                                                                                    <div class="col-md-7">
                                                                                        <div class="form-group has-icon-left">
                                                                                            <div class="position-relative">
                                                                                                <input type="password" class="form-control" name="password1" placeholder="Password" id="password-horizontal-icon">
                                                                                                <div class="form-control-icon">
                                                                                                    <i class="bi bi-lock"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-5">
                                                                                        <label for="password-horizontal-icon">Repeat Password</label>
                                                                                    </div>
                                                                                    <div class="col-md-7">
                                                                                        <div class="form-group has-icon-left">
                                                                                            <div class="position-relative">
                                                                                                <input type="password" class="form-control" name="password2" placeholder="Repeat Password" id="password-horizontal-icon">
                                                                                                <div class="form-control-icon">
                                                                                                    <i class="bi bi-lock"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-5">
                                                                                        <label for="password-horizontal-icon">Image</label>
                                                                                    </div>
                                                                                    <div class="col-md-7">
                                                                                        <div class="form-group has-icon-left">
                                                                                            <div class="position-relative">
                                                                                                <input type="file" class="form-control" name="image" placeholder="Image" id="image">
                                                                                                <div class="form-control-icon">
                                                                                                    <i class="bi bi-image"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 d-flex justify-content-end">
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <button type="submit" class="btn btn-primary me-1 mb-1">Add</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>QR</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php foreach ($persona_data['data'] as $p):?>                                
                                        <tr>
                                            <td><?= $p['name']; ?></td>
                                            <td><?= $p['email']; ?></td>
                                            <td>
                                                <img class="bd-placeholder-img" width="50" src="<?= base_url('./assets/img/profile/') . $p['image']; ?>">
                                            </td>
                                            <td><?= $p['role_id']; ?></td>
                                            <td>
                                                <?php if ($p['is_active'] == "1"): ?>
                                                    <span class="badge bg-success">Active</span>
                                                <?php elseif ($p['is_active'] == "2"): ?>
                                                    <span class="badge bg-warning">Not Active</span>
                                                <?php else: ?>
                                                    <span class="badge bg-danger">Check Data</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <img class="bd-placeholder-img" width="50" src="<?= base_url('./assets/qrcodes/') . $p['qr']; ?>">
                                            </td>
                                                    <td>
                                                        <a href="<?= base_url('persona/show'); ?>" class="btn icon btn-info"><i class="bi bi-info-circle"></i></a>
                                                        <!-- <button type="submit" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button> -->
                                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#danger">Delete</button>
                                                    </td>
                                                    <!--Danger theme Modal -->
                                                    <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <h5 class="modal-title white" id="myModalLabel120">Delete Persona
                                                                    </h5>
                                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Deleting a persona will result in the removal of all user data and experiences associated with that persona.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>
                                                                    <form action="<?= base_url('persona/delete_persona/' . $p['id']) ?>" method="post">
                                                                    <button type="submit" class="btn btn-danger ms-1" data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                    </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        </section>
    </div>
</div>