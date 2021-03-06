<?php

/**
 * Gearman Bundle for Symfony2
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @since 2013
 */

namespace Mmoreram\GearmanBundle\Exceptions;

use Mmoreram\GearmanBundle\Exceptions\Abstracts\AbstractGearmanException;

/**
 * GearmanBundle can't find job specified as Gearman format Exception
 */
class JobDoesNotExistException extends AbstractGearmanException
{

}
