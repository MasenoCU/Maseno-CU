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
?>

<!--dashboard area-->
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <p><span>dashboard</span>Control panel</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i>home</a>
                        <span class="disabled">View books</span>
                    </div>
                </div>
            </div>                
        </div>  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dbooks">
                        <table id="dtBasicExample" class="table table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th>Books image</th>
                                    <th>Books name</th>
                                    <th>Author name</th>
                                    <th>Books availability</th>
                                    <th>Delete book</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $mongoClient = $client;
                                $collection = $mongoClient->library->add_book;

                                $books = $collection->find();
                                foreach ($books as $book) {
                                    echo "<tr>";
                                    echo "<td><img src='" . htmlspecialchars($book["books_image"]) . "' height='60' width='100' alt=''></td>";
                                    echo "<td>" . htmlspecialchars($book["books_name"]) . "</td>";
                                    echo "<td>" . htmlspecialchars($book["books_author_name"]) . "</td>";
                                    echo "<td>" . htmlspecialchars($book["books_availability"]) . "</td>";
                                    echo "<td><a href='delete-book.php?id=" . urlencode($book["id"]) . "'><i class='fas fa-trash'></i></a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
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

<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
