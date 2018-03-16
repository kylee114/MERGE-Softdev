<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashBoardAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\widgets\Alert;
use yii\web\Application;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-red-light sidebar-mini">
<?php $this->beginBody() ?>
    <div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo Yii::$app->urlManager->createUrl('site/index/'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>Life</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>After</b>Life</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar-160x160.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar-160x160.png" class="img-circle" alt="User Image">

                <p>
                  AfterLife Administrator
                </p>
              </li>
              <!-- Menu Body 
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo Yii::$app->urlManager->createUrl('site/logout'); ?>" class="btn btn-default btn-flat" data-method = "post">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar-160x160.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
           <p> Admin </p>
          <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="http://localhost:8080/SOFTDEV/advanced/backend/web/index.php">
            <i class="fa fa-map-o"></i> <span>Overview</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="http://localhost:8080/SOFTDEV/advanced/backend/web/index.php?r=user"><i class="fa fa-circle-o"></i>Regular</a></li>
            <li><a href="http://localhost:8080/SOFTDEV/advanced/backend/web/index.php?r=volunteer"><i class="fa fa-circle-o"></i>Volunteers</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost:8080/SOFTDEV/advanced/backend/web/index.php?r=dead-people"><i class="fa fa-circle-o"></i> Dead People</a></li>
            <li><a href="http://localhost:8080/SOFTDEV/advanced/backend/web/index.php?r=missing-people"><i class="fa fa-circle-o"></i> Missing People</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
    

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


<!-- Yii Navbar -->
<!--    <?php
#    NavBar::begin([
#        'brandLabel' => 'AfterLife',
#       'brandUrl' => Yii::$app->homeUrl,
#        'options' => [
#            'class' => 'navbar-inverse navbar-fixed-top',
#        ],
#    ]);
#    $menuItems = [
#        ['label' => 'Home', 'url' => ['/site/index']],
#    ];
#    if (Yii::$app->user->isGuest) {
#        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
#        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
#    } else {
#        $menuItems[] = '<li>'
#            . Html::beginForm(['/site/logout'], 'post')
#            . Html::submitButton(
#                'Logout (' . Yii::$app->user->identity->username . ')',
#                ['class' => 'btn btn-link']
#            )
#            . Html::endForm()
#            . '</li>';
#    }
#    echo Nav::widget([
#        'options' => ['class' => 'navbar-nav navbar-right'],
#        'items' => $menuItems,
#    ]);
#    NavBar::end();
    ?>-->