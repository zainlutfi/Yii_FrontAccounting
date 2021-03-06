<?php

/**
 * This is the model class for table "printer".
 *
 * The followings are the available columns in table 'printer':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $queue
 * @property string $host
 * @property integer $port
 * @property integer $timeout
 *
 * The followings are the available model relations:
 * @property PrintProfile[] $printProfiles
 */
class Printer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Printer the static model class
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
		return 'printer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, queue, host, port, timeout', 'required'),
			array('port, timeout', 'numerical', 'integerOnly'=>true),
			array('name, queue', 'length', 'max'=>20),
			array('description', 'length', 'max'=>60),
			array('host', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, queue, host, port, timeout', 'safe', 'on'=>'search'),
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
			'printProfiles' => array(self::HAS_MANY, 'PrintProfile', 'printer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'queue' => 'Queue',
			'host' => 'Host',
			'port' => 'Port',
			'timeout' => 'Timeout',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('queue',$this->queue,true);
		$criteria->compare('host',$this->host,true);
		$criteria->compare('port',$this->port);
		$criteria->compare('timeout',$this->timeout);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}