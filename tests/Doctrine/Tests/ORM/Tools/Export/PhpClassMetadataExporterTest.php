<?php

declare(strict_types=1);

namespace Doctrine\Tests\ORM\Tools\Export;

/**
 * Test case for PhpClassMetadataExporterTest
 *
 * @link        http://www.phpdoctrine.org
 */
class PhpClassMetadataExporterTest extends AbstractClassMetadataExporterTest
{
    protected function _getType()
    {
        return 'php';
    }
}
