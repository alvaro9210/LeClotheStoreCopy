<?php 
/* @var $this Controller */ 
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="shortcut icon" href="images/img.ico"/>
</head>

<body>

<div class="container" id="page">

        <div id="header" class="container-fluid">
             <div class="row-fluid">
                <div id="img" class="span2">
                        <a href="index.php"><img src="images/logo.jpeg"></img></a>
                </div>
                <div class="span10">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="row-fluid">
                                <div class="span6">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <h2>Llama Clothes Co.</h2>
                                        </div>
                                    </div>
                                </div>              
                                <div id="upperMenu" class="span6">
                                    <ul class="unstyled">
                                        <li><a href="#"> My Account |</a></li>
                                        <li><a href="index.php?r=site/login"> Register |</a></li>
                                        <li><a href="index.php?r=site/contact"> Contact us |</a></li>
                                        <li><a href="#" class="btn btn-primary" rel="popover" data-content='
                                            <!-- <form id="mainForm" name="mainForm" method="post" action="">
                                                <p>
                                                    <label>Username :</label>
                                                    <input type="text" id="user" name="username" />
                                                </p>
                                                <p>
                                                    <label>Password :</label>
                                                    <input type="password" id="pass" name="password" />
                                                </p>
                                                <p>
                                                    <input type="submit" class="btn btn-primary" name="Submit" value="Log in" />
                                                </p>
                                            </form> -->
                                            ' data-placement="bottom" data-original-title="">Log in</a></li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $('a[rel=popover]').popover({
                    html: 'true',
                    placement: 'bottom'
                })
            </script>
            <div id="right" class="span9">
                
            </div>
          </div><!-- header -->

	<div id="mainmenu">
        <?php
        $type = 0;
        $shoes = $model = Product::model()->findByAttributes(
            array('type'=>$type)
        );

        $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
                                array('label'=>'Shoes', 'url'=>array('/product' , 'type'=>$type)),
				array('label'=>'Clothes', 'url'=>array('/product')),
				array('label'=>'Pants', 'url'=>array('/product')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" class="container-fluid">
            <div class="row-fluid">
              <div id="help" class="span3">
                  <p>HELP</p>
                  <ul class="unstyled">
                     <li><a href="index.php?r=site/page&view=faqs">FAQ</a></li>
                  </ul>
              </div>
              <div id="privacy" class="span3">
                  <p>PRIVACY & TERMS</p>
                  <ul class="unstyled">
                     <li><a href="index.php?r=site/page&view=privacy">PRIVACY</a></li>
                     <li><a href="index.php?r=site/page&view=terms">TERMS OF SALE</a></li>
                     <li><a href="index.php?r=site/page&view=sitemap">SITE MAP</a></li>
                  </ul>
              </div>
              <div id="about" class="span3">
                  <p>ABOUT US</p>
                  <ul class="unstyled">
                     <li><a href="index.php?r=site/page&view=about">ABOUT US</a></li>
                     <li><a href="index.php?r=site/page&view=jobs">JOBS</a></li>
                  </ul>
              </div>
              <div id="social" class="span3">
                  <p>Follow us:</p>
                  <ul class="unstyled">
                     <li>
                        <a href="http://www.facebook.com" target="_blank">
                            <img src="images/facebook_logo.png" border="0"></img>
                        </a>
                     </li>
                     <li>
                       <a href="http://www.twitter.com" target="_blank">
                            <img src="images/twitter_logo.png" border="0"></img>
                       </a>
                     </li>
                  </ul>
              </div>
            </div>
          <p>Llama Clothes Co. 2013 All Rights Reserved</p>
          </div><!-- footer -->

</div><!-- page -->

</body>
</html>
