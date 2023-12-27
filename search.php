<?php
include('head.php');
/* 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="row">
<div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0">
                <form id="search-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Location</option>
                                        <option>London</option>
                                        <option>Boston</option>
                                        <option>Mumbai</option>
                                        <option>New York</option>
                                        <option>Toronto</option>
                                        <option>Paris</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                    <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                </div>
                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                    <button type="submit" class="btn btn-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

			<?php include('foot.php');
            
            */ 
            

            // Connect to the database
            // $connection = mysqli_connect("localhost", "root", "", "portal");
            
            function fetchData($column, $table, $view)
            {
                $term = isset($_POST['term']) ? $_POST['term'] : '';
                $table = isset($_POST['table']) ? $_POST['table'] : '';
            
                $result = mysqli_query($GLOBALS['connection'], "SELECT $column FROM $table WHERE $column LIKE '%" . $term . "%'");
            
                if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_array($result)) {
                        echo "<li onclick='putdata(this.innerHTML, $view)'>" . $data[$column] . "</li>";
                    }
                } else {
                    echo "<li>No data found</li>";
                }
            }
            
            // Determine which fetchData to call based on the table parameter
            if ($_POST['table'] == 'jobs') {
                fetchData('title', 'jobs', 1);
            } elseif ($_POST['table'] == 'location') {
                fetchData('Lname', 'location', 2);
            }
            
            ?>
                    
			