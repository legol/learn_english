<?hh

class Sentences extends CI_Controller {

		public function __construct (): void {
			parent::__construct();
			$this->load->database();
		}

		public async function getSentences(): Awaitable<void> {
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
			$sql = "SELECT sentence FROM sentences";
			$query = $this->db->query($sql, array());

			$content = array();
			foreach ($query->result_array() as $row) {
				$content[] = $row['sentence'];
			}

			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode(Map {
				'error_code' => 0,
				'sentences' => $content,
			}));
    }

		public async function saveSentence(): Awaitable<void> {
			// the post data is at $_POST, or $this->input->post(), or $this->input->raw_input_stream
			$post = $_POST;
			if ($post === null) {
				$this->output->set_content_type('application/json');
	      $theHTMLResponse = <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
	      $this->output->set_output(json_encode(Map {
					'error_code' => 1,
					'affacted_rows'=> 0,
				}));
				return;
			}

			$input_sentence = idx($post, 'input');
			if ($input_sentence === '') {
				$this->output->set_content_type('application/json');
	      $theHTMLResponse = <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
				$this->output->set_output(json_encode(Map {
					'error_code' => 2,
					'affacted_rows'=> 0,
				}));
				return;
			}

			$sql = "INSERT INTO sentences (sentence) VALUES (".$this->db->escape($input_sentence).")";
			$this->db->query($sql);
			$affacted_rows = $this->db->affected_rows();

			$this->output->set_content_type('application/json');
      $theHTMLResponse = <window>inside window, request_uri: {$_SERVER['REQUEST_URI']}</window>;
      $this->output->set_output(json_encode(Map {
				'error_code' => 0,
				'affacted_rows'=> $affacted_rows,
			}));
		}
}
