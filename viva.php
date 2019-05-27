<?php include 'inc/header.php'; ?>
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
include_once ($filepath.'/classes/process.php');
$usr = new User();
$pro = new process();
?>

<?php
Session::checkSession();
$total    = $exm->getTotalRows();
?>

    <div class="viva_main">
        <h1 style="color: blue;">Submit your Problem</h1>
        
        <div style="text-align: center;">
            <strong style="color: #444444"><br><br><br>
                <?php
                if(isset($_SESSION['score'])){
                    echo $_SESSION['score'];
                    unset($_SESSION['score']);
                }
                ?>
            </strong>
        </div>
        <br/>

        <?php
        if(isset($_POST['viva_btn'])){
            $usr->insert_viva_data($_POST['name'], $_POST['email'], $_POST['facebook'], $_POST['skype']);
        }
        ?>

        <div class="segment_viva">
            <form action="" method="post">
                <table style="padding-left: 60px; padding-top: 35px">
                    <tr>
                        <td>Name:</td>
                        <td><input name="name" id="name" type="text" required="" placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input name="email" id="email" type="text" required="" placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                        <td>Catagory:</td>
                        <td><input name="facebook" type="text" id="facebook" required="" placeholder="science/arts/engineering"></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td><TEXTAREA name="skype" type="text" id="skype"></TEXTAREA></td>
                    </tr>
                    <tr>
                    <tr>
                        <td></td>
                        <td class="button_class"><input type="submit" name="viva_btn" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>


    </div>
<?php include 'inc/footer.php'; ?>