<?php

namespace kouosl\budget\controllers\frontend;

use Yii;
use kouosl\budget\models\Budget;
use kouosl\user\models\User;

use kouosl\budget\models\BudgetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * BudgetController implements the CRUD actions for Budget model.
 */
class BudgetsController extends Controller
{
    

    /**
     * Lists all Budget models.
     * @return mixed
     */
    public function actionIndex()
    {
        $budgets = Budget::find()->asArray()->all();
        $type = array();
        $users = array();

        foreach ($budgets as $key => $row)
        {
            $type[$key] = $row['type'];
        } 
		
        array_multisort($type, SORT_ASC, $budgets);
		
        foreach ($budgets as $key => $row)
        {
            $users[$key] = $this->findModel($row['author'])['username'];
        }
        return $this->render('index',[ 'model' => $budgets,'users' => $users]);
    }


    /**
     * Finds the Budget model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Budget the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
