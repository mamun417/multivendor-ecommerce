<script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/summernote/summernote-bs4.js')}}"></script>
<script src="{{ asset('backend/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('backend/js/plugins/dropzone/dropzone.js') }}"></script>

<!--ladda-->
<script src="{{ asset('backend/js/plugins/ladda/spin.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/ladda/ladda.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/ladda/ladda.jquery.min.js') }}"></script>

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


    /***************** Start form submit ********************/
        // contain files of specific type of dropzone
    let myDropZone = {
            thumbnail: '',
            images: ''
        };

    let maxFilesize = 5;

    const dropZones = [
        {id: 'thumbnailDropZone', name: 'thumbnail', maxFiles: 1},
        {id: 'imagesDropZone', name: 'images', maxFiles: 6}
    ];

    $.each(dropZones, function (key, dropZone) {
        $(`#${dropZone.id}`).dropzone(
            {
                url: '/',
                autoProcessQueue: false,
                maxFiles: dropZone.maxFiles,
                maxFilesize: maxFilesize, // MB
                acceptedFiles: 'image/*',
                addRemoveLinks: 'dictCancelUploadConfirmation',
                init: function () {
                    myDropZone[dropZone.name] = this;

                    this.on("maxfilesexceeded", function (file) {
                        this.removeFile(file);
                    });

                    this.on("error", function (file, errorMessage) {
                        // remove file from thumbnail for any error
                        if (dropZone.name === 'thumbnail') {
                            this.removeFile(file);
                        }

                        $(`#${dropZone.id}Error`).html(errorMessage + '<br/>');
                    });

                    this.on("addedfile", function () {
                        $(".dz-progress").remove();
                        $(`#${dropZone.id}Error`).html('');
                    });
                }
            }
        );
    });


    function submitAddProductForm() {
        $('.ladda-button-demo').ladda().ladda('start')

        axios.post('{{ route('admin.products.store') }}', getFormInputs())
            .then(() => {
                location.href = '{{ route('admin.products.index') }}'
            })
            .catch(error => {
                errorHandle(error)
            })
            .then(function () {
                $('.ladda-button-demo').ladda().ladda('stop')
            })
    }

    function getFormInputs() {
        let form = document.getElementById('productForm')
        let formData = new FormData(form);

        // make multiple dropZone image input (thumbnail. images)
        Object.keys(myDropZone).forEach(function (dropZoneType) {
            for (const file of myDropZone[dropZoneType].files) {
                if (file.status === 'queued') {
                    formData.append(`${dropZoneType}[]`, file)
                } else {
                    myDropZone[dropZoneType].removeFile(file);
                }
            }
        })

        return formData;
    }

    function errorHandle(error) {
        $('.error_msg').html('');

        $.each(error.response.data.errors, function (input, error) {
            $(`.${input}_error`).html(error[0]);
        });
    }

    // clear error message
    $('input, select').on('keypress change', (function () {
        $(`.${this.name}_error`).html('')
    }))

    /***************** End form submit ********************/


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
