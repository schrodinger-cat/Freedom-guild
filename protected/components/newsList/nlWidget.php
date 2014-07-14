<?php
	class nlWidget extends CWidget {

		public $crumbs = array();
    	public $delimiter = ' / ';

		public function run() {			

	        $this->render('nlView',array(
				'news'=>$getAll,
			));
	    }

	    public function getTable() {
	    	$getAll = Yii::app()->db->createCommand()
				    ->select('*')
				    ->from('news')
				    ->queryAll();

			return $getAll;
	    }

	    

	}
?>