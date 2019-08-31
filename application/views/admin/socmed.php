<div class="box-body">
    <form action="<?=base_url()?>admin/saveSocmed" method="post">
        <table class="table table-hover table-bordered">
            <tr>
                <th>No</th>                
                <th>Nama Sosial Media</th>
                <th>Link Sosial Media</th>
                <th>Tampilkan di website</th>            
            </tr>
            <?php $i=1; foreach($socmeds as $socmed): ?>
                <tr>
                    <td>
                        <?=$i++;?>
                    </td>
                    <td>
                        <?=$socmed->nama_socmed?>
                    </td>        
                    <td>
                        <div class="form-group">                    
                            <input value="<?=$socmed->link?>" required type="text" class="form-control" placeholder="Masukkan Link Sosial Media" name="<?=$socmed->nama_socmed?>">
                        </div>
                    </td>            
                    <td>
                        <div style="display:flex;align-items:center;">
                            <input type="checkbox" <?= ($socmed->tampilkan)?"checked":""; ?> id="<?=$socmed->nama_socmed?>" style="margin:0px;" name="show_<?=$socmed->nama_socmed?>"> &nbsp;
                            <label for="<?=$socmed->nama_socmed?>" style="margin:0px;font-weight:lighter;">Ceklis untuk menampilkan pada website</label>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>