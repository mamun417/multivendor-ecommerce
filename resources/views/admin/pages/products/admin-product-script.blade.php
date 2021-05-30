<script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/summernote/summernote-bs4.js')}}"></script>
<script src="{{ asset('backend/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('backend/js/plugins/dropzone/dropzone.js') }}"></script>

<script>
    $(document).ready(function () {
        $(".productCategorySelect2").select2();
        $(".productBrandSelect2").select2();
        $('.productsTextEditor').summernote();
    });

    // Start Tags input
    $('.tagsinput').tagsinput({
        tagClass: 'label label-primary',
    });

    $('.bootstrap-tagsinput input').keypress(function (e) {
        if (e.keyCode === 13) {
            e.preventDefault();
        }
    });
    // End Tags input


    // Start form submit
    let dropZone,
        maxFile = 6,
        maxFilesize = 5;

    $(".myDropZone").dropzone(
        {
            url: '/',
            autoProcessQueue: false,
            maxFiles: maxFile,
            maxFilesize: maxFilesize, // MB
            acceptedFiles: 'image/*',
            addRemoveLinks: 'dictCancelUploadConfirmation',
            init: function () {
                dropZone = this;

                this.on("maxfilesexceeded", function (file) {
                    this.removeFile(file);
                    $('#imageError').html(`You can not upload more than ${maxFile} file.`);
                });

                this.on("addedfile", function (file) {
                    $(".dz-progress").remove();
                });
            }
        }
    );

    function submitAddProductForm() {
        axios.post('{{ route('admin.products.store') }}', getFormInputs())
            .then(res => {
                console.log(res.data)
                location.href = '{{ route('admin.products.index') }}'
            })
            .catch(error => {
                errorHandle(error)
            })
    }

    function getFormInputs() {
        let form = document.getElementById('productForm')
        let formData = new FormData(form);

        for (const file of dropZone.files) {
            formData.append('thumbnail[]', file)
        }

        return formData;
    }

    function errorHandle(error) {
        $('.error_msg').html('');

        console.log(error.response.data)

        $.each(error.response.data.errors, function (input, error) {
            $(`.${input}_error`).html(error[0]);
        });
    }

    // clear error message
    $('input, select').on('keypress change', (function () {
        $(`.${this.name}_error`).html('')
    }))

    // End  form submit


    // remove product image only for edit
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
