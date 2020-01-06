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