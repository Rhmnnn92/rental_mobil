<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 class="content-center">Form Data Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tipe Mobil</label>
                            <select name="kode_type" id="" class="form-control">
                                <option value="">Pilih Tipe Mobil</option>
                                <?php foreach($type as $tp) : ?>
                                    <option value="<?php echo $tp->kode_type?>"><?php echo $tp->nama_type?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>