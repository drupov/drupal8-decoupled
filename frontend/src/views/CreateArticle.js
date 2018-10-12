import React, { Component } from 'react';
import { Mutation } from 'react-apollo';
import gql from 'graphql-tag';

const CREATE_ARTICLE = gql`
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

class CreateArticle extends Component {
  render() {
    return (
      <Mutation mutation={CREATE_ARTICLE}>
        {createArticle => (
          <form
            ref={ref => (this.form = ref)}
            onSubmit={e => {
              e.preventDefault();
              let formData = new FormData(this.form);
              createArticle({ variables: {
                input: {
                  title: formData.get('title'),
                  body: formData.get('body'),
                  field_more: formData.get('field_more')
              }}})
              .then(res => {
                if (res.data.createArticle.violations.length === 0) {
                  window.location.replace(`/`);
                }
                else {
                  console.log('Violations!');
                }
              })
              .catch(err => {
                console.log('Network error!');
              });
            }}
          >
            <label htmlFor="title">Title</label>
            <input type="text" name="title" />
            <br />
            <label htmlFor="body">Body</label>
            <textarea name="body" />
            <br />
            <label htmlFor="field_more">More</label>
            <input type="text" name="more" />
            <br />
            <button type="submit">Create article</button>
          </form>
        )}
      </Mutation>
    );
  }
}

export default CreateArticle;
