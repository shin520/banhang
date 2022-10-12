<!-- General JS Scripts -->
<script src="{{ asset('admin') }}/js/app.min.js"></script>

@stack('custom-scripts')

<!-- CHART ↓ -->
<script src="{{ asset('admin') }}/bundles/apexcharts/apexcharts.min.js"></script>
<!-- INDEX PAGE ↓ -->
<script src="{{ asset('admin') }}/js/page/index.js"></script>

<!-- DATATABLE ↓ -->
<script src="{{ asset('admin') }}/bundles/datatables/datatables.min.js"></script>
<script src="{{ asset('admin') }}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('admin') }}/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- DATATABLE ↓ -->
<script src="{{ asset('admin') }}/js/page/datatables.js"></script>

<!-- MODAL ↓ -->
<script src="{{ asset('admin') }}/bundles/prism/prism.js"></script>

<!-- ADVANCED FORM ↓ -->
<script src="{{ asset('admin') }}/bundles/cleave-js/dist/cleave.min.js"></script>
<script src="{{ asset('admin') }}/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="{{ asset('admin') }}/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="{{ asset('admin') }}/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('admin') }}/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="{{ asset('admin') }}/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{ asset('admin') }}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{ asset('admin') }}/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="{{ asset('admin') }}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="{{ asset('admin') }}/js/page/forms-advanced-forms.js"></script>

<!-- EDITOR FORM -->
<script src="{{ asset('admin') }}/bundles/summernote/summernote-bs4.js"></script>
<script src="{{ asset('admin') }}/bundles/codemirror/lib/codemirror.js"></script>
<script src="{{ asset('admin') }}/bundles/codemirror/mode/javascript/javascript.js"></script>
<script src="{{ asset('admin') }}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="{{ asset('admin') }}/bundles/ckeditor/ckeditor.js"></script>
<script src="{{ asset('admin') }}/js/page/ckeditor.js"></script>

<!-- Template JS File -->
<script src="{{ asset('admin') }}/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{ asset('admin') }}/js/custom.js"></script>


<script>
    function toSlug(str) {
        str = str.toLowerCase();
        str = str
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '');
        str = str.replace(/[đĐ]/g, 'd');
        str = str.replace(/([^0-9a-z-\s])/g, '');
        str = str.replace(/(\s+)/g, '-');
        str = str.replace(/-+/g, '-');
        str = str.replace(/^-+|-+$/g, '');
        return str;
    }
</script>
@foreach ($langs as $lang)
    <script>
        $('.name_{{ $lang->lang }}').on('keyup', function() {
            text = $(this).val();
            slug = toSlug(text);
            $('.slug_{{ $lang->lang }}').val(slug);
            $('.autofill_{{ $lang->lang }}').val(text);
        });
    </script>
@endforeach
