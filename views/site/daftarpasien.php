<?php
    $this->title = 'Tambah Data Pasien';
    use yii\bootstrap4\Html;
    use yii\bootstrap4\ActiveForm;
    use yii\helpers\Url;
?>

<h3>Tambah Data Pasien</h3>
<?php if(!empty($alert)): ?>
            <div class="alert alert-success">
                <?= $alert ?>
            </div>
        <?php endif; ?>
<?php
$form = ActiveForm::begin([
    'method' => 'post',
    'action' => Url::to(['daftarpasien']),
]) ?>

    <?= $form->field($model, 'nik')->label('NIK')->input('number') ?>
    <?= $form->field($model, 'nama_pasien')->label('Nama') ?>
    <?= $form->field($model, 'ttl_pasien')->label('Tempat, Tanggal Lahir')->input('date') ?>
    <?= $form->field($model, 'jenis_kelamin_pasien')->label('Jenis Kelamin')->radioList([0 => 'Perempuan', 1 => 'Laki - Laki']); ?>
    <?= $form->field($model, 'alamat_pasien')->label('Alamat') ?>
    <?= $form->field($model, 'telepon_pasien')->label('Telepon')->input('number') ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>