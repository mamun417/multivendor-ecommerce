@extends('admin.layouts.app')
@section('title', 'Homepage category setting')

@section('content')
    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Homepage category setting</h5>
                    </div>

                    <div class="ibox-content">
                        <p class="m-b-lg">
                            <strong>This</strong> is an interactive hierarchical list. You can drag and drop to
                            rearrange the order. It works well on touch-screens.
                        </p>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="limit" class="control-label">limit of category</label>
                                    <input onchange="updateHomepageShowCatCount(this)" id="limit" type="number" min="1"
                                           value="{{ $site_setting->homepage_show_cat_count }}" name="phone"
                                           class="form-control">
                                </div>

                                <div class="dd" id="nestable">
                                    <ol class="dd-list">
                                        @foreach($categories as $key => $category)
                                            <li class="dd-item" data-id="{{ $category->id }}">
                                                <div class="dd-handle">
                                                    <span class="label label-default mr-2">
                                                        <i class="fa fa-list"></i>
                                                    </span>
                                                    {{ ucfirst($category->name) }}
                                                    (<span
                                                        class="text-success">{{ $category->active_products_count }}</span>,
                                                    <span>{{ $category->inactive_products_count }}</span>)

                                                    <span
                                                        class="float-right label-default mr-2 selected_cat {{ !($key < $site_setting->homepage_show_cat_count) ? 'd-none' : ''}}">
                                                        <i class="fa fa-check-circle text-success"></i>
                                                    </span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@push('script')
    <script src="{{ asset('backend/js/plugins/nestable/jquery.nestable.js') }}"></script>

    <script>
        function updateHomepageShowCatCount(e) {
            axios.post('{{ route('admin.setting.homepage-show-cat-count.update') }}', {
                homepage_show_cat_count: e.value
            }).then((res) => {
                reloadNestableDom()
            })
        }

        $(() => {
            $('#nestable').nestable({
                maxDepth: 1
            }).on('change', function (e) {
                const serial = $('#nestable').nestable('serialize');

                axios.put('{{ route('admin.setting.home-page-category.update') }}', {
                    serial
                }).then((res) => {
                    reloadNestableDom()
                })
            });
        });

        function reloadNestableDom() {
            $("#nestable").load(location.href + " .dd-list");
        }
    </script>
@endpush
