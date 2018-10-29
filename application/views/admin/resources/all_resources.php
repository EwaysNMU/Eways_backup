<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Resources</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-briefcase"></i> Available resources</div>
                                    <div class="card-body">
                                        <a style="margin-bottom: 10px" class="btn btn-info pull-right" href="<?php echo site_url() ?>/add_resources_">Add resources</a>
                                        <table id="example" class="display responsive nowrap" style="width:100% ">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Title</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>System Architect</td>
                                                    <td>xxxxxx</td>
                                                    <td>61</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Accountant</td>
                                                    <td>xxxxxx</td>
                                                    <td>63</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->


                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "columnDefs": [
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": false
            }
        ],
        responsive: true
    } );
} );
</script>


















































































