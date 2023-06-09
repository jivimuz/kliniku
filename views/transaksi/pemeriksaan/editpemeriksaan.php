<?php
    $this->title = 'Edit Data Pemeriksaan';
    use yii\bootstrap4\Html;
    use yii\bootstrap4\ActiveForm;
    use yii\helpers\Url;
    use yii\helpers\ArrayHelper;
    use app\models\Pasien;
    use app\models\Pegawai;
    // use app\models\Tindakan;
    // use app\models\Obat;
?>

<h3>Edit Data Pemeriksaan</h3>

<?php
$form = ActiveForm::begin([
    'method' => 'post',
    'action' => Url::to(['transaksi/edit-pemeriksaan', 'id' => $model->id_pemeriksaan]),
]) ?>

<?php
        // $listPasien = Pasien::find()->select(['nik', 'nama_pasien'])->column();

        // echo $form->field($model, 'nik')->label('NIK Pasien')->widget(\yii\jui\AutoComplete::classname(), [
        //     'options' => ['class' => 'form-control'],
        //     'clientOptions' => [
        //         'source' => $listPasien,
        //         'minLength' => 2,
                
        //         'prompt' => 'Pilih Pasien',
        //     ],
        // ]);
?>
    <?= $form->field($model, 'nik')->label('NIK')->textInput(['type' => 'number', 'readonly' => true]) ?>
    <?= $form->field($model, 'id_pegawai')->label('Pegawai')->dropDownList(
    ArrayHelper::map(Pegawai::find()->all(), 'id_pegawai', 'email_pegawai')) ?>
    
    
    <?= $form->field($model, 'keterangan')->label('Keterangan (tambahan)') ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>