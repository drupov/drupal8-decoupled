import React from 'react';
import { gql, graphql } from 'react-apollo';

const mutation = gql`
mutation ($input: NodeArticleCreateInput!) {
  createNodeArticle(input: $input) {
    violations {
      path
      message
    }
    errors
    entity {
      entityId
      entityBundle
      entityLabel
    }
  }
}
`;

class CreateView extends React.Component {
  handleSubmit(e) {
    e.preventDefault();
    let formData = new FormData(this.form);
    this.props
      .mutate({variables: {
        input: {
          title: formData.get('title'),
          comment: {
            "status": "1"
          }
        }
      }})
      .then(res => {
        console.log(res);
        if (res.data.createNodeArticle.errors.length === 0) {
          window.location.replace(`/`);
        }
        else {
          console.log(res.data.createNodeArticle.errors);
        }
      })
      .catch(err => {
        console.log('Network error!');
      });
  }

  render() {
    return (
      <div>
        <h1>Create</h1>
        <form
          ref={ref => (this.form = ref)}
          onSubmit={e => this.handleSubmit(e)}
        >
          <textarea name="title" />
          <button type="submit">Submit</button>
        </form>
      </div>
    )
  }
}

CreateView = graphql(mutation)(CreateView);

export default CreateView;
