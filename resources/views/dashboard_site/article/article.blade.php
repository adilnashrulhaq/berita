@include('dashboard_site/header')
    <div class="container">
        <p class="empty-p" style="text-align: center; color:#3F2305; padding-top: 4%; margin-bottom:2%; font-weight: 500;">The best article is useful for others.</p>

        <div class="row d-flex justify-content-center" style="margin-left: 2%">
            <div class="card mr-3 mb-3" style="width: 18rem;">
                <div class="img-card" style="background-image: url('{{ asset('images/lid_planter_1.png') }}');"></div>
                <div class="card-body">
                    <p class="card-title">Your headline of the article will be written right here, with medium wei...</p>
                    <p class="card-text overflow-hidden">
                        Your description of the article will be written right here,
                        regular weight and font family must be Poppins with 12 of size.
                        This field is fixed-wi...
                    </p>
                    <a onclick="editBerita()" class="btn edit-btn d-flex mx-auto">Edit ></a>
                </div>
            </div>
            <div class="card mr-3 mb-3" style="width: 18rem;">
                <div class="img-card" style="background-image: url('{{ asset('images/lid_planter_1.png') }}');"></div>
                <div class="card-body">
                    <p class="card-title">Your headline of the article will be written right here, with medium wei...</p>
                    <p class="card-text overflow-hidden">
                        Your description of the article will be written right here,
                        regular weight and font family must be Poppins with 12 of size.
                        This field is fixed-wi...
                    </p>
                    <a href="#" class="btn edit-btn d-flex mx-auto">Edit ></a>
                </div>
            </div>
            <div class="card mr-3 mb-3" style="width: 18rem;">
                <div class="img-card" style="background-image: url('{{ asset('images/lid_planter_1.png') }}');"></div>
                <div class="card-body">
                    <p class="card-title">Your headline of the article will be written right here, with medium wei...</p>
                    <p class="card-text overflow-hidden">
                        Your description of the article will be written right here,
                        regular weight and font family must be Poppins with 12 of size.
                        This field is fixed-wi...
                    </p>
                    <a href="#" class="btn edit-btn d-flex mx-auto">Edit ></a>
                </div>
            </div>
            <div class="card mr-3 mb-3" style="width: 18rem;">
                <div class="img-card" style="background-image: url('{{ asset('images/lid_planter_1.png') }}');"></div>
                <div class="card-body">
                    <p class="card-title">Your headline of the article will be written right here, with medium wei...</p>
                    <p class="card-text overflow-hidden">
                        Your description of the article will be written right here,
                        regular weight and font family must be Poppins with 12 of size.
                        This field is fixed-wi...
                    </p>
                    <a href="#" class="btn edit-btn d-flex mx-auto">Edit ></a>
                </div>
            </div>
        </div>
        <div class="center-button"
            style="position: fixed; margin-top:auto; text-align: center; bottom: 48px; right:14%">
            <button class="tombol" onclick="addBerita()" id="myButton">+    add article</button>
            <button class="tombol" onclick="emptyBerita()" id="myButton">+  empty</button>
        </div>

</body>
<script>
    function addBerita() {
        var url = 'article/create';
        window.location.href = url;
    }
    function editBerita() {
        var url = 'article/edit';
        window.location.href = url;
    }
</script>
@include('dashboard_site/footer')
