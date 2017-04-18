<?php
/**
 * @package change_smile
 * @version 1.0
 */
/*
  Plugin Name: Change smile
  Description: This is not just a plugin, it is change smile
  Author: Victor
  Version: 1.0
 */


add_action('admin_menu', 'change_prefix');

function change_prefix() {
    add_menu_page('Добавить текст', 'Добавить текст <br/> к заголовкам', 8, __FILE__, 'add_text_form');

    function add_text_form() {
        ?>
        <br>
        <div class="updated" style="width: 460px">
            <p><strong>Добавить нечто текстовое к заголовкам записей:</strong></p>
        </div>
        <div class="wrap" style="
             text-align: center;
             width: 500px;
             ">
            <form name="form1" method="post">
                <p>Ввести новое значение:
                    <input type="text" name="postfix" size="25" placeholder="Постфикс для заголовков" required/>
                </p><hr/>
                <p class="submit">
                    <input type="submit" name="Submit" value="Добавить" style="
                           width: 500px;
                           cursor: pointer"/>
                </p>
            </form>
        </div>
        <?php
        if (filter_input(INPUT_POST, 'postfix')) {
            update_option('smile', filter_input(INPUT_POST, 'postfix'));
            ?>
            <div class="wrap" style="width: 500px">
                <p style="text-align: center">
                    <strong>Заголовки успешно изменены!</strong>
                </p><hr/>
            </div>
            <?php
        }
    }

}
