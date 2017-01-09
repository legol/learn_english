<?hh

// to use this file, make sure put these 2 lines into index.php
//require __DIR__ . '/vendor/autoload.php';
//require __DIR__ . '/custom_xhp_elements/custom_xhp_elements_example.php';



class :window extends :x:element {
  protected function render(): \XHPRoot {
    return <div>{$this->getChildren()}</div>;
  }
}


