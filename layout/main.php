<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo SU ;?>public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo SU ;?>public/css/style.css">
        <link rel="shortcut icon" href="<?php echo SU; ?>favicon.ico" >
        <title>
            <?php if($page_custom_title){ echo "$page_custom_title | "; }else{ if($page_title){ echo "$page_title | ";}  }  echo _site_title;  ?>
        </title>
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">
                        kenCms BETA
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="./">ホーム</a></li>
                        <li><a href="./doc">ドキュメント</a></li>
                        <li><a href="./feedback">フィードバック</a></li>
                        <li><a href="./contact">お問い合わせ</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <?php
                include("module/$module/main.php");
            ?>
        </div>

        <footer>
            <div id="footer0">
                <div id="footer_copyright">
                    <p></p>
                </div>
            </div>
        </footer>

    </body>

    <script src="<?php echo SU; ?>public/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo SU; ?>public/js/bootstrap.min.js"></script>
</html>
<?php
    mysql_close();
?>