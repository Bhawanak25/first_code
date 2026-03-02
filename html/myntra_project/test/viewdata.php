<?php
include('config1.php');
include('function1.php');

// Delete logic add kiya
if (isset($_POST['delete'])) {
    $id = intval($_POST['id']);
    $delete_sql = "DELETE FROM tbl_password WHERE id = $id";
    if (mysqli_query($conn, $delete_sql)) {
        header("Location: viewdata.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <a href="generate.php" class="btn btn-danger btn-md">Back to generate password </a>
        <h3 class="text-center text-success">Saved password</h3>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>S.No</th>
                    <th>Url</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tbl_password ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['url']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td>
                                <!-- Eye icon -->
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                    data-bs-target="#myModal<?php echo $row['id']; ?>">
                                    <i class="fa fa-eye"></i>
                                </a>&nbsp;

                                <!-- Modal -->
                                <div class="modal" id="myModal<?php echo $row['id']; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo $row['url']; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Button -->
                                <form method="post" action="viewdata.php" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button class="btn btn-danger" type="submit" name="delete" onclick="return confirm('Delete this record?');">
                                        <i class="fa fa-trash text-white"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                <?php
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Record Not Found!</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>