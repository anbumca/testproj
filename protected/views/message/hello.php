
<?php
/* @var $this MessageController */

$this->breadcrumbs=array(
	'Message'=>array('/message'),
	'Hello',
);
echo '<h1>Hello World!</h1>';
?>
<h3><?php echo $this->theTime(); ?></h3>
<h3><?php echo $this->theTime; ?></h3>
<h3><?php echo $time; ?></h3>
<h3><?php echo $tim; ?></h3>
<!--a href="/helloworld/index.php?r=message/goodbye">Goodbye!</a-->
<p><?php echo CHtml::link('Goodbye', array('message/goodbye')); ?></p>
<h1><?php //echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php //echo __FILE__; ?></tt>.
</p>
