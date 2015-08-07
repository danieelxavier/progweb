<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'ano_ingresso'], 'integer', 'message'=>'Dado inválido'],
            [['matricula', 'id_curso', 'ano_ingresso', 'sexo', 'nome'], 'required', 'message'=>'Este campo é obrigatório'],
            [['nome'], 'string', 'max' => 200],
            [['sexo'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matrícula',
            'nome' => 'Nome',
            'sexo' => 'Sexo',
            'id_curso' => 'Curso',
            'ano_ingresso' => 'Ano de Ingresso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'id_curso']);
    }


    public function afterFind()
    {
        $this->nome = ucwords(strtolower($this->nome));

        if($this->sexo == 'M'){
            $this->sexo = "Masculino";
        }
        else{
            $this->sexo = "Feminino";
        }

        $this->id_curso = $this->curso->nome;
    }



}
