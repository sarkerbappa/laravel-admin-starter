@section('scripts')
    @parent
    <script type="text/javascript" charset="utf-8">
        $(function ()
        {
            // check if we need to get data from server
            if ($('#tbl-list').attr('data-server') == 'true') {
                var options = {!! json_encode($options) !!}; // convert php array to js array
                options.push({data: 'action', name: 'action', orderable: false, searchable: false}); // add actions column
                initDatatablesAjax('#tbl-list', "{{ Request::url().'/datatable' }}", options); // init datatables
            }
        })
    </script>
@endsection