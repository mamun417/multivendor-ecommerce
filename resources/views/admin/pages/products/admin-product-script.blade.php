<!-- Select2 -->
<script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>

<script src="{{ asset('backend/js/plugins/summernote/summernote-bs4.js')}}"></script>

<script>
    $(document).ready(function () {
        $(".productCategorySelect2").select2();
        $(".productBrandSelect2").select2();
        $('.productsTextEditor').summernote();
    });


    /************ Start => add and remove product size with price **************/



    /************ End => add and remove product size with price **************/

    /************ Start => add new and remove product color **************/
    function addNewProductColor(event, element) {
        event.preventDefault()
        $("#productColorArrAppend")
            .append(`<div class="row" id="productColorArrRemove">
                    <div class="col-md-9">
                        <div class="form-group">
                            <input id="product_colors" type="text"
                                   name="product_colors[]"
                                    class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <button class="btn btn-danger"
                                    onclick="removeProductColor(event, this)"><i
                                    class="fa fa-minus-circle"></i></button>
                        </div>
                    </div>
                </div>`)
    }

    function removeProductColor(event, element) {
        event.preventDefault()
        $(element).parents('.row #productColorArrRemove').remove();
    }

    /************ End => add new and remove product color **************/


    /*********************** Start for remove product images sections *******************************/
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

    /*********************** End for remove product images sections *******************************/

</script>
