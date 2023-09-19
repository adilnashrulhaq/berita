@include('dashboard_site/header')

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>'; padding-top: 2%" aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent;">
                <li class="breadcrumb-item" style="display: flex; align-items: center;"><a href="{{ route('article') }}" style="color: #DFD7BF; font-family: Poppins; font-size: 12px;">Article</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #3F2305; font-weight: 400; font-family: Poppins; font-size: 12px;">Edit</li>
            </ol>
        </nav>
        <div class="row" style="margin: 0 4px 0 4px; padding-top: 2%">
            <div class="col-sm-3 mb-3">
                <div class="form-group">
                    <label for="author" class="title-form">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="Penulis" disabled>
                </div>
            </div>
            <div class="col-sm-9 mb-3">
                <div class="form-group">
                    <label for="headline" class="title-form">Headline news</label>
                    <input type="text" class="form-control" id="headline" name="headline" value="">
                </div>
            </div>
            <div class="col-sm-3 mb-3" style="height: 190px">
                <div>
                    <label for="headline-img" class="form-label title-form">Headline Image</label>
                    <input class="form-control" type="file" id="headline-img" accept="image/*">
                </div>
                <div style="height: 116px">
                    <img id="image-preview" src="#" alt="Preview" style="display: none; max-width: 100%; object-fit: cover;">
                </div>
            </div>

            <div class="col-sm-9 mb-3">
                <label for="description" class="form-label title-form">Write your article here</label>
                <textarea class="form-control" id="description" rows="6"></textarea>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn tombol" value="Submit">
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Ketika input file berubah
        $("#headline-img").change(function() {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Tampilkan gambar pratinjau
                $("#image-preview").attr("src", e.target.result).show();
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@include('dashboard_site/footer')
