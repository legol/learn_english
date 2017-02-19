class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      is_loading: true,
      content: null,
    };

    window.appController.setReactComponent(this);
  }

  componentDidMount() {
    window.appController.loadData();
  }

  showSentences(sentences) {
    this.setState({
      is_loading: false,
      content: (<Sentences data_source={sentences}/>),
    });
  }

  showError() {
    this.setState({
      is_loading: false,
      content: (<div>error</div>),
    });
  }

  render() {
    if (this.state.is_loading === true) {
      return (
        <div>
  			   React Loading!!!
        </div>
      );
    }

    return (
      <div>
        React Loaded!!!

        <div id="menu-container" className="menu_container" >
        </div>
        <div id='left_container' className='left-container'>
        </div>
        <div id='content_container' className='content-container'>
          {this.state.content}
        </div>
        <div id='right_container' className='right-container'>
        </div>
        <div id='input_container' className='input-container'>
					<input type="text" maxLength={500} id="new_sentence" placeholder="input new sentence"/>
					<input type="button" onClick={() => onClick_saveSentences()} value="Save Sentence!"/>
        </div>

      </div>
    );
  }
}

App.propTypes = {
  name: React.PropTypes.string.isRequired,
  data_source: React.PropTypes.array,
};
