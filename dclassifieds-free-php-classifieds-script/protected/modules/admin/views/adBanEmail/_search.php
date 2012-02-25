<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ban_email_id'); ?>
		<?php echo $form->textField($model,'ban_email_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ban_email'); ?>
		<?php echo $form->textField($model,'ban_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('admin' , 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->