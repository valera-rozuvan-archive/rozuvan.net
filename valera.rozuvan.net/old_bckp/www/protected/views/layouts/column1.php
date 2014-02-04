<? $this->beginContent('//layouts/main'); ?>
<div id="content" class="<?=((Yii::app()->controller->id == 'site') && (Yii::app()->controller->action->id == 'index')) ? 'extra-content' : ''?>">
    <?=$content?>
</div>
<? $this->endContent(); ?>