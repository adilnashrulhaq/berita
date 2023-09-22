@include('dashboard_site/header')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>'; padding-top: 2%" aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent;">
                <li class="breadcrumb-item" style="display: flex; align-items: center;"><a href="{{ route('article') }}" style="color: #DFD7BF; font-family: Poppins; font-size: 12px;">Article</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #3F2305; font-weight: 400; font-family: Poppins; font-size: 12px;">Category</li>
            </ol>
        </nav>
        <div class="col-sm-12 d-flex flex-row justify-content-between align-items-center">
            <p class="first-color mr-2" style="font-size: 14px; font-weight: bolder; margin: 0% !important; width: fit-content;">News Category</p>
            <div class="center-button" style="margin:0% !important;">
                <button class="tombol" onclick="createArticle()" id="myButton">+ add Category</button>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card col-sm-12 d-flex flex-column">
                <div class="d-flex align-items-center">
                    <p class="first-color mr-2" style="font-size: 12px; font-weight: 200; margin-top: 2%">Teknologi Informasi</p>
                    <button class="btn btn-danger btn-sm ml-auto" onclick="deleteCard(this)">Delete</button>
                </div>
            </div>
            <div class="card col-sm-12 d-flex flex-column">
                <div class="d-flex align-items-center">
                    <p class="first-color mr-2" style="font-size: 12px; font-weight: 200; margin-top: 2%">Kesehatan</p>
                    <button class="btn btn-danger btn-sm ml-auto" onclick="deleteCard(this)">Delete</button>
                </div>
            </div>
            <div class="card col-sm-12 d-flex flex-column">
                <div class="d-flex align-items-center">
                    <p class="first-color mr-2" style="font-size: 12px; font-weight: 200; margin-top: 2%">Teknologi Informasi</p>
                    <button class="btn btn-danger btn-sm ml-auto" onclick="deleteCard(this)">Delete</button>
                </div>
            </div>
        </div>
</body>
<script>
    function deleteCard(element) {
        // Mendapatkan elemen card yang berisi tombol "Delete"
        var card = element.closest('.card');
        card.remove();
    }
</script>
@include('dashboard_site/footer')
