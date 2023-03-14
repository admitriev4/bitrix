<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$i=1;
?>
<div class="col-md-12 info-grid-left">
    <? foreach ($arResult['ITEMS'] as $arItem):?>
        <div class="<?if($i == count($arResult['ITEMS'])):?>info-left-bottom<?else:?>info-left-top<?endif;?>">
            <div class="info-heading">
                <h3><?=$arItem['NAME']?></h3>
                <p><?=$arItem['PROPERTIES']['TITLE']['VALUE']?></p>
            </div>
            <div class="info-para">
                <p><?=$arItem['PREVIEW_TEXT']?></p>
                <div class="info-bwn">
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>">More</a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    <?$i++;?>
    <? endforeach;?>
</div>
<div class="clearfix"> </div>


