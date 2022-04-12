<script>
$(document).ready(function () {
$(".star1-hover").hover(function () {
$(".star1-hover").removeClass("fa-star-o").addClass("fa-star");
$(".star2-hover,.star3-hover,.star4-hover,.star5-hover").removeClass("fa-star").addClass("fa-star-o");
}, function () {
$(".star1-hover,.star2-hover,.star3-hover,.star4-hover,.star5-hover").removeClass("fa-star").addClass("fa-star-o");
});
$(".star2-hover").hover(function () {
$(".star1-hover,.star2-hover").removeClass("fa-star-o").addClass("fa-star");
$(".star3-hover,.star4-hover,.star5-hover").removeClass("fa-star").addClass("fa-star-o");
}, function () {
$(".star1-hover,.star2-hover,.star3-hover,.star4-hover,.star5-hover").removeClass("fa-star").addClass("fa-star-o");
});
$(".star3-hover").hover(function () {
$(".star1-hover,.star2-hover,.star3-hover").removeClass("fa-star-o").addClass("fa-star");
$(".star4-hover,.star5-hover").removeClass("fa-star").addClass("fa-star-o");
}, function () {
$(".star1-hover,.star2-hover,.star3-hover,.star4-hover,.star5-hover").removeClass("fa-star").addClass("fa-star-o");
});
$(".star4-hover").hover(function () {
$(".star1-hover,.star2-hover,.star3-hover,.star4-hover").removeClass("fa-star-o").addClass("fa-star");
$(".star5-hover").removeClass("fa-star").addClass("fa-star-o");
}, function () {
$(".star1-hover,.star2-hover,.star3-hover,.star4-hover,.star5-hover").removeClass("fa-star").addClass("fa-star-o");
});
$(".star5-hover").hover(function () {
$(".star1-hover,.star2-hover,.star3-hover,.star4-hover,.star5-hover").removeClass("fa-star-o").addClass("fa-star");
}, function () {
$(".star1-hover,.star2-hover,.star3-hover,.star4-hover,.star5-hover").removeClass("fa-star").addClass("fa-star-o");
});
$(".star1-hover").click(function () {
$(".average").text("1 puan verdiniz...")
});
$(".star2-hover").click(function () {
$(".average").text("2 puan verdiniz...")
});
$(".star3-hover").click(function () {
$(".average").text("3 puan verdiniz...")
});
$(".star4-hover").click(function () {
$(".average").text("4 puan verdiniz...")
});
$(".star5-hover").click(function () {
$(".average").text("5 puan verdiniz...")
});
});
</script>

<style>
.fa-star-o {
font-size: 20px;
color: #808080;
}
.fa-star-half-o {
font-size: 20px;
color: #EDB867;
}
.fa-star {
font-size: 20px;
color: #EDB867;
}
.average {
font-size: 18px;
color: #808080;
padding-left: 10px;
}

</style>
 
<span class="stars">
    <i class="star1-hover fa fa-star-o"></i>
    <i class="star2-hover fa fa-star-o"></i>
    <i class="star3-hover fa fa-star-o"></i>
    <i class="star4-hover fa fa-star-o"></i>
    <i class="star5-hover fa fa-star-o"></i>
    <span class="average"></span>
</span>