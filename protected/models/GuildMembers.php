<?php

/**
 * This is the model class for table "guild_members".
 *
 * The followings are the available columns in table 'guild_members':
 * @property integer $id_member
 * @property string $name
 * @property integer $class
 * @property integer $race
 * @property integer $gender
 * @property integer $level
 * @property integer $achievementPoints
 * @property string $thumbnail
 * @property string $specName
 * @property string $specRole
 * @property integer $rank
 */
class GuildMembers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'guild_members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, class, race, gender, level, achievementPoints, thumbnail, specName, specRole, rank', 'required'),
			array('class, race, gender, level, achievementPoints, rank', 'numerical', 'integerOnly'=>true),
			array('name, thumbnail, specName', 'length', 'max'=>255),
			array('specRole', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_member, name, class, race, gender, level, achievementPoints, thumbnail, specName, specRole, rank', 'safe', 'on'=>'search'),
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
			'id_member' => 'Id Member',
			'name' => 'Name',
			'class' => 'Class',
			'race' => 'Race',
			'gender' => 'Gender',
			'level' => 'Level',
			'achievementPoints' => 'Achievement Points',
			'thumbnail' => 'Thumbnail',
			'specName' => 'Spec Name',
			'specRole' => 'Spec Role',
			'rank' => 'Rank',
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

		$criteria->compare('id_member',$this->id_member);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('class',$this->class);
		$criteria->compare('race',$this->race);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('level',$this->level);
		$criteria->compare('achievementPoints',$this->achievementPoints);
		$criteria->compare('thumbnail',$this->thumbnail,true);
		$criteria->compare('specName',$this->specName,true);
		$criteria->compare('specRole',$this->specRole,true);
		$criteria->compare('rank',$this->rank);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GuildMembers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
