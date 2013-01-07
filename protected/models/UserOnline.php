<?php

/**
 * This is the model class for table "user_online".
 *
 * The followings are the available columns in table 'user_online':
 * @property integer $id
 * @property integer $timestamp
 * @property string $ip
 * @property string $file
 */
class UserOnline extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserOnline the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_online';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('timestamp, ip, file', 'required'),
			array('timestamp', 'numerical', 'integerOnly'=>true),
			array('ip', 'length', 'max'=>40),
			array('file', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, timestamp, ip, file', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'timestamp' => 'Timestamp',
			'ip' => 'Ip',
			'file' => 'File',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('timestamp',$this->timestamp);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('file',$this->file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}