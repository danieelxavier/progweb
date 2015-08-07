<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $login
 * @property string $senha
 * @property string $nome
 * @property string $email
 * @property string $pagina
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'login', 'senha', 'nome', 'email'], 'required', 'message'=>'Este campo é obrigatório'],
            [['id'], 'integer', 'message'=>'ID inválido'],
            ['email', 'email', 'message'=>'O dado inserido não é válido como um endereço de e-mail'],
            ['pagina', 'url', 'message'=>'O dado inserido não é válido como um endereço URL'],
            [['login'], 'string', 'max' => 20],
            [['senha'], 'string', 'max' => 128],
            [['nome', 'pagina'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'senha' => 'Senha',
            'nome' => 'Nome',
            'email' => 'Email',
            'pagina' => 'Página',
        ];
    }
}
