<?php
/**
 * @file
 * Contains \Drupal\first_module\Controller\First_Module_Controller.
 * ^ Пишется по следующему типу:
 *  - \Drupal - это указывает что данный файл относится к ядру Drupal, ведь
 *    теперь там еще есть Symfony.
 *  - first_module - название модуля.
 *  - Controller - тип файла. Папка src опускается всегда.
 *  - First_Module_Controller - название нашего класса.
 */

/**
 * Пространство имен нашего контроллера. Обратите внимание что оно схоже с тем
 * что описано выше, только опускается название нашего класса.
 */
namespace Drupal\first_module\Controller;

/**
 * Используем друпальный класс ControllerBase. Мы будем от него наследоваться,
 * а он за нас сделает все обязательные вещи которые присущи всем контроллерам.
 */
use Drupal\Core\Controller\ControllerBase;

/**
 * Объявляем наш класс-контроллер.
 */
class First_Module_Controller extends ControllerBase {

    /**
     * {@inheritdoc}
     *
     * В Drupal 8 очень многое строится на renderable arrays и при отдаче
     * из данной функции содержимого для страницы, мы также должны вернуть
     * массив который спокойно пройдет через drupal_render().
     */
    public function first_module() {
        $output = array();

        $output['#title'] = 'HelloWorld page first_module title';

        $output['#markup'] = 'Hello World markup!';

        return $output;
    }

}
