import React from 'react';
import { gql, graphql } from 'react-apollo';

const mutation = gql`
mutation ($input: ArticleInput!) {
  createArticle(input: $input) {
    entity {
      entityId
      entityLabel
    }
    errors
    violations {
      path
      message
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
          body: formData.get('body')
        }
      }})
      .then(res => {
        console.log(res);
        if (res.data.createArticle.errors.length === 0) {
          window.location.replace(`/`);
        }
        else {
          console.log(res.data.createArticle.errors);
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
          <input type="text" name="title" />
          <br />
          <textarea name="body" />
          <br />
          <button type="submit">Submit</button>
        </form>
      </div>
    )
  }
}

CreateView = graphql(mutation)(CreateView);

export default CreateView;
