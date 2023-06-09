<?php
    $this->title = 'Tambah Data Pengobatan';
    use yii\bootstrap4\Html;
    use yii\bootstrap4\ActiveForm;
    use yii\helpers\Url;
    use yii\helpers\ArrayHelper;
    use app\models\Obat;
?>

<h3>Pemeriksaan <?=$_GET['id']?></h3>

<?php
$form = ActiveForm::begin([
    'method' => 'post',
]) ?>

   
    <?= $form->field($model, 'id_obat')->label('Obat')->dropDownList(
    ArrayHelper::map(Obat::find()->all(), 'id_obat', 'nama_obat'), ['prompt'=>'Pilih Obat']) ?>

    <?= $form->field($model, 'jml_obat')->label('Jumlah Obat')->textInput(['type' => 'number', 'value' => '1']) ?>

    
    <?= $form->field($model, 'id_pemeriksaan')->textInput(['type' => 'hidden', 'value' => $_GET['id']])?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>