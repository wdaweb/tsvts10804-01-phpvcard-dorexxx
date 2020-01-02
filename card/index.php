<style>
    .main {
        margin: 5% auto;
        text-align: center;
        width: 400px;
    }

    .data {
        text-align: left;
        padding: 0 20px;
        border: #000 2px solid;
        margin-bottom: 20px;
    }

    .data p {
        min-width: 300px;
    }
</style>

<div class="main">
    <h1>vCard產生器</h1>
    <form action="api.php" method="post" enctype="multipart/form-data">
        <div class="data">
            <p>你的名字 | <input type="text" name="user" value="chen"></p>
            <p>職位名稱 | <input type="text" name="title" value="網頁設計師"></p>
            <p>
                <span style="vertical-align:top">技能說明 | </span>
                <textarea name="skill" cols=30 rows=10>網頁設計/使用軟體：photoshop,illustrator,indesign</textarea>
            </p>
            <p>email | <input type="text" name="mail" value="dstorexx396@gmail.com"></p>
            <p>手機號碼 | <input type="text" name="phone" value="0983-915-267"></p>
            <hr>
            <p>人像照 | <input type="file" name="who"></p>
            <p>版型選擇 |
                <select name="layout">
                    <option value="green" selected>一般綠</option>
                    <option value="pink">一般般粉</option>
                    <option value="white">一般般般般白</option>
                </select>
            </p>
        </div>
        <input type="submit" value="送出預覽">
    </form>
</div>