<?php
/**
 * Tests for CodeForge
 */

use PHPUnit\Framework\TestCase;
use Codeforge\Codeforge;

class CodeforgeTest extends TestCase {
    private Codeforge $instance;

    protected function setUp(): void {
        $this->instance = new Codeforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Codeforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
