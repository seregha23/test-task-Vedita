jQuery(function ($) {

    // Событие по клику на кнопку "Скрыть"
    $('.hide').click(function () {
        let id = $(this).closest('tr').children('.id').text();
        $(this).closest('tr').addClass('hidden');               // Добавить класс hidden для строки товара
        $.ajax({
            url: 'src/model/functions.php',
            data: {id: id},
            type: 'POST',
            success: function () {
                console.log("Успешно")
            },
        });
    });

    // Событие по клику на кнопку +
    $('.increment').click(function () {
        let idIncrement = $(this).closest('tr').children('.id').text();
        let productQuantity = $(this).closest('td').children('.product_quantity');
        productQuantity.html(parseInt(productQuantity.text()) + 1); // Увеличить кол-во товара (на +1)
        if (productQuantity.html() < 0) {
            productQuantity.html(0);
        }
        let sendProductQuantity = productQuantity.text();           // Кол-во товара после инскремента

        $.ajax({
            url: 'src/model/functions.php',
            data: {
                idIncrement: idIncrement,
                productQuantity: sendProductQuantity,
            },
            type: 'POST',
            success: function () {
                console.log("Успешно")
            },
        });
    });

    // Событие по клику на кнопку +
    $('.decrement').click(function () {
        let idDecrement = $(this).closest('tr').children('.id').text();
        let productQuantity = $(this).closest('td').children('.product_quantity');
        productQuantity.html(parseInt(productQuantity.text()) - 1); // Уменьшить кол-во товара (на -1)
        if (productQuantity.html() < 0) {
            productQuantity.html(0);
        }
        let sendProductQuantity = productQuantity.text();           // Кол-во товара после декремента

        $.ajax({
            url: 'src/model/functions.php',
            data: {
                idDecrement: idDecrement,
                productQuantity: sendProductQuantity,
            },
            type: 'POST',
            success: function () {
                console.log("Успешно")
            },
        });
    });
});