<?
$this->pageTitle = 'Error';
$this->breadcrumbs = array('Error');
?>

<div class="cont-top">
    <div class="container">
        <h2 style="text-align: right; color: black; margin-right: 20px; margin-top: 20px;">Error <?=$code?></h2>
        <h3><?=CHtml::encode($message)?></h3>
    </div>
</div>