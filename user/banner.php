<div class="banner">
        <img src="../public/images/banner1.jpg" width="1200px" id="banner_image">
</div>
<script >
        var images = [];
for (var i = 1; i < 4; i++) {
    images[i] = new Image();
    images[i].src = "../public/images/banner" + i + ".jpg";
}
var index = 1;
var anh = document.getElementById("banner_image");
function Start() {
    index++;
    if (index > images.length - 1) {
        index = 1;
    }
    anh.src = images[index].src;
    t = setTimeout("Start()", 5000);
}
Start();
</script>