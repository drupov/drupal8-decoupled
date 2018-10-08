import React, { Component } from 'react';
import { Query } from 'react-apollo';
import gql from 'graphql-tag';

const GET_NODE = gql`
query ($id: String!) {
  nodeById(id: $id) {
    entityId
    entityLabel
    entityCreated
    ... on NodeArticle {
      body {
        value
      }
      fieldMore
    }
  }
}
`;

class DetailView extends Component {
  render() {
    return (
      <Query query={GET_NODE} variables={{id: this.props.match.params.id}}>
        {({ loading, error, data }) => {
          if (loading) return <p>Loading...</p>;
          if (error) return <p>Error :(</p>;

          return (
            <div>
              <h1>{data.nodeById.entityLabel}</h1>
              <p>Created on: {data.nodeById.entityCreated}</p>
              <p>ID: {data.nodeById.entityId}</p>
              <p>More field: {data.nodeById.fieldMore}</p>
              <p>{data.nodeById.body.value}</p>
            </div>
          );
        }}
      </Query>
    );
  }
}

export default DetailView;
