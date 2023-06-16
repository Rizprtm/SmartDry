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
                            <h3>Pemesanan</h3>
                            <p class="text-subtitle text-muted">Input pemesanan jasa laundry</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Input</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                <form action = "<?php echo base_url ('C_Laundry/addpesanan') ?>" method ="post">
                                    <div class="form-group">
                                        <label for="disabledInput">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="disabledInput"  >
                                    </div>
                                    <label for="basicInput">Jenis Paket</label>
                                    <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenispaket"
                                            id="flexRadioDefault1" value="Reguler" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Reguler (Cuci + Setrika)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenispaket"
                                            id="flexRadioDefault2" value="Setrika">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Setrika
                                        </label>
                                    </div>
                                    
                                </div>
                            
                                            <div class="form-group">
                                        <label for="helpInputTop">Berat</label>
                                        <small class="text-muted">(dalam kg)<i>    contoh : 8</i></small>
                                        <input type="text" class="form-control" id="helpInputTop" name="berat" >
                                    </div>
                                            <div class="form-group">
                                        <label for="basicInput">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="disabledInput" >
                                    </div>
                                    <label for="basicInput">PEMBAYARAN</label>
                                    <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="status1" value="BELUM BAYAR" checked>
                                        <label class="form-check-label" for="status1">
                                            BELUM BAYAR
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="status2" value="LUNAS" >
                                        <label class="form-check-label" for="status2">
                                            LUNAS
                                        </label>
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="catatan"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="buttons">
                                        <button type="submit" class="btn btn-primary">Done</a>
                                </div>
                             </form>
                        <div class="col">
                            <div class="card">
                                
                                    
                                
                            </div>
                        </div>
                    </div>
                
                                    

                                    
                                </div>
                
                                
                                
                            </div>
                        </div>
                    </div>
                </section>

               

                

            </div>

            
        </div>
        <script>
            r date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

            var optSimple = {
            format: 'mm-dd-yyyy',
            todayHighlight: true,
            orientation: 'bottom right',
            autoclose: true,
            container: '#sandbox'
            };

            var optComponent = {
            format: 'mm-dd-yyyy',
            container: '#datePicker',
            orientation: 'auto top',
            todayHighlight: true,
            autoclose: true
            };

            // SIMPLE
            $( '#simple' ).datepicker( optSimple );

            // COMPONENT
            $( '#datePicker' ).datepicker( optComponent );

            // ===================================

            $( '#datepicker1' ).datepicker({
            format: "mm : dd : yyyy",
            todayHighlight: true,
            autoclose: true,
            container: '#box1',
            orientation: 'top right'
            });

            $( '#datepicker2' ).datepicker({
            format: 'mm \\ dd \\ yyyy',
            todayHighlight: true,
            autoclose: true,
            container: '#box2',
            orientation: 'top right'
            });

            $( '#datepicker1, #datepicker2, #simple, #datePicker' ).datepicker( 'setDate', today );
</script>