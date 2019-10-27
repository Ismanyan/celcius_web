   </div>
   <!-- /.row -->

   </div>
   <!-- /.container -->

   <!-- Footer -->
   <footer class="container-fluid bg-white py-5 mt-5 animated fadeInUp">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <div class="row">
                       <div class="col-md-6 ">
                           <div class="logo-part">
                               <img src="<?= base_url('assets/') ?>img/logo.png" class="w-50 logo-footer">
                               <p>Celcius Green Corner
                                   Jl. Rasuna Said, Pakojan, Tangerang
                                   Gerbang keluar (belakang) Perum. Banjar Wijaya</p>
                           </div>
                       </div>
                       <div class="col-md-6 px-4">
                           <h6> Jadwal Buka</h6>
                           <p> SETIAP SETIAP HARI <br>
                               WARKOP TUGU KARYA <br>
                               16.00-24.00 <br>
                               GREEN CORNER (BANJAR WIJAYA) <br>
                               11.00-24.00</p>
                           <a href="https://wa.me/6289604466296" class="btn-footer"> Contact Us</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="row">
                       <div class="col-md-6 px-4">
                           <h6> Category</h6>
                           <div class="row ">
                               <div class="col-md-6">
                                   <ul>
                                       <?php foreach ($category as $key) : ?>
                                           <li> <a href="<?= base_url('dashboard/category/') . $key['category_id'] ?>"> <?= $key['category_name'] ?></a> </li>
                                       <?php endforeach; ?>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6 ">
                           <h6>Social Media</h6>
                           <div class="social">
                               <a href="https://www.instagram.com/celciuscoffee_id/"><i class="fab fa-instagram"></i></a>
                               <a href="https://www.google.co.id/maps/place/Jl.+Tugu+Karya+I,+Cipondoh,+Kec.+Cipondoh,+Kota+Tangerang,+Banten+15122/@-6.1885021,106.6674778,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f9043007db6d:0xc5305b8aa5d32295!8m2!3d-6.1885074!4d106.6696665"><i class="fas fa-map-marker-alt"></i></a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>
   </footer>


   <!-- Bootstrap core JavaScript -->
   <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script>
       $('.close-side').hide();

       $(".show-side").click(function() {
           $(".page-wrapper").addClass("toggled");
           $('.show-side').hide();
           $('.close-side').show();
       });
       $(".close-side").click(function() {
           $(".page-wrapper").removeClass("toggled");
           $('.show-side').show();
           $('.close-side').hide();
       });
   </script>
   <!-- Active where access in controller view -->
   <?php if ($this->uri->segment(2) == 'view') : ?>

       <script>
           $(document).ready(function() {
               $('.after_purchased').hide();
               $('.stock_sold').hide();

               //Custome function    
               function addCommas(nStr) {
                   nStr += '';
                   x = nStr.split('.');
                   x1 = x[0];
                   x2 = x.length > 1 ? '.' + x[1] : '';
                   var rgx = /(\d+)(\d{3})/;
                   while (rgx.test(x1)) {
                       x1 = x1.replace(rgx, '$1' + '.' + '$2');
                   }
                   return x1 + x2;
               }


               // System payment   
               $('#product_purchased').on('keyup', function() {
                   var product_purchased = $('#product_purchased').val();
                   var stok = <?= $product['product_stock'] ?>;
                   var total = <?= $product['product_price'] ?> * product_purchased + 15000;

                   $('#product_total').val('Rp.' + addCommas(total));
                   $('.after_purchased').show();

                   if ($('#product_purchased').val() == "") {
                       $('.after_purchased').hide();
                   }

                   if (product_purchased >= stok) {
                       $('.stock_sold').show();
                   } else {
                       $('.stock_sold').hide();
                   }
               });

           });
       </script>
   <?php endif; ?>

   </body>

   </html>