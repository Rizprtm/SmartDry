<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Register User</h3>
                            <p class="text-subtitle text-muted">Input pemesanan jasa laundry</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Inputs</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                <form action = "<?php echo base_url ('C_Laundry/adduser') ?>" method ="post">
                                    <div class="form-group">
                                        <label for="basicInput">Nama</label>
                                        <input type="text" class="form-control" name="nama">
                                        </div>
                                   
                                    
                                            <div class="form-group">
                                        <label for="basicInput">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" 
                                            >
                                            <div class="form-group">
                                        <label for="basicInput">Telepon</label>
                                        
                                        <input type="number" class="form-control" name="telp" placeholder="+62 contoh=628xxxxxxx"
                                            >
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Username</label>
                                        <input type="text" class="form-control" name="username"
                                            >
                                            <div class="form-group">
                                        <label for="basicInput">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            >
                                    <div class="form-group">
                                        <label for="basicInput">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            >
                                    </div>

                                    
                                    <div class="buttons">
                                        <button type="submit" class="btn btn-primary">Done</a>
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