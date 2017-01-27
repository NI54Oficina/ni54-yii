<?php

/**
 * This is the model class for table "tbl_pantalla".
 *
 * The followings are the available columns in table 'tbl_pantalla':
 * @property integer $id_pantalla
 * @property integer $id_project
 * @property string $modalidad
 * @property string $img
 * @property string $trabajo
 * @property string $color
 */
class Pantalla extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pantalla';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_project, modalidad, img, trabajo, color', 'required'),
			array('id_project', 'numerical', 'integerOnly'=>true),
			array('modalidad, img, trabajo, color', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pantalla, id_project, modalidad, img, trabajo, color', 'safe', 'on'=>'search'),
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
			'id_pantalla' => 'Id Pantalla',
			'id_project' => 'Id Project',
			'modalidad' => 'Modalidad',
			'img' => 'Img',
			'trabajo' => 'Trabajo',
			'color' => 'Color',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_pantalla',$this->id_pantalla);
		$criteria->compare('id_project',$this->id_project);
		$criteria->compare('modalidad',$this->modalidad,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('trabajo',$this->trabajo,true);
		$criteria->compare('color',$this->color,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pantalla the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
