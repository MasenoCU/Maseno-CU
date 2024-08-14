<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
    <?php
    exit();
}

include 'inc/header.php';
require '../components/db_connection.php';
if(isset($client)){
$mongoClient= $client;
$collection_std = $mongoClient->library->std_registration;
$collection_t = $mongoClient->library->t_registration;
$collection_issue_book = $mongoClient->library->issue_book;
$collection_t_issue_book = $mongoClient->library->t_issuebook;
$collection_add_book = $mongoClient->library->add_book;

// Count members
$count_std = $collection_std->countDocuments([]);
$count_t = $collection_t->countDocuments([]);
$total_members = $count_std + $count_t;

// Count issued books
$count_issue_book = $collection_issue_book->countDocuments([]);
$count_t_issue_book = $collection_t_issue_book->countDocuments([]);
$total_issued_books = $count_issue_book + $count_t_issue_book;

// Count books
$count_books = $collection_add_book->countDocuments([]);
?>

<!--dashboard area-->
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <p><span>Library System</span>Control panel</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i>home</a>
                        <span class="disabled">dashboard</span>
                    </div>
                </div>
            </div>
            <div class="row counterup">
                <div class="col-md-3 col-sm-3 col-xs-12 control">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="text">
                            <h3><span class="counter"><?php echo $total_members; ?></span></h3>
                            <h4><a href="view-users.php">Members</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 control">
                    <div class="box box2">
                        <div class="icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="text">
                            <h3><span class="counter"><?php echo $total_issued_books; ?></span></h3>
                            <h4><a href="issued-books.php">Issued books</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 control">
                    <div class="box box3">
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="text">
                            <h3><span class="counter"><?php echo $count_books; ?></span></h3>
                            <h4><a href="display-books.php">books</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 control">
                    <div class="box box3">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="text">
                            <h4 class="mt-20"><a href="display-books.php">Manage Books</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 control">
                    <div class="box box4">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="text">
                            <h4 class="mt-20"><a href="manage-users.php">Manage User</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 control">
                    <div class="box">
                        <div class="icon">
                            <i class="fab fa-staylinked"></i>
                        </div>
                        <div class="text">
                            <h4 class="mt-20"><a href="status.php">Book_Request Approvals</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 control">
                    <div class="box box2">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="text">
                            <h4 class="mt-10"><a href="requested-books.php">Requested Books</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
</div>

<?php 
include 'inc/footer.php';
}
?>
