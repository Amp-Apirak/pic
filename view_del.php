
    <!----------------------------- start header ------------------------------->
    <?php include("../pic/templated/head.php"); ?>
    <!----------------------------- end header --------------------------------->

    <!----------------------------- start menu ------------------------------->
    <?php include("../pic/templated/menu.php"); ?>
    <!----------------------------- end menu --------------------------------->
<!-- Start Configrate  -->
<?php
        include("connection/connection.php"); 
    ?>
<!-- End Configrate  -->
    <?php
        /* การลบข้อมูล */
        if (isset($_GET['id'])) {

            print_r($_GET['id']);

            $result = $conn->query("DELETE FROM tb_log WHERE log_id=" . $_GET['id']);
            print_r($result);

            if ($result) {
                // <!-- sweetalert -->
                echo '<script>
                        setTimeout(function(){
                            swal({
                                title: "Successfully!",
                                text: "Delect Infomation Complatrd.",
                                type:"success"
                            }, function(){
                                window.location = "view.php?id='.$_GET['log_id'].'";
                            })
                        },1000);
                    </script>';
                // echo "<script>alert('ยินดีตอนรับ Admin เข้าสู่ระบบ'); window.location='../index.php'</script>";
            } else {
                // <!-- sweetalert -->
                echo '<script>
                        setTimeout(function(){
                            swal({
                                title: "Can Not Successfully!",
                                text: "Type again",
                                type:"warning"
                            }, function(){
                                window.location = "view.php?id='.$_GET['log_id'].'";
                            })
                        },1000);
                    </script>';
            //     echo "<script>alert('ยินดีตอนรับ Admin เข้าสู่ระบบ'); window.location='../index.php'</script>";
            }
        }
        /* การลบข้อมูล */
    ?>

      <!----------------------------- start menu ------------------------------->
      <?php include("../pic/templated/footer.php"); ?>
    <!----------------------------- end menu --------------------------------->