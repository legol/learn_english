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
        {this.state.content}
      </div>
    );
  }
}

App.propTypes = {
  name: React.PropTypes.string.isRequired,
  data_source: React.PropTypes.array,
};
