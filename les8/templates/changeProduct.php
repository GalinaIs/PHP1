<?php if ($error): ?>
<div class="delete">У Вас недостаточно прав добавлять товары на сайт!</div>
<?php else: ?>
<h4>Добавить товар на сайт: </h4>
<div id="add_product">
    <form enctype="multipart/form-data" action="/product/addProduct" method="POST">
        <input name="name" type="text" placeholder="Название товара" required />
        <input name="price" type="number" value="1" min="1" required />
        <input name="short_desc" type="text" placeholder="Краткое описание товара" required />
        <textarea rows="10" name="full_desc" placeholder="Полное описание товара" required ></textarea>
        <label>Выберите картинку товара:</label>
        <input type="file" name="file" accept="image/*, image/jpeg" required />
        <button>Отправить</button>
    </form>
</div>
<div id="change_product">
    <h4>Изменить товары на сайте: </h4>
    <?php foreach ($products as $product): ?>
        <div class="form">
            <form enctype="multipart/form-data" action="/product/changeProduct" method="POST">
                <label>Название товара</label>
                <label><?= $product['name']; ?></label>
                <input name="name" type="text" placeholder="Новое название товара" />
                <label>Стоимость товара</label>
                <label><?= $product['price']; ?></label>
                <input name="price" type="number" min="1" />
                <label>Краткое описание товара</label>
                <label><?= $product['short_description']; ?></label>
                <input name="short_desc" type="text" placeholder="Новое краткое описание товара" />
                <label>Полное описание товара</label>
                <label><?= $product['full_description']; ?></label>
                <textarea rows="10" name="full_desc" placeholder="Новое полное описание товара" ></textarea>
                <button name="id_product" value="<?= $product['id']?>">Изменить товар товар</button>          
            </form>
            <form action="/product/deleteProduct" method="POST">
                <button name="id_product" value="<?= $product['id']?>">Удалить товар</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>