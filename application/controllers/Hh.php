<?hh


class Hh extends CI_Controller {

		public function __construct (): void {
			parent::__construct();
			$this->load->database();
		}

        public async function view($page = 'default_value'): Awaitable<void>
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
			$data['title'] = 'learn english with cxf';
			$data['menu'] = 'menu';
			$data['left'] = 'left';
			$data['content'] = 'content:haha';
			$data['right'] = 'right';
			$data['input'] = 'input';

			$content = await $this->genContent();
			$data['content'] = $content;

            $this->load->view('main', $data->toArray());
        }

		private function genPage(): :xhp{
			return <div>from Hh::genPage()</div>;
		}

		private async  function genContent(): Awaitable<:xhp> {
			$sql = "SELECT sentence FROM sentences";
			$query = $this->db->query($sql, array());


			$result = '';
			foreach ($query->result_array() as $row)
			{
        		$result .= $row['sentence'].' ';
			}	


			return <div>from Hh::genContent() {$result}</div>;
		}
}
