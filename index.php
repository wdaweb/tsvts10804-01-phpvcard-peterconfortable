<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            height: 100vh;
            width: 100vw;

        }

        .box {
            width: 400px;
            height: 460px;
            border: 5px dotted red;
            padding: 10px;


        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <form action="api.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1 class="h1">Vcard產生器</h1>
            <div class="box">
                <p>您的名字：
                    <input type="text" name="myname" placeholder="請輸入名字"></p>
                <p>職位名稱：
                    <input type="text" name="job" placeholder="請輸入職稱"></p>
                <p>聯絡電話：
                    <input type="text" name="phone" placeholder="請輸入聯絡電話"></p>
                <p>電子信箱：
                    <input type="text" name="mail" placeholder="請輸入電子信箱"></p>
                <p><span style="vertical-align: top;"> 技能簡介：</span>
                    <textarea name="word" cols="30" rows="10" placeholder="請輸入簡介"></textarea></p>
                <p>人像照片：
                    <input type="file" name="photo"></p>
                <p>版型選擇：
                    <select name="kind">
                        <option value="purple">purple</option>
                        <option value="flower">flower</option>
                        <option value="sky">sky</option>
                        <option value="snow">snow</option>
                    </select></p>
            </div>
            <p><input type="submit" value="預覽"></p>

        </div>
    </form>

</body>

</html>