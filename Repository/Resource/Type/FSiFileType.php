<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\ResourceRepositoryBundle\Repository\Resource\Type;

class FSiFileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getResourceProperty()
    {
        return 'fileValue';
    }

    /**
     * {@inheritdoc}
     */
    protected function getFormType()
    {
        return 'fsi_file';
    }
}