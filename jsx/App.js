class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      is_loading: true,
    };
  }

  componentDidMount() {
    // trigger async network operation
    $.ajax({
      url: 'http://www.google.com',
      dataType: 'json',
      async: true,
      type: 'POST',
      timeout: 30000, // milliseconds
      context:this,
    })
      .done(function(data, textStatus, jqXHR) {
        alert( "success" );
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        alert( "error" );
      })
      .always(function() {
        alert( "complete" );

        this.setState({is_loading:false});
      });
  }

  render() {
    if (this.state.is_loading === true) {
      return (
        <div>
  			React Loading!!! {this.props.name}
        </div>
      );
    }

    return (
      <div>
      React Loaded!!! {this.props.name}
      </div>
    );
  }
}

App.propTypes = {
  name: React.PropTypes.string.isRequired,
  data_source: React.PropTypes.array,
};
