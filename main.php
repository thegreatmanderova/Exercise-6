<!DOCTYPE html>
<html>
    <head>
        <title>EXERCISE</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <?php include './other/header.php';?>

        <div class="members">
            <div class="box">
                <div class="info">
                    <a href="main.php?member=Arciaga" target="_blank"><h6>Arciaga, Antonio III</h6></a>
                    <p>The incumbent president of IT3G and the Executive Secretary of PLMun Celestial Esports. </p>
                </div>
            </div>
        </div>
        <div class="members">
            <div class="box">
                <div class="info">
                    <a href="main.php?member=Arnillo" target="_blank"><h6>Arinillo, Mikaela Joy</h6></a>
                    <p>I would describe myself as an open and honest person who doesn't believe in misleading other people.</p>
                </div>
            </div>
        </div>
        <div class="members">
            <div class="box">
                <div class="info">
                    <a href="main.php?member=Narag" target="_blank"><h6>Narag, Marielle Andrea</h6></a>
                    <p>I am an active and curious individual. I'll leave a Russian proverb that says “trust, but verify</p>
                </div>
            </div>
        </div>
        <div class="members">
            <div class="box">
                <div class="info">
                    <a href="main.php?member=Narvadez" target="_blank"><h6>Narvadez, Edson Mark</h6></a>
                    <p>I have my own uniqueness which I embrace and proudly show it to everyone.</p>
                </div>
            </div>
        </div>
        <div class="members">
            <div class="box">
                <div class="info">
                    <a href="main.php?member=Reginio" target="_blank"><h6>Reginio, Genica Drazele</h6></a>
                    <p>I'm a determined individual who works hard to achieve what I want. </p>
                </div>
            </div>
        </div>

        <?php
            // Define an array of members' names and their corresponding Facebook profile URLs
            $members = array(
                "Arciaga" => "https://www.facebook.com/houseofarciaga",
                "Arnillo" => "https://www.facebook.com/mika.arnillo.5",
                "Narag" => "https://www.facebook.com/profile.php?id=100094579037047",
                "Narvadez" => "https://www.facebook.com/mark.narvadez.7",
                "Reginio" => "https://www.facebook.com/president.020"
            );

            // Get the member's name from the URL parameter
            $member_name = $_GET['member'];

            // Check if the member exists in the array
            if (isset($members[$member_name])) {
                $fb_profile_url = $members[$member_name];
                // Redirect to the Facebook profile page using HTTP header Location
                header("Location = $fb_profile_url");
                exit;
            } else {
                // Handle the case where the member is not found
                echo "Member not found";
            }
        ?>

        <?php include './other/footer.php';?>
    </body>
</html>