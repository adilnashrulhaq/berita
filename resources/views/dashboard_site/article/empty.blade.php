@include('dashboard_site/header')

        <div class="container d-flex flex-column justify-content-center align-items-center">
            <p class="empty-p" style="text-align: center; color:#3F2305; padding-top: 4%; margin-bottom:2%;">It looks like you have not written any articles at all...</p>

            <img class="empty-img" style="width: 500px; height:373px" src="{{  asset('images/NoArticle.png') }}" alt="Create your first article">
            <div class="center-button">
                <button class="tombol" onclick="createArticle()" id="myButton">+  Create your first article</button>
            </div>
        </div>

    </body>


@include('dashboard_site/footer')
