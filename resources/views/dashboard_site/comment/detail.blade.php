@include('dashboard_site/header')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>'; padding-top: 2%" aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent;">
                <li class="breadcrumb-item" style="display: flex; align-items: center;">
                    <a href="{{ route('comment') }}" style="color: #DFD7BF; font-family: Poppins; font-size: 12px;">
                        Comment
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"
                    style="color: #3F2305; font-weight: 400; font-family: Poppins; font-size: 12px;">
                    Manage
                </li>
            </ol>
        </nav>
        <div class="row d-flex justify-content-center" style="margin-left: -4%;">
            <div class="col-sm-3 mb-3" style="">
                <div class="img-card" style="background-image: url('{{ asset('images/lid_planter_1.png') }}');"></div>
                <div class="card-body">
                    <p class="title-mng">Your headline of the article will be written right here,
                        with medium weight and 14px for the font-size.</p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex align-items-center" style="margin-bottom: 1%">
                    <p class="first-color mr-2" style="font-size: 14px; font-weight: bolder ">3</p>
                    <p class="second-color" style="font-size: 14px;">Comment</p>
                </div>
                {{-- COMMENT --}}
                <div class="card col-sm-12 d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <p class="first-color mr-2" style="font-size: 12px; font-weight: bolder; margin-top: 2%">Fulanah</p>
                        <button class="btn btn-danger btn-sm" onclick="deleteCard(this)">Delete</button>
                    </div>
                    <p>asdasdasffaasdasdasffaasdasdasffaasdasdasffaasdasdasffa asdasdasffaasdasd asdasdasffaasdasd
                        asdasdasffaasdasd asdasdasffaasdasd asdasdasffaasdasd asdasdasffaasdasd
                    </p>
                </div>
                <div class="card col-sm-12 d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <p class="first-color mr-2" style="font-size: 12px; font-weight: bolder; margin-top: 2%">Fulan Bin Fulan</p>
                        <button class="btn btn-danger btn-sm" onclick="deleteCard(this)">Delete</button>
                    </div>
                    <p>asdasdasffaasdasdasffaasdasdasffaasdasdasffaasdasdasffa asdasdasffaasdasd</p>
                </div>
                <div class="card col-sm-12 d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <p class="first-color mr-2" style="font-size: 12px; font-weight: bolder; margin-top: 2%">Fulanah</p>
                        <button class="btn btn-danger btn-sm" onclick="deleteCard(this)">Delete</button>
                    </div>
                    <p>asdasdasffaasdasdasffaasdasdasffaasdasdasffaasdasdasffa asdasdasffaasdasd asdasdasffaasdasd</p>
                </div>

            </div>
        </div>
    </div>
</body>
<script>
    function deleteCard(element) {
        // Mendapatkan elemen card yang berisi tombol "Delete"
        var card = element.closest('.card');

        // Menghapus elemen card dari DOM
        card.remove();
    }
</script>

@include('dashboard_site/footer')
