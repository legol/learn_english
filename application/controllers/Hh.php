<?hh
class Hh extends CI_Controller {

        public function view($page = 'home')
        {
			echo <p>Hello, world! XHP rocks!</p>;
			echo <div>parameter:{$page}</div>;
			echo $this->genPage();
			echo <introduction />;
        }

		private function genPage(): :xhp{
			return <div>from Hh::genPage()</div>;
		}
}
