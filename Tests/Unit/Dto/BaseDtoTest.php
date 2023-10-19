<?php
declare(strict_types=1);

namespace Oktopuce\SiteGenerator\Tests\Unit\Dto;

use PHPunit\Framework\TestCase;
use Oktopuce\SiteGenerator\Dto\BaseDto;

/**
 * Tests for base DTO
 *
 */
class BaseDtoTest extends TestCase
{
    /**
     * @var ?BaseDto
     */
    protected ?BaseDto $baseDto = null;

    protected function setUp(): void
    {
        $this->baseDto = new BaseDto();
    }

    /**
     * @test
     */
    public function testGetTitleSanitize()
    {
        $title = 'é_jfez6(43)0à÷¡÷©ëd©';
        $this->baseDto->setTitle($title);

        // Test title sanitation for folder creation
        $this->assertEquals($this->baseDto->getTitleSanitize(), "-jfez6-43-0-d-");
    }

}
