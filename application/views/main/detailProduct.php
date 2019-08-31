
<div class="container" style="padding-top:20px;padding-bottom:20px;">
    <div class="row white" style="padding:10px;">
        <div class="col s12 m7">
            <img class="materialboxed" id="primary-image" width="100%" src="<?=base_url()?>assets/images/upload/<?=$photos[0]->nama_foto?>" style="border:1px solid #ddd;">
            <div class="image-collection d-flex my-scrollbar">
                <?php foreach($photos as $idx=>$photo): ?>
                    <img onclick="changeImage('<?=$idx?>', '<?=base_url()?>assets/images/upload/<?=$photo->nama_foto?>')" src="<?=base_url()?>assets/images/upload/<?=$photo->nama_foto?>">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col s12 m5">
            <h4 class="blue-grey-text" style="margin:5px 0;"><?=$produk->nama_produk?></h4>
            <h5 class="teal-text">Rp.<?=number_format($produk->harga)?></h5>
            <div class="blue-grey-text font-weight-bold" style="margin:15px 0;">Stok tersedia : <?=$produk->stok?></div>
            <div class="row" style="margin-bottom:0px;">
                <div class="input-field col s6">                
                    <small style="margin-bottom:3px 0;">Kuantitas</small>
                    <input type="number" class="validate" min="0" placeholder="0">                    
                </div>
            </div>
            <a class="rm-box-shadow waves-effect waves-light btn capitalize">chat whatsapp & beli</a>                        
                        
            <br><br>
            <div>
                <b class="blue-grey-text">Kategori</b>
                <div class="d-flex flex-wrap" style="margin-top:5px;">                    
                    <div class="chip white-text blue-grey d-flex align-center">
                        <i class="material-icons">loyalty</i>
                        <?=$produk->kategori?>
                    </div>                       
                </div>
            </div>
        </div>                
    </div>

    <div class="row white">
        <div class="col s12">
            <h5 class="teal-text d-flex align-center">
                <i class="material-icons">description</i>
                &nbsp;
                Deskripsi Produk
            </h5>
                <p class="">
                <?=$produk->deskripsi?>
                </p>
        </div>
    </div>
    <div class="row white">
        <div class="col s12">
            <h5 class="teal-text d-flex align-center">
                <i class="material-icons">shopping_basket</i>
                &nbsp;
                Produk Terkait                
            </h5>
        </div>
        <?php if(count($similar_produk)): ?>
            <?php foreach($similar_produk as $similar): ?>            
                <?php $similary['produk'] = $similar ?>            
                <div class="col s12 m6 l4">                          
                    <?php $this->load->view('main/components/productCard', $similary); ?>            
                </div>
            <?php endforeach; ?>   
            <div class="col s12 text-center">
                <a class="waves-effect waves-dark btn rounded btn-outline teal-text rm-box-shadow">Tampilkan Selengkapnya</a>
                <br><br>
            </div>
        <?php else: ?>
            <div class="col s12">
                <p style="text-align:center;">Tidak ada produk terkait</p>
            </div>
        <?php endif; ?>        
    </div>
</div>