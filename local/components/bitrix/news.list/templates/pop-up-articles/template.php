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
<div class="col-md-6 info-grid-right">
    <div class="menu_vertical">
        <section class="accordation_menu">
            <? foreach ($arResult['ITEMS'] as $arItem):?>
                <div>
                    <input id="label-<?=$i;?>" name="lida" type="radio" <?if($i == 1):?>checked=""<?endif;?>/>
                    <label for="label-<?=$i;?>" id="item<?=$i;?>"><i class="icon-trophy" id="i<?=$i;?>"></i><?if($i == 1):?><i class="ferme"> </i><?endif;?>
                        <span <?if($i == 1):?>class="m_5"<?endif;?> > <?=$arItem['NAME']?></span>
                        <i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                    <div class="content1" id="a<?=$i;?>">
                        <ul class="news_list">
                            <li class="sml-img"><img src="<?=$arItem['PROPERTIES']['PICTURE_URL']['VALUE']?>"></li>
                            <li class="date_desc">
                                <h3><?=$arItem['PROPERTIES']['TITLE']['VALUE']?></h3>
                                <p><?=$arItem['PREVIEW_TEXT']?></p>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
            <?$i++;?>
            <? endforeach;?>

    </div>
</div>










