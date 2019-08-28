<div class="container" style="padding-top:20px;padding-bottom:20px;">
    <div class="row white" style="padding:10px;">
        <div class="col s12 m7">
            <img class="materialboxed" width="100%" src="<?=base_url()?>assets/images/default/example.png" style="border:1px solid #ddd;">
            <div class="image-collection d-flex my-scrollbar">
                <?php for($i=0;$i<5;$i++): ?>
                    <img src="<?=base_url()?>assets/images/default/example.png">
                <?php endfor; ?>
            </div>
        </div>
        <div class="col s12 m5">
            <h4 class="blue-grey-text" style="margin:5px 0;height:70px;">Black Shoes Special Edition</h4>
            <h5 class="teal-text">Rp.100,000</h5>
            <div class="blue-grey-text font-weight-bold" style="margin:15px 0;">Stok tersedia : 10</div>
            <div class="row" style="margin-bottom:0px;">
                <div class="input-field col s6">                
                    <small style="margin-bottom:3px 0;">Kuantitas</small>
                    <input type="number" class="validate" min="0" placeholder="0">                    
                </div>
            </div>
            <a class="rm-box-shadow waves-effect waves-light btn capitalize">chat whatsapp & beli</a>                        
            
            <div class="ssk-sticky ssk-left ssk-center ">
                <a href="" class="ssk ssk-facebook"></a>
                <a href="" class="ssk ssk-instagram"></a>
                <a href="" class="ssk ssk-twitter"></a>                                
            </div>
            <br><br>
            <div>
                <b class="blue-grey-text">Kategori</b>
                <div class="d-flex flex-wrap" style="margin-top:5px;">                    
                    <div class="chip white-text blue-grey">
                        Tas Wanita
                    </div>
                    <div class="chip white-text blue-grey">
                        Tas Pria
                    </div>
                    <div class="chip white-text blue-grey">
                        Aksesoris
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
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
        <?php for($i=0;$i<3;$i++): ?>
            <div class="col s12 m6 l4">                
                <?php $this->load->view('main/components/productCard'); ?>            
            </div>
        <?php endfor; ?>   
        <div class="col s12 text-center">
            <a class="waves-effect waves-dark btn rounded btn-outline teal-text rm-box-shadow">Tampilkan Selengkapnya</a>
            <br><br>
        </div>
    </div>
</div>