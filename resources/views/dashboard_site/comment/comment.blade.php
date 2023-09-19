@include('dashboard_site/header')

        <div class="container">
            <p class="empty-p" style="text-align: center; color:#3F2305; padding-top: 4%; margin-bottom:2%; font-weight: 500;">All comments in your hands.</p>

            <div class="row d-flex justify-content-center" style="margin-left: 2%">
                <div class="card mr-3 mb-3" style="width: 18rem;">
                    <div class="img-card" style="background-image: url('{{ asset('images/lid_planter_1.png') }}');"></div>
                    <div class="card-body">
                        <p class="card-title">Your headline of the article will be written right here, with medium wei...</p>
                        <div class="d-flex align-items-center">
                            <p class="first-color mr-2" style="font-size: 12px; font-weight: bolder ">1234</p>
                            <p class="second-color" style="font-size: 12px;">Comment</p>
                            <a onclick="manageComment()" class="btn manage-btn d-flex"
                                style="">Manage ></a>
                        </div>
                    </div>
                </div>
                <div class="card mr-3 mb-3" style="width: 18rem;">
                    <div class="img-card" style="background-image: url('{{ asset('images/lid_planter_1.png') }}');"></div>
                    <div class="card-body">
                        <p class="card-title">Your headline of the article will be written right here, with medium wei...</p>
                        <div class="d-flex align-items-center">
                            <p class="first-color mr-2" style="font-size: 12px; font-weight: bolder ">1234</p>
                            <p class="second-color" style="font-size: 12px;">Comment</p>
                            <a onclick="manageComment()" class="btn manage-btn d-flex"
                                style="">Manage ></a>
                        </div>
                    </div>
                </div>
                <div class="card mr-3 mb-3" style="width: 18rem;">
                    <div class="img-card" style="background-image: url('{{ asset('images/lid_planter_1.png') }}');"></div>
                    <div class="card-body">
                        <p class="card-title">Your headline of the article will be written right here, with medium wei...</p>
                        <div class="d-flex align-items-center">
                            <p class="first-color mr-2" style="font-size: 12px; font-weight: bolder ">1234</p>
                            <p class="second-color" style="font-size: 12px;">Comment</p>
                            <a onclick="manageComment()" class="btn manage-btn d-flex"
                                style="">Manage ></a>
                        </div>
                    </div>
                </div>
            </div>

</body>
    <script>
        function manageComment() {
        var url = 'comment/detail';
        window.location.href = url;
    }
    </script>
@include('dashboard_site/footer')
