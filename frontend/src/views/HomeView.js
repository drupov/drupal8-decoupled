import React from 'react'
import { Link } from 'react-router-dom'
import { gql, graphql } from 'react-apollo'

const query = gql`query {
  nodeQuery {
    entities {
      entityId,
      entityLabel
    }
  }
}`;

class HomeView extends React.Component {
  render() {
    let { data } = this.props;
    if (data.loading) { return <div>Loading...</div> }
    return (
      <div>
        {data.nodeQuery.entities.map((item, index) => (
          <p key={item.entityId}>
            <Link to={`/messages/${item.entityId}/`}>
              {item.entityLabel}
            </Link>
          </p>
        ))}
      </div>
    )
  }
}

HomeView = graphql(query)(HomeView);
export default HomeView
