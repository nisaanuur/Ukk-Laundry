<div class="card">
    <div class="card-header">
        <h4>
            Transaksi
            <button class="btn btn-success" style="margin: 5px; width: 40px; height: 40px; border-radius:50%;"
            data-bs-toggle="modal"
            data-bs-target="#modal-transaksi" onclick="Add()">
                <span class="fa fa-plus"></span>
            </button>
            
        </h4>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <?php
            foreach ($transaksi->result() as $key => $value) { ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1">
                            <small>ID</small>
                            <h5>
                                <?php
                                echo $value->id;
                                ?>
                            </h5>
                        </div>
                        <div class="col-1">
                            <small>Member</small>
                            <h5>
                                <?php
                                echo $value->id_member;
                                ?>
                            </h5>
                        </div>
                        <div class="col-2">
                            <small>Masuk</small>
                            <h5>
                                <?php
                                echo $value->masuk;
                                ?>
                            </h5>
                        </div>
                        <div class="col-2">
                            <small>Selesai</small>
                            <h5>
                                <?php
                                echo $value->selesai;
                                ?>
                            </h5>
                        </div>
                        <div class="col-2">
                            <small>Tanggal Bayar</small>
                            <h5>
                                <?php
                                echo $value->tanggal_bayar;
                                ?>
                            </h5>
                        </div>
                        <div class="col-1">
                            <small>Status</small>
                            <h5>
                                <?php
                                echo $value->status;
                                ?>
                            </h5>
                        </div>
                        <div class="col-2">
                            <small>Dibayar</small>
                            <h5>
                                <?php
                                echo $value->dibayar;
                                ?>
                            </h5>
                        </div>
                        <div class="col-1">
                            <small>User</small>
                            <h5>
                                <?php
                                echo $value->id_user;
                                ?>
                            </h5>
                        </div>
                        <div class="col-2">
                            <small>Aksi</small> <br>
                            <button class="btn btn-primary btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-transaksi" 
                            onclick='Edit(<?php echo json_encode($value);?>)'>Edit</button>

                            <a href='<?php echo site_url("transaksi/delete/$value->id");?>'>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                            </a>
                            
                            

                        </div>
                    </div>
                </li>
            <?php }
            ?>
        </ul>

        <!-- form transaksi -->
        <div class="modal" id="modal-transaksi">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="text-white">Form Transaksi</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url("index.php/transaksi/save");?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">

                            Id Member
                            <input type="number" name="id_member" id="id_member" class="form-control mb-2" required />

                            Tanggal
                            <input type="date" name="tanggal" id="tanggal" class="form-control" required />

                            Batas Waktu
                            <input type="date" name="batas_waktu" id="batas_waktu" class="form-control" required />

                            Tanggal Bayar
                            <input type="date" name="tanggal_bayar" id="tanggal_bayar" class="form-control" required />

                            Status
                            <input type="text" name="status" id="status" class="form-control" required />

                            Dibayar
                            <input type="text" name="dibayar" id="dibayar" class="form-control" required />

                            Id User
                            <input type="number" name="id_user" id="id_user" class="form-control" required />

                            <button type="submit" class="btn btn-success btn-block mb-2">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function Edit(transaksi) {
        
        document.getElementById("id").value = paket.id;
        document.getElementById("id_member").value = paket.id_member;
        document.getElementById("tanggal").value = paket.tanggal;
        document.getElementById("batas_waktu").value = paket.batas_waktu;
        document.getElementById("tanggal_bayar").value = paket.tanggal_bayar;
        document.getElementById("status").value = paket.status;
        document.getElementById("dibayar").value = paket.dibayar;
        document.getElementById("id_user").value = paket.id_user;
        
    }

    function Add() {
        document.getElementById("id").value = "";
        document.getElementById("id_member").value = "";
        document.getElementById("tanggal").value = "";
        document.getElementById("batas_waktu").value = "";
        document.getElementById("tanggal_bayar").value = "";
        document.getElementById("status").value = "";
        document.getElementById("dibayar").value = "";
        document.getElementById("id_user").value = "";
        
    }
</script>