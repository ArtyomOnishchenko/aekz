<?php

/**
 * @file
 * Contains \Drupal\first_module\Plugin\Block\First_example_block.
 */

// Пространство имён для нашего блока.
// first_module - это наш модуль.
namespace Drupal\first_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Добавляем простой блок с текстом.
 * Ниже - аннотация, она также обязательна.
 *
 * @Block(
 *   id = "first_example_block",
 *   admin_label = @Translation("First example block"),
 * )
 */
class First_example_block extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        $block = [
            '#type' => 'markup',
            '#markup' => '<strong>Hello World! From the fucking amazing first module and block!</strong>'
        ];
        return $block;
    }

}