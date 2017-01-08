<?hh

// to use this file, make sure put these 2 lines into index.php
//require __DIR__ . '/vendor/autoload.php';
//require __DIR__ . '/custom_xhp_elements/custom_xhp_elements_example.php';

class :introduction extends :x:element {
  protected function render(): \XHPRoot {
    return <strong>Hello from :introduction</strong>;
  }
}

class :intro-plain-str extends :x:element {
  protected function render(): \XHPRoot {
    // Since this function returns an XHPRoot, if you want to return a primitive
    // like a string, wrap it around <x:frag>
    return <x:frag>Hello!</x:frag>;
  }
}

