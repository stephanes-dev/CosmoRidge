<?php
/**
 * Tests for CosmoRidge
 */

use PHPUnit\Framework\TestCase;
use Cosmoridge\Cosmoridge;

class CosmoridgeTest extends TestCase {
    private Cosmoridge $instance;

    protected function setUp(): void {
        $this->instance = new Cosmoridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cosmoridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
