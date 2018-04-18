<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>betNANO | Provably Fair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Luke Al-Saba">

    <link rel="icon" type="image/png" href="../img/branding/favicon.ico" sizes="128x128"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/index.css">

    <!-- icons -->
    <svg class="icons" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <symbol id="clipboard" viewBox="0 0 384 512">
                <path d="M384 112v352c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h80c0-35.29 28.71-64 64-64s64 28.71 64 64h80c26.51 0 48 21.49 48 48zM192 40c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24m96 114v-20a6 6 0 0 0-6-6H102a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h180a6 6 0 0 0 6-6z"></path>
            </symbol>
            <symbol id="icon-bonus" viewBox="0 0 64 64">
                <path d="M59 23H7v29c0 1.7 1.3 3 3 3h46c1.7 0 3-1.3 3-3z" fill="#85CBF8"></path>
                <path d="M58 13H8c-1.7 0-3 1.3-3 3v4c0 1.7 1.3 3 3 3h50c1.7 0 3-1.3 3-3v-4c0-1.7-1.3-3-3-3z"
                      fill="#ED7899"></path>
                <path d="M58.5 16h-51c-.8 0-1.5-.7-1.5-1.5S6.7 13 7.5 13h51c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5z"
                      fill="#F994B3"></path>
                <path d="M59 50H7v2c0 1.7 1.3 3 3 3h46c1.7 0 3-1.3 3-3zM59 23H7v2c0 1.7 1.3 3 3 3h46c1.7 0 3-1.3 3-3z"
                      fill="#6FC6F0"></path>
                <path d="M59 12H40.7c1-.398 1.902-.898 2.5-1.5 2.3-2.3 2.3-6.2 0-8.5-2.302-2.3-6-2.7-8.5 0-1 1.102-1.7 3.5-2.098 5.8-.3-1.3-.8-2.5-1.403-3.198-1.9-2.102-5.2-2-7.2 0s-2 5.2 0 7.2c.102.096.2.198.3.198H7c-1.7 0-3 1.3-3 3v6c0 .8.3 1.602.898 2.102.3.296.704.597 1.102.7V53c0 1.7 1.3 3 3 3h48c1.7 0 3-1.3 3-3V23.8c.398-.1.8-.402 1.102-.698C61.7 22.5 62 21.802 62 21v-6c0-1.7-1.3-3-3-3zM36.2 3.2C37 2.397 38 2 39.1 2 40.2 2 41.2 2.398 42 3.2c1.602 1.6 1.602 4.198 0 5.8-1.102 1.102-5.102 2.2-8 2.7.3-3.098 1-7.4 2.2-8.5zm-10.9 7.1c-1.198-1.198-1.198-3.198 0-4.402C25.9 5.3 26.7 5 27.5 5c.8 0 1.602.3 2.2.898.698.704 1.3 3.602 1.6 6.102h-1.8c-1.8-.398-3.602-1-4.2-1.7zM6 15c0-.602.398-1 1-1h25v8H7c-.3 0-.5-.102-.7-.3-.198-.2-.3-.4-.3-.7zm54 6c0 .3-.102.5-.3.7-.2.198-.4.3-.7.3H45c-.602 0-1 .398-1 1s.398 1 1 1h13v29c0 .602-.398 1-1 1H9c-.602 0-1-.398-1-1V24h24v20.898C32 45.5 32.398 46 33 46s1-.398 1-1.102V14h25c.602 0 1 .398 1 1z"
                      fill="#8D6C9F"></path>
                <path d="M18 48c-.602 0-1 .398-1 1v2c0 .602.398 1 1 1s1-.398 1-1v-2c0-.602-.398-1-1-1zM13 48c-.602 0-1 .398-1 1v2c0 .602.398 1 1 1s1-.398 1-1v-2c0-.602-.398-1-1-1zM23 48c-.602 0-1 .398-1 1v2c0 .602.398 1 1 1s1-.398 1-1v-2c0-.602-.398-1-1-1zM28 48c-.602 0-1 .398-1 1v2c0 .602.398 1 1 1s1-.398 1-1v-2c0-.602-.398-1-1-1zM33 48c-.602 0-1 .398-1 1v2c0 .602.398 1 1 1s1-.398 1-1v-2c0-.602-.398-1-1-1zM38 48c-.602 0-1 .398-1 1v2c0 .602.398 1 1 1s1-.398 1-1v-2c0-.602-.398-1-1-1zM43 48c-.602 0-1 .398-1 1v2c0 .602.398 1 1 1s1-.398 1-1v-2c0-.602-.398-1-1-1zM48 52c.602 0 1-.398 1-1v-2c0-.602-.398-1-1-1s-1 .398-1 1v2c0 .602.398 1 1 1zM53 52c.602 0 1-.398 1-1v-2c0-.602-.398-1-1-1s-1 .398-1 1v2c0 .602.398 1 1 1zM41 22h-4c-.602 0-1 .398-1 1s.398 1 1 1h4c.602 0 1-.398 1-1s-.398-1-1-1z"
                      fill="#8D6C9F"></path>
            </symbol>
        </defs>
    </svg>
</head>
<body class="bg-gray">
<?php
$hostname = "";
$username = "";
$password = "";
$db = "";

$dbconnect = mysqli_connect($hostname, $username, $password, $db);

if ($dbconnect->connect_error) die("Database connection failed: $dbconnect->connect_error");
?>
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2 class="col-12">provably fair</h2>
        </div>
        <div class="col-xs-12 col-md-6 text-left mt-3">
            <h4 class="col-12">what is it?</h4>
            <p class="col-12">In online gambling provably fair describes an algorithm which can be analyzed and verified
                for fairness on the part of the service operator.</p>
        </div>
        <div class="col-xs-12 col-md-6 text-left mt-3">
            <h4 class="col-12">how does it work?</h4>
            <p class="col-12 ">Each day after the daily drawing a number between 0 and 1,000,000,000 is generated
                for the next daily drawing and will be kept secret until after the next daily drawing. Same for the
                weekly bonus the only difference is that it"s weekly instead of daily.</p>
        </div>
        <hr class="col-12 my-5">
        <label class="col-12 text-left" for="daily_hash">next daily hash</label>
        <?php
        $query = mysqli_query($dbconnect, "SELECT * FROM rai_fair_secret_daily ORDER BY rai_fair_ID DESC LIMIT 1")
        or die (mysqli_error($dbconnect));

        while ($row = mysqli_fetch_array($query))
            echo "<div class='input-group col-12 mb-5'>
                        <input id='daily_hash' class='form-control' type='text' role='textbox' value={$row['rai_fair_hash']} readonly>
                        <div class='input-group-prepend'>
                            <button class='input-group-text' aria-label='Copy Daily Hash' onclick='copy('daily_hash')'>
                                <svg class='clipboard'>
                                    <use xlink:href='#clipboard'></use>
                                </svg>
                            </button>
                        </div>
                   </div>";
        ?>
        <label class="col-12 text-left" for="weekly_hash">next weekly hash</label>
        <?php
        $query = mysqli_query($dbconnect, "SELECT * FROM rai_fair_secret_weekly ORDER BY rai_fair_ID DESC LIMIT 1")
        or die (mysqli_error($dbconnect));

        while ($row = mysqli_fetch_array($query))
            echo "<div class='input-group col-12 mb-5'>
                        <input id='weekly_hash' class='form-control' type='text' role='textbox' value={$row['rai_fair_hash']} readonly>
                        <div class='input-group-prepend'>
                            <button class='input-group-text' aria-label='Copy Weekly Hash' onclick='copy('weekly_hash')'>
                                <svg class='clipboard'>
                                    <use xlink:href='#clipboard'></use>
                                </svg>
                            </button>
                        </div>
                  </div>";
        ?>
    </div>
    <div class="row" align="center">
        <table class="col-12">
            <thead>
            <tr>
                <th scope="col">hash</th>
                <th scope="col">secret number</th>
                <th scope="col">date</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $query = mysqli_query($dbconnect, "SELECT * FROM rai_fair_revealed ORDER BY rai_fair_ID DESC") or die (mysqli_error($dbconnect));

            while ($row = mysqli_fetch_array($query)) {
                echo
                "<tr>
                        <td>{$row['rai_fair_hash']}</td>
                        <td>{$row['rai_fair_secret']}</td>
                        <td>{$row['rai_fair_date']}</td>
                     </tr>";
            }

            ?>
            </tbody>
        </table>
    </div>
</div>
<footer class="container mt-5">
    <div class="row">
        <hr class="col-12">
        <ul class="col-sm-12 col-md-8 text-sm-center text-md-left">
            <li><a href="https://twitter.com/betnano_win" target="_blank" rel="noopener">Twitter</a></li>
            <li><a href="https://discordapp.com/invite/t5wPXXK" target="_blank" rel="noopener">Discord</a></li>
            <li>
                <a href="https://www.reddit.com/r/nanocurrency/comments/863n8w/betnanowin_ups_the_ante_come_give_it_a_try/?sort=new"
                   target="_blank" rel="noopener">Reddit</a></li>
        </ul>
        <div class="copyright col-sm-12 col-md-4 text-sm-center text-md-right"></div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    // copies address to clipboard
    function copy(name) {
        $("#" + name).select();
        document.execCommand("Copy");
    }

    $(".copyright").html("&copy " + new Date().getFullYear() + " Luke Al-Saba");
</script>
</body>
</html>