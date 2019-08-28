<div class="parallax-container">
    <div class="parallax">
        <img src="http://needforgreen.co.uk/wp-content/uploads/2018/08/banner-bags.jpg">
    </div>
</div>

<div class="container white">
    <div class="row">
        <div class="col s12">
            <h6 class="blue-grey-text">Kategori</h6>
            <div class="my-scrollbar" id="category">
                <div style="width:800px;max-width:100%;" class="d-flex">
                    <div class="my-chip active-chip">Semua</div>
                    <div class="my-chip">Kesehatan</div>
                    <div class="my-chip">Olahraga</div>                    
                </div>
            </div>    
        </div>
    </div>    

    <div id="products" style="padding: 50px 0px;">
        <div class="row">
            <?php for($i=0;$i<10;$i++): ?>
                <div class="col s12 m6 l4">                
                    <?php $this->load->view('main/components/productCard'); ?>            
                </div>
            <?php endfor; ?>            
        </div>
        <div class="text-center">
            <a class="waves-effect waves-dark btn-large rounded btn-outline teal-text rm-box-shadow">Tampilkan Produk Lainnya</a>
        </div>
    </div>
</div>
