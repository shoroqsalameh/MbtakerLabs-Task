<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="feedbackBoxContent">
        
        <form id="feedback">
            <label for="range">
                <h2>
                    ما احتمالية ان توصي اصدقائك باستعمال منصة مبتكر؟
                </h2>
                <input type="range" min="0" max="10" name="rgn">
    
            </label>
            <label>
                <h3>اخبرنا عن تجربتك</h3>
                <textarea name="feed" id="feed" cols="30" rows="10"></textarea>
            </label>
    
    
            <button onclick="sendData()">ارسال</button>
    
    </form>
    </div>


    <div class="rightSide">
        <div class="name" id="username">Shorok</div>
        <button class="clickbutton" id="clickbutton" onclick="displayBox()">
            <span class="material-symbols-outlined">
                ads_click
            </span>
        </button>
    </div>



    <script src="script.js"></script>


</body>

</html>