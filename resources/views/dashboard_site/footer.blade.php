

<div class="marquee-container" style="color: red">
    <marquee behavior="scroll" direction="left" scrollamount="5">
        <p>•  Kepercayaan Anda adalah aset berharga bagi kami,
            itulah mengapa kami selalu berusaha keras untuk memberikan berita yang tepat dan terpercaya  •
            Headline News terpercaya selalu kami hadirkan untuk Anda  •</p>
    </marquee>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function createArticle() {
        var url = 'article/create';
        window.location.href = url;
    }
    function editArticle() {
        var url = 'article/edit';
        window.location.href = url;
    }
    function emptyBerita() {
        var url = 'article/empty';
        window.location.href = url;
    }
    $(".nav-item .nav-link").on("click", function(){
        $(".nav-item").find(".active").removeClass("active");
        $(this).addClass("active");
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
