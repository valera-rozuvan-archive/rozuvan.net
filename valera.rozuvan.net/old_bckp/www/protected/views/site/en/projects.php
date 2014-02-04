<? $this->pageTitle = Yii::app()->name; ?>

<div class="cont-top">
    <div class="container">
        <div class="line-top"></div>
        <h3>Fusce euismod consequat ante.</h3>
        <ul class="list-projects clearfix">
            <? foreach ($projects as $project): ?>
            <li>
                <figure>
                    <a href="<?=$project['link_url']?>"><img src="<?=$project['img_src']?>" alt="" /></a>
                </figure>
                <a href="<?=$project['link_url']?>" class="link-1"><?=$project['link_description']?></a>
                <p><?=$project['description']?></p>
            </li>
            <? endforeach; ?>
        </ul>
    </div>
</div>
