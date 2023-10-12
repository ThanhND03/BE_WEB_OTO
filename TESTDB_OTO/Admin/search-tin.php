
<br>
<table class="table">
    <thead>
    <tr style="font-size: 15px;">
        <th>ID</th>
        <th>City</th>
        <th>Status</th>
        <th>Picture</th>
        <th>Hãngxe</th>
        <th>DòngXe</th>
        <th>NămSX</th>
        <th>PhiênBản</th>
        <th>Km</th>
        <th>Số</th>
        <th>ĐộngCơ</th>
        <th>NhiênLiệu</th>
        <th>GiáBán</th>
        <th>TiêuĐề</th>
        <th>MôTả</th>
        <th>Delete</th>
        <th>Edit</th>
            
        </tr>
    </thead>
    <tbody>
    
    <?php
        require "../connect.php";
        $sql = "Select * from `product`";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);     

    ?>

    <?php
        $numberPages = 5;
        $totalPages = ceil($count/$numberPages); 

        if(isset($_GET['page'])){
            $page = $_GET['page'];
            // echo $page;
        }else{
            $page=1;
        }

        $startinglimit = ($page-1)*$numberPages;
        $sql = "Select * from `product` LIMIT ".$startinglimit.','.$numberPages;
        $result = mysqli_query($conn,$sql);
    ?>

    <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>


        <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["khuvuc"] ?></td>
            <td><?php echo $row["tinhtrang"] ?></td>
            <td><img src="../User/img/uploads/<?php echo $row["txtpicture"]; ?>
            " style="width: 50px; height: 50px;" alt="
            <?php echo $row["txtpicture"]; ?>"></td>
            <td><?php echo $row["hangsx"] ?></td>
            <td><?php echo $row["dongxe"] ?></td>
            <td><?php echo $row["namsx"] ?></td>
            <td><?php echo $row["phienban"] ?></td>
            <td><?php echo $row["sokmdadi"] ?></td>
            <td><?php echo $row["hopso"] ?></td>
            <td><?php echo $row["dandong"] ?></td>
            <td><?php echo $row["nhienlieu"] ?></td>
            <td><?php echo $row["giaban"] ?></td>
            <td><?php echo $row["tieudetin"] ?></td>
            <td><?php echo $row["motachitiet"] ?></td>


            <td><a href="delete_all.php?del_product=<?php echo $row['ID']?>"
                onclick=" return(confirm('Bạn có chắc muốn xóa')) ">
            <span class="glyphicon glyphicon-remove"></span></a>
            </td>
            <td><a href="update_dangtin.php?ID=<?php echo $row['ID']?>">
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
            echo '<li class="page-item"><a class="page-link" href="List_dangtin.php?page='.($_GET['page']-1).'"><i class="fa-solid fa-angles-left" style="position: relative; top:2px;font-size:20px"></i> Trước</a></li>';
        }
    }

    for($btn = 1; $btn<=$totalPages;$btn++){
        echo '<li class="page-item"><a class="page-link" href="List_dangtin.php?page='.$btn.'">'.$btn.'</a></li>';
    } 

     // NÚT NEXT
     if(isset($_GET['page'])){
        if($_GET['page'] < 0) {
            echo "";
        }else{
            echo '<li class="page-item"><a class="page-link" href="List_dangtin.php?page='.($_GET['page']+1).'">Sau <i class="fa-solid fa-angles-right" style="position: relative; top:2px;font-size:20px"></i></a></li>';
        }
    }

    ?>
    </ul>
</nav>