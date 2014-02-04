<? $this->pageTitle = Yii::app()->name; ?>

<div class="cont-top">
    <div class="container">
        <div class="line-top"></div>

        <div class="row">
            <article class="span4">
                <h3>Capabilities</h3>
                <ul class="list-capabilities">
                    <? foreach ($content['list'] as $item): ?>
                    <li class="<?=$item['isActive']?>"><a href="<?=$this->createUrl($item['url'])?>"><?=$item['title']?></a></li>
                    <? endforeach; ?>
                </ul>
            </article>

            <article class="span8">
                <h3><?=$content['list'][$content['activeIndex']]['title']?></h3>

                <?=$content['list'][$content['activeIndex']]['content']?>
            </article>
        </div>
    </div>
</div>