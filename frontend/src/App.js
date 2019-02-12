import React, { Component } from 'react';
import ApolloClient from "apollo-boost";
import { ApolloProvider } from 'react-apollo';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Articles from './views/Articles';
import CreateArticle from './views/CreateArticle';
import ArticleFull from './views/ArticleFull';

const client = new ApolloClient({
  uri: 'https://d8-react.lndo.site/graphql',
});

class App extends Component {
  render() {
    return (
      <ApolloProvider client={client}>
        <Router>
          <div>
            <Route exact path="/" component={Articles} />
            <Switch>
              <Route exact path="/node/add/" component={CreateArticle} />
              <Route exact path="/node/:id/" component={ArticleFull} />
            </Switch>
          </div>
        </Router>
      </ApolloProvider>
    )
  }
}

export default App;
