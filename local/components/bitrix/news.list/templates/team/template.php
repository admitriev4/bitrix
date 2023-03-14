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
<div class="team">
    <h3>Our work Team</h3>
    <? foreach ($arResult['ITEMS'] as $arItem):?>
        <div class="col-md-3 team-grid">
            <img src="<?=$arItem['PROPERTIES']['PICTURE_URL']['VALUE']?>" alt=""/>
            <div class="team-bottom">
                <p><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
        </div>
    <? endforeach;?>
    <div class="clearfix"> </div>
</div>
</div>
