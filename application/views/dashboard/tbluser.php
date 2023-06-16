<div id="main">
<section class="section">
                    <div class="row" id="table-head">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">User</h4>
                                </div>
                                
                                    
                                    <!-- table head dark -->
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>NAMA</th>
                                                    <th>ALAMAT</th>
                                                    <th>EMAIL</th>
                                                    <th>TELEPON</th>
                                                    <th>USERNAME</th>
                                                    <th>PASSWORD</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            

                                            <?php foreach ($Laundry -> result_array() as $key):?>
                                                <tr>
                                                <td><?php echo $key['nama']?></td>
                                                <td><?php echo $key['alamat']?></td>
                                                <td><?php echo $key['email']?></td>
                                                <td><?php echo $key['telp']?></td>
                                                <td><?php echo $key['username']?></td>
                                                <td><?php echo $key['password']?></td>
                                                <td><a href="<?php echo base_url('C_Laundry/ubah/'.$key['id_user']) ?>" rel="tooltip" class="btn btn-primary btn-just-icon btn-sm" data-original-title="" title="">
                                            <div class="material-icons">EDIT</div> </a>
                                            <a href="<?php echo base_url('C_Laundry/delete/'.$key['id_user']) ?>"  rel="tooltip" class="btn btn-dark btn-just-icon btn-sm" data-original-title="" title="">
                                            <div class="material-icons">DELETE</div></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
</div>