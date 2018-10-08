import React, { Component } from 'react';
import { Mutation } from 'react-apollo';
import gql from 'graphql-tag';

const CREATE_NODE = gql`
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

class CreateView extends Component {
  handleSubmit(e) {
    e.preventDefault();
    let formData = new FormData(this.form);
    let input = {
      title: formData.get('title'),
      body: formData.get('body'),
      field_more: formData.get('more')
    };

    /*this.props
      .mutate({variables: {
        input: {
          title: formData.get('title'),
          body: formData.get('body'),
          field_more: formData.get('more')
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
      });*/
  }

  render() {
    return (
      <Mutation mutation={CREATE_NODE} variables={{ input }}>
        <div>
          <h1>Create</h1>
          <form
            ref={ref => (this.form = ref)}
            onSubmit={e => this.handleSubmit(e)}
          >
            <label htmlFor="title">Title</label>
            <input type="text" name="title" />
            <br />
            <label htmlFor="body">Body</label>
            <textarea name="body" />
            <br />
            <label htmlFor="more">More</label>
            <input type="text" name="more" />
            <br />
            <button type="submit">Submit</button>
          </form>
        </div>
      </Mutation>
    )
  }
}

export default CreateView;
