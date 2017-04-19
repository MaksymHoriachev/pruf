<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pruf
 */

get_header(); ?>

    <div class="container">
        <h3 class="loop-title">Наши контакты</h3>
        <div class="text-contacts">
            <p>
                Ідеї для матеріалів та статті на розгляд: <a href="#">pruf_ua@gmail.com</a>
            </p>
            <p>
                З питань партнерств чи розміщення інформації: <a href="#">pruf_ua@gmail.com</a>
            </p>
            <p>
                Інсайди з життя PRUF: <a href="#">pruf_ua@gmail.com</a>
            </p>
            <p>
                Запитання, пропозиції та промені добра: <a href="#">pruf_ua@gmail.com</a>
            </p>
        </div>
        <h3 class="header-center form-header">Обратная связь</h3>
        <div class="form-collback row">
            <form action="#" method="post" class="col-lg-6">
                <label for="discription">Побажання, зауваження чи пропозиції</label>
                <textarea name="discription" id="discription" class="discription"></textarea>
                <label for="email" class="required">Email для зворотнього зв'язку</label>
                <input type="email" name="email" id="email" required>
                <label for="name" class="required">Ваше имя</label>
                <input type="text" name="name" id="name" required>
                <button type="submit" class="btn-form">Отправить</button>
            </form>
        </div>




    </div>




<?php
get_footer();
