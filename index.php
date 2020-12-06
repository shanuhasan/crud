<?php
include 'header.php';

?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
            include_once 'config.php';
            $sql = "select *  from students join studentclass where students.class = studentclass.id";
            $query = mysqli_query($conn,$sql);

            if(mysqli_num_rows($query)>0){

                while($row=mysqli_fetch_array($query))
                {            
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['sclass'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td>
                        <a href='edit.php?id=<?php echo $row['id'] ?>'>Edit</a>
                        <a href='delete-inline.php'>Delete</a>
                    </td>
                </tr>
            <?php }
            }else{
                echo "No Records Founds";
            }
            mysqli_close($conn);
            ?>         
        </tbody>
    </table>
</div>
</div>
</body>
</html>
