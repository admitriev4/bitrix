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
?>
<? foreach ($arResult['ITEMS'] as $arItem):?>
<div class="col-md-4 nunc-bott-grid">
    <div class="headind-text">
        <h3><?=$arItem['NAME']?></h3>
        <h4><?=$arItem['PROPERTIES']['TITLE']['VALUE']?></h4>
    </div>
    <p><?=$arItem['PREVIEW_TEXT']?></p>
    <div class="nunc-bwn">
        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">More</a>
    </div>
</div>
<? endforeach;?>
