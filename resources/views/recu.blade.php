@extends('Layouts.admin_header')

@section('admin')

<div class="main-container">

        <!-- Export Datatable start -->
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Data Table with Export Buttons</h4>
            </div>
            <div class="pb-20">
                <table class="table hover multiple-select-row data-table-export nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Name</th>
                            <th>Age</th>
                            <th>Office</th>
                            <th>Address</th>
                            <th>Start Date</th>
                            <th>Salart</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-plus">Gloria F. Mead</td>
                            <td>25</td>
                            <td>Sagittarius</td>
                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>30</td>
                            <td>Gemini</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>20</td>
                            <td>Gemini</td>
                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>30</td>
                            <td>Sagittarius</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>25</td>
                            <td>Gemini</td>
                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>20</td>
                            <td>Sagittarius</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>18</td>
                            <td>Gemini</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>30</td>
                            <td>Sagittarius</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>30</td>
                            <td>Sagittarius</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>30</td>
                            <td>Gemini</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>30</td>
                            <td>Gemini</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="table-plus">Andrea J. Cagle</td>
                            <td>30</td>
                            <td>Gemini</td>
                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                            <td>29-03-2018</td>
                            <td>$162,700</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Export Datatable End -->
</div>

<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="vendors/scripts/datatable-setting.js"></script>

@endsection