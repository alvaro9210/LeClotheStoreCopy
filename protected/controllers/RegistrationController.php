<?php

class RegistrationController extends Controller
{
	public function actionIndex()
	{
		$user = new User;
		$this->render('index', array(
        'user'=>$user,
    ));
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
	
	public function actionCreate()
{
    $user=new User;
    $customer=new Customer;
    
        // populate input data to $user and $customer tu mama
        $user->attributes = $_POST['User'];
        $customer->attributes=$_POST['Customer'];
		
		if ($customer->validate()) {
  $transaction = Yii::app()->db->beginTransaction();
  $success = $customer->save(false);
  $user->id_customer = $customer->id;
  $success = $success ? $customer->save(false) : $success;
  if (!success)
    $transaction->commit();
  else
    $transaction->rollBack();
}
        

    $this->render('create', array(
        'User'=>$user,
        'Customer'=>$customer,
    ));
	
	
}

		protected function performAjaxValidation($user,$customer)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registration-form')
		{
			echo CActiveForm::validate($user);
			Yii::app()->end();
		}
	}


}