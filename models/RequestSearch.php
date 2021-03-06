<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Request;

/**
 * RequestSearch represents the model behind the search form of `app\models\Request`.
 */
class RequestSearch extends Request
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'deleted', 'category_id','id_subdivision','id_state'], 'integer'],
            [['problem', 'solution', 'creation_time'], 'safe'],
        ];
    }
    static public function tableName()
    {
        return 'request'; // TODO: Change the autogenerated stub
    }

    /**
     * {@inheritdoc}
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
        $query = Request::find();

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
            'id' => $this->id,
            'author_id' => $this->author_id,
            'deleted' => $this->deleted,
            'creation_time' => $this->creation_time,
            'category_id' => $this->category_id,
            'id_subdivision'=>$this->id_subdivision,
            'id_state'=>$this->id_state,
        ]);

        $query->andFilterWhere(['like', 'problem', $this->problem])
            ->andFilterWhere(['like', 'solution', $this->solution]);

        return $dataProvider;
    }
}
