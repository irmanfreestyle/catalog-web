
<div class="card rm-box-shadow my-border">
    <div class="card-image">
        <img src="<?=base_url()?>assets/images/upload/<?=$produk->foto_produk[0]->nama_foto?>" width="100%" height="250px">
        <!-- <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a> -->
    </div>
    <div class="card-content text-center">
        <h6 class="font-weight-bold blue-grey-text"><?=$produk->nama_produk?></h6>
        <h6 class="font-weight-thin teal-text">Rp.<?=number_format($produk->harga)?></h6>
    </div>
    <div class="d-flex justify-center" style="padding: 10px 0px;">
        <a href="<?=base_url()?>product/<?=$produk->id_produk?>">
            <button class="waves-effect d-flex align-center justify-center waves-dark rm-box-shadow capitalize btn-small btn-block teal-text btn-outline">
                <i class="material-icons">remove_red_eye</i>&nbsp;
                Lihat
            </button>            
        </a>            
    </div>
</div>  