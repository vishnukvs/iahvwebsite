<?php

abstract class IahvActiveRecord extends CActiveRecord
{

    /**
     * Prepares create_time, create_user_id, update_time, updated user_id
     * attributes before performing validation.
     */

    protected function beforeSave() 
    {
        if($this->isNewRecord)
        {
            // set the create date, last updated date and the user doing the creating
            $this->create_time = $this->update_time = new CDbExpression('NOW()');
            $this->create_user = $this->update_user = Yii::app()->user->id;
        }
        else
        {
            // not a new records, so just set the last updated time and last updated user id.
            $this->update_time = new CDbExpression('NOW()');
            $this->update_user = Yii::app()->user->id;
        }
        
		return parent::beforeSave();
    }
    
    
    public function afterFind()
    {
        // convert to display format
        $this->create_time = strtotime ($this->create_time);
        $this->create_time = date ('l, j F Y g:i a', $this->create_time);
		
        $this->update_time = strtotime ($this->update_time);
        $this->update_time = date ('l, j F Y g:i a', $this->update_time);			
         parent::afterFind();            
    }	    
    
    
    
}

?>
