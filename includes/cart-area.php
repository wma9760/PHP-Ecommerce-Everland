
<div class="cart__sidebar">
        <div class="container">
            <div class="cart__content">
                <div class="cart-text">
                    <h3 class="mb-40">Shopping cart</h3>
                <?php
                    $stmt = $con->prepare('SELECT * FROM cart WHERE user_id=? limit 3');
                    $stmt->bind_param('i',$userId);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $grand_total = 0;
                    while ($row = $result->fetch_assoc()):
                  ?>
                  <!-- start item -->
                    <div class="add_cart_product">
                        <div class="add_cart_product__thumb">
                            <img src="https://themepure.net/template/gota/gota/assets/img/product/29-3.jpg" alt="">
                        </div>
                        <div class="add_cart_product__content">
                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                            <h5><a href="shop.php"><?= $row['product_name'] ?></a></h5>
                            <p><?= $row['qty'] ?> × $<?= number_format($row['product_price'],2); ?></p>
                            <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                            <a href="includes/cart-item.php?remove=<?= $row['id'] ?>" onclick="return confirm('Are you sure want to remove this item?');"><button class="cart_close"><i class="fal fa-times"></i></button></a>
                        </div>
                    </div><!-- end item -->
                <?php $grand_total += $row['total_price']; ?>
                <?php endwhile; ?>
                    <!-- <div class="add_cart_product">
                        <div class="add_cart_product__thumb">
                            <img src="https://themepure.net/template/gota/gota/assets/img/product/17.jpg" alt="">
                        </div>
                        <div class="add_cart_product__content">
                            <h5><a href="shop.php">Buddy non Stripes</a></h5>
                            <p>1 × $40.00</p>
                            <button class="cart_close"><i class="fal fa-times"></i></button>
                        </div>
                    </div> -->
                </div>
                <div class="cart-icon">
                    <i class="fal fa-times"></i>
                </div>
                <div class="cart-bottom">
                    <div class="cart-bottom__text">
                        <span>Subtotal:</span>
                        <span class="end">$<?= $grand_total ?></span>
                        <a href="cart.php">view cart</a>
                        <a href="checkout.php">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-offcanvas-overlay"></div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
        
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'cart-item.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'cart-item.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>