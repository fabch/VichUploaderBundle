<?php

namespace Vich\UploaderBundle\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Mapping\PropertyMappingFactory;

class TestCase extends BaseTestCase
{
    protected function getUploadedFileMock()
    {
        return $this->getMockBuilder('Symfony\Component\HttpFoundation\File\UploadedFile')
            ->setConstructorArgs(['lala', 'lala', $mimeType = null, $size = null, $error = 'other than UPLOAD_ERR_OK', $test = true])
            ->getMock();
    }

    /**
     * @return PropertyMapping
     */
    protected function getPropertyMappingMock()
    {
        return $this->getMockBuilder('Vich\UploaderBundle\Mapping\PropertyMapping')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * Creates a mock property mapping factory.
     *
     * @return PropertyMappingFactory
     */
    protected function getPropertyMappingFactoryMock()
    {
        return $this->getMockBuilder('Vich\UploaderBundle\Mapping\PropertyMappingFactory')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
