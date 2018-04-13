<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_mahasiswa".
 *
 * @property string $Nama
 * @property int $NIM
 * @property string $Ttl
 * @property string $IPK
 * @property string $Pilihan_Matkul
 * @property string $Pas_Foto
 */
class DataMahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama', 'Ttl', 'IPK', 'Pilihan_Matkul', 'Kelas'], 'required'],
            [['Nama', 'Ttl', 'Pilihan_Matkul'], 'string', 'max' => 50],
            [['IPK'], 'string', 'max' => 10],
            [['Kelas'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nama' => 'Nama',
            'NIM' => 'Nim',
            'Ttl' => 'Ttl',
            'IPK' => 'Ipk',
            'Pilihan_Matkul' => 'Pilihan  Matkul',
            'Kelas' => 'Kelas',
        ];
    }
}
