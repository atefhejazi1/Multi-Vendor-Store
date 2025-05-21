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
                        action="{{ route('dashboard.categories.update', $category->id) }}" method="post"
                        data-select2-id="select2-data-kt_ecommerce_add_category_form">
                        @csrf
                        @method('patch')
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
                                            @if ($category->image)
                                                <img src="{{ asset('uploads/' . $category->image) }}" alt=""
                                                    height="60">
                                            @endif
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
                                        <input type="text" name="name" class="form-control mb-2"
                                            placeholder="Category name" value="{{ $category->name }}" />
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
                                            @foreach ($parents as $parent)
                                                <option value="{{ $parent->id }}" @selected(old('parent_id', $category->parent_id) == $parent->id)>
                                                    {{ $parent->name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Select-->
                                    </div>

                                    <div>
                                        <!--begin::Label-->
                                        <label class="form-label">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $category->description }} </textarea>
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

                </form>
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
