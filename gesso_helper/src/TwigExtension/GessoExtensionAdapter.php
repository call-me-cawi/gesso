<?php

namespace Drupal\gesso_helper\TwigExtension;
/**
 * Adapts pattern-lab extensions to Drupal.
 */
class GessoExtensionAdapter extends \Twig_Extension {

  /**
   * Creates the adapter twig extension.
   *
   * This will load from the default pattern-lab twig extension locations.
   */
  public function __construct() {
    GessoExtensionLoader::init();
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return GessoExtensionLoader::get('functions');
  }

  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return GessoExtensionLoader::get('filters');
  }

  /**
   * {@inheritdoc}
   */
  public function getTokenParsers() {
    return GessoExtensionLoader::get('parsers');
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'gesso_twig_ext_adapter';
  }

}
