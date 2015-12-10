@extends('app')

@section('css')
    @parent
 <link href="./assets/css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
 @endsection

@section('content')
    <div class="">
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>
                                     Contents<small>All</small>
                                    </h2>
                                    <div class="pull-right">
                                         <a href="{!! url('content/create') !!}" class="btn btn-primary"> <i class="fa fa-plus-square"></i> New</a>
                                     </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>Catrgory </th>
                                                <th>Title </th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($contents as $content)
                                                <tr class="even pointer">
                                                    <td class=" ">{{ $content->category->category_name }}</td>
                                                    <td class=" ">{{ $content->title }} </td>
                                                    <td>
                                                        <a class="btn btn-success">View</a>
                                                        <form id="deleteContent" class="inline" method="post" action="{{ url('content/'.$content->content_id) }}">
                                                            {{ csrf_field() }}
                                                            {!! method_field('DELETE') !!}
                                                            <button href="#" data-id="{{ $content->content_id }}" class="delete btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>
@endsection



@section('scripts')
@parent


        <script src="./assets/js/datatables/js/jquery.dataTables.js"></script>
        <script src="./assets/js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "/assets/js/datatables/tools/swf/copy_csv_xls_pdf.swf"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });

                $('.delete').click(function(event) {
                    event.preventDefault();
                    var form = $(this).parents('form');
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this content!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false }
                        , function(isConfirm){
                           if(isConfirm){
                            form.submit();
                        }
                       });
                });
            });
        </script>
@endsection