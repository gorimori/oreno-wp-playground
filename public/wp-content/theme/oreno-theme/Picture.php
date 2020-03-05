<?php

class Picture
{
  /** /img/hoge/foo */
  private string $path;
  private bool $need_lazyload = true;

  function __construct(string $path, bool $need_lazyload = true)
  {
    $this->path = $path;
    $this->need_lazyload = $need_lazyload;
  }

  private function src_attr(): string
  {
    if ($this->need_lazyload) {
      return 'data-src';
    }
    return 'src';
  }

  private function srcset_attr(): string
  {
    if ($this->need_lazyload) {
      return 'data-srcset';
    }
    return 'srcset';
  }

  function source(string $type): string
  {
    $srcset = $this->srcset_attr();
    $srcset_value = sprintf("%s, %s 2x", $this->path . '.' . $type, $this->path . '@2x.' . $type);
    return <<< HTML
<source ${srcset}="${srcset_value}" type="image/${type}">
HTML;
  }

  function img(string $type, string $alt = ''): string
  {
    $src = $this->src_attr();
    $srcset = $this->srcset_attr();
    $src_value = $this->path . '.' . $type;
    $srcset_value = sprintf("%s, %s 2x", $src_value, $this->path . '@2x.' . $type);
    return <<< HTML
<img ${src}="${src_value}" alt="${alt}" ${srcset}="$srcset_value">
HTML;
  }
}
