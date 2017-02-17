class Sentences extends React.Component {
  render() {

    let children = new Array();
    let arrayLength = this.props.data_source.length;

    for (var i = 0; i < arrayLength; i++) {
      children.push((<div>{this.props.data_source[i]}</div>));
    }

    return (
      <div>
      sentences! hehe
      {children}
      </div>
    );
  }
}

Sentences.propTypes = {
  data_source: React.PropTypes.array,
};
