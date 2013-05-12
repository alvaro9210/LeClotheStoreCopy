<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name;
?>

<?php
$name = 'pupid';
 $model = User::model()->findByAttributes(
    array('name'=>$name)
);



$this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array(
            'image'=>'images/5.jpg',
            'label'=>'Image 1',
            'caption'=>'This. ' .
                'is. ' .
                'Southpark.'),
        array(
            'image'=>'images/4.png',
            'label'=>'Image 2',
            'caption'=>'This ' .
                'is ' .
                'Southpark.'),

    ),
));

?>


