<?php include('connection.php')?>
<?php
 $query="select * from  job_category";
 $result=mysqli_query($connection,$query);
 $rw=mysqli_num_rows($result);
// $qr2="select * from blog order by publish_date desc limit 5";
// $result2=mysqli_query($cn,$qr2);
?>
<div class="sidebar">
        <div class="category-session">
            <h2 class="title ml-5">Categories</h2>
            <ul class="category-group">
                <?php while($data=mysqli_fetch_assoc($result)){?>
                <li class="list"><a href="cate.php?cid=<?php echo $data['id'];?>"><h4><?php echo $data['category'];?></h4></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
    