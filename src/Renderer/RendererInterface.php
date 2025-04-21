<?php

declare(strict_types = 1);

/**
 * Qrc
 * Lightweight QR code generator
 * @author  biohzrdmx <github.com/biohzrdmx>
 * @license MIT
 */

namespace Qrc\Renderer;

use Psr\Http\Message\StreamInterface;

interface RendererInterface {

    /**
     * Render the code
     * @param  array  $code Code data
     */
    public function render(array $code): void;

    /**
     * Get the HTML representation of the code
     * @param  array  $attributes Array with attributes for the tag
     */
    public function getHtml(array $attributes = []): string;

    /**
     * Get the Data URL representation of the code
     */
    public function getDataUrl(): string;

    /**
     * Save the code to a file
     * @param  string $file File name
     */
    public function save(string $file): void;

    /**
     * Write to a stream
     * @param  StreamInterface $stream StreamInterface implementation
     */
    public function write(StreamInterface $stream): void;
}
