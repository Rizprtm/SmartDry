<div id="main">
<section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Total Penjualan</h3>
                                </div>
                                <div class="card-content">
                                    
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NAMA</th>
                                                    <th>JENIS PAKET</th>
                                                    <th>BERAT</th>
                                                    <th>ALAMAT</th>
                                                    <th>TGL TERIMA</th>
                                                    <th>HARGA</th>
                                                    <th>TOTAL</th>
                                                    <th>STATUS</th>
                                                    <th>AKSI</th>
                                                    
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $pendapatan = 0;
                                            foreach ($Laundry -> result_array() as $key):?>
                                                <tr>
                                                <td><?php echo $key['nama']?></td>
                                                <td><?php echo $key['jenispaket']?></td>
                                                <td><?php echo $key['berat']?></td>
                                                <td><?php echo $key['alamat']?></td>
                                                <td><?php echo $key['date']?></td>
                                                <td><?php echo "Rp. ".number_format($key['harga'], 0); ?></td>
                                                <td><?php echo "Rp. ".number_format($key['total'], 0); ?></td>
                                                <td><?php echo $key['status']?></td>
                                                <?php $pendapatan = $pendapatan + $key['total']?>
                                                <td><a href="<?php echo base_url('C_Laundry/lunas/'.$key['id_pemesanan']) ?>" rel="tooltip" class="btn btn-sm btn-success" data-original-title="" title="">
                                            <div class="material-icons">LUNAS</div>
                                            </a>
                                            <a href="<?php echo base_url('C_Laundry/tidaklunas/'.$key['id_pemesanan']) ?>" rel="tooltip" class="btn btn-sm btn-danger" data-original-title="" title="">
                                            <div class="material-icons">BELUM </td></div>
                                            <!-- <td><a href="<?php echo base_url('C_Laundry/ubahpesanan/'.$key['id_pemesanan']) ?>" rel="tooltip" class="btn btn-outline-success btn-just-icon btn-sm" data-original-title="" title="">
                                            <div class="material-icons">CHAT</div>
                                            </a> -->
                                                <td><a href="<?php echo base_url('C_Laundry/ubahpesanan/'.$key['id_pemesanan']) ?>" rel="tooltip" class="btn btn-primary btn-just-icon btn-sm" data-original-title="" title="">
                                            <div class="material-icons">EDIT</div>
                                            </a>
                                            <a href="<?php echo base_url('C_Laundry/deletePesanan/'.$key['id_pemesanan']) ?>" rel="tooltip" class="btn btn-dark btn-just-icon btn-sm" data-original-title="" title="">
                                            <div class="material-icons">DELETE</div>
                                                
                                                
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                
                                                <?php endforeach ?>
                                                
                                            </tbody>
                                            
                                            <td> Pendapatan : <?php echo "Rp. ".number_format($pendapatan, 0); ?></td>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
</div>