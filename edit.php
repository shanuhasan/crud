<?php 
    include_once 'header.php'; 
    include_once 'config.php';
?>
<div id="main-content">
    <h2>Update Record</h2>
    <?php
        $std_id = $_GET['id'];
        $sql = "SELECT * FROM students where id = {$std_id}";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <input type="text" name="name" value="<?php echo $row['name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="<?php echo $row['address']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php

            $sql1 = "SELECT * FROM studentclass";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0){

                echo "<select name='sclass'>";

            while($row1=mysqli_fetch_assoc($result1))
            {
                if($row['class'] == $row1['id'])
                {
                    $select = "selected";
                }else{
                    $select = "";
                }
                
                echo "<option {$select} value='{$row1['id']}'>{$row1['sclass']}</option>";
            }
               echo "</select>";

            }

          ?>          
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="<?php echo $row['phone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
        }}
    ?>
</div>
</div>
</body>
</html>
