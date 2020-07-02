<?php
function createIdeaBox(string $title, string $subtitle, string $moreLink = null){
    return array("title" => $title, "subtitle" => $subtitle, "more" => $moreLink);
}

include_once __DIR__.'/../essentials/header.php';

$strings = array(
    "main-title" => array(
        "title" => "The best app for your shop & customers",
        "subtitle" => "Scroll to check us out!",
    ),
    "ideas" => array(
        "title" => "What you can benefit from our app",
        "subtitle" => "Experience the best customer-flow",
        "values" => array(
            createIdeaBox("Supports Most Devices", "We support most Android & IOS Devices", "https://ev-op.de/supported-devices"),
            createIdeaBox("Automated System", "Any changes you desire will be updated"),
            createIdeaBox("User-friendly", "Easy to use app"),
            createIdeaBox("Monitorized ", "You can check anything happening on real-time", "https://ev-op.de/monitoring"),
        )
    ),
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evop</title>
    <?php
    _header("",
        array("name" => "landingpage", "type" => "js"),
        array("name" => "main", "type" => "css")
    );

    ?>
</head>
<body>
    <div id="app">
        <div id="landingpageheader">
            <div id="left">
                <div id="logo">
                    <img src="https://api.ev-op.de/image/logo" alt="evop"/>
                </div>
            </div>
            <div id="right">
                <button class="mdc-button" id="aboutbutton">About</button>
                <button class="mdc-button" id="featuresbutton">Features</button>
                <button class="mdc-button" id="pricesbutton">Prices</button>
                <button class="mdc-button" id="teambutton">Team</button>
            </div>
        </div>
        <div id="content" class="full">
            <div id="landingpage">
                <div id="inner">
                    <div id="title">
                    <?php 
                    echo $strings['main-title']['title'];
                    ?>
                    </div>
                    <div id="devices">
                        <img src="https://api.ev-op.de/image/devices" alt="devices"/>
                    </div>
                    <div id="ideas">
                        <div id="ideasinner">
                            <div class="column">
                                <div class="explain">
                                    <label class="box-title"><?php echo $strings['ideas']['title'];?></label>
                                    <span class="box-subtitle"><?php echo $strings['ideas']['subtitle'];?></span>
                                </div>
                            </div>
                            <div class="column">
                                <?php
                                $c = 0;
                                    for($i = 0; $i < floor(sizeof($strings['ideas']['values']) / 2); $i++){
                                        ;
                                    ?>
                                    <div class="row">
                                    <?php 
                                        for($j = 0;$j < 2;$j++){
                                            $c++;
                                            ?>
                                            <div class="box">
                                                <div d-c="<?php echo $c;?>" class="counter"></div>
                                                <label class="box-title s-middle"><?php echo $strings['ideas']['values'][$c]['title'];?></label>
                                                <span class="box-subtitle"><?php echo $strings['ideas']['values'][$c]['subtitle'];?></span>
                                                <?php 
                                                if($strings['ideas']['values'][$c]['more'] != null){
                                                    ?>
                                                    <div class="box-morelink">
                                                        <a href="<?php echo $strings['ideas']['values'][$c]['more'];?>">MORE</a>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>