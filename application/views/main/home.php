<input type="hidden" class="base_url">

<div class="parallax-container" style="z-index:100">
    <div class="parallax">
        <img src="<?=base_url()?>assets/images/logo/<?=$banner?>">
    </div>
</div>
<div class="container white">
    <div class="row">
        <div class="col s12">
            <h6 class="blue-grey-text">Kategori</h6>
            <div class="my-scrollbar" id="category">
                <div style="width:800px;max-width:100%;" class="d-flex" id="wrap-categories">
                    <div class="my-chip active-chip" onclick="getProducts(10, '')">Semua</div>
                </div>
            </div>    
        </div>
    </div>    

    <div id="products" style="padding: 50px 0px;">
        <div class="row" id="wrap-products">
            
        </div>
        <div class="text-center" id="more-products">
            
        </div>
    </div>
</div>    
