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
                Идеи для материалов и статьи на рассмотрение: <a href="#">pruf_ua@gmail.com</a>
            </p>
            <p>
                По вопросам партнерства и размещения информации: <a href="#">pruf_ua@gmail.com</a>
            </p>
            <p>
                Инсайды из жизни PRUF: <a href="#">pruf_ua@gmail.com</a>
            </p>
            <p>
                Запитання, пропозиції та промені добра: <a href="#">pruf_ua@gmail.com</a>
            </p>
        </div>
        <h3 class="header-center form-header">Обратная связь</h3>
        <div class="form-collback row">
            <form action="#" method="post" class="col-lg-6">
                <label for="discription" class="required">Пожелания, рекомендации и пропозици</label>
                <textarea name="discription" id="discription" class="discription" required></textarea>
                <label for="email" class="required">Email для обратной связи</label>
                <input type="email" name="email" id="email" required>
                <label for="name">Ваше имя</label>
                <input type="text" name="name" id="name">
                <button type="submit" class="btn-form">Отправить</button>
            </form>
        </div>




    </div>




<?php
get_footer();
