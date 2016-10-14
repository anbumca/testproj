<?php

class MessageController extends Controller
{
        public $defaultAction = 'hello';
	public $theTime;
        
        public function theTime()
        {
            date_default_timezone_set('Asia/Kolkata');
            $time = date("D M j, Y G:i:s T");
            return $time;
        }
        public function actionHello()
	{
            date_default_timezone_set('GMT');
            $this->theTime = date("D M j, Y G:i:s T");
            date_default_timezone_set('Asia/Dubai');
            $this->render('hello', array('time'=>date("D M j, Y G:i:s T"),
                                         'tim'=>$this->theTime));
	}
        public function actionGoodbye()
        {
            $this->render('goodbye');
        }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}