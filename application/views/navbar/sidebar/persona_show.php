<style>
    body {
        zoom: 88%;
    }
</style>

<script src="assets/static/js/initTheme.js"></script>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <a href="<?= base_url('persona'); ?>"><i class="bi bi-chevron-left"></i></a>
        </div>


        <div class="card-body">
            <section id="content-types">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="card text-center">
                            <div class="card-content">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/img/profile/'). $image ?>" alt="" width="66%">
                                    <h4 class="card-title"><?= $name ?></h4>
                                    <p class="card-text">
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="card-footer justify-content-between">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-primary">Follow</button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-secondary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="cardAccordion">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">LinkedIn</li>
                                        <li class="list-group-item">Twitter</li>
                                        <li class="list-group-item">Instagram</li>
                                        <li class="list-group-item">Facebook</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Persona Detail</h4>
                            </div>
                            <div class="card-body row">
                                <ul class="list-group list-group-flush col-md-2">
                                    <li class="list-group-item">Full Name</li>
                                    <li class="list-group-item">Email</li>
                                    <li class="list-group-item">Role</li>
                                    <li class="list-group-item">Status</li>
                                    <li class="list-group-item">QR</li>
                                </ul>
                                <ul class="list-group list-group-flush col-md-10">
                                    <li class="list-group-item"><?= $name ?></li>
                                    <li class="list-group-item"><?= $email ?></li>
                                    <li class="list-group-item"><?= $role_id ?></li>
                                    <li class="list-group-item"><?= $is_active ?></li>
                                    <img src="<?= base_url('assets/qrcodes/'). $qr ?>" width="22%" class="list-group-item"></img>
                                </ul>
                            </div>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title mb-0">Persona Progress</h4>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <!-- Progress Label Start  -->
                                        <section class="section">
                                            <div class="card">
                                                <div class="card-body">
                                                    <span>Header</span>
                                                    <div class="progress progress-primary  mb-4">
                                                        <div class="progress-bar progress-label" role="progressbar" style="width: 60%" aria-valuenow="60"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span>Speed</span>
                                                    <div class="progress progress-warning  mb-4">
                                                        <div class="progress-bar progress-label" role="progressbar" style="width: 30%" aria-valuenow="30"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span>Drible</span>
                                                    <div class="progress progress-danger  mb-4">
                                                        <div class="progress-bar progress-label" role="progressbar" style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <!-- Progress Label Start  -->
                                        <section class="section">
                                            <div class="card">
                                                <div class="card-body">
                                                    <span>Accuracy</span>
                                                    <div class="progress progress-secondary  mb-4">
                                                        <div class="progress-bar progress-label" role="progressbar" style="width: 40%" aria-valuenow="40"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span>Speed</span>
                                                    <div class="progress progress-success  mb-4">
                                                        <div class="progress-bar progress-label" role="progressbar" style="width: 80%" aria-valuenow="80"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span>Physical</span>
                                                    <div class="progress progress-info  mb-4">
                                                        <div class="progress-bar progress-label" role="progressbar" style="width: 50%" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100">
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
            </section>
        </div>


    </div>
</div>

