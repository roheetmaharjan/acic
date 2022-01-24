<?php $page = 'page';
include('include/header.php'); ?>
    <section class="page-title" style="background-image: url('./assets/img/page-title.jpg')">
        <div class="container">
            <h3>Agents</h3>
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="index.php">Home</a>
                <span class="breadcrumb-item active">Agents</span>
            </nav>
        </div>
    </section>
<div class="inner-page">
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control search-field">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Location</option>
                            <option>kathmandu</option>
                            <option>Pokhara</option>
                            <option>Bhaktapur</option>
                            <option>Dhading</option>
                            <option>Sindhuli</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 ml-auto text-right">
                    <a href="#" class="btn btn-danger btn-lg">Download Agent List</a>
                </div>
            </div>
            <!-- Agent-list -->
            <p class="search-result">200 Agents</p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Agent Name</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>
                        <tr>
                            <td>Sydney Express </td>
                            <td>Australia </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<?php include('include/footer.php'); ?>