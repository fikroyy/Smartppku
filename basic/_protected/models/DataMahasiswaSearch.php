<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataMahasiswa;

/**
 * DataMahasiswaSearch represents the model behind the search form of `app\models\DataMahasiswa`.
 */
class DataMahasiswaSearch extends DataMahasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama', 'Ttl', 'IPK', 'Pilihan_Matkul', 'Kelas'], 'safe'],
            [['NIM'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DataMahasiswa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'NIM' => $this->NIM,
        ]);

        $query->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'Ttl', $this->Ttl])
            ->andFilterWhere(['like', 'IPK', $this->IPK])
            ->andFilterWhere(['like', 'Pilihan_Matkul', $this->Pilihan_Matkul])
            ->andFilterWhere(['like', 'Kelas', $this->Kelas]);

        return $dataProvider;
    }
}
