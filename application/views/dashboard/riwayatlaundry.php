<div id="main">
<section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Riwayat Laundry</h3>
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
                                                    <th>STATUS</th>
                                                    <th>CATATAN</th>
                                                    <th>HARGA</th>
                                                    <th>TOTAL</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            <?php $pendapatan = 0; foreach ($Laundry -> result_array() as $key):?>
                                                
                                                <tr>
                                                <td><?php echo $key['nama']?></td>
                                                <td><?php echo $key['jenispaket']?></td>
                                                <td><?php echo $key['berat']?></td>
                                                <td><?php echo $key['status']?></td>
                                                <td><?php echo $key['catatan']?></td>
                                                <td>Rp. <?php echo $key['harga']?></td>
                                                <?php $pendapatan = $pendapatan + $key['total']?>
                                                <td>Rp.<?php echo $key['total']?></td>
                                                
                                                
                                            
                                                
                                                
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <?php endforeach ?>
                                                
                                            </tbody>
                                            <td> Pendapatan : <?php echo "Rp. ".number_format($pendapatan, 0); ?>                        </td>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
</div>