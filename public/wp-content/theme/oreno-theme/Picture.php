<?php

declare(strict_types=1);

class Picture
{
  /** /img/hoge/foo */
  private string $path;
  private bool $need_lazyload;
  private string $src_attr;
  private string $srcset_attr;

  function __construct(string $path, bool $need_lazyload = true)
  {
    $this->path = $path;
    $this->need_lazyload = $need_lazyload;
    $this->src_attr = $need_lazyload ? 'data-src' : 'src';
    $this->srcset_attr = $need_lazyload ? 'data-srcset' : 'srcset';
  }

  /**
   * 画像のURLを組み立てる
   *
   * @param string $type 拡張子 (ex. 'jpg')
   * @param string $suffix (ex. '@2x')
   * @return string '/img/hoge/fuga@2x.jpg'
   */
  private function compose_path(string $type, string $suffix = ''): string
  {
    return $this->path . $suffix . '.' . $type;
  }

  private function src_value(string $type): string
  {
    return $this->compose_path($type);
  }

  private function srcset_value(string $type): string
  {
    return sprintf(
      "%s, %s 2x",
      $this->compose_path($type),
      $this->compose_path($type, '@2x'),
    );
  }

  function source(string $type): string
  {
    $srcset = $this->srcset_attr;
    $srcset_value = $this->srcset_value($type);
    return <<< HTML
<source ${srcset}="${srcset_value}" type="image/${type}">
HTML;
  }

  function img(string $type, string $classes, string $alt = ''): string
  {
    $src = $this->src_attr;
    $srcset = $this->srcset_attr;
    $src_value = $this->src_value($type);
    $srcset_value = $this->srcset_value($type);
    $lazyload_class = $this->need_lazyload ? 'lazyload' : '';
    return <<< HTML
<img
  class="${classes} ${lazyload_class}"
  alt="${alt}"
  ${src}="${src_value}"
  ${srcset}="$srcset_value"
>
HTML;
  }
}
