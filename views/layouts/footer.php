<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p id ="copy" class="pull-left"></p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>

<script>
    $(document).ready(function () {

        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/" + id, {}, function (data) {
                $("#cart-count").html('(' + data + ')');
            });
            return false;
        });
    });
    var myDate = new Date();
    document.getElementById("copy").innerHTML = "Copyright © " + myDate.getUTCFullYear();
    document.getElementById("copy").innerHTML = "Copyright © " + myDate.getUTCFullYear();
</script>

</body>
</html>