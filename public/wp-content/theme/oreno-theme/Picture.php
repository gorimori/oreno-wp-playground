<?php

class Picture
{
  private string $path;

  function __construct(string $path)
  {
    $this->path = $path;
  }

  function source(string $type): string
  {
    return <<< HTML
<source srcset="" type="image/${type}">
HTML;
  }

  function img(string $type): string
  {
    return <<< HTML
<img src="" alt="" srcset="">
HTML;
  }
}
