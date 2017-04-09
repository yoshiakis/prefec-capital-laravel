import React, { Component } from 'react';
import ReactDOM from 'react-dom';


const HomeTable =(({prefectures}) =>
  <div>
    <table className="table">
      <thead>
        <tr>
          <th>Prefecture</th>
          <th>Capital City</th>
        </tr>
      </thead>
      <tbody>
        {prefectures.map((p) => {
          return(
            <tr key={p.id}>
              <td>{p.prefec}</td>
              <td>{p.capital}</td>
            </tr>
          );
        })}
      </tbody>
    </table>
  </div>
);

class HomeForm extends React.Component {
  render() {
    return (
      <div>
        <form onSubmit={(e) => e.preventDefault()}>
          <input name='prefectures' placeholder="Type in any prefecture..."
          autoFocus
          onChange={(e) => this.props.onUserInput(e.target.value)} />
        </form>
      </div>
    )
  }
}

class HelloWorld extends React.Component {
  constructor (props) {
    super(props);
    this.state = {
      prefectures: window.prefec
    };
  }

  handleUserInput(search) {
    $.get('/search', {search: search}, ((data) => {
      this.setState({
        prefectures: data
      })
    }));
  }

  render() {
    return (
      <div className="container">
        <HomeForm
          onUserInput={(search) => this.handleUserInput(search)} />
        <HomeTable
          prefectures={this.state.prefectures} />
      </div>
    );
  }
}

ReactDOM.render(<HelloWorld />, document.getElementById('helloWorld'));
