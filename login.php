<?php require 'inc/head.php'; ?>
<?php
//session_start() dans le head;
define('LOGIN','nana 🐲');
define('PASSWORD','222');
$errorMessage_log = '';
$errorMessage_pass = '';
$errorMessage_id = '';

if(!empty($_POST))
{
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        if($_POST['login'] !== LOGIN)
        {
            $errorMessage_log = 'Mauvais login !';
        }
        elseif($_POST['password'] !== PASSWORD)
        {
            $errorMessage_pass = 'Mauvais password !';
        }
        else
        {
            //session_start() dans le head;
            $_SESSION['login'] = LOGIN;
            header('Location: http://localhost:8000/index.php');
            exit();
        }
    }
    else
    {
       $errorMessage_id = 'Veuillez inscrire identifiant et mot de passe svp !';
    }
}
if(isset($_SESSION['login'])) {
    header('Location: http://localhost:8000/index.php');
}
?>
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">©
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="#" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                         alt="">
                                </div>
                                <div><?php echo $errorMessage_id ?></div>
                                <div><?php echo $errorMessage_log ?></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                              <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input class="form-control" placeholder="Username" name="login"
                                                   type="text" autofocus>
                                            <div><?php echo $errorMessage_pass ?></div>
                                            <input class="form-control" placeholder="Password" name="password"
                                                   type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" name="'submit" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">Too bad !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>