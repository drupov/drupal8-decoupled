import React from 'react';
import { gql, graphql } from 'react-apollo';

const query = gql`
query ($id: String!) {
  nodeById(id: $id) {
    entityId
    entityLabel
    entityCreated
  }
}
`;

class DetailView extends React.Component {
  render() {
    let { data } = this.props;
    if (data.loading) { return <div>Loading...</div> }
    return (
      <div>
        <h1>Node ID: {data.nodeById.entityId}</h1>
        <p>{data.nodeById.entityCreated}</p>
        <p>{data.nodeById.entityLabel}</p>
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
