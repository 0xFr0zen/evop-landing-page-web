<?php
function createIdeaBox(string $title, string $subtitle, string $moreLink = null){
    return array("title" => $title, "subtitle" => $subtitle, "more" => null);
}

include_once __DIR__.'/../essentials/header.php';

$strings = array(
    "main-title" => array(
        "title" => "The best app for your customers",
        "subtitle" => "",
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
        <div id="content">
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
                        <div class="row">
                            <label for="ideas" id="title"><?php echo $strings['ideas']['title'];?></label>
                            <span class="subtitle"><?php echo $strings['ideas']['subtitle'];?></span>
                        </div>
                        <div class="row">
                            <?php
                            foreach($strings['ideas']['values'] as $ideaK => $idea){
                                ?>
                                <div class="box">
                                    <div d-c="<?php echo $ideaK;?>" id="counter">
                                    <label for="ideas" id="title"><?php echo $idea['title'];?></label>
                                    <span class="subtitle"><?php echo $idea['subtitle'];?></span>
                                    <?php
                                    if($idea['more'] != null) {
                                        ?>
                                        <a class="morelink" href="<?php echo $idea['more'];?>">MORE</a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>