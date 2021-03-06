<?php

namespace Platformsh\Client\Model;

/**
 * A domain name on a Platform.sh project.
 *
 * @property-read string $id
 * @property-read string $name
 * @property-read string $created_at
 * @property-read string $updated_at
 * @property-read bool   $wildcard
 * @property-read array  $ssl
 */
class Domain extends Resource
{

    /** @var array */
    protected static $required = ['name'];

}
