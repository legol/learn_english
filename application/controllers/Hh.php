<?hh


class Hh extends CI_Controller {

        public function view($page = 'default_value')
        {
// to return json:
//			$this->output->set_content_type('application/json');
//			$theHTMLResponse = <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
//			$this->output->set_output(json_encode(array('ShoppingCartHtml'=> $theHTMLResponse)));	

// to return html directly:
//			echo <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
//			echo <p>Hello, world! XHP rocks!</p>;
//			echo <div>aaaaaaa parameter:{$page}</div>;
//			echo $this->genPage();
//			echo <introduction />;

			$data = Map {};
			$data['menu'] = 'menu';
			$data['left'] = 'left';
			$data['content'] = 'content:haha';
			$data['right'] = 'right';
			$data['input'] = 'input';

            $this->load->view('main', $data->toArray());
        }

		private function genPage(): :xhp{
			return <div>from Hh::genPage()</div>;
		}
}
