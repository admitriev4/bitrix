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
$i = 1;
?>

<ul class="rslides" id="slider4">
    <li>
<? foreach ($arResult['ITEMS'] as $arItem):?>
            <div class="molli-grids">
                <img src="<?=$arItem['PROPERTIES']['PICTURE_URL']['VALUE']?>" alt=""/>
                <div class="molli-text">
                    <h4><?=$arItem['NAME']?></h4>
                </div>
            </div>
    <?if(($i % 4) == 0 && count($arResult['ITEMS']) != $i):?></li><li><?endif;?>
<? $i++;?>
<? endforeach;?>
    </li>
</ul>