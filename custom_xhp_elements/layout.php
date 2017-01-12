<?hh

// to use this file, make sure put these 2 lines into index.php
//require __DIR__ . '/vendor/autoload.php';
//require __DIR__ . '/custom_xhp_elements/layout.php';

class :layout extends :x:element {
  use XHPAsync;

  attribute :div;
  use XHPHelpers;

  protected async function asyncRender(): Awaitable<\XHPRoot> {
  	return 
      <div>
		{$this->getChildren()}
	  </div>;
  }
}

class :layout:column extends :x:element {
  use XHPAsync;
  
  attribute :div;
  use XHPHelpers;

  attribute string column_type = 'normal'; // normal; fill

  protected async function asyncRender(): Awaitable<\XHPRoot> {
  	return 
	  <div>
		{$this->getChildren()}
	  </div>;
  }
}


