import React from 'react';
import { gql, graphql } from 'react-apollo';

const query = gql`
query ($id: String!) {
  nodeById(id: $id) {
    gqlentityId
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

class DetailView extends React.Component {
  render() {
    let { data } = this.props;
    if (data.loading) { return <div>Loading...</div> }
    return (
      <div>
        <h1>{data.nodeById.entityLabel}</h1>
        <p>Created on: {data.nodeById.entityCreated}</p>
        <p>ID: {data.nodeById.gqlentityId}</p>
        <p>More field: {data.nodeById.fieldMore}</p>
        <p>{data.nodeById.body.value}</p>
      </div>
    )
  }
}

const queryOptions = {
  options: props => ({
    variables: {
      id: props.match.params.id
    },
  }),
};

DetailView = graphql(query, queryOptions)(DetailView);

export default DetailView;
