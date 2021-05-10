<!-- Select2 -->
<script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>

<script src="{{ asset('backend/js/plugins/summernote/summernote-bs4.js')}}"></script>

<script>
    $(document).ready(function () {
        $(".productCategorySelect2").select2();
        $(".productBrandSelect2").select2();
        $('.productsTextEditor').summernote();
    });

    // remove product
    function removeProductImage(e, el, image_id) {
        e.preventDefault()
        if (image_id && confirm('Are you sure to delete this item')) {
            $.get('{{ route('admin.products.remove.image') }}', {image_id: image_id}, (res) => {
                if (res.success) {
                    $(el).parents('#removeProductImageSection').remove();
                    toastr.success(`${res.message}`);
                }
            })
        }
    }
</script>
