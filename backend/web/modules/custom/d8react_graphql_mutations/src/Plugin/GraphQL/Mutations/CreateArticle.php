<?php

namespace Drupal\d8react_graphql_mutations\Plugin\GraphQL\Mutations;

use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\CreateEntityBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * Simple mutation for creating a new article node.
 *
 * @GraphQLMutation(
 *   id = "create_article",
 *   entity_type = "node",
 *   entity_bundle = "article",
 *   secure = true,
 *   name = "createArticle",
 *   type = "EntityCrudOutput",
 *   arguments = {
 *     "input" = "ArticleInput"
 *   }
 * )
 */
class CreateArticle extends CreateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput(array $inputArgs, ResolveInfo $info) {
    return $inputArgs['input'];
  }

}
