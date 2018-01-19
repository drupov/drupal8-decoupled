import React from 'react';
import { Link } from 'react-router-dom';
import { gql, graphql } from 'react-apollo';

const query = gql`
query {
  nodeQuery (limit: 100) {
    entities {
      entityId
      entityLabel
    }
  }
}
`;

class HomeView extends React.Component {
  render() {
    let { data } = this.props;
    if (data.loading) { return <div>Loading...</div> }
    return (
      <div>
        <Link to='node/add'>Add article</Link>
        {data.nodeQuery.entities.map((item, index) => (
          <p key={item.entityId}>
            <Link to={`/node/${item.entityId}/`}>
              {item.entityLabel} ({item.entityId})
            </Link>
          </p>
        ))}
      </div>
    )
  }
}

HomeView = graphql(query)(HomeView);

export default HomeView;
