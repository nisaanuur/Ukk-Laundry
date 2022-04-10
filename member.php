<div class="card">
    <div class="card-header">
        <h4>
            Data Member
            <button class="btn btn-success" style="margin: 5px; width: 40px; height: 40px; border-radius:50%;"
            data-bs-toggle="modal"
            data-bs-target="#modal-member" onclick="Add()">
                <span class="fa fa-plus"></span>
            </button>
            
        </h4>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <?php
            foreach ($member->result() as $key => $value) { ?>
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
                        <div class="col-3">
                            <small>Nama Member</small>
                            <h5>
                                <?php
                                echo $value->nama;
                                ?>
                            </h5>
                        </div>
                        <div class="col-3">
                            <small>Alamat</small>
                            <h5>
                                <?php 
                                echo $value->alamat;
                                ?>
                            </h5>
                        </div>
                        <div class="col-2">
                            <small>Jenis Kelamin</small>
                            <h5>
                                <?php 
                                echo $value->jenis_kelamin;
                                ?>
                            </h5>
                        </div>
                        <div class="col-2">
                            <small>Telepon</small>
                            <h5>
                                <?php 
                                echo $value->telepon;
                                ?>
                            </h5>
                        </div>
                        <div class="col-1">
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

        <!-- form data member -->
        <div class="modal" id="modal-member">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="text-white">Form Member</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url("index.php/member/save");?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">

                            Nama member
                            <input type="text" name="nama_member" id="nama_member" class="form-control mb-2" required />

                            Alamat
                            <input type="text" name="alamat" id="alamat" class="form-control mb-2" required />

                            Jenis Kelamin
                            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control mb-2" required />

                            Telepon
                            <input type="number" name="telepon" id="telepon" class="form-control" required />

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
    function Edit(member) {
        
        document.getElementById("id").value = paket.id;
        document.getElementById("nama_member").value = paket.nama_member;
        document.getElementById("alamat").value = paket.alamat;
        document.getElementById("jenis_kelamin").value = paket.jenis_kelamin;
        document.getElementById("telepon").value = paket.telepon;
        
    }

    function Add() {
        document.getElementById("id").value = "";
        document.getElementById("nama_member").value = "";
        document.getElementById("alamat").value = "";
        document.getElementById("jenis_kelamin").value = "";
        document.getElementById("telepon").value = "";
        
    }
</script>