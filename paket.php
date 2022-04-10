<div class="card">
    <div class="card-header">
        <h4>
            Data Paket
            <button class="btn btn-success" style="margin: 5px; width: 40px; height: 40px; border-radius:50%;"
            data-bs-toggle="modal"
            data-bs-target="#modal-paket" onclick="Add()">
                <span class="fa fa-plus"></span>
            </button>
            
        </h4>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <?php
            foreach ($paket->result() as $key => $value) { ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <small>ID</small>
                            <h5>
                                <?php
                                echo $value->id;
                                ?>
                            </h5>
                        </div>
                        <div class="col-4">
                            <small>Nama paket</small>
                            <h5>
                                <?php
                                echo $value->nama_paket;
                                ?>
                            </h5>
                        </div>
                        <div class="col-3">
                            <small>Harga</small>
                            <h5> Rp 
                                <?php 
                                echo number_format($value->harga, 0, ",",".");
                                ?>
                            </h5>
                        </div>
                        <div class="col-2">
                            <small>Aksi</small> <br>
                            <button class="btn btn-primary btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-paket" 
                            onclick='Edit(<?php echo json_encode($value);?>)'>Edit</button>

                            <a href='<?php echo site_url("paket/delete/$value->id");?>'>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                            </a>
                            
                            

                        </div>
                    </div>
                </li>
            <?php }
            ?>
        </ul>

        <!-- form paket -->
        <div class="modal" id="modal-paket">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="text-white">Form Paket</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url("index.php/paket/save");?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">

                            Nama paket
                            <input type="text" name="nama_paket" id="nama_paket" class="form-control mb-2" required />

                            

                            Harga
                            <input type="number" name="harga" id="harga" class="form-control" required />

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
    function Edit(paket) {
        
        document.getElementById("id").value = paket.id;
        document.getElementById("nama_paket").value = paket.nama_paket;
        document.getElementById("harga").value = paket.harga;
        
    }

    function Add() {
        document.getElementById("id").value = "";
        document.getElementById("nama_paket").value = "";
        document.getElementById("harga").value = "";
        
    }
</script>