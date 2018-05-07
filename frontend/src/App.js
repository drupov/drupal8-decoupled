import React, { Component } from 'react';
import { ApolloClient, ApolloProvider, createBatchingNetworkInterface } from 'react-apollo';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import HomeView from './views/HomeView';
import CreateView from './views/CreateView';
import DetailView from './views/DetailView';

const networkInterface = createBatchingNetworkInterface({
  uri: 'https://d8react.lndo.site/graphql',
  batchInterval: 10,
  opts: {
    credentials: 'same-origin',
  }
});

const client = new ApolloClient({
  networkInterface: networkInterface
});

class App extends Component {
  render() {
    return (
      <ApolloProvider client={client}>
        <Router>
          <div>
            <Route exact path="/" component={HomeView} />
            <Switch>
              <Route exact path="/node/add/" component={CreateView} />
              <Route exact path="/node/:id/" component={DetailView} />
            </Switch>
          </div>
        </Router>
      </ApolloProvider>
    )
  }
}

export default App;
