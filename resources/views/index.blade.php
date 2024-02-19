
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT-GAME</title>
    <meta name="description" content="チャットでゲームができる">
    <link rel='stylesheet' type='text/css' href='chattest.css'>
</head>
<body>
    <header>
        <h1 class="title">CHAT-GAME</h1>
        
        <section>
            <button onclick="location.href='leave.html'">退出</button>
            <a href="https://www.google.co.jp/">   退出（一旦googleへ飛ぶ）   </a>
            <a href="https://www.google.co.jp/">設定（googleへ）</a>
        </section>

    </header>
    <main>
        <section>
            <p>
                <span class="name">名前</span> <span class="time">(2022/2/2 22:22)</span><br>
                <span class="contents">コメント内容</span>
            </p>
            <p>
                <span class="name">名前2</span> <span class="time">(2022/2/2 22:23)</span><br>
                <span class="contents">コメント内容2</span>
            </p>
            <p>
                <span class="name">名前3</span> <span class="time">(2022/2/2 22:23)</span><br>
                <span class="contents">コメント内容3</span>
            </p>
            <img src="C:\Users\krika\OneDrive\デスクトップ\HPimg\gackflower.jpeg" alt="画像１" width="200px">
        </section>

    </main>
    <footer>
        <section>
            <select name="who" id="who">
                <option value="who0"></option>
                <option value="whoA">Aさん</option>
                <option value="whoB">Bさん</option>
                <option value="whoC">Cさん</option>
                <option value="whoall">全員</option>
            </select>


        </section>
        <section>
            <label for="name">名前</label>
            <input type="text" id="name">
            <label for="registerd">登録済み</label> 
            <input type="checkbox" id="registerd">

        </section>
        
        <section>
            <form action="chattest.html" method="post" enctype="multipart/form-data" >
                <input type="file" name="test" onchange="previewFile(this);">
                <input type="submit" value="送信する">
              </form>
              <p>プレビュー</p>
              <img id="preview">
            
            
        </section>
        
    </footer>
    

</body>
</html>