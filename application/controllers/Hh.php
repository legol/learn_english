<?hh


class Hh extends CI_Controller {

		public function __construct (): void {
			parent::__construct();
			$this->load->database();
		}

		public async function view($page = 'default_value'): Awaitable<void> {
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
			$data['content'] = 'content';
			$data['right'] = 'right';
			$data['input'] = 'input';

			list ($content, $input) = await \HH\Asio\v(array(
				$this->genContent(),
				$this->genInput(),
			));

			$data['content'] = $content;
			$data['input'] = $input;

			$this->load->view('main', $data->toArray());
    }

		private async  function genContent(): Awaitable<:xhp> {
			$content = 
				<layout>
					<layout:column column_type="fill">
						{'sentences I\'ve learned'}
					</layout:column>
				</layout>;

			$sql = "SELECT sentence FROM sentences";
			$query = $this->db->query($sql, array());

			foreach ($query->result_array() as $row) {
				$row =
					<layout:column column_type="fill">
						{$row['sentence']}
					</layout:column>;
				$content->appendChild($row);
			}	
			return $content;
		}

		private async  function genInput(): Awaitable<:xhp> {
			$content =
				<div>
					<script src={base_url() . 'js/app/handle_input.js'}></script>
					<input type="text" maxlength={500} id="new_sentence" placeholder="input new sentence"/>
					<button type="button" onclick="onClick_saveSentences()">{'save sentence'}</button>
				</div>;

			return $content;
		}


		public async function saveSentence(): Awaitable<void> {
		
			// the post data is at $_POST, or $this->input->post(), or $this->input->raw_input_stream
			$post = $this->input->post();
			if ($post === null) {
				$this->output->set_content_type('application/json');
	      $theHTMLResponse = <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
	      $this->output->set_output(json_encode(array('affacted_rows'=> 0))); 
				return;
			}

			$input_sentence = idx($post, 'input');
			if ($input_sentence === '') {
				$this->output->set_content_type('application/json');
	      $theHTMLResponse = <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
	      $this->output->set_output(json_encode(array('affacted_rows'=> 0))); 
				return;
			}

			$sql = "INSERT INTO sentences (sentence) VALUES (".$this->db->escape($input_sentence).")";
			$this->db->query($sql);
			$affacted_rows = $this->db->affected_rows();
		
			$this->output->set_content_type('application/json');
      $theHTMLResponse = <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
      $this->output->set_output(json_encode(array('affacted_rows'=> $affacted_rows))); 
// to return json:
//      $this->output->set_content_type('application/json');
//      $theHTMLResponse = <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
//      $this->output->set_output(json_encode(array('ShoppingCartHtml'=> $theHTMLResponse))); 
		}
}
