
<div class="box-body">
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-bordered">
            <tr>
                <th>No</th>                
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>            
                <th>Deskripsi</th>                
                <th>Tanggal Upload</th>      
                <th>Aksi</th>               
            </tr>
            
            <?php $i=1; foreach($products as $product):?>
                <tr>
                    <td>
                        <?=$i++?>
                    </td>                    
                    <td><?=$product->nama_produk?></td>
                    <td><?=$product->harga?></td>
                    <td><?=$product->stok?></td>
                    <td><?=$product->kategori?></td>
                    <td><?=$product->deskripsi?></td>
                    <td><?=$product->tgl_upload?></td>
                    <td>
                        <form action="<?=base_url()?>admin/deleteProduct/<?=$product->id_produk?>" style="display:inline-block;">
                            <button class="btn btn-xs btn-danger" onclick="return confirm('yakin hapus <?=$product->nama_produk?>?')">Hapus</button> 
                        </form>                        
                        <button class="btn btn-xs btn-success">Edit</button>
                        <a href="<?=base_url()?>product/<?=$product->id_produk?>">
                            <button class="btn btn-xs btn-primary">Lihat Produk</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>            
</div>