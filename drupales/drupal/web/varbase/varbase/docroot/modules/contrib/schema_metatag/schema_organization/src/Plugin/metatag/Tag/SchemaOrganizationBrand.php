<?php

namespace Drupal\schema_organization\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaBrandBase;

/**
 * Provides a plugin for the 'schema_organization_brand' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_organization_brand",
 *   label = @Translation("brand"),
 *   description = @Translation("The brand of the organization."),
 *   name = "brand",
 *   group = "schema_organization",
 *   weight = 10,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaOrganizationBrand extends SchemaBrandBase {

}
