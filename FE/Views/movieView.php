<?php
function MovieTable($movies){
?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Movie</th>
                <th scope="col">Description</th>
                <th scope="col">Active</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($movies != 0) {
                foreach ($movies as $movie) {
            ?>
                    <tr>
                        <td><?php echo $movie->id; ?></td>
                        <td><?php echo $movie->movie; ?></td>
                        <td><?php echo $movie->description; ?></td>
                        <td><?php echo $movie->isActive ? "Active" : "Deactivated"; ?></td>
                        <td>
                            <form name="activateForm" method="post" action="../../BE/Controllers/movieController.php">
                                <input type="hidden" name="id" value="<?php echo $movie->id; ?>">
                                <input type="hidden" name="activate" value="<?php echo $movie->isActive ? 0 : 1; ?>">
                                <input type="submit" class="btn btn-primary" value="<?php echo $movie->isActive ? "Deactivate" : "Activate"; ?>">
                            </form>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='5'>No movies found</td></tr>";
            }
            ?>
        </tbody>
    </table>
<?php
}
?>
