<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<? $APPLICATION->SetPageProperty("title", "Контакты"); ?>
    <!--contact start here-->
    <div class="contact">
        <div class="contact-top">
            <h3>Contact Us</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:main.feedback","tender",Array(
                "USE_CAPTCHA" => "N",
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "EMAIL_TO" => "a.dmitriev@thecoders.ru",
                "REQUIRED_FIELDS" => Array(),
                "EVENT_MESSAGE_ID" => Array("7")
            )
        );?>

    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1415253431785"  frameborder="0" style="border:0"> </iframe>
    </div>
    </div>
    <!--contact end here-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>