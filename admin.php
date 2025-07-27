<!DOCTYPE html>
<?php
session_start();
include("config.php");
?>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <script>
        function fetchUnreadCount() {
            fetch('fetch_unread.php') // fetch_unread.php la poi count edukanum
                .then(response => response.text())
                .then(data => {
                    document.getElementById('unreadCount').innerText = data > 0 ? data : '';
                });
        }

        // 5 seconds ku oru thadavai update aagum
        setInterval(fetchUnreadCount, 5000);
        window.onload = fetchUnreadCount;
    </script>
</head>

<body>

<?php include("top_nav.php"); ?>

<!-- Page Content -->
<div class="container" style="margin-top:70px;">
    <div class="row">
        <div class="col-lg-12">
		<h1 class="page-header text-primary" style="display: flex; align-items: center; gap: 20px;">
        <i class="fa-solid fa-user-tie"></i> Admin Login
            <span style="position: relative; display: inline-block; margin-left: -24px; margin-top: -20px">
                    <span id="unreadCount" style="background: red; color:rgb(255, 255, 255); width: 35px; height: 35px; display: inline-flex; 
                    align-items: center; justify-content: center; border-radius: 50%; font-size: 16px; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">0</span>
            </span> 
        </h1>

    </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                if (isset($_POST["submit"])) {
                    if ($_POST["user"] == $ADMIN_USERNAME && $_POST["pass"] == $ADMIN_PASSWORD) {
                        $_SESSION['usertype'] = 'admin';
                        $_SESSION['username'] = 'admin';

                        header("location:admin_inbox.php");
                    } else {
                        echo "<div class='alert alert-danger'><b>Error</b> User Name and Password Incorrect.</div>";
                    }
                }
                ?>
                <form role="form" action="admin.php" method="post">
                    <div class="form-group">
                        <label for="user_name" class="text-primary">User Name</label>
                        <input class="form-control" name="user" id="user" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="text-primary">Password</label>
                        <input class="form-control" id="pass" name="pass" type="password" required>
                    </div>

                    <button class="btn btn-primary pull-right" name="submit" type="submit">
                        <i class="fa fa-sign-in"></i> Login Here
                    </button>
                </form>

                <br><br>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>
