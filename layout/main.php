<div class="add">
    <form method="post" action="/store.php">
        <input name="name" placeholder="name" required><br>
        <input name="price" placeholder="price" required><br>
        <input name="qty" placeholder="qty" required><br>
        <button name="send" type="submit">send</button>
    </form>
</div>

<div>
        <?php foreach ($post->getPost() as $post):?>

                <?echo $post['name']?>
                <?echo $post['price']?>
                <?echo $post['qty']?>

        <?php endforeach;?>
</div>
<form method="post">
    <input type="text" name="words">
    <button type="submit" name="search">search</button>
</form>
<?php
$post->words = $_POST['words'];
if (isset($_POST['search']))
{
    if (count($post->searchPost()) == 0)
    {
        echo 'Ничего не найдена';
    }else{
        echo '<p>Результаты поиска</p>';
        for ($i = 0;$i < count($post->searchPost());$i++)
        {
            echo $post->searchPost()[$i]['name']."<br/>";
        }
    }
}
?>