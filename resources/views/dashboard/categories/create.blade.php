@extends('layouts.master')

@section('page_title', 'Dashboard - Multi Vendor Store')

@section('title', 'Home')
@section('sub_title', 'Categories')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">


        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <!--begin::Toolbar-->
            <div class="container-fluid">
                @if (session()->has('success'))
                    <div class="alert alert-primary">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div id="kt_app_content" class="app-content flex-column-fluid" data-select2-id="select2-data-kt_app_content">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl"
                    data-select2-id="select2-data-kt_app_content_container">
                    <form id="kt_ecommerce_add_category_form"
                        class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('categories.store') }}" method="post"
                        data-select2-id="select2-data-kt_ecommerce_add_category_form">
                        @csrf
                        @method('POST')
                        <!--begin::Aside column-->
                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10"
                            data-select2-id="select2-data-131-b166">
                            <!--begin::Thumbnail settings-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Thumbnail</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <!--begin::Image input placeholder-->
                                    <style>
                                        .image-input-placeholder {
                                            background-image: url('assets/media/svg/files/blank-image.svg');
                                        }

                                        [data-theme="dark"] .image-input-placeholder {
                                            background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                        }
                                    </style>
                                    <!--end::Image input placeholder-->
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                        data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            aria-label="Change avatar" data-kt-initialized="1">
                                            <!--begin::Icon-->
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--end::Icon-->
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="avatar_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            aria-label="Cancel avatar" data-kt-initialized="1">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            aria-label="Remove avatar" data-kt-initialized="1">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and
                                        *.jpeg image files are accepted</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Thumbnail settings-->
                            <!--begin::Status-->
                            <div class="card card-flush py-4" data-select2-id="select2-data-139-gwge">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Status</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <div class="rounded-circle bg-success w-15px h-15px"
                                            id="kt_ecommerce_add_category_status"></div>
                                    </div>
                                    <!--begin::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0" data-select2-id="select2-data-138-08a6">
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2"
                                        data-placeholder="Select an option" name="status">
                                        <option></option>
                                        <option value="active" selected>Active</option>
                                        <option value="archived">Archived</option>
                                    </select>

                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the category status.</div>
                                    <!--end::Description-->
                                    <!--begin::Datepicker-->
                                    <div class="d-none mt-10">
                                        <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select
                                            publishing date and time</label>
                                        <input class="form-control flatpickr-input"
                                            id="kt_ecommerce_add_category_status_datepicker"
                                            placeholder="Pick date &amp; time" type="text" readonly="readonly">
                                    </div>
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Status-->
                            <!--begin::Template settings-->

                            <!--end::Template settings-->
                        </div>
                        <!--end::Aside column-->
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>General</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Category Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="category_name" class="form-control mb-2"
                                            placeholder="Product name" value="">
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A category name is required and recommended to be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->

                                    {{-- make make select foreach the parents as a primary category --}}
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label
                                            class="form-label
                                                            required">Primary
                                            Category</label>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select class="form-select mb-2" data-control="select2"
                                            data-placeholder="Select an option" name="parent_id">
                                            <option></option>
                                            @foreach ($parents as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Select-->
                                    </div>

                                    <div>
                                        <!--begin::Label-->
                                        <label class="form-label">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <div class="ql-toolbar ql-snow">
                                            <span class="ql-formats"><span class="ql-header ql-picker">
                                                    <span class="ql-picker-label" tabindex="0" role="button"
                                                        aria-expanded="false" aria-controls="ql-picker-options-0">
                                                        <svg viewBox="0 0 18 18">
                                                            <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11">
                                                            </polygon>
                                                            <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                            </polygon>
                                                        </svg></span><span class="ql-picker-options" aria-hidden="true"
                                                        tabindex="-1" id="ql-picker-options-0">
                                                        <span tabindex="0" role="button" class="ql-picker-item"
                                                            data-value="1"></span>
                                                        <span tabindex="0" role="button" class="ql-picker-item"
                                                            data-value="2"></span>
                                                        <span tabindex="0" role="button"
                                                            class="ql-picker-item ql-selected"></span>
                                                    </span></span><select class="ql-header" style="display: none;">
                                                    <option value="1">
                                                    </option>
                                                    <option value="2"></option>
                                                    <option selected="selected"></option>
                                                </select></span><span class="ql-formats"><button type="button"
                                                    class="ql-bold"><svg viewBox="0 0 18 18">
                                                        <path class="ql-stroke"
                                                            d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                        </path>
                                                        <path class="ql-stroke"
                                                            d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                        </path>
                                                    </svg></button><button type="button" class="ql-italic"><svg
                                                        viewBox="0 0 18 18">
                                                        <line class="ql-stroke" x1="7" x2="13"
                                                            y1="4" y2="4"></line>
                                                        <line class="ql-stroke" x1="5" x2="11"
                                                            y1="14" y2="14"></line>
                                                        <line class="ql-stroke" x1="8" x2="10"
                                                            y1="14" y2="4"></line>
                                                    </svg></button><button type="button" class="ql-underline"><svg
                                                        viewBox="0 0 18 18">
                                                        <path class="ql-stroke"
                                                            d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                        </path>
                                                        <rect class="ql-fill" height="1" rx="0.5"
                                                            ry="0.5" width="12" x="3" y="15"></rect>
                                                    </svg></button></span><span class="ql-formats"><button type="button"
                                                    class="ql-image"><svg viewBox="0 0 18 18">
                                                        <rect class="ql-stroke" height="10" width="12" x="3"
                                                            y="4"></rect>
                                                        <circle class="ql-fill" cx="6" cy="7" r="1">
                                                        </circle>
                                                        <polyline class="ql-even ql-fill"
                                                            points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                                    </svg></button><button type="button" class="ql-code-block"><svg
                                                        viewBox="0 0 18 18">
                                                        <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11">
                                                        </polyline>
                                                        <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11">
                                                        </polyline>
                                                        <line class="ql-stroke" x1="10" x2="8"
                                                            y1="5" y2="13"></line>
                                                    </svg></button></span>
                                        </div>
                                        <div id="kt_ecommerce_add_category_description" name="description"
                                            class="min-h-200px mb-2 ql-container ql-snow">
                                            <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                                data-placeholder="Type your text here...">
                                                <p><br></p>
                                            </div>
                                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                            <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                    rel="noopener noreferrer" target="_blank"
                                                    href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                    data-link="https://quilljs.com" data-video="Embed URL"><a
                                                    class="ql-action"></a><a class="ql-remove"></a></div>
                                        </div>
                                        <!--end::Editor-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a description to the category for better
                                            visibility.</div>
                                        <!--end::Description-->
                                    </div>

                                   
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                        
                         <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
													<span class="indicator-label">Save Changes</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
                                            </div>
                        
                        <!--end::General options-->
                        <!--begin::Meta options-->

                        <!--end::Content-->
                </div>
            @endsection

            @push('scripts')
                <script>
                    var hostUrl = "assets/";
                </script>
                <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                <script src="assets/plugins/global/plugins.bundle.js"></script>
                <script src="assets/js/scripts.bundle.js"></script>
                <!--end::Global Javascript Bundle-->
                <!--begin::Vendors Javascript(used for this page only)-->
                <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
                <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
                <!--end::Vendors Javascript-->
                <!--begin::Custom Javascript(used for this page only)-->
                <script src="assets/js/custom/apps/ecommerce/catalog/save-category.js"></script>
                <script src="assets/js/widgets.bundle.js"></script>
                <script src="assets/js/custom/widgets.js"></script>
                <script src="assets/js/custom/apps/chat/chat.js"></script>
                <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
                <script src="assets/js/custom/utilities/modals/create-app.js"></script>
                <script src="assets/js/custom/utilities/modals/users-search.js"></script>
            @endpush
