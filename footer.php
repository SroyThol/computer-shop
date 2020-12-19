
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
    <footer>
    	<div class="container mt-4" style="background-color: #f5f2eb;">
    		<div class="row">
    			<div class="col-md-3">
    				<h3>Social Media</h3>
    				Facebook<br>
    				Page<br>
    				Telegram<br>
    				Inline
    			</div>
    			<div class="col-md-3">
    				<h3>Technology</h3>
    				Industrial 4.0<br>
    				API<br>
    				Application Inteligent<br>
    				Moder
    			</div>
    			<div class="col-md-3">
    				<h3>Network</h3>
    				Connection><br>
    				Switch<br>
    				Comunication<br>
    				Conversation
    			</div>
    			<div class="col-md-3">
    				<h3>Technical</h3>
    				How study<br>
    				How search<br>
    				How delete<br>
    				How edit
    			</div>
    		</div>
    	</div>
    	<center class="center mt-4" style="color: blue;">copy right sroy thol</center>
    </footer>
	
	<script src="assets/jquery-3.5.1.slim.min.js"></script>
    <!-- <script type="assets/jquery-3.4.1.js"></script> -->
    <script src="assets/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
     

    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn-list-items').click(function(event){
                $('.product-item').removeClass('col-md-12');
                $('.product-item').addClass('col-md-12');

                $('.product-img').removeClass('col-md-12');
                $('.product-img').addClass('col-md-2');

                $('.product-title').removeClass('col-md-12');
                $('.product-title').addClass('col-md-8');

                $('.product-des').show();

                $('.product-price').removeClass('col-md-12');
                $('.product-price').addClass('col-md-2');

                $('.price-text').show();
            });
            //grid
            $('#btn-grid-items').click(function(event){
                $('.product-item').removeClass('col-md-12');
                $('.product-item').addClass('col-md-3');

                $('.product-img').removeClass('col-md-2');
                $('.product-img').addClass('col-md-12');

                $('.product-title').removeClass('col-md-12');
                $('.product-title').addClass('col-md-8');

                $('.product-des').hide();

                $('.product-price').removeClass('col-md-2 mt-2');
                $('.product-price').addClass('col-md-12');

                $('.btn-cart').addClass('btn-block');
                
                $('.price.text').hide();
            });
        });
    </script>
</body>
</html>



     
  


