<?php
if (!defined('IN_SYS')) {
    // exit('禁止访问');
    header("Location: ../admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <title><?php echo $title; ?> - Hosting Account Management System - <?php echo $section_title; ?></title>
    <link href="assets/bootstrap/css/bootstrap.min.css?_=<?php echo $static_release; ?>" rel="stylesheet" />
    <link href="assets/css/style.css?_=<?php echo $static_release; ?>" rel="stylesheet" />
    <link href="assets/css/admin.css?_=<?php echo $static_release; ?>" rel="stylesheet" />
    <link href="favicon.ico?_=<?php echo $static_release; ?>" type="image/x-icon" rel="icon" />
    <link href="favicon.ico?_=<?php echo $static_release; ?>" type="image/x-icon" rel="shortcut icon" />
    <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.min.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="admin.php"><?php echo $brandName; ?></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><?php echo $LANG['home']; ?></a></li>
                        <?php if ($is_admin) { ?>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Account&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-header">Account Management</li>
                                    <li><a href="admin.php?s=check_domain">Check Domain</a></li>
                                    <li><a href="admin.php?s=account_list">Account List</a></li>
                                    <li><a href="admin.php?s=account_add">Account Add</a></li>
                                    <li><a href="admin.php?s=account_password">Account Password</a></li>
                                    <li><a href="admin.php?s=account_active">Account Activate</a></li>
                                    <li><a href="admin.php?s=account_status">Account Status</a></li>
                                    <li><a href="admin.php?s=account_domain">Account Domains</a></li>
                                    <li class="divider"></li>
                                    <li><a href="admin.php?s=account_disable">Account Suspend</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($is_admin) { ?>
                            <li><a href="admin.php?s=logout">Logout</a></li>
                        <?php } else { ?>
                            <li><a href="admin.php?s=login"><?php echo $LANG['login']; ?></a></li>
                        <?php } ?>
                        <li><a href="index.php"><?php echo $LANG['home']; ?></a></li>
                    </ul>
                </div>
            </div>
            <a class="hidden-xs" href="https://github.com/uiisc/uiisc.com" title="Source on Github" target="_blank"><svg class="octocat" viewBox="0 0 250 250" style="border: 0;color: #f4f5f6;fill: #5e6772;height: 5.2rem;width: 5.2rem;position: fixed;right: 0;top: 0;z-index: 1"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path class="octocat-arm" d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"></path><path class="octocat-body" d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"></path></svg></a>
        </nav>
    </div>
