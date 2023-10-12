<br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Họ Và Tên</th>
            <th>Số Điện Thoại</th>
            <th>Khu Vực Xem Xe</th>
            <th>Tên Dòng Xe Cần Kiểm Tra</th>
            <th>Ngày Dự Kiến</th>
            <th>Ghi Chú </th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    
    <?php
        require "../connect.php";
        $sql = "Select * from `ni_car`";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);     

    ?>

    <?php
        $numberPages = 6;
        $totalPages = ceil($count/$numberPages); 

        if(isset($_GET['page'])){
            $page = $_GET['page'];
            // echo $page;
        }else{
            $page=1;
        }

        $startinglimit = ($page-1)*$numberPages;
        $sql = "Select * from `ni_car` LIMIT ".$startinglimit.','.$numberPages;
        $result = mysqli_query($conn,$sql);
    ?>

    <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>


        <tr>
                <td><?php echo $row["ID"] ?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["khuvuc"] ?></td>
                <td><?php echo $row["tenxe"] ?></td>
                <td><?php echo $row["dateshow"] ?></td>
                <td><?php echo $row["note"] ?></td>
                <td><a href="delete_all.php?del_car=<?php echo $row['ID']?>"
                onclick=" return(confirm('Bạn có chắc muốn xóa')) ">
                <span class="glyphicon glyphicon-remove"></span></a>
                <td><a href="update_car.php?ID=<?php echo $row['ID']?>">
                <span class="glyphicon glyphicon-edit"></span></a>
                </td>
        </tr>
    <?php } ?>

    </tbody>
</table>     
<nav aria-label="Page navigation example">
    <ul class="pagination">
    <?php    

    // NÚT Previous
    if(isset($_GET['page'])){
        if($_GET['page'] < 2) {
            echo "";
        }else{
            echo '<li class="page-item"><a class="page-link" href="List Car_audit.php?page='.($_GET['page']-1).'"><i class="fa-solid fa-angles-left" style="position: relative; top:2px;font-size:20px"></i> Trước</a></li>';
        }
    }

    for($btn = 1; $btn<=$totalPages;$btn++){
        echo '<li class="page-item"><a class="page-link" href="List Car_audit.php?page='.$btn.'">'.$btn.'</a></li>';
    } 

     // NÚT NEXT
     if(isset($_GET['page'])){
        if($_GET['page'] < 0) {
            echo "";
        }else{
            echo '<li class="page-item"><a class="page-link" href="List Car_audit.php?page='.($_GET['page']+1).'">Sau <i class="fa-solid fa-angles-right" style="position: relative; top:2px;font-size:20px"></i></a></li>';
        }
    }

    ?>
    </ul>
</nav>