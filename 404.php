<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

    <div class="project">
        <img src="/local/templates/empty_test/images/hand.jpg" alt=""/>
        <h3>Ooops! page Not Open</h3>
        <p>Nothing is Found here</p>
        <h4>404</h4>
        <div class="proj-bwn">
            <a href="/">Go Back</a>
        </div>
    </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>